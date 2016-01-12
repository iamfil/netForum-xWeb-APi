<?php

namespace netForum\xWeb\Xml\Generated;

class GetIndividualInformation
{

    /**
     * @var string $IndividualKey
     */
    protected $IndividualKey = null;

    /**
     * @param string $IndividualKey
     */
    public function __construct($IndividualKey)
    {
      $this->IndividualKey = $IndividualKey;
    }

    /**
     * @return string
     */
    public function getIndividualKey()
    {
      return $this->IndividualKey;
    }

    /**
     * @param string $IndividualKey
     * @return \netForum\xWeb\Xml\Generated\GetIndividualInformation
     */
    public function setIndividualKey($IndividualKey)
    {
      $this->IndividualKey = $IndividualKey;
      return $this;
    }

}
