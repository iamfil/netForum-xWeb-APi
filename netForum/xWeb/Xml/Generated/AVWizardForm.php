<?php

namespace netForum\xWeb\Xml\Generated;

class AVWizardForm
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Header
     */
    protected $Header = null;

    /**
     * @var guid $ObjectKey
     */
    protected $ObjectKey = null;

    /**
     * @var string $ObjectName
     */
    protected $ObjectName = null;

    /**
     * @var string $ObjectPrefix
     */
    protected $ObjectPrefix = null;

    /**
     * @var string $ObjectType
     */
    protected $ObjectType = null;

    /**
     * @var string $ProgressBarTitle
     */
    protected $ProgressBarTitle = null;

    /**
     * @var string $StepTitle
     */
    protected $StepTitle = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @param guid $ObjectKey
     * @param int $Order
     */
    public function __construct($ObjectKey, $Order)
    {
      $this->ObjectKey = $ObjectKey;
      $this->Order = $Order;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param string $Header
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return guid
     */
    public function getObjectKey()
    {
      return $this->ObjectKey;
    }

    /**
     * @param guid $ObjectKey
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setObjectKey($ObjectKey)
    {
      $this->ObjectKey = $ObjectKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectName()
    {
      return $this->ObjectName;
    }

    /**
     * @param string $ObjectName
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setObjectName($ObjectName)
    {
      $this->ObjectName = $ObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectPrefix()
    {
      return $this->ObjectPrefix;
    }

    /**
     * @param string $ObjectPrefix
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setObjectPrefix($ObjectPrefix)
    {
      $this->ObjectPrefix = $ObjectPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
      return $this->ObjectType;
    }

    /**
     * @param string $ObjectType
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgressBarTitle()
    {
      return $this->ProgressBarTitle;
    }

    /**
     * @param string $ProgressBarTitle
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setProgressBarTitle($ProgressBarTitle)
    {
      $this->ProgressBarTitle = $ProgressBarTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getStepTitle()
    {
      return $this->StepTitle;
    }

    /**
     * @param string $StepTitle
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setStepTitle($StepTitle)
    {
      $this->StepTitle = $StepTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return \netForum\xWeb\Xml\Generated\AVWizardForm
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
