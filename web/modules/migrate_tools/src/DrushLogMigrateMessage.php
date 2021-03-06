<?php

namespace Drupal\migrate_tools;

use Drupal\migrate\MigrateMessageInterface;

/**
 * Class DrushLogMigrateMessage.
 *
 * @package Drupal\migrate_tools
 */
class DrushLogMigrateMessage implements MigrateMessageInterface {

  /**
   * Output a message from the migration.
   *
   * @param string $message
   *   The message to display.
   * @param string $type
   *   The type of message to display.
   *
   * @see drush_log()
   */
  public function display($message, $type = 'status') {
    \Drupal::service(('logger.channel.migrate_tools'))->log($type, $message);
  }

}
