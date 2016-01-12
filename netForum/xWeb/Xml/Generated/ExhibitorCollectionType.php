<?php

namespace netForum\xWeb\Xml\Generated;

class ExhibitorCollectionType
{

    /**
     * @var ExhibitorNewType[] $ExhibitorNew
     */
    protected $ExhibitorNew = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExhibitorNewType[]
     */
    public function getExhibitorNew()
    {
      return $this->ExhibitorNew;
    }

    /**
     * @param ExhibitorNewType[] $ExhibitorNew
     * @return \netForum\xWeb\Xml\Generated\ExhibitorCollectionType
     */
    public function setExhibitorNew(array $ExhibitorNew = null)
    {
      $this->ExhibitorNew = $ExhibitorNew;
      return $this;
    }

}
