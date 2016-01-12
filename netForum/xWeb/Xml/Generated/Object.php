<?php

namespace netForum\xWeb\Xml\Generated;

class Object
{

    /**
     * @var string $obj_key
     */
    protected $obj_key = null;

    /**
     * @var string $obj_name
     */
    protected $obj_name = null;

    /**
     * @var string $obj_description
     */
    protected $obj_description = null;

    /**
     * @var ListTable $ListTable
     */
    protected $ListTable = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getObj_key()
    {
      return $this->obj_key;
    }

    /**
     * @param string $obj_key
     * @return \netForum\xWeb\Xml\Generated\Object
     */
    public function setObj_key($obj_key)
    {
      $this->obj_key = $obj_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getObj_name()
    {
      return $this->obj_name;
    }

    /**
     * @param string $obj_name
     * @return \netForum\xWeb\Xml\Generated\Object
     */
    public function setObj_name($obj_name)
    {
      $this->obj_name = $obj_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getObj_description()
    {
      return $this->obj_description;
    }

    /**
     * @param string $obj_description
     * @return \netForum\xWeb\Xml\Generated\Object
     */
    public function setObj_description($obj_description)
    {
      $this->obj_description = $obj_description;
      return $this;
    }

    /**
     * @return ListTable
     */
    public function getListTable()
    {
      return $this->ListTable;
    }

    /**
     * @param ListTable $ListTable
     * @return \netForum\xWeb\Xml\Generated\Object
     */
    public function setListTable($ListTable)
    {
      $this->ListTable = $ListTable;
      return $this;
    }

}
