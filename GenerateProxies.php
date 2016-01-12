<?php

require_once 'vendor/autoload.php';

/**
 * Class GenerateProxies
 *
 * This script will generate PHP proxy classes for the netForum xWeb XML Web
 * Service using Wsdl2PhpGenerator.
 *
 * Wsdl2PhpGenerator can be installed using Composer and the accompanied composer.json.
 */
class GenerateProxies {
  private static $GENERATED_DIRECTORY = 'netForum/xWeb/Xml/Generated';

  public function __construct() {
    $cliOptions = getopt('', array('url:'));
    if (array_key_exists('url', $cliOptions)) {
      $wsdlUrl = $cliOptions['url'];

      $generatorConfig = new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $wsdlUrl,
        'outputDir' => GenerateProxies::$GENERATED_DIRECTORY,
        'namespaceName' => 'netForum\xWeb\Xml\Generated'
      ));

      $generator = new \Wsdl2PhpGenerator\Generator();
      $generator->generate($generatorConfig);
    }
    else {
      GenerateProxies::displayUsage();
    }
  }

  public static function displayUsage() {
    printf("GenerateProxies\n");
    printf("This script will create the generated directory with PHP proxy classes\n");
    printf("for the netForum xWeb XML Web Service.\n\n");
    printf("Usage:\n");
    printf("php GenerateProxies.php --url WSDL_URL\n\n");
  }
}

new GenerateProxies();
