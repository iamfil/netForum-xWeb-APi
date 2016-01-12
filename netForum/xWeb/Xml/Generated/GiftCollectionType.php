<?php

namespace netForum\xWeb\Xml\Generated;

class GiftCollectionType
{

    /**
     * @var FundraisingGiftType[] $FundraisingGift
     */
    protected $FundraisingGift = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FundraisingGiftType[]
     */
    public function getFundraisingGift()
    {
      return $this->FundraisingGift;
    }

    /**
     * @param FundraisingGiftType[] $FundraisingGift
     * @return \netForum\xWeb\Xml\Generated\GiftCollectionType
     */
    public function setFundraisingGift(array $FundraisingGift = null)
    {
      $this->FundraisingGift = $FundraisingGift;
      return $this;
    }

}
