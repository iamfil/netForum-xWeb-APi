<?php

namespace netForum\xWeb\Xml\Generated;

class RegistrantCollectionType
{

    /**
     * @var EventsRegistrantType[] $EventsRegistrant
     */
    protected $EventsRegistrant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EventsRegistrantType[]
     */
    public function getEventsRegistrant()
    {
      return $this->EventsRegistrant;
    }

    /**
     * @param EventsRegistrantType[] $EventsRegistrant
     * @return \netForum\xWeb\Xml\Generated\RegistrantCollectionType
     */
    public function setEventsRegistrant(array $EventsRegistrant = null)
    {
      $this->EventsRegistrant = $EventsRegistrant;
      return $this;
    }

}
