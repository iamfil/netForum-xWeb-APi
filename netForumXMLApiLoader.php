<?php

use netForum\xWeb\Xml\InetForumXMLApiConfig;
use netForum\xWeb\Xml\netForumXMLApi;

// Simple class autoloader that depends on namespaces and directories that
// classes are in being the same.
function netForumxWebApi_AutoLoader($classPath) {
  // dpm('Loaded: ' . str_replace('\\', DIRECTORY_SEPARATOR, $classPath) . '.php');
  @include_once str_replace('\\', DIRECTORY_SEPARATOR, $classPath) . '.php';
}

spl_autoload_register('netForumxWebApi_AutoLoader');

/**
 * Class netForumXMLApiFactory
 *
 * Factory for getting an instance of netForumXMLApi and taking care of
 * configuration.
 */
class netForumXMLApiFactory {
  private static $netForumXML;

  private function __construct() {

  }

  /**
   * Gets an instance of netForumXMLApi that can be used to interact with the
   * netForum XML Web service. This method will ensure that one instance of
   * netForumXMLApi is reused instead of creating multiple new instances.
   *
   * @return \netForum\xWeb\Xml\netForumXMLApi
   */
  public static function getInstance() {
    if (!isset(netForumXMLApiFactory::$netForumXML)) {
      netForumXMLApiFactory::$netForumXML = netForumXMLApiFactory::createInstance(new DrupalNetForumXMLApiConfig());
    }

    return netForumXMLApiFactory::$netForumXML;
  }

  /**
   * Creates an instance of netForumXMLApi with a specified configuration.
   * This is intended for internal use. Do not use this in your code.
   *
   * @internal
   * @param \netForum\xWeb\Xml\InetForumXMLApiConfig $netForumXMLApiConfig
   * @return \netForum\xWeb\Xml\netForumXMLApi
   */
  public static function createInstance(InetForumXMLApiConfig $netForumXMLApiConfig) {
    return new netForumXMLApi($netForumXMLApiConfig);
  }
}
