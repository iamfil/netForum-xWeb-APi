<?php

namespace netForum\xWeb\Xml\Generated;

class AVFormAction
{

    /**
     * @var ActionType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $Exit
     */
    protected $Exit = null;

    /**
     * @var string $DestinationWizardFormKey
     */
    protected $DestinationWizardFormKey = null;

    /**
     * @param ActionType $Type
     * @param boolean $Exit
     */
    public function __construct($Type, $Exit)
    {
      $this->Type = $Type;
      $this->Exit = $Exit;
    }

    /**
     * @return ActionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ActionType $Type
     * @return \netForum\xWeb\Xml\Generated\AVFormAction
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExit()
    {
      return $this->Exit;
    }

    /**
     * @param boolean $Exit
     * @return \netForum\xWeb\Xml\Generated\AVFormAction
     */
    public function setExit($Exit)
    {
      $this->Exit = $Exit;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationWizardFormKey()
    {
      return $this->DestinationWizardFormKey;
    }

    /**
     * @param string $DestinationWizardFormKey
     * @return \netForum\xWeb\Xml\Generated\AVFormAction
     */
    public function setDestinationWizardFormKey($DestinationWizardFormKey)
    {
      $this->DestinationWizardFormKey = $DestinationWizardFormKey;
      return $this;
    }

}
