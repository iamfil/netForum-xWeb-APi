<?php

namespace netForum\xWeb\Xml\Generated;

class GetDateTimeResponse
{

    /**
     * @var \DateTime $GetDateTimeResult
     */
    protected $GetDateTimeResult = null;

    /**
     * @param \DateTime $GetDateTimeResult
     */
    public function __construct(\DateTime $GetDateTimeResult)
    {
      $this->GetDateTimeResult = $GetDateTimeResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getGetDateTimeResult()
    {
      if ($this->GetDateTimeResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GetDateTimeResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GetDateTimeResult
     * @return \netForum\xWeb\Xml\Generated\GetDateTimeResponse
     */
    public function setGetDateTimeResult(\DateTime $GetDateTimeResult)
    {
      $this->GetDateTimeResult = $GetDateTimeResult->format(\DateTime::ATOM);
      return $this;
    }

}
