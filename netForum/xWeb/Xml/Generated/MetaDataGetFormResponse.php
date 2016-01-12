<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetFormResponse
{

    /**
     * @var AVForm $MetaDataGetFormResult
     */
    protected $MetaDataGetFormResult = null;

    /**
     * @param AVForm $MetaDataGetFormResult
     */
    public function __construct($MetaDataGetFormResult)
    {
      $this->MetaDataGetFormResult = $MetaDataGetFormResult;
    }

    /**
     * @return AVForm
     */
    public function getMetaDataGetFormResult()
    {
      return $this->MetaDataGetFormResult;
    }

    /**
     * @param AVForm $MetaDataGetFormResult
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetFormResponse
     */
    public function setMetaDataGetFormResult($MetaDataGetFormResult)
    {
      $this->MetaDataGetFormResult = $MetaDataGetFormResult;
      return $this;
    }

}
