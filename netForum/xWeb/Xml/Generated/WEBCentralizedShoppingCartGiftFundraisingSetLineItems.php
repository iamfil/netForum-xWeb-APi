<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftFundraisingSetLineItems
{

    /**
     * @var FundraisingGiftType $oFundraisingGift
     */
    protected $oFundraisingGift = null;

    /**
     * @var Fees $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param FundraisingGiftType $oFundraisingGift
     * @param Fees $oFeeCollection
     */
    public function __construct($oFundraisingGift, $oFeeCollection)
    {
      $this->oFundraisingGift = $oFundraisingGift;
      $this->oFeeCollection = $oFeeCollection;
    }

    /**
     * @return FundraisingGiftType
     */
    public function getOFundraisingGift()
    {
      return $this->oFundraisingGift;
    }

    /**
     * @param FundraisingGiftType $oFundraisingGift
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingSetLineItems
     */
    public function setOFundraisingGift($oFundraisingGift)
    {
      $this->oFundraisingGift = $oFundraisingGift;
      return $this;
    }

    /**
     * @return Fees
     */
    public function getOFeeCollection()
    {
      return $this->oFeeCollection;
    }

    /**
     * @param Fees $oFeeCollection
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingSetLineItems
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
