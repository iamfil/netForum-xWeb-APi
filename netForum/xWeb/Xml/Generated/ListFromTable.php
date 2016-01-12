<?php

namespace netForum\xWeb\Xml\Generated;

class ListFromTable
{

    /**
     * @var string $lsf_from_table
     */
    protected $lsf_from_table = null;

    /**
     * @var string $lsf_from_alias
     */
    protected $lsf_from_alias = null;

    /**
     * @var string $lsf_from_join_type
     */
    protected $lsf_from_join_type = null;

    /**
     * @var string $lsf_from_join
     */
    protected $lsf_from_join = null;

    /**
     * @var ArrayOfColumn $Columns
     */
    protected $Columns = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLsf_from_table()
    {
      return $this->lsf_from_table;
    }

    /**
     * @param string $lsf_from_table
     * @return \netForum\xWeb\Xml\Generated\ListFromTable
     */
    public function setLsf_from_table($lsf_from_table)
    {
      $this->lsf_from_table = $lsf_from_table;
      return $this;
    }

    /**
     * @return string
     */
    public function getLsf_from_alias()
    {
      return $this->lsf_from_alias;
    }

    /**
     * @param string $lsf_from_alias
     * @return \netForum\xWeb\Xml\Generated\ListFromTable
     */
    public function setLsf_from_alias($lsf_from_alias)
    {
      $this->lsf_from_alias = $lsf_from_alias;
      return $this;
    }

    /**
     * @return string
     */
    public function getLsf_from_join_type()
    {
      return $this->lsf_from_join_type;
    }

    /**
     * @param string $lsf_from_join_type
     * @return \netForum\xWeb\Xml\Generated\ListFromTable
     */
    public function setLsf_from_join_type($lsf_from_join_type)
    {
      $this->lsf_from_join_type = $lsf_from_join_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getLsf_from_join()
    {
      return $this->lsf_from_join;
    }

    /**
     * @param string $lsf_from_join
     * @return \netForum\xWeb\Xml\Generated\ListFromTable
     */
    public function setLsf_from_join($lsf_from_join)
    {
      $this->lsf_from_join = $lsf_from_join;
      return $this;
    }

    /**
     * @return ArrayOfColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfColumn $Columns
     * @return \netForum\xWeb\Xml\Generated\ListFromTable
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

}
