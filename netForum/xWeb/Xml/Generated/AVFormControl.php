<?php

namespace netForum\xWeb\Xml\Generated;

class AVFormControl extends DesignedFormControl
{

    /**
     * @var string $Caption
     */
    protected $Caption = null;

    /**
     * @var string $DataObject
     */
    protected $DataObject = null;

    /**
     * @var ArrayOfAvailableValue $AvailableValues
     */
    protected $AvailableValues = null;

    /**
     * @var ArrayOfString $DependantControls
     */
    protected $DependantControls = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var boolean $IsRequired
     */
    protected $IsRequired = null;

    /**
     * @var boolean $IsReadOnly
     */
    protected $IsReadOnly = null;

    /**
     * @var boolean $IsInvisible
     */
    protected $IsInvisible = null;

    /**
     * @var string $DefaultValue
     */
    protected $DefaultValue = null;

    /**
     * @var string $InputMask
     */
    protected $InputMask = null;

    /**
     * @var boolean $CausesAutoPostBack
     */
    protected $CausesAutoPostBack = null;

    /**
     * @var string $GroupingTag
     */
    protected $GroupingTag = null;

    /**
     * @var int $Left
     */
    protected $Left = null;

    /**
     * @var int $Top
     */
    protected $Top = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @param boolean $IsRequired
     * @param boolean $IsReadOnly
     * @param boolean $IsInvisible
     * @param boolean $CausesAutoPostBack
     * @param int $Left
     * @param int $Top
     * @param int $Height
     * @param int $Width
     */
    public function __construct($IsRequired, $IsReadOnly, $IsInvisible, $CausesAutoPostBack, $Left, $Top, $Height, $Width)
    {
      $this->IsRequired = $IsRequired;
      $this->IsReadOnly = $IsReadOnly;
      $this->IsInvisible = $IsInvisible;
      $this->CausesAutoPostBack = $CausesAutoPostBack;
      $this->Left = $Left;
      $this->Top = $Top;
      $this->Height = $Height;
      $this->Width = $Width;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
      return $this->Caption;
    }

    /**
     * @param string $Caption
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setCaption($Caption)
    {
      $this->Caption = $Caption;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataObject()
    {
      return $this->DataObject;
    }

    /**
     * @param string $DataObject
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setDataObject($DataObject)
    {
      $this->DataObject = $DataObject;
      return $this;
    }

    /**
     * @return ArrayOfAvailableValue
     */
    public function getAvailableValues()
    {
      return $this->AvailableValues;
    }

    /**
     * @param ArrayOfAvailableValue $AvailableValues
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setAvailableValues($AvailableValues)
    {
      $this->AvailableValues = $AvailableValues;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDependantControls()
    {
      return $this->DependantControls;
    }

    /**
     * @param ArrayOfString $DependantControls
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setDependantControls($DependantControls)
    {
      $this->DependantControls = $DependantControls;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRequired()
    {
      return $this->IsRequired;
    }

    /**
     * @param boolean $IsRequired
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setIsRequired($IsRequired)
    {
      $this->IsRequired = $IsRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReadOnly()
    {
      return $this->IsReadOnly;
    }

    /**
     * @param boolean $IsReadOnly
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setIsReadOnly($IsReadOnly)
    {
      $this->IsReadOnly = $IsReadOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInvisible()
    {
      return $this->IsInvisible;
    }

    /**
     * @param boolean $IsInvisible
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setIsInvisible($IsInvisible)
    {
      $this->IsInvisible = $IsInvisible;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
      return $this->DefaultValue;
    }

    /**
     * @param string $DefaultValue
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setDefaultValue($DefaultValue)
    {
      $this->DefaultValue = $DefaultValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getInputMask()
    {
      return $this->InputMask;
    }

    /**
     * @param string $InputMask
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setInputMask($InputMask)
    {
      $this->InputMask = $InputMask;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCausesAutoPostBack()
    {
      return $this->CausesAutoPostBack;
    }

    /**
     * @param boolean $CausesAutoPostBack
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setCausesAutoPostBack($CausesAutoPostBack)
    {
      $this->CausesAutoPostBack = $CausesAutoPostBack;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupingTag()
    {
      return $this->GroupingTag;
    }

    /**
     * @param string $GroupingTag
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setGroupingTag($GroupingTag)
    {
      $this->GroupingTag = $GroupingTag;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeft()
    {
      return $this->Left;
    }

    /**
     * @param int $Left
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setLeft($Left)
    {
      $this->Left = $Left;
      return $this;
    }

    /**
     * @return int
     */
    public function getTop()
    {
      return $this->Top;
    }

    /**
     * @param int $Top
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setTop($Top)
    {
      $this->Top = $Top;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \netForum\xWeb\Xml\Generated\AVFormControl
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}
