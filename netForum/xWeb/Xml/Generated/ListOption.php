<?php

namespace netForum\xWeb\Xml\Generated;

class ListOption
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
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
     * @return \netForum\xWeb\Xml\Generated\ListOption
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \netForum\xWeb\Xml\Generated\ListOption
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
