<?php

namespace netForum\xWeb\Xml\Generated;

class CommitteeType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var Committee_Committee_DataObjectType $Committee
     */
    protected $Committee = null;

    /**
     * @var Committee_Parent_Committee_DataObjectType $Parent_Committee
     */
    protected $Parent_Committee = null;

    /**
     * @var Committee_Customer_DataObjectType $Customer
     */
    protected $Customer = null;

    /**
     * @var Committee_Committee_Participant_DataObjectType $Committee_Participant
     */
    protected $Committee_Participant = null;

    /**
     * @param Committee_Committee_DataObjectType $Committee
     * @param Committee_Parent_Committee_DataObjectType $Parent_Committee
     * @param Committee_Customer_DataObjectType $Customer
     * @param Committee_Committee_Participant_DataObjectType $Committee_Participant
     */
    public function __construct($Committee, $Parent_Committee, $Customer, $Committee_Participant)
    {
      $this->Committee = $Committee;
      $this->Parent_Committee = $Parent_Committee;
      $this->Customer = $Customer;
      $this->Committee_Participant = $Committee_Participant;
    }

    /**
     * @return av_key_Type
     */
    public function getCurrentKey()
    {
      return $this->CurrentKey;
    }

    /**
     * @param av_key_Type $CurrentKey
     * @return \netForum\xWeb\Xml\Generated\CommitteeType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return Committee_Committee_DataObjectType
     */
    public function getCommittee()
    {
      return $this->Committee;
    }

    /**
     * @param Committee_Committee_DataObjectType $Committee
     * @return \netForum\xWeb\Xml\Generated\CommitteeType
     */
    public function setCommittee($Committee)
    {
      $this->Committee = $Committee;
      return $this;
    }

    /**
     * @return Committee_Parent_Committee_DataObjectType
     */
    public function getParent_Committee()
    {
      return $this->Parent_Committee;
    }

    /**
     * @param Committee_Parent_Committee_DataObjectType $Parent_Committee
     * @return \netForum\xWeb\Xml\Generated\CommitteeType
     */
    public function setParent_Committee($Parent_Committee)
    {
      $this->Parent_Committee = $Parent_Committee;
      return $this;
    }

    /**
     * @return Committee_Customer_DataObjectType
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Committee_Customer_DataObjectType $Customer
     * @return \netForum\xWeb\Xml\Generated\CommitteeType
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return Committee_Committee_Participant_DataObjectType
     */
    public function getCommittee_Participant()
    {
      return $this->Committee_Participant;
    }

    /**
     * @param Committee_Committee_Participant_DataObjectType $Committee_Participant
     * @return \netForum\xWeb\Xml\Generated\CommitteeType
     */
    public function setCommittee_Participant($Committee_Participant)
    {
      $this->Committee_Participant = $Committee_Participant;
      return $this;
    }

}
