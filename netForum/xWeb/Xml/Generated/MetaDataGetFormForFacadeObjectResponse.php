<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormForFacadeObjectResponse
{

    /**
     * @var AVForm $MetaDataGetFormForFacadeObjectResult
     */
    protected $MetaDataGetFormForFacadeObjectResult = null;

    /**
     * @param AVForm $MetaDataGetFormForFacadeObjectResult
     */
    public function __construct($MetaDataGetFormForFacadeObjectResult)
    {
      $this->MetaDataGetFormForFacadeObjectResult = $MetaDataGetFormForFacadeObjectResult;
    }

    /**
     * @return AVForm
     */
    public function getMetaDataGetFormForFacadeObjectResult()
    {
      return $this->MetaDataGetFormForFacadeObjectResult;
    }

    /**
     * @param AVForm $MetaDataGetFormForFacadeObjectResult
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForFacadeObjectResponse
     */
    public function setMetaDataGetFormForFacadeObjectResult($MetaDataGetFormForFacadeObjectResult)
    {
      $this->MetaDataGetFormForFacadeObjectResult = $MetaDataGetFormForFacadeObjectResult;
      return $this;
    }

}
