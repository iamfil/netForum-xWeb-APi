<?php

namespace netForum\xWeb\Xml\Generated;

class GetFacadeXMLSchema
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @param string $szObjectName
     */
    public function __construct($szObjectName)
    {
      $this->szObjectName = $szObjectName;
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
     * @return \netForum\xWeb\Xml\Generated\GetFacadeXMLSchema
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
      return $this;
    }

}
