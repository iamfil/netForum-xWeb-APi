<?php

namespace netForum\xWeb\Xml\Generated;

class WEBColumnGetColumnValuesByColumnName
{

    /**
     * @var string $ColumnName
     */
    protected $ColumnName = null;

    /**
     * @param string $ColumnName
     */
    public function __construct($ColumnName)
    {
      $this->ColumnName = $ColumnName;
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
     * @return \netForum\xWeb\Xml\Generated\WEBColumnGetColumnValuesByColumnName
     */
    public function setColumnName($ColumnName)
    {
      $this->ColumnName = $ColumnName;
      return $this;
    }

}
