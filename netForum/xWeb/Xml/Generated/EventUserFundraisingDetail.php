<?php

namespace netForum\xWeb\Xml\Generated;

class EventUserFundraisingDetail
{

    /**
     * @var string $reg_fundraising_goal
     */
    protected $reg_fundraising_goal = null;

    /**
     * @var string $reg_fundraising_achieved
     */
    protected $reg_fundraising_achieved = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReg_fundraising_goal()
    {
      return $this->reg_fundraising_goal;
    }

    /**
     * @param string $reg_fundraising_goal
     * @return \netForum\xWeb\Xml\Generated\EventUserFundraisingDetail
     */
    public function setReg_fundraising_goal($reg_fundraising_goal)
    {
      $this->reg_fundraising_goal = $reg_fundraising_goal;
      return $this;
    }

    /**
     * @return string
     */
    public function getReg_fundraising_achieved()
    {
      return $this->reg_fundraising_achieved;
    }

    /**
     * @param string $reg_fundraising_achieved
     * @return \netForum\xWeb\Xml\Generated\EventUserFundraisingDetail
     */
    public function setReg_fundraising_achieved($reg_fundraising_achieved)
    {
      $this->reg_fundraising_achieved = $reg_fundraising_achieved;
      return $this;
    }

}
