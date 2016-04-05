<?php

namespace netForum\xWeb\Xml;

interface InetForumXMLApiConfig {
  /**
   * @return string
   */
  public function getWsdlUrl();

  /**
   * @return string
   */
  public function getUsername();

  /**
   * @return string
   */
  public function getPassword();

  /**
   * @return \netForum\xWeb\Logging\ILogHandler
   */
  public function getLogHandler();

  /**
   * @return bool
   */
  public function getLogDebugEnabled();
}
