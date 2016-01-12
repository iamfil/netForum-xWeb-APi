<?php

namespace netForum\xWeb\Xml\Generated;

class ListTable
{

    /**
     * @var string $lst_mdt_name
     */
    protected $lst_mdt_name = null;

    /**
     * @var string $lst_select_distinct
     */
    protected $lst_select_distinct = null;

    /**
     * @var string $mdt_description
     */
    protected $mdt_description = null;

    /**
     * @var ArrayOfListFromTable $ListFromTables
     */
    protected $ListFromTables = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLst_mdt_name()
    {
      return $this->lst_mdt_name;
    }

    /**
     * @param string $lst_mdt_name
     * @return \netForum\xWeb\Xml\Generated\ListTable
     */
    public function setLst_mdt_name($lst_mdt_name)
    {
      $this->lst_mdt_name = $lst_mdt_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getLst_select_distinct()
    {
      return $this->lst_select_distinct;
    }

    /**
     * @param string $lst_select_distinct
     * @return \netForum\xWeb\Xml\Generated\ListTable
     */
    public function setLst_select_distinct($lst_select_distinct)
    {
      $this->lst_select_distinct = $lst_select_distinct;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdt_description()
    {
      return $this->mdt_description;
    }

    /**
     * @param string $mdt_description
     * @return \netForum\xWeb\Xml\Generated\ListTable
     */
    public function setMdt_description($mdt_description)
    {
      $this->mdt_description = $mdt_description;
      return $this;
    }

    /**
     * @return ArrayOfListFromTable
     */
    public function getListFromTables()
    {
      return $this->ListFromTables;
    }

    /**
     * @param ArrayOfListFromTable $ListFromTables
     * @return \netForum\xWeb\Xml\Generated\ListTable
     */
    public function setListFromTables($ListFromTables)
    {
      $this->ListFromTables = $ListFromTables;
      return $this;
    }

}
