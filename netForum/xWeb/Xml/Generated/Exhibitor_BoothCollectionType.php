<?php

namespace netForum\xWeb\Xml\Generated;

class Exhibitor_BoothCollectionType
{

    /**
     * @var ExhibitorBoothNewType[] $ExhibitorBoothNew
     */
    protected $ExhibitorBoothNew = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExhibitorBoothNewType[]
     */
    public function getExhibitorBoothNew()
    {
      return $this->ExhibitorBoothNew;
    }

    /**
     * @param ExhibitorBoothNewType[] $ExhibitorBoothNew
     * @return \netForum\xWeb\Xml\Generated\Exhibitor_BoothCollectionType
     */
    public function setExhibitorBoothNew(array $ExhibitorBoothNew = null)
    {
      $this->ExhibitorBoothNew = $ExhibitorBoothNew;
      return $this;
    }

}
