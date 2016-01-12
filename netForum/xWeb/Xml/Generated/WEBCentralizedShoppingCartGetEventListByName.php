<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetEventListByName
{

    /**
     * @var string $EventName
     */
    protected $EventName = null;

    /**
     * @param string $EventName
     */
    public function __construct($EventName)
    {
      $this->EventName = $EventName;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
      return $this->EventName;
    }

    /**
     * @param string $EventName
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetEventListByName
     */
    public function setEventName($EventName)
    {
      $this->EventName = $EventName;
      return $this;
    }

}
