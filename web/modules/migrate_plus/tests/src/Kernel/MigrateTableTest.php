<?php

namespace Drupal\Tests\migrate_plus\Kernel;

use Drupal\migrate\MigrateExecutable;
use Drupal\Tests\migrate\Kernel\MigrateTestBase;

/**
 * Tests migration destination table.
 *
 * @group migrate
 */
class MigrateTableTest extends MigrateTestBase {

  const SOURCE_TABLE_NAME = 'migrate_test_source_table';
  const DEST_TABLE_NAME = 'migrate_test_destination_table';

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $connection;

  public static $modules = ['migrate_plus'];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->connection = $this->container->get('database');
    $connections = [
      static::SOURCE_TABLE_NAME => $this->sourceDatabase,
      static::DEST_TABLE_NAME => $this->connection,
    ];
    foreach ($connections as $table => $connection) {
      $connection->schema()->createTable($table, [
        'description' => 'Test table',
        'fields' => [
          'data' => [
            'type' => 'varchar',
            'length' => '32',
            'not null' => TRUE,
          ],
          'data2' => [
            'type' => 'varchar',
            'length' => '32',
            'not null' => TRUE,
          ],
          'data3' => [
            'type' => 'varchar',
            'length' => '32',
            'not null' => TRUE,
          ],
        ],
        'primary key' => ['data'],
      ]);
    }
    $query = $this->sourceDatabase->insert(static::SOURCE_TABLE_NAME)
      ->fields(['data', 'data2', 'data3']);
    $values = [
      [
        'data' => 'dummy value',
        'data2' => 'dummy2 value',
        'data3' => 'dummy3 value',
      ],
      [
        'data' => 'dummy value2',
        'data2' => 'dummy2 value2',
        'data3' => 'dummy3 value2',
      ],
      [
        'data' => 'dummy value3',
        'data2' => 'dummy2 value3',
        'data3' => 'dummy3 value3',
      ],
    ];
    foreach ($values as $record) {
      $query->values($record);
    }
    $query->execute();
  }

  /**
   * {@inheritdoc}
   */
  protected function tearDown() {
    $this->sourceDatabase->schema()->dropTable(static::SOURCE_TABLE_NAME);
    $this->connection->schema()->dropTable(static::DEST_TABLE_NAME);
    parent::tearDown();
  }

  /**
   * Tests table migration.
   */
  public function testTableMigration() {
    $definition = [
      'id' => 'migration_table_test',
      'migration_tags' => ['Testing'],
      'source' => [
        'plugin' => 'table',
        'table_name' => static::SOURCE_TABLE_NAME,
        'id_fields' => [
          'data' => ['type' => 'string'],
        ],
      ],
      'destination' => [
        'plugin' => 'table',
        'table_name' => static::DEST_TABLE_NAME,
        'id_fields' => [
          'data' => ['type' => 'string'],
        ],
      ],
      'process' => [
        'data' => 'data',
        'data2' => 'data2',
        'data3' => 'data3',
      ],
    ];
    $migration = \Drupal::service('plugin.manager.migration')->createStubMigration($definition);

    $executable = new MigrateExecutable($migration, $this);
    $executable->import();

    $values = $this->connection->select(static::DEST_TABLE_NAME)
      ->fields(static::DEST_TABLE_NAME)
      ->execute()
      ->fetchAllAssoc('data');

    $this->assertEquals('dummy value', $values['dummy value']->data);
    $this->assertEquals('dummy2 value', $values['dummy value']->data2);
    $this->assertEquals('dummy2 value2', $values['dummy value2']->data2);
    $this->assertEquals('dummy3 value3', $values['dummy value3']->data3);
    $this->assertEquals(3, count($values));

    // Now rollback.
    $executable->rollback();
    $values = $this->connection->select(static::DEST_TABLE_NAME)
      ->fields(static::DEST_TABLE_NAME)
      ->execute()
      ->fetchAllAssoc('data');

    $this->assertEquals(0, count($values));
  }

}
