<?php

namespace netForum\xWeb\Xml\Generated;

class GetAudienceDefinition
{

    /**
     * @var string $qrh_key
     */
    protected $qrh_key = null;

    /**
     * @param string $qrh_key
     */
    public function __construct($qrh_key)
    {
      $this->qrh_key = $qrh_key;
    }

    /**
     * @return string
     */
    public function getQrh_key()
    {
      return $this->qrh_key;
    }

    /**
     * @param string $qrh_key
     * @return \netForum\xWeb\Xml\Generated\GetAudienceDefinition
     */
    public function setQrh_key($qrh_key)
    {
      $this->qrh_key = $qrh_key;
      return $this;
    }

}
