<?php

namespace netForum\xWeb\Xml\Generated;

class GetPromotionalMailingTypesResponse
{

    /**
     * @var ArrayOfMailingList $GetPromotionalMailingTypesResult
     */
    protected $GetPromotionalMailingTypesResult = null;

    /**
     * @param ArrayOfMailingList $GetPromotionalMailingTypesResult
     */
    public function __construct($GetPromotionalMailingTypesResult)
    {
      $this->GetPromotionalMailingTypesResult = $GetPromotionalMailingTypesResult;
    }

    /**
     * @return ArrayOfMailingList
     */
    public function getGetPromotionalMailingTypesResult()
    {
      return $this->GetPromotionalMailingTypesResult;
    }

    /**
     * @param ArrayOfMailingList $GetPromotionalMailingTypesResult
     * @return \netForum\xWeb\Xml\Generated\GetPromotionalMailingTypesResponse
     */
    public function setGetPromotionalMailingTypesResult($GetPromotionalMailingTypesResult)
    {
      $this->GetPromotionalMailingTypesResult = $GetPromotionalMailingTypesResult;
      return $this;
    }

}
