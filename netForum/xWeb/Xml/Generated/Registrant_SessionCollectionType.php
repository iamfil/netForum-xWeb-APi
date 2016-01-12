<?php

namespace netForum\xWeb\Xml\Generated;

class Registrant_SessionCollectionType
{

    /**
     * @var EventsRegistrantSessionType[] $EventsRegistrantSession
     */
    protected $EventsRegistrantSession = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EventsRegistrantSessionType[]
     */
    public function getEventsRegistrantSession()
    {
      return $this->EventsRegistrantSession;
    }

    /**
     * @param EventsRegistrantSessionType[] $EventsRegistrantSession
     * @return \netForum\xWeb\Xml\Generated\Registrant_SessionCollectionType
     */
    public function setEventsRegistrantSession(array $EventsRegistrantSession = null)
    {
      $this->EventsRegistrantSession = $EventsRegistrantSession;
      return $this;
    }

}
