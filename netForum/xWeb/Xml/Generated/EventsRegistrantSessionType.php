<?php

namespace netForum\xWeb\Xml\Generated;

class EventsRegistrantSessionType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var EventsRegistrantSession_ev_registration_session_DataObjectType $ev_registration_session
     */
    protected $ev_registration_session = null;

    /**
     * @var EventsRegistrantSession_ev_registration_DataObjectType $ev_registration
     */
    protected $ev_registration = null;

    /**
     * @var EventsRegistrantSession_ev_session_DataObjectType $ev_session
     */
    protected $ev_session = null;

    /**
     * @var EventsRegistrantSession_ev_track_DataObjectType $ev_track
     */
    protected $ev_track = null;

    /**
     * @var EventsRegistrantSession_co_customer_DataObjectType $co_customer
     */
    protected $co_customer = null;

    /**
     * @var EventsRegistrantSession_ev_event_DataObjectType $ev_event
     */
    protected $ev_event = null;

    /**
     * @param EventsRegistrantSession_ev_registration_session_DataObjectType $ev_registration_session
     * @param EventsRegistrantSession_ev_registration_DataObjectType $ev_registration
     * @param EventsRegistrantSession_ev_session_DataObjectType $ev_session
     * @param EventsRegistrantSession_ev_track_DataObjectType $ev_track
     * @param EventsRegistrantSession_co_customer_DataObjectType $co_customer
     * @param EventsRegistrantSession_ev_event_DataObjectType $ev_event
     */
    public function __construct($ev_registration_session, $ev_registration, $ev_session, $ev_track, $co_customer, $ev_event)
    {
      $this->ev_registration_session = $ev_registration_session;
      $this->ev_registration = $ev_registration;
      $this->ev_session = $ev_session;
      $this->ev_track = $ev_track;
      $this->co_customer = $co_customer;
      $this->ev_event = $ev_event;
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
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return EventsRegistrantSession_ev_registration_session_DataObjectType
     */
    public function getEv_registration_session()
    {
      return $this->ev_registration_session;
    }

    /**
     * @param EventsRegistrantSession_ev_registration_session_DataObjectType $ev_registration_session
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setEv_registration_session($ev_registration_session)
    {
      $this->ev_registration_session = $ev_registration_session;
      return $this;
    }

    /**
     * @return EventsRegistrantSession_ev_registration_DataObjectType
     */
    public function getEv_registration()
    {
      return $this->ev_registration;
    }

    /**
     * @param EventsRegistrantSession_ev_registration_DataObjectType $ev_registration
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setEv_registration($ev_registration)
    {
      $this->ev_registration = $ev_registration;
      return $this;
    }

    /**
     * @return EventsRegistrantSession_ev_session_DataObjectType
     */
    public function getEv_session()
    {
      return $this->ev_session;
    }

    /**
     * @param EventsRegistrantSession_ev_session_DataObjectType $ev_session
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setEv_session($ev_session)
    {
      $this->ev_session = $ev_session;
      return $this;
    }

    /**
     * @return EventsRegistrantSession_ev_track_DataObjectType
     */
    public function getEv_track()
    {
      return $this->ev_track;
    }

    /**
     * @param EventsRegistrantSession_ev_track_DataObjectType $ev_track
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setEv_track($ev_track)
    {
      $this->ev_track = $ev_track;
      return $this;
    }

    /**
     * @return EventsRegistrantSession_co_customer_DataObjectType
     */
    public function getCo_customer()
    {
      return $this->co_customer;
    }

    /**
     * @param EventsRegistrantSession_co_customer_DataObjectType $co_customer
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setCo_customer($co_customer)
    {
      $this->co_customer = $co_customer;
      return $this;
    }

    /**
     * @return EventsRegistrantSession_ev_event_DataObjectType
     */
    public function getEv_event()
    {
      return $this->ev_event;
    }

    /**
     * @param EventsRegistrantSession_ev_event_DataObjectType $ev_event
     * @return \netForum\xWeb\Xml\Generated\EventsRegistrantSessionType
     */
    public function setEv_event($ev_event)
    {
      $this->ev_event = $ev_event;
      return $this;
    }

}
