<?php

namespace netForum\xWeb\Xml\Generated;

class InsertActionSubType
{

    /**
     * @var guid $actionTypeKey
     */
    protected $actionTypeKey = null;

    /**
     * @var string $actionCode
     */
    protected $actionCode = null;

    /**
     * @param guid $actionTypeKey
     * @param string $actionCode
     */
    public function __construct($actionTypeKey, $actionCode)
    {
      $this->actionTypeKey = $actionTypeKey;
      $this->actionCode = $actionCode;
    }

    /**
     * @return guid
     */
    public function getActionTypeKey()
    {
      return $this->actionTypeKey;
    }

    /**
     * @param guid $actionTypeKey
     * @return \netForum\xWeb\Xml\Generated\InsertActionSubType
     */
    public function setActionTypeKey($actionTypeKey)
    {
      $this->actionTypeKey = $actionTypeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionCode()
    {
      return $this->actionCode;
    }

    /**
     * @param string $actionCode
     * @return \netForum\xWeb\Xml\Generated\InsertActionSubType
     */
    public function setActionCode($actionCode)
    {
      $this->actionCode = $actionCode;
      return $this;
    }

}
