<?php

namespace netForum\xWeb\Xml\Generated;

class CommitteeNominationsType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var CommitteeNominations_Nominations_DataObjectType $Nominations
     */
    protected $Nominations = null;

    /**
     * @var CommitteeNominations_Nominee_DataObjectType $Nominee
     */
    protected $Nominee = null;

    /**
     * @var CommitteeNominations_Nominated_By_DataObjectType $Nominated_By
     */
    protected $Nominated_By = null;

    /**
     * @var CommitteeNominations_Committee_DataObjectType $Committee
     */
    protected $Committee = null;

    /**
     * @var CommitteeNominations_Committee_Nomination_Status_DataObjectType $Committee_Nomination_Status
     */
    protected $Committee_Nomination_Status = null;

    /**
     * @var CommitteeNominations_Committee_Position_DataObjectType $Committee_Position
     */
    protected $Committee_Position = null;

    /**
     * @var CommitteeNominations_Committee_Position_Codes_DataObjectType $Committee_Position_Codes
     */
    protected $Committee_Position_Codes = null;

    /**
     * @var CommitteeNominations_Address_DataObjectType $Address
     */
    protected $Address = null;

    /**
     * @var CommitteeNominations_Individual_DataObjectType $Individual
     */
    protected $Individual = null;

    /**
     * @param CommitteeNominations_Nominations_DataObjectType $Nominations
     * @param CommitteeNominations_Nominee_DataObjectType $Nominee
     * @param CommitteeNominations_Nominated_By_DataObjectType $Nominated_By
     * @param CommitteeNominations_Committee_DataObjectType $Committee
     * @param CommitteeNominations_Committee_Nomination_Status_DataObjectType $Committee_Nomination_Status
     * @param CommitteeNominations_Committee_Position_DataObjectType $Committee_Position
     * @param CommitteeNominations_Committee_Position_Codes_DataObjectType $Committee_Position_Codes
     * @param CommitteeNominations_Address_DataObjectType $Address
     * @param CommitteeNominations_Individual_DataObjectType $Individual
     */
    public function __construct($Nominations, $Nominee, $Nominated_By, $Committee, $Committee_Nomination_Status, $Committee_Position, $Committee_Position_Codes, $Address, $Individual)
    {
      $this->Nominations = $Nominations;
      $this->Nominee = $Nominee;
      $this->Nominated_By = $Nominated_By;
      $this->Committee = $Committee;
      $this->Committee_Nomination_Status = $Committee_Nomination_Status;
      $this->Committee_Position = $Committee_Position;
      $this->Committee_Position_Codes = $Committee_Position_Codes;
      $this->Address = $Address;
      $this->Individual = $Individual;
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
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return CommitteeNominations_Nominations_DataObjectType
     */
    public function getNominations()
    {
      return $this->Nominations;
    }

    /**
     * @param CommitteeNominations_Nominations_DataObjectType $Nominations
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setNominations($Nominations)
    {
      $this->Nominations = $Nominations;
      return $this;
    }

    /**
     * @return CommitteeNominations_Nominee_DataObjectType
     */
    public function getNominee()
    {
      return $this->Nominee;
    }

    /**
     * @param CommitteeNominations_Nominee_DataObjectType $Nominee
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setNominee($Nominee)
    {
      $this->Nominee = $Nominee;
      return $this;
    }

    /**
     * @return CommitteeNominations_Nominated_By_DataObjectType
     */
    public function getNominated_By()
    {
      return $this->Nominated_By;
    }

    /**
     * @param CommitteeNominations_Nominated_By_DataObjectType $Nominated_By
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setNominated_By($Nominated_By)
    {
      $this->Nominated_By = $Nominated_By;
      return $this;
    }

    /**
     * @return CommitteeNominations_Committee_DataObjectType
     */
    public function getCommittee()
    {
      return $this->Committee;
    }

    /**
     * @param CommitteeNominations_Committee_DataObjectType $Committee
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setCommittee($Committee)
    {
      $this->Committee = $Committee;
      return $this;
    }

    /**
     * @return CommitteeNominations_Committee_Nomination_Status_DataObjectType
     */
    public function getCommittee_Nomination_Status()
    {
      return $this->Committee_Nomination_Status;
    }

    /**
     * @param CommitteeNominations_Committee_Nomination_Status_DataObjectType $Committee_Nomination_Status
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setCommittee_Nomination_Status($Committee_Nomination_Status)
    {
      $this->Committee_Nomination_Status = $Committee_Nomination_Status;
      return $this;
    }

    /**
     * @return CommitteeNominations_Committee_Position_DataObjectType
     */
    public function getCommittee_Position()
    {
      return $this->Committee_Position;
    }

    /**
     * @param CommitteeNominations_Committee_Position_DataObjectType $Committee_Position
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setCommittee_Position($Committee_Position)
    {
      $this->Committee_Position = $Committee_Position;
      return $this;
    }

    /**
     * @return CommitteeNominations_Committee_Position_Codes_DataObjectType
     */
    public function getCommittee_Position_Codes()
    {
      return $this->Committee_Position_Codes;
    }

    /**
     * @param CommitteeNominations_Committee_Position_Codes_DataObjectType $Committee_Position_Codes
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setCommittee_Position_Codes($Committee_Position_Codes)
    {
      $this->Committee_Position_Codes = $Committee_Position_Codes;
      return $this;
    }

    /**
     * @return CommitteeNominations_Address_DataObjectType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param CommitteeNominations_Address_DataObjectType $Address
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return CommitteeNominations_Individual_DataObjectType
     */
    public function getIndividual()
    {
      return $this->Individual;
    }

    /**
     * @param CommitteeNominations_Individual_DataObjectType $Individual
     * @return \netForum\xWeb\Xml\Generated\CommitteeNominationsType
     */
    public function setIndividual($Individual)
    {
      $this->Individual = $Individual;
      return $this;
    }

}
