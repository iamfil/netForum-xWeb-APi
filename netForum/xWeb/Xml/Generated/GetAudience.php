<?php

namespace netForum\xWeb\Xml\Generated;

class GetAudience
{

    /**
     * @var string $qrh_key
     */
    protected $qrh_key = null;

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
     * @param string $qrh_key
     * @param string $WithDescriptions
     * @param ArrayOfParameter $Parameters
     * @param int $currentPage
     */
    public function __construct($qrh_key, $WithDescriptions, $Parameters, $currentPage)
    {
      $this->qrh_key = $qrh_key;
      $this->WithDescriptions = $WithDescriptions;
      $this->Parameters = $Parameters;
      $this->currentPage = $currentPage;
    }

    /**
     * @return string
     */
    public function getQrh_key()
    {
      return $this->qrh_key;
    }

    /**
     * @param string $qrh_key
     * @return \netForum\xWeb\Xml\Generated\GetAudience
     */
    public function setQrh_key($qrh_key)
    {
      $this->qrh_key = $qrh_key;
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
     * @return \netForum\xWeb\Xml\Generated\GetAudience
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
     * @return \netForum\xWeb\Xml\Generated\GetAudience
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
     * @return \netForum\xWeb\Xml\Generated\GetAudience
     */
    public function setCurrentPage($currentPage)
    {
      $this->currentPage = $currentPage;
      return $this;
    }

}
