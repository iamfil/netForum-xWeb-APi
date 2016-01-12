<?php

namespace netForum\xWeb\Xml\Generated;

class GetActionSubTypeList
{

    /**
     * @var guid $actionTypeKey
     */
    protected $actionTypeKey = null;

    /**
     * @param guid $actionTypeKey
     */
    public function __construct($actionTypeKey)
    {
      $this->actionTypeKey = $actionTypeKey;
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
     * @return \netForum\xWeb\Xml\Generated\GetActionSubTypeList
     */
    public function setActionTypeKey($actionTypeKey)
    {
      $this->actionTypeKey = $actionTypeKey;
      return $this;
    }

}
