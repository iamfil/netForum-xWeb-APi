<?php

namespace netForum\xWeb\Xml\Generated;

class GetDynamicQueryDefinition
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var string $szQueryName
     */
    protected $szQueryName = null;

    /**
     * @var string $que_key
     */
    protected $que_key = null;

    /**
     * @param string $szObjectName
     * @param string $szQueryName
     * @param string $que_key
     */
    public function __construct($szObjectName, $szQueryName, $que_key)
    {
      $this->szObjectName = $szObjectName;
      $this->szQueryName = $szQueryName;
      $this->que_key = $que_key;
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
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQueryDefinition
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzQueryName()
    {
      return $this->szQueryName;
    }

    /**
     * @param string $szQueryName
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQueryDefinition
     */
    public function setSzQueryName($szQueryName)
    {
      $this->szQueryName = $szQueryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getQue_key()
    {
      return $this->que_key;
    }

    /**
     * @param string $que_key
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQueryDefinition
     */
    public function setQue_key($que_key)
    {
      $this->que_key = $que_key;
      return $this;
    }

}
