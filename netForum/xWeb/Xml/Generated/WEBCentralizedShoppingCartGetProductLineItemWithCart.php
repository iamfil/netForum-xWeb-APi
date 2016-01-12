<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetProductLineItemWithCart
{

    /**
     * @var CentralizedOrderEntryType $oCentralizedOrderEntry
     */
    protected $oCentralizedOrderEntry = null;

    /**
     * @var guid $ProductKey
     */
    protected $ProductKey = null;

    /**
     * @var guid $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var guid $Customer_X_Address_Key
     */
    protected $Customer_X_Address_Key = null;

    /**
     * @param CentralizedOrderEntryType $oCentralizedOrderEntry
     * @param guid $ProductKey
     * @param guid $CustomerKey
     * @param guid $Customer_X_Address_Key
     */
    public function __construct($oCentralizedOrderEntry, $ProductKey, $CustomerKey, $Customer_X_Address_Key)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      $this->ProductKey = $ProductKey;
      $this->CustomerKey = $CustomerKey;
      $this->Customer_X_Address_Key = $Customer_X_Address_Key;
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
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductLineItemWithCart
     */
    public function setOCentralizedOrderEntry($oCentralizedOrderEntry)
    {
      $this->oCentralizedOrderEntry = $oCentralizedOrderEntry;
      return $this;
    }

    /**
     * @return guid
     */
    public function getProductKey()
    {
      return $this->ProductKey;
    }

    /**
     * @param guid $ProductKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductLineItemWithCart
     */
    public function setProductKey($ProductKey)
    {
      $this->ProductKey = $ProductKey;
      return $this;
    }

    /**
     * @return guid
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param guid $CustomerKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductLineItemWithCart
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return guid
     */
    public function getCustomer_X_Address_Key()
    {
      return $this->Customer_X_Address_Key;
    }

    /**
     * @param guid $Customer_X_Address_Key
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetProductLineItemWithCart
     */
    public function setCustomer_X_Address_Key($Customer_X_Address_Key)
    {
      $this->Customer_X_Address_Key = $Customer_X_Address_Key;
      return $this;
    }

}
