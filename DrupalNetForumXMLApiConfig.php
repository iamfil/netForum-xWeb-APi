<?php

use netForum\xWeb\Xml\InetForumXMLApiConfig;

/**
 * Class DrupalNetForumXMLApiConfig
 *
 * Retrieve settings set through Drupal.
 */
class DrupalNetForumXMLApiConfig implements InetForumXMLApiConfig {
  /**
   * @return string
   */
  public function getWsdlUrl() {
    return variable_get('xweb_endpoint_url');
  }

  /**
   * @return string
   */
  public function getUsername() {
    return variable_get('xweb_endpoint_username');
  }

  /**
   * @return string
   */
  public function getPassword() {
    return variable_get('xweb_endpoint_password');
  }

  /**
   * @return \DrupalDevelNetForumXMLApiLogger
   */
  public function getLogHandler() {
    $loggingBackend = variable_get('xweb_debug_log_backend', 0);

    if ($loggingBackend == 1) {
      return new DrupalDevelNetForumXMLApiLogger();
    }

    return new DrupalWatchdogNetForumXMLApiLogger();
  }

  /**
   * @return bool
   */
  public function getLogDebugEnabled() {
    return variable_get('xweb_debug_log_all') == 1;
  }
}
