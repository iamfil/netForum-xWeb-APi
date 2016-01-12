<?php

namespace netForum\xWeb\Xml\Generated;

class GetDynamicQuery
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var string $szQueryName
     */
    protected $szQueryName = null;

    /**
     * @var string $WithDescriptions
     */
    protected $WithDescriptions = null;

    /**
     * @var ArrayOfParameter $Parameters
     */
    protected $Parameters = null;

    /**
     * @var int $currentPage
     */
    protected $currentPage = null;

    /**
     * @param string $szObjectName
     * @param string $szQueryName
     * @param string $WithDescriptions
     * @param ArrayOfParameter $Parameters
     * @param int $currentPage
     */
    public function __construct($szObjectName, $szQueryName, $WithDescriptions, $Parameters, $currentPage)
    {
      $this->szObjectName = $szObjectName;
      $this->szQueryName = $szQueryName;
      $this->WithDescriptions = $WithDescriptions;
      $this->Parameters = $Parameters;
      $this->currentPage = $currentPage;
    }

    /**
     * @return string
     */
    public function getSzObjectName()
    {
      return $this->szObjectName;
    }

    /**
     * @param string $szObjectName
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQuery
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzQueryName()
    {
      return $this->szQueryName;
    }

    /**
     * @param string $szQueryName
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQuery
     */
    public function setSzQueryName($szQueryName)
    {
      $this->szQueryName = $szQueryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getWithDescriptions()
    {
      return $this->WithDescriptions;
    }

    /**
     * @param string $WithDescriptions
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQuery
     */
    public function setWithDescriptions($WithDescriptions)
    {
      $this->WithDescriptions = $WithDescriptions;
      return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param ArrayOfParameter $Parameters
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQuery
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
      return $this->currentPage;
    }

    /**
     * @param int $currentPage
     * @return \netForum\xWeb\Xml\Generated\GetDynamicQuery
     */
    public function setCurrentPage($currentPage)
    {
      $this->currentPage = $currentPage;
      return $this;
    }

}
