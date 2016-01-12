<?php

namespace netForum\xWeb\Xml\Generated;

class Group_RegistrantionCollectionType
{

    /**
     * @var EventsRegistrantGroupType[] $EventsRegistrantGroup
     */
    protected $EventsRegistrantGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EventsRegistrantGroupType[]
     */
    public function getEventsRegistrantGroup()
    {
      return $this->EventsRegistrantGroup;
    }

    /**
     * @param EventsRegistrantGroupType[] $EventsRegistrantGroup
     * @return \netForum\xWeb\Xml\Generated\Group_RegistrantionCollectionType
     */
    public function setEventsRegistrantGroup(array $EventsRegistrantGroup = null)
    {
      $this->EventsRegistrantGroup = $EventsRegistrantGroup;
      return $this;
    }

}
