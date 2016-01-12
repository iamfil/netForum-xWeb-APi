<?php

namespace netForum\xWeb\Xml\Generated;

class AVFormDataInterface
{

    /**
     * @var string $InsertMethod
     */
    protected $InsertMethod = null;

    /**
     * @var string $UpdateMethod
     */
    protected $UpdateMethod = null;

    /**
     * @var string $SelectMethod
     */
    protected $SelectMethod = null;

    /**
     * @var string $RefreshMethod
     */
    protected $RefreshMethod = null;

    /**
     * @var string $DeleteMethod
     */
    protected $DeleteMethod = null;

    /**
     * @var string $ServiceUrl
     */
    protected $ServiceUrl = null;

    /**
     * @param string $ServiceUrl
     */
    public function __construct($ServiceUrl)
    {
      $this->ServiceUrl = $ServiceUrl;
    }

    /**
     * @return string
     */
    public function getInsertMethod()
    {
      return $this->InsertMethod;
    }

    /**
     * @param string $InsertMethod
     * @return \netForum\xWeb\Xml\Generated\AVFormDataInterface
     */
    public function setInsertMethod($InsertMethod)
    {
      $this->InsertMethod = $InsertMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdateMethod()
    {
      return $this->UpdateMethod;
    }

    /**
     * @param string $UpdateMethod
     * @return \netForum\xWeb\Xml\Generated\AVFormDataInterface
     */
    public function setUpdateMethod($UpdateMethod)
    {
      $this->UpdateMethod = $UpdateMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getSelectMethod()
    {
      return $this->SelectMethod;
    }

    /**
     * @param string $SelectMethod
     * @return \netForum\xWeb\Xml\Generated\AVFormDataInterface
     */
    public function setSelectMethod($SelectMethod)
    {
      $this->SelectMethod = $SelectMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefreshMethod()
    {
      return $this->RefreshMethod;
    }

    /**
     * @param string $RefreshMethod
     * @return \netForum\xWeb\Xml\Generated\AVFormDataInterface
     */
    public function setRefreshMethod($RefreshMethod)
    {
      $this->RefreshMethod = $RefreshMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeleteMethod()
    {
      return $this->DeleteMethod;
    }

    /**
     * @param string $DeleteMethod
     * @return \netForum\xWeb\Xml\Generated\AVFormDataInterface
     */
    public function setDeleteMethod($DeleteMethod)
    {
      $this->DeleteMethod = $DeleteMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceUrl()
    {
      return $this->ServiceUrl;
    }

    /**
     * @param string $ServiceUrl
     * @return \netForum\xWeb\Xml\Generated\AVFormDataInterface
     */
    public function setServiceUrl($ServiceUrl)
    {
      $this->ServiceUrl = $ServiceUrl;
      return $this;
    }

}
