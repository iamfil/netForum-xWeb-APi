<?php

namespace netForum\xWeb\Xml\Generated;

class MetaDataGetForm
{

    /**
     * @var guid $FormKey
     */
    protected $FormKey = null;

    /**
     * @param guid $FormKey
     */
    public function __construct($FormKey)
    {
      $this->FormKey = $FormKey;
    }

    /**
     * @return guid
     */
    public function getFormKey()
    {
      return $this->FormKey;
    }

    /**
     * @param guid $FormKey
     * @return \netForum\xWeb\Xml\Generated\MetaDataGetForm
     */
    public function setFormKey($FormKey)
    {
      $this->FormKey = $FormKey;
      return $this;
    }

}
