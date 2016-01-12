<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventRegistrantTypeListResponse
{

    /**
     * @var WEBCentralizedShoppingCartGetEventRegistrantTypeListResult $WEBCentralizedShoppingCartGetEventRegistrantTypeListResult
     */
    protected $WEBCentralizedShoppingCartGetEventRegistrantTypeListResult = null;

    /**
     * @param WEBCentralizedShoppingCartGetEventRegistrantTypeListResult $WEBCentralizedShoppingCartGetEventRegistrantTypeListResult
     */
    public function __construct($WEBCentralizedShoppingCartGetEventRegistrantTypeListResult)
    {
      $this->WEBCentralizedShoppingCartGetEventRegistrantTypeListResult = $WEBCentralizedShoppingCartGetEventRegistrantTypeListResult;
    }

    /**
     * @return WEBCentralizedShoppingCartGetEventRegistrantTypeListResult
     */
    public function getWEBCentralizedShoppingCartGetEventRegistrantTypeListResult()
    {
      return $this->WEBCentralizedShoppingCartGetEventRegistrantTypeListResult;
    }

    /**
     * @param WEBCentralizedShoppingCartGetEventRegistrantTypeListResult $WEBCentralizedShoppingCartGetEventRegistrantTypeListResult
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventRegistrantTypeListResponse
     */
    public function setWEBCentralizedShoppingCartGetEventRegistrantTypeListResult($WEBCentralizedShoppingCartGetEventRegistrantTypeListResult)
    {
      $this->WEBCentralizedShoppingCartGetEventRegistrantTypeListResult = $WEBCentralizedShoppingCartGetEventRegistrantTypeListResult;
      return $this;
    }

}
