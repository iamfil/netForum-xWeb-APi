<?php

namespace netForum\xWeb\Xml\Generated;

class GetFacadeObject
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var string $szObjectKey
     */
    protected $szObjectKey = null;

    /**
     * @param string $szObjectName
     * @param string $szObjectKey
     */
    public function __construct($szObjectName, $szObjectKey)
    {
      $this->szObjectName = $szObjectName;
      $this->szObjectKey = $szObjectKey;
    }

    /**
     * @return string
     */
    public function getSzObjectName()
    {
      return $this->szObjectName;
    }

    /**
     * @param string $szObjectName
     * @return \netForum\xWeb\Xml\Generated\GetFacadeObject
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzObjectKey()
    {
      return $this->szObjectKey;
    }

    /**
     * @param string $szObjectKey
     * @return \netForum\xWeb\Xml\Generated\GetFacadeObject
     */
    public function setSzObjectKey($szObjectKey)
    {
      $this->szObjectKey = $szObjectKey;
      return $this;
    }

}
