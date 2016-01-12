<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGiftFundraisingRefresh
{

    /**
     * @var FundraisingGiftType $oFundraisingGift
     */
    protected $oFundraisingGift = null;

    /**
     * @param FundraisingGiftType $oFundraisingGift
     */
    public function __construct($oFundraisingGift)
    {
      $this->oFundraisingGift = $oFundraisingGift;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGiftFundraisingRefresh
     */
    public function setOFundraisingGift($oFundraisingGift)
    {
      $this->oFundraisingGift = $oFundraisingGift;
      return $this;
    }

}
