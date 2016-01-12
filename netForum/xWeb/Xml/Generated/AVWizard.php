<?php

namespace netForum\xWeb\Xml\Generated;

class AVWizard
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

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
     * @var ArrayOfAVWizardForm $Forms
     */
    protected $Forms = null;

    /**
     * @param guid $ObjectKey
     */
    public function __construct($ObjectKey)
    {
      $this->ObjectKey = $ObjectKey;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \netForum\xWeb\Xml\Generated\AVWizard
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \netForum\xWeb\Xml\Generated\AVWizard
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \netForum\xWeb\Xml\Generated\AVWizard
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
     * @return \netForum\xWeb\Xml\Generated\AVWizard
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
     * @return \netForum\xWeb\Xml\Generated\AVWizard
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
     * @return \netForum\xWeb\Xml\Generated\AVWizard
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

    /**
     * @return ArrayOfAVWizardForm
     */
    public function getForms()
    {
      return $this->Forms;
    }

    /**
     * @param ArrayOfAVWizardForm $Forms
     * @return \netForum\xWeb\Xml\Generated\AVWizard
     */
    public function setForms($Forms)
    {
      $this->Forms = $Forms;
      return $this;
    }

}
