<?php

namespace netForum\xWeb\Xml\Generated;

class WEBWebUserChangePassword
{

    /**
     * @var string $recno
     */
    protected $recno = null;

    /**
     * @var string $oldPassword
     */
    protected $oldPassword = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param string $recno
     * @param string $oldPassword
     * @param string $newPassword
     */
    public function __construct($recno, $oldPassword, $newPassword)
    {
      $this->recno = $recno;
      $this->oldPassword = $oldPassword;
      $this->newPassword = $newPassword;
    }

    /**
     * @return string
     */
    public function getRecno()
    {
      return $this->recno;
    }

    /**
     * @param string $recno
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserChangePassword
     */
    public function setRecno($recno)
    {
      $this->recno = $recno;
      return $this;
    }

    /**
     * @return string
     */
    public function getOldPassword()
    {
      return $this->oldPassword;
    }

    /**
     * @param string $oldPassword
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserChangePassword
     */
    public function setOldPassword($oldPassword)
    {
      $this->oldPassword = $oldPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \netForum\xWeb\Xml\Generated\WEBWebUserChangePassword
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

}
