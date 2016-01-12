<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormControlForFacadeObjectResponse
{

    /**
     * @var ArrayOfAVFormControl $MetaDataGetFormControlForFacadeObjectResult
     */
    protected $MetaDataGetFormControlForFacadeObjectResult = null;

    /**
     * @param ArrayOfAVFormControl $MetaDataGetFormControlForFacadeObjectResult
     */
    public function __construct($MetaDataGetFormControlForFacadeObjectResult)
    {
      $this->MetaDataGetFormControlForFacadeObjectResult = $MetaDataGetFormControlForFacadeObjectResult;
    }

    /**
     * @return ArrayOfAVFormControl
     */
    public function getMetaDataGetFormControlForFacadeObjectResult()
    {
      return $this->MetaDataGetFormControlForFacadeObjectResult;
    }

    /**
     * @param ArrayOfAVFormControl $MetaDataGetFormControlForFacadeObjectResult
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormControlForFacadeObjectResponse
     */
    public function setMetaDataGetFormControlForFacadeObjectResult($MetaDataGetFormControlForFacadeObjectResult)
    {
      $this->MetaDataGetFormControlForFacadeObjectResult = $MetaDataGetFormControlForFacadeObjectResult;
      return $this;
    }

}
