<?php

namespace netForum\xWeb\Xml\Generated;

class AVForm
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
     * @var boolean $DisplayOnly
     */
    protected $DisplayOnly = null;

    /**
     * @var ArrayOfAVFormControl $Controls
     */
    protected $Controls = null;

    /**
     * @var ArrayOfAVFormAction $Actions
     */
    protected $Actions = null;

    /**
     * @var AVFormDataInterface $Interface
     */
    protected $Interface = null;

    /**
     * @param guid $ObjectKey
     * @param boolean $DisplayOnly
     */
    public function __construct($ObjectKey, $DisplayOnly)
    {
      $this->ObjectKey = $ObjectKey;
      $this->DisplayOnly = $DisplayOnly;
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
     * @return \netForum\xWeb\Xml\Generated\AVForm
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
     * @return \netForum\xWeb\Xml\Generated\AVForm
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
     * @return \netForum\xWeb\Xml\Generated\AVForm
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
     * @return \netForum\xWeb\Xml\Generated\AVForm
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
     * @return \netForum\xWeb\Xml\Generated\AVForm
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
     * @return \netForum\xWeb\Xml\Generated\AVForm
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayOnly()
    {
      return $this->DisplayOnly;
    }

    /**
     * @param boolean $DisplayOnly
     * @return \netForum\xWeb\Xml\Generated\AVForm
     */
    public function setDisplayOnly($DisplayOnly)
    {
      $this->DisplayOnly = $DisplayOnly;
      return $this;
    }

    /**
     * @return ArrayOfAVFormControl
     */
    public function getControls()
    {
      return $this->Controls;
    }

    /**
     * @param ArrayOfAVFormControl $Controls
     * @return \netForum\xWeb\Xml\Generated\AVForm
     */
    public function setControls($Controls)
    {
      $this->Controls = $Controls;
      return $this;
    }

    /**
     * @return ArrayOfAVFormAction
     */
    public function getActions()
    {
      return $this->Actions;
    }

    /**
     * @param ArrayOfAVFormAction $Actions
     * @return \netForum\xWeb\Xml\Generated\AVForm
     */
    public function setActions($Actions)
    {
      $this->Actions = $Actions;
      return $this;
    }

    /**
     * @return AVFormDataInterface
     */
    public function getInterface()
    {
      return $this->Interface;
    }

    /**
     * @param AVFormDataInterface $Interface
     * @return \netForum\xWeb\Xml\Generated\AVForm
     */
    public function setInterface($Interface)
    {
      $this->Interface = $Interface;
      return $this;
    }

}
