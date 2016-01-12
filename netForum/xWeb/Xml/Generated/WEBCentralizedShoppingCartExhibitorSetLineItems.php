<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorSetLineItems
{

    /**
     * @var ExhibitorNewType $oExhibitor
     */
    protected $oExhibitor = null;

    /**
     * @var Fee $oFeeCollection
     */
    protected $oFeeCollection = null;

    /**
     * @param ExhibitorNewType $oExhibitor
     * @param Fee $oFeeCollection
     */
    public function __construct($oExhibitor, $oFeeCollection)
    {
      $this->oExhibitor = $oExhibitor;
      $this->oFeeCollection = $oFeeCollection;
    }

    /**
     * @return ExhibitorNewType
     */
    public function getOExhibitor()
    {
      return $this->oExhibitor;
    }

    /**
     * @param ExhibitorNewType $oExhibitor
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItems
     */
    public function setOExhibitor($oExhibitor)
    {
      $this->oExhibitor = $oExhibitor;
      return $this;
    }

    /**
     * @return Fee
     */
    public function getOFeeCollection()
    {
      return $this->oFeeCollection;
    }

    /**
     * @param Fee $oFeeCollection
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorSetLineItems
     */
    public function setOFeeCollection($oFeeCollection)
    {
      $this->oFeeCollection = $oFeeCollection;
      return $this;
    }

}
