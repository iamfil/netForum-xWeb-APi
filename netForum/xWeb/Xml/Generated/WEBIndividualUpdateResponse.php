<?php

namespace netForum\xWeb\Xml\Generated;

class WEBIndividualUpdateResponse
{

    /**
     * @var boolean $WEBIndividualUpdateResult
     */
    protected $WEBIndividualUpdateResult = null;

    /**
     * @param boolean $WEBIndividualUpdateResult
     */
    public function __construct($WEBIndividualUpdateResult)
    {
      $this->WEBIndividualUpdateResult = $WEBIndividualUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getWEBIndividualUpdateResult()
    {
      return $this->WEBIndividualUpdateResult;
    }

    /**
     * @param boolean $WEBIndividualUpdateResult
     * @return \netForum\xWeb\Xml\Generated\WEBIndividualUpdateResponse
     */
    public function setWEBIndividualUpdateResult($WEBIndividualUpdateResult)
    {
      $this->WEBIndividualUpdateResult = $WEBIndividualUpdateResult;
      return $this;
    }

}
