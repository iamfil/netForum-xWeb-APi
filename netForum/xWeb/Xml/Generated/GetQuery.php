<?php

namespace netForum\xWeb\Xml\Generated;

class GetQuery
{

    /**
     * @var string $szObjectName
     */
    protected $szObjectName = null;

    /**
     * @var string $szColumnList
     */
    protected $szColumnList = null;

    /**
     * @var string $szWhereClause
     */
    protected $szWhereClause = null;

    /**
     * @var string $szOrderBy
     */
    protected $szOrderBy = null;

    /**
     * @param string $szObjectName
     * @param string $szColumnList
     * @param string $szWhereClause
     * @param string $szOrderBy
     */
    public function __construct($szObjectName, $szColumnList, $szWhereClause, $szOrderBy)
    {
      $this->szObjectName = $szObjectName;
      $this->szColumnList = $szColumnList;
      $this->szWhereClause = $szWhereClause;
      $this->szOrderBy = $szOrderBy;
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
     * @return \netForum\xWeb\Xml\Generated\GetQuery
     */
    public function setSzObjectName($szObjectName)
    {
      $this->szObjectName = $szObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzColumnList()
    {
      return $this->szColumnList;
    }

    /**
     * @param string $szColumnList
     * @return \netForum\xWeb\Xml\Generated\GetQuery
     */
    public function setSzColumnList($szColumnList)
    {
      $this->szColumnList = $szColumnList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzWhereClause()
    {
      return $this->szWhereClause;
    }

    /**
     * @param string $szWhereClause
     * @return \netForum\xWeb\Xml\Generated\GetQuery
     */
    public function setSzWhereClause($szWhereClause)
    {
      $this->szWhereClause = $szWhereClause;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzOrderBy()
    {
      return $this->szOrderBy;
    }

    /**
     * @param string $szOrderBy
     * @return \netForum\xWeb\Xml\Generated\GetQuery
     */
    public function setSzOrderBy($szOrderBy)
    {
      $this->szOrderBy = $szOrderBy;
      return $this;
    }

}
