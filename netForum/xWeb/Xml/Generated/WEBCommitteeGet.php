<?php

namespace netForum\xWeb\Xml\Generated;

class WEBCommitteeGet
{

    /**
     * @var guid $key
     */
    protected $key = null;

    /**
     * @param guid $key
     */
    public function __construct($key)
    {
      $this->key = $key;
    }

    /**
     * @return guid
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param guid $key
     * @return \netForum\xWeb\Xml\Generated\WEBCommitteeGet
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
