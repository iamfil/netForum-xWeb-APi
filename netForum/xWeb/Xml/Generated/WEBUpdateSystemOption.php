<?php

namespace netForum\xWeb\Xml\Generated;

class WEBUpdateSystemOption
{

    /**
     * @var string $szOptionName
     */
    protected $szOptionName = null;

    /**
     * @var string $szOptionValue
     */
    protected $szOptionValue = null;

    /**
     * @param string $szOptionName
     * @param string $szOptionValue
     */
    public function __construct($szOptionName, $szOptionValue)
    {
      $this->szOptionName = $szOptionName;
      $this->szOptionValue = $szOptionValue;
    }

    /**
     * @return string
     */
    public function getSzOptionName()
    {
      return $this->szOptionName;
    }

    /**
     * @param string $szOptionName
     * @return \netForum\xWeb\Xml\Generated\WEBUpdateSystemOption
     */
    public function setSzOptionName($szOptionName)
    {
      $this->szOptionName = $szOptionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzOptionValue()
    {
      return $this->szOptionValue;
    }

    /**
     * @param string $szOptionValue
     * @return \netForum\xWeb\Xml\Generated\WEBUpdateSystemOption
     */
    public function setSzOptionValue($szOptionValue)
    {
      $this->szOptionValue = $szOptionValue;
      return $this;
    }

}
