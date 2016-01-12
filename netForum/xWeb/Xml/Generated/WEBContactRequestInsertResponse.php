<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestInsertResponse
{

    /**
     * @var boolean $WEBContactRequestInsertResult
     */
    protected $WEBContactRequestInsertResult = null;

    /**
     * @param boolean $WEBContactRequestInsertResult
     */
    public function __construct($WEBContactRequestInsertResult)
    {
      $this->WEBContactRequestInsertResult = $WEBContactRequestInsertResult;
    }

    /**
     * @return boolean
     */
    public function getWEBContactRequestInsertResult()
    {
      return $this->WEBContactRequestInsertResult;
    }

    /**
     * @param boolean $WEBContactRequestInsertResult
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestInsertResponse
     */
    public function setWEBContactRequestInsertResult($WEBContactRequestInsertResult)
    {
      $this->WEBContactRequestInsertResult = $WEBContactRequestInsertResult;
      return $this;
    }

}
