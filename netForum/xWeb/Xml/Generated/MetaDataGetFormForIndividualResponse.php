<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormForIndividualResponse
{

    /**
     * @var AVForm $MetaDataGetFormForIndividualResult
     */
    protected $MetaDataGetFormForIndividualResult = null;

    /**
     * @param AVForm $MetaDataGetFormForIndividualResult
     */
    public function __construct($MetaDataGetFormForIndividualResult)
    {
      $this->MetaDataGetFormForIndividualResult = $MetaDataGetFormForIndividualResult;
    }

    /**
     * @return AVForm
     */
    public function getMetaDataGetFormForIndividualResult()
    {
      return $this->MetaDataGetFormForIndividualResult;
    }

    /**
     * @param AVForm $MetaDataGetFormForIndividualResult
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormForIndividualResponse
     */
    public function setMetaDataGetFormForIndividualResult($MetaDataGetFormForIndividualResult)
    {
      $this->MetaDataGetFormForIndividualResult = $MetaDataGetFormForIndividualResult;
      return $this;
    }

}
