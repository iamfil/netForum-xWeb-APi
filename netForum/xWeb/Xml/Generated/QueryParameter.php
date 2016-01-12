<?php

namespace netForum\xWeb\Xml\Generated;

class QueryParameter
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
     * @var QueryOperatorType $Operator
     */
    protected $Operator = null;

    /**
     * @var string $ColumnName
     */
    protected $ColumnName = null;

    /**
     * @var string $ColumnDescription
     */
    protected $ColumnDescription = null;

    /**
     * @var string $ControlClass
     */
    protected $ControlClass = null;

    /**
     * @var string $DataType
     */
    protected $DataType = null;

    /**
     * @var boolean $IsExtended
     */
    protected $IsExtended = null;

    /**
     * @var boolean $IsNullable
     */
    protected $IsNullable = null;

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

    /**
     * @var ArrayOfListOption $ListOptions
     */
    protected $ListOptions = null;

    /**
     * @param QueryOperatorType $Operator
     * @param boolean $IsExtended
     * @param boolean $IsNullable
     */
    public function __construct($Operator, $IsExtended, $IsNullable)
    {
      $this->Operator = $Operator;
      $this->IsExtended = $IsExtended;
      $this->IsNullable = $IsNullable;
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
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
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
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return QueryOperatorType
     */
    public function getOperator()
    {
      return $this->Operator;
    }

    /**
     * @param QueryOperatorType $Operator
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setOperator($Operator)
    {
      $this->Operator = $Operator;
      return $this;
    }

    /**
     * @return string
     */
    public function getColumnName()
    {
      return $this->ColumnName;
    }

    /**
     * @param string $ColumnName
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setColumnName($ColumnName)
    {
      $this->ColumnName = $ColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getColumnDescription()
    {
      return $this->ColumnDescription;
    }

    /**
     * @param string $ColumnDescription
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setColumnDescription($ColumnDescription)
    {
      $this->ColumnDescription = $ColumnDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getControlClass()
    {
      return $this->ControlClass;
    }

    /**
     * @param string $ControlClass
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setControlClass($ControlClass)
    {
      $this->ControlClass = $ControlClass;
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
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExtended()
    {
      return $this->IsExtended;
    }

    /**
     * @param boolean $IsExtended
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setIsExtended($IsExtended)
    {
      $this->IsExtended = $IsExtended;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNullable()
    {
      return $this->IsNullable;
    }

    /**
     * @param boolean $IsNullable
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setIsNullable($IsNullable)
    {
      $this->IsNullable = $IsNullable;
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
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
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
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
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
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setTableName($TableName)
    {
      $this->TableName = $TableName;
      return $this;
    }

    /**
     * @return ArrayOfListOption
     */
    public function getListOptions()
    {
      return $this->ListOptions;
    }

    /**
     * @param ArrayOfListOption $ListOptions
     * @return \netForum\xWeb\Xml\Generated\QueryParameter
     */
    public function setListOptions($ListOptions)
    {
      $this->ListOptions = $ListOptions;
      return $this;
    }

}
