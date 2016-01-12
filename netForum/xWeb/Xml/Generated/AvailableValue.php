<?php

namespace netForum\xWeb\Xml\Generated;

class AvailableValue
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param string $Value
     * @param string $Text
     */
    public function __construct($Value, $Text)
    {
      $this->Value = $Value;
      $this->Text = $Text;
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
     * @return \netForum\xWeb\Xml\Generated\AvailableValue
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
     * @return \netForum\xWeb\Xml\Generated\AvailableValue
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
