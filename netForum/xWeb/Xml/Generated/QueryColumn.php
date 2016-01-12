<?php

namespace netForum\xWeb\Xml\Generated;

class QueryColumn
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DataType
     */
    protected $DataType = null;

    /**
     * @var string $TableAlias
     */
    protected $TableAlias = null;

    /**
     * @var string $TableDescription
     */
    protected $TableDescription = null;

    /**
     * @var string $TableName
     */
    protected $TableName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \netForum\xWeb\Xml\Generated\QueryColumn
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \netForum\xWeb\Xml\Generated\QueryColumn
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param string $DataType
     * @return \netForum\xWeb\Xml\Generated\QueryColumn
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTableAlias()
    {
      return $this->TableAlias;
    }

    /**
     * @param string $TableAlias
     * @return \netForum\xWeb\Xml\Generated\QueryColumn
     */
    public function setTableAlias($TableAlias)
    {
      $this->TableAlias = $TableAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getTableDescription()
    {
      return $this->TableDescription;
    }

    /**
     * @param string $TableDescription
     * @return \netForum\xWeb\Xml\Generated\QueryColumn
     */
    public function setTableDescription($TableDescription)
    {
      $this->TableDescription = $TableDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
      return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return \netForum\xWeb\Xml\Generated\QueryColumn
     */
    public function setTableName($TableName)
    {
      $this->TableName = $TableName;
      return $this;
    }

}
