<?php

namespace netForum\xWeb\Xml\Generated;

class Fees
{

    /**
     * @var Fee[] $Fee
     */
    protected $Fee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Fee[]
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param Fee[] $Fee
     * @return \netForum\xWeb\Xml\Generated\Fees
     */
    public function setFee(array $Fee = null)
    {
      $this->Fee = $Fee;
      return $this;
    }

}
