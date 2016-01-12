<?php

namespace netForum\xWeb\Xml\Generated;

class Parameter
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \netForum\xWeb\Xml\Generated\Parameter
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \netForum\xWeb\Xml\Generated\Parameter
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
