<?php

namespace netForum\xWeb\Xml\Generated;

class xWebVersion
{

    /**
     * @var string $Build
     */
    protected $Build = null;

    /**
     * @var VersionClass $Version
     */
    protected $Version = null;

    /**
     * @var string $Server
     */
    protected $Server = null;

    /**
     * @var string $Database
     */
    protected $Database = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBuild()
    {
      return $this->Build;
    }

    /**
     * @param string $Build
     * @return \netForum\xWeb\Xml\Generated\xWebVersion
     */
    public function setBuild($Build)
    {
      $this->Build = $Build;
      return $this;
    }

    /**
     * @return VersionClass
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param VersionClass $Version
     * @return \netForum\xWeb\Xml\Generated\xWebVersion
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getServer()
    {
      return $this->Server;
    }

    /**
     * @param string $Server
     * @return \netForum\xWeb\Xml\Generated\xWebVersion
     */
    public function setServer($Server)
    {
      $this->Server = $Server;
      return $this;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
      return $this->Database;
    }

    /**
     * @param string $Database
     * @return \netForum\xWeb\Xml\Generated\xWebVersion
     */
    public function setDatabase($Database)
    {
      $this->Database = $Database;
      return $this;
    }

}
