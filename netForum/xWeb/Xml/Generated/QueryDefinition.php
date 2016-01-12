<?php

namespace netForum\xWeb\Xml\Generated;

class QueryDefinition
{

    /**
     * @var string $que_key
     */
    protected $que_key = null;

    /**
     * @var string $que_description
     */
    protected $que_description = null;

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

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
    public function getQue_key()
    {
      return $this->que_key;
    }

    /**
     * @param string $que_key
     * @return \netForum\xWeb\Xml\Generated\QueryDefinition
     */
    public function setQue_key($que_key)
    {
      $this->que_key = $que_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getQue_description()
    {
      return $this->que_description;
    }

    /**
     * @param string $que_description
     * @return \netForum\xWeb\Xml\Generated\QueryDefinition
     */
    public function setQue_description($que_description)
    {
      $this->que_description = $que_description;
      return $this;
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
     * @return \netForum\xWeb\Xml\Generated\QueryDefinition
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
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
     * @return \netForum\xWeb\Xml\Generated\QueryDefinition
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
     * @return \netForum\xWeb\Xml\Generated\QueryDefinition
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

}
