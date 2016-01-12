<?php

namespace netForum\xWeb\Xml\Generated;

class VersionClass
{

    /**
     * @var string $MajorVersion
     */
    protected $MajorVersion = null;

    /**
     * @var string $MinorVersion
     */
    protected $MinorVersion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMajorVersion()
    {
      return $this->MajorVersion;
    }

    /**
     * @param string $MajorVersion
     * @return \netForum\xWeb\Xml\Generated\VersionClass
     */
    public function setMajorVersion($MajorVersion)
    {
      $this->MajorVersion = $MajorVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinorVersion()
    {
      return $this->MinorVersion;
    }

    /**
     * @param string $MinorVersion
     * @return \netForum\xWeb\Xml\Generated\VersionClass
     */
    public function setMinorVersion($MinorVersion)
    {
      $this->MinorVersion = $MinorVersion;
      return $this;
    }

}
