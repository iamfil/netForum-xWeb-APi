<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGetCommitteesByCustomerResponse
{

    /**
     * @var WEBCommitteeGetCommitteesByCustomerResult $WEBCommitteeGetCommitteesByCustomerResult
     */
    protected $WEBCommitteeGetCommitteesByCustomerResult = null;

    /**
     * @param WEBCommitteeGetCommitteesByCustomerResult $WEBCommitteeGetCommitteesByCustomerResult
     */
    public function __construct($WEBCommitteeGetCommitteesByCustomerResult)
    {
      $this->WEBCommitteeGetCommitteesByCustomerResult = $WEBCommitteeGetCommitteesByCustomerResult;
    }

    /**
     * @return WEBCommitteeGetCommitteesByCustomerResult
     */
    public function getWEBCommitteeGetCommitteesByCustomerResult()
    {
      return $this->WEBCommitteeGetCommitteesByCustomerResult;
    }

    /**
     * @param WEBCommitteeGetCommitteesByCustomerResult $WEBCommitteeGetCommitteesByCustomerResult
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGetCommitteesByCustomerResponse
     */
    public function setWEBCommitteeGetCommitteesByCustomerResult($WEBCommitteeGetCommitteesByCustomerResult)
    {
      $this->WEBCommitteeGetCommitteesByCustomerResult = $WEBCommitteeGetCommitteesByCustomerResult;
      return $this;
    }

}
