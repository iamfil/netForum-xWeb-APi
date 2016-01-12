<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartLoadLineItem
{

    /**
     * @var InvoiceDetailType $oLineItem
     */
    protected $oLineItem = null;

    /**
     * @param InvoiceDetailType $oLineItem
     */
    public function __construct($oLineItem)
    {
      $this->oLineItem = $oLineItem;
    }

    /**
     * @return InvoiceDetailType
     */
    public function getOLineItem()
    {
      return $this->oLineItem;
    }

    /**
     * @param InvoiceDetailType $oLineItem
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartLoadLineItem
     */
    public function setOLineItem($oLineItem)
    {
      $this->oLineItem = $oLineItem;
      return $this;
    }

}
