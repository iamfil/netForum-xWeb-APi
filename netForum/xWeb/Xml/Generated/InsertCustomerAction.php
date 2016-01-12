<?php

namespace netForum\xWeb\Xml\Generated;

class InsertCustomerAction
{

    /**
     * @var guid $actionCustomerKey
     */
    protected $actionCustomerKey = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var guid $actionTypeKey
     */
    protected $actionTypeKey = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var \DateTime $actionDate
     */
    protected $actionDate = null;

    /**
     * @var ArrayOfGuid $actionSubtypeList
     */
    protected $actionSubtypeList = null;

    /**
     * @param guid $actionCustomerKey
     * @param string $action
     * @param guid $actionTypeKey
     * @param string $source
     * @param \DateTime $actionDate
     * @param ArrayOfGuid $actionSubtypeList
     */
    public function __construct($actionCustomerKey, $action, $actionTypeKey, $source, \DateTime $actionDate, $actionSubtypeList)
    {
      $this->actionCustomerKey = $actionCustomerKey;
      $this->action = $action;
      $this->actionTypeKey = $actionTypeKey;
      $this->source = $source;
      $this->actionDate = $actionDate->format(\DateTime::ATOM);
      $this->actionSubtypeList = $actionSubtypeList;
    }

    /**
     * @return guid
     */
    public function getActionCustomerKey()
    {
      return $this->actionCustomerKey;
    }

    /**
     * @param guid $actionCustomerKey
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerAction
     */
    public function setActionCustomerKey($actionCustomerKey)
    {
      $this->actionCustomerKey = $actionCustomerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param string $action
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerAction
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerAction
     */
    public function setActionTypeKey($actionTypeKey)
    {
      $this->actionTypeKey = $actionTypeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerAction
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActionDate()
    {
      if ($this->actionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->actionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $actionDate
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerAction
     */
    public function setActionDate(\DateTime $actionDate)
    {
      $this->actionDate = $actionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfGuid
     */
    public function getActionSubtypeList()
    {
      return $this->actionSubtypeList;
    }

    /**
     * @param ArrayOfGuid $actionSubtypeList
     * @return \netForum\xWeb\Xml\Generated\InsertCustomerAction
     */
    public function setActionSubtypeList($actionSubtypeList)
    {
      $this->actionSubtypeList = $actionSubtypeList;
      return $this;
    }

}
