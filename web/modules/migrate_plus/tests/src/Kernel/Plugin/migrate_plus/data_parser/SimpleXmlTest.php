<?php

namespace Drupal\Tests\migrate_plus\Kernel\Plugin\migrate_plus\data_parser;

use Drupal\Migrate\MigrateException;
use Drupal\KernelTests\KernelTestBase;

/**
 * Test of the data_parser SimpleXml migrate_plus plugin.
 *
 * @group migrate_plus
 */
class SimpleXmlTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['migrate', 'migrate_plus'];

  /**
   * Path for the xml file.
   *
   * @var string
   */
  protected $path;

  /**
   * The plugin manager.
   *
   * @var \Drupal\migrate_plus\DataParserPluginManager
   */
  protected $pluginManager;

  /**
   * The plugin configuration.
   *
   * @var array
   */
  protected $configuration;

  /**
   * The expected result.
   *
   * @var array
   */
  protected $expected;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->path = $this->container->get('module_handler')
      ->getModule('migrate_plus')->getPath();
    $this->pluginManager = $this->container
      ->get('plugin.manager.migrate_plus.data_parser');
    $this->configuration = [
      'plugin' => 'url',
      'data_fetcher_plugin' => 'file',
      'data_parser_plugin' => 'simple_xml',
      'destination' => 'node',
      'urls' => [],
      'ids' => ['id' => ['type' => 'integer']],
      'fields' => [
        [
          'name' => 'id',
          'label' => 'Id',
          'selector' => '@id',
        ],
        [
          'name' => 'values',
          'label' => 'Values',
          'selector' => 'values',
        ],
      ],
      'item_selector' => '/items/item',
    ];
    $this->expected = [
      [
        'Value 1',
        'Value 2',
      ],
      [
        'Value 1 (single)',
      ],
    ];
  }

  /**
   * Tests reducing single values.
   */
  public function testReduceSingleValue() {
    $url = $this->path . '/tests/data/simple_xml_reduce_single_value.xml';
    $this->configuration['urls'][0] = $url;
    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $this->assertResults($this->expected, $parser);
  }

  /**
   * Test reading non standard conforming XML.
   *
   * XML file with lots of different white spaces before the starting tag.
   */
  public function testReadNonStandardXmlWhitespace() {
    $url = $this->path . '/tests/data/simple_xml_invalid_multi_whitespace.xml';
    $this->configuration['urls'][0] = $url;

    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $this->assertResults($this->expected, $parser);
  }

  /**
   * Test reading non standard conforming XML .
   *
   * XML file with one empty line before the starting tag.
   */
  public function testReadNonStandardXml2() {
    $url = $this->path . '/tests/data/simple_xml_invalid_single_line.xml';
    $this->configuration['urls'][0] = $url;

    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $this->assertResults($this->expected, $parser);
  }

  /**
   * Test reading broken XML (missing closing tag).
   *
   * @throws \Drupal\Migrate\MigrateException
   */
  public function testReadBrokenXmlMissingTag() {
    $url = $this->path . '/tests/data/simple_xml_broken_missing_tag.xml';
    $this->configuration['urls'][0] = $url;

    if (method_exists($this, 'setExpectedExceptionRegExp')) {
      $this->setExpectedExceptionRegExp(MigrateException::class, '/^Fatal Error 73/');
    }
    else {
      $this->expectException(MigrateException::class);
      $this->expectExceptionMessageRegExp('/^Fatal Error 73/');
    }
    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $parser->next();
  }

  /**
   * Test reading broken XML (tag mismatch).
   *
   * @throws \Drupal\Migrate\MigrateException
   */
  public function testReadBrokenXmlTagMismatch() {
    $url = $this->path . '/tests/data/simple_xml_broken_tag_mismatch.xml';
    $this->configuration['urls'][0] = $url;

    if (method_exists($this, 'setExpectedExceptionRegExp')) {
      $this->setExpectedExceptionRegExp(MigrateException::class, '/^Fatal Error 76/');
    }
    else {
      $this->expectException(MigrateException::class);
      $this->expectExceptionMessageRegExp('/^Fatal Error 76/');
    }
    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $parser->next();
  }

  /**
   * Test reading non XML.
   *
   * @throws \Drupal\Migrate\MigrateException
   */
  public function testReadNonXml() {
    $url = $this->path . '/tests/data/simple_xml_non_xml.xml';
    $this->configuration['urls'][0] = $url;

    if (method_exists($this, 'setExpectedExceptionRegExp')) {
      $this->setExpectedExceptionRegExp(MigrateException::class, '/^Fatal Error 46/');
    }
    else {
      $this->expectException(MigrateException::class);
      $this->expectExceptionMessageRegExp('/^Fatal Error 46/');
    }
    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $parser->next();
  }

  /**
   * Tests reading non-existing XML.
   *
   * @throws \Drupal\Migrate\MigrateException
   */
  public function testReadNonExistingXml() {
    $url = $this->path . '/tests/data/simple_xml_non_existing.xml';
    $this->configuration['urls'][0] = $url;

    $this->setExpectedException(MigrateException::class, 'file parser plugin: could not retrieve data from modules/contrib/migrate_plus/tests/data/simple_xml_non_existing.xml');
    $parser = $this->pluginManager->createInstance('simple_xml', $this->configuration);
    $parser->next();
  }

  /**
   * Parses and asserts the results match expectations.
   *
   * @param array|string $expected
   *   The expected results.
   * @param \Traversable $parser
   *   An iterable data result to parse.
   */
  protected function assertResults($expected, \Traversable $parser) {
    $data = [];
    foreach ($parser as $item) {
      $values = [];
      foreach ($item['values'] as $value) {
        $values[] = (string) $value;
      }
      $data[] = $values;
    }
    $this->assertEquals($expected, $data);
  }

}
