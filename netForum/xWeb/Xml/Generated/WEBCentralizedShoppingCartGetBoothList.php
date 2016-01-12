<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetBoothList
{

    /**
     * @var ExhibitorNewType $oExhibitor
     */
    protected $oExhibitor = null;

    /**
     * @var string $BoothType
     */
    protected $BoothType = null;

    /**
     * @var string $BoothCategory
     */
    protected $BoothCategory = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @param ExhibitorNewType $oExhibitor
     * @param string $BoothType
     * @param string $BoothCategory
     * @param string $ProductName
     */
    public function __construct($oExhibitor, $BoothType, $BoothCategory, $ProductName)
    {
      $this->oExhibitor = $oExhibitor;
      $this->BoothType = $BoothType;
      $this->BoothCategory = $BoothCategory;
      $this->ProductName = $ProductName;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetBoothList
     */
    public function setOExhibitor($oExhibitor)
    {
      $this->oExhibitor = $oExhibitor;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoothType()
    {
      return $this->BoothType;
    }

    /**
     * @param string $BoothType
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetBoothList
     */
    public function setBoothType($BoothType)
    {
      $this->BoothType = $BoothType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoothCategory()
    {
      return $this->BoothCategory;
    }

    /**
     * @param string $BoothCategory
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetBoothList
     */
    public function setBoothCategory($BoothCategory)
    {
      $this->BoothCategory = $BoothCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetBoothList
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

}
