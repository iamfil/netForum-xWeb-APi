<?php

/**
 * Class DrupalNetForumXMLApiConfigTest
 *
 * Used for testing a configuration before it is saved.
 */
class DrupalNetForumXMLApiConfigTest extends DrupalNetForumXMLApiConfig {
  private $drupalFormValues;

  /**
   * @param array $formValues takes $form_state from a Drupal form.
   */
  public function __construct(array $formValues) {
    $this->drupalFormValues = $formValues;
  }

  /**
   * @return string
   */
  public function getWsdlUrl() {
    return $this->drupalFormValues['xweb_endpoint_url'];
  }

  /**
   * @return string
   */
  public function getUsername() {
    return $this->drupalFormValues['xweb_endpoint_username'];
  }

  /**
   * @return string
   */
  public function getPassword() {
    return $this->drupalFormValues['xweb_endpoint_password'];

  }

  /**
   * @return \DrupalDevelNetForumXMLApiLogger
   */
  public function getLogHandler() {
    $loggingBackend = $this->drupalFormValues['xweb_debug_log_backend'];

    if ($loggingBackend == 1) {
      return new DrupalDevelNetForumXMLApiLogger();
    }

    return new DrupalWatchdogNetForumXMLApiLogger();
  }

  /**
   * @return bool
   */
  public function getLogDebugEnabled() {
    return $this->drupalFormValues['xweb_debug_log_all'] == 1;
  }

  public function getCacheHandler() {
    // Disable cache when testing.
    return NULL;
  }
}
