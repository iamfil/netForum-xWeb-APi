<?php

namespace netForum\xWeb\Xml\Generated;

class AudienceDefinition
{

    /**
     * @var string $qrh_key
     */
    protected $qrh_key = null;

    /**
     * @var string $qrh_description
     */
    protected $qrh_description = null;

    /**
     * @var ArrayOfQueryParameter $Parameters
     */
    protected $Parameters = null;

    /**
     * @var ArrayOfQueryColumn $Columns
     */
    protected $Columns = null;

    
    public function __construct()
    {
    
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
     * @return \netForum\xWeb\Xml\Generated\AudienceDefinition
     */
    public function setQrh_key($qrh_key)
    {
      $this->qrh_key = $qrh_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getQrh_description()
    {
      return $this->qrh_description;
    }

    /**
     * @param string $qrh_description
     * @return \netForum\xWeb\Xml\Generated\AudienceDefinition
     */
    public function setQrh_description($qrh_description)
    {
      $this->qrh_description = $qrh_description;
      return $this;
    }

    /**
     * @return ArrayOfQueryParameter
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param ArrayOfQueryParameter $Parameters
     * @return \netForum\xWeb\Xml\Generated\AudienceDefinition
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

    /**
     * @return ArrayOfQueryColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfQueryColumn $Columns
     * @return \netForum\xWeb\Xml\Generated\AudienceDefinition
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

}
