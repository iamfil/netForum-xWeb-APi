<?php

namespace netForum\xWeb\Xml\Generated;

class WEBColumnGetColumnValuesByColumnNameResponse
{

    /**
     * @var ArrayOfAvailableValue $WEBColumnGetColumnValuesByColumnNameResult
     */
    protected $WEBColumnGetColumnValuesByColumnNameResult = null;

    /**
     * @param ArrayOfAvailableValue $WEBColumnGetColumnValuesByColumnNameResult
     */
    public function __construct($WEBColumnGetColumnValuesByColumnNameResult)
    {
      $this->WEBColumnGetColumnValuesByColumnNameResult = $WEBColumnGetColumnValuesByColumnNameResult;
    }

    /**
     * @return ArrayOfAvailableValue
     */
    public function getWEBColumnGetColumnValuesByColumnNameResult()
    {
      return $this->WEBColumnGetColumnValuesByColumnNameResult;
    }

    /**
     * @param ArrayOfAvailableValue $WEBColumnGetColumnValuesByColumnNameResult
     * @return \netForum\xWeb\Xml\Generated\WEBColumnGetColumnValuesByColumnNameResponse
     */
    public function setWEBColumnGetColumnValuesByColumnNameResult($WEBColumnGetColumnValuesByColumnNameResult)
    {
      $this->WEBColumnGetColumnValuesByColumnNameResult = $WEBColumnGetColumnValuesByColumnNameResult;
      return $this;
    }

}
