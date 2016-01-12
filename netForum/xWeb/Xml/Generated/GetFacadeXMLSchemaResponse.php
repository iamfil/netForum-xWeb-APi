<?php

namespace netForum\xWeb\Xml\Generated;

class GetFacadeXMLSchemaResponse
{

    /**
     * @var GetFacadeXMLSchemaResult $GetFacadeXMLSchemaResult
     */
    protected $GetFacadeXMLSchemaResult = null;

    /**
     * @param GetFacadeXMLSchemaResult $GetFacadeXMLSchemaResult
     */
    public function __construct($GetFacadeXMLSchemaResult)
    {
      $this->GetFacadeXMLSchemaResult = $GetFacadeXMLSchemaResult;
    }

    /**
     * @return GetFacadeXMLSchemaResult
     */
    public function getGetFacadeXMLSchemaResult()
    {
      return $this->GetFacadeXMLSchemaResult;
    }

    /**
     * @param GetFacadeXMLSchemaResult $GetFacadeXMLSchemaResult
     * @return \netForum\xWeb\Xml\Generated\GetFacadeXMLSchemaResponse
     */
    public function setGetFacadeXMLSchemaResult($GetFacadeXMLSchemaResult)
    {
      $this->GetFacadeXMLSchemaResult = $GetFacadeXMLSchemaResult;
      return $this;
    }

}
