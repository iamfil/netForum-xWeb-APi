<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartExhibitorAddExhibitor
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var ExhibitorNewType $oExhibitor
     */
    protected $oExhibitor = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param ExhibitorNewType $oExhibitor
     */
    public function __construct($oCentralizedOrderEntry, $oExhibitor)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->oExhibitor = $oExhibitor;
    }

    /**
     * @return CentralizedOrderEntryType
     */
    public function getOCentralizedOrderEntry()
    {
      return $this->oCentralizedOrderEntry;
    }

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorAddExhibitor
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartExhibitorAddExhibitor
     */
    public function setOExhibitor($oExhibitor)
    {
      $this->oExhibitor = $oExhibitor;
      return $this;
    }

}
