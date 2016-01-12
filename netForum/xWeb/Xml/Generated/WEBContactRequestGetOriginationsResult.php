<?php

namespace netForum\xWeb\Xml\Generated;

class WEBContactRequestGetOriginationsResult
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \netForum\xWeb\Xml\Generated\WEBContactRequestGetOriginationsResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
