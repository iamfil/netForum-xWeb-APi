<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCentralizedShoppingCartGetSessionListByTrackKey
{

    /**
     * @var guid $TrackKey
     */
    protected $TrackKey = null;

    /**
     * @param guid $TrackKey
     */
    public function __construct($TrackKey)
    {
      $this->TrackKey = $TrackKey;
    }

    /**
     * @return guid
     */
    public function getTrackKey()
    {
      return $this->TrackKey;
    }

    /**
     * @param guid $TrackKey
     * @return \netForum\xWeb\Xml\Generated\WEBCentralizedShoppingCartGetSessionListByTrackKey
     */
    public function setTrackKey($TrackKey)
    {
      $this->TrackKey = $TrackKey;
      return $this;
    }

}
