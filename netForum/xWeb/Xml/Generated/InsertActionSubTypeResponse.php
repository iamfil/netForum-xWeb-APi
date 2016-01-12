<?php

namespace netForum\xWeb\Xml\Generated;

class InsertActionSubTypeResponse
{

    /**
     * @var guid $InsertActionSubTypeResult
     */
    protected $InsertActionSubTypeResult = null;

    /**
     * @param guid $InsertActionSubTypeResult
     */
    public function __construct($InsertActionSubTypeResult)
    {
      $this->InsertActionSubTypeResult = $InsertActionSubTypeResult;
    }

    /**
     * @return guid
     */
    public function getInsertActionSubTypeResult()
    {
      return $this->InsertActionSubTypeResult;
    }

    /**
     * @param guid $InsertActionSubTypeResult
     * @return \netForum\xWeb\Xml\Generated\InsertActionSubTypeResponse
     */
    public function setInsertActionSubTypeResult($InsertActionSubTypeResult)
    {
      $this->InsertActionSubTypeResult = $InsertActionSubTypeResult;
      return $this;
    }

}
