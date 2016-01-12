<?php

namespace netForum\xWeb\Xml\Generated;

class CreatePaymentResponse
{

    /**
     * @var CreatePaymentResult $CreatePaymentResult
     */
    protected $CreatePaymentResult = null;

    /**
     * @param CreatePaymentResult $CreatePaymentResult
     */
    public function __construct($CreatePaymentResult)
    {
      $this->CreatePaymentResult = $CreatePaymentResult;
    }

    /**
     * @return CreatePaymentResult
     */
    public function getCreatePaymentResult()
    {
      return $this->CreatePaymentResult;
    }

    /**
     * @param CreatePaymentResult $CreatePaymentResult
     * @return \netForum\xWeb\Xml\Generated\CreatePaymentResponse
     */
    public function setCreatePaymentResult($CreatePaymentResult)
    {
      $this->CreatePaymentResult = $CreatePaymentResult;
      return $this;
    }

}
