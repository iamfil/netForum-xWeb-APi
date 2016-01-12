<?php

namespace netForum\xWeb\Xml\Generated;


/**
 * Avectra Xml Web Services with Authentication Token release: http://www.avectra.com/2005/ -   For additional information or for questions concerning xWeb please navigate to netForum xWeb Online help at http://wiki.avectra.com/index.php?title=XWeb.  Please note: all xWeb message exchanges are recommended to occur over SSL.
 */
class NetForumXML extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetCustomerCommunicationPreference' => 'netForum\\xWeb\\Xml\\Generated\\GetCustomerCommunicationPreference',
      'GetCustomerCommunicationPreferenceResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetCustomerCommunicationPreferenceResponse',
      'MailingListSetting' => 'netForum\\xWeb\\Xml\\Generated\\MailingListSetting',
      'AuthorizationToken' => 'netForum\\xWeb\\Xml\\Generated\\AuthorizationToken',
      'GetAllCustomerCommunicationPreferences' => 'netForum\\xWeb\\Xml\\Generated\\GetAllCustomerCommunicationPreferences',
      'GetAllCustomerCommunicationPreferencesResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetAllCustomerCommunicationPreferencesResponse',
      'ArrayOfMailingListSetting' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfMailingListSetting',
      'SetCustomerCommunicationPreferences' => 'netForum\\xWeb\\Xml\\Generated\\SetCustomerCommunicationPreferences',
      'SetCustomerCommunicationPreferencesResponse' => 'netForum\\xWeb\\Xml\\Generated\\SetCustomerCommunicationPreferencesResponse',
      'GetFundraisingEventRegistrantionTotal' => 'netForum\\xWeb\\Xml\\Generated\\GetFundraisingEventRegistrantionTotal',
      'GetFundraisingEventRegistrantionTotalResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetFundraisingEventRegistrantionTotalResponse',
      'EventUserFundraisingDetail' => 'netForum\\xWeb\\Xml\\Generated\\EventUserFundraisingDetail',
      'GetFundraisingEventDonations' => 'netForum\\xWeb\\Xml\\Generated\\GetFundraisingEventDonations',
      'GetFundraisingEventDonationsResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetFundraisingEventDonationsResponse',
      'ArrayOfDonation' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfDonation',
      'Donation' => 'netForum\\xWeb\\Xml\\Generated\\Donation',
      'GetFundraisingEventDonationUrl' => 'netForum\\xWeb\\Xml\\Generated\\GetFundraisingEventDonationUrl',
      'GetFundraisingEventDonationUrlResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetFundraisingEventDonationUrlResponse',
      'WEBChaptersGetChapterMembershipRoster' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterMembershipRoster',
      'WEBChaptersGetChapterMembershipRosterResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterMembershipRosterResponse',
      'WEBChaptersGetChapterMembershipRosterResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterMembershipRosterResult',
      'WEBChaptersGetChapterOfficers' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterOfficers',
      'WEBChaptersGetChapterOfficersResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterOfficersResponse',
      'WEBChaptersGetChapterOfficersResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterOfficersResult',
      'WEBChaptersGetChapterByKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterByKey',
      'WEBChaptersGetChapterByKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterByKeyResponse',
      'WEBChaptersGetChapterByKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterByKeyResult',
      'WEBChapterGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBChapterGet',
      'WEBChapterGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBChapterGetResponse',
      'WEBCentralizedShoppingCartStoreForeWeb' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartStoreForeWeb',
      'WEBCentralizedShoppingCartStoreForeWebResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartStoreForeWebResponse',
      'WEBCentralizedShoppingCartGetNew' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetNew',
      'WEBCentralizedShoppingCartGetNewResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetNewResponse',
      'WEBCentralizedShoppingCartGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGet',
      'WEBCentralizedShoppingCartGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetResponse',
      'WEBCentralizedShoppingCartGetWithLineItem' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetWithLineItem',
      'WEBCentralizedShoppingCartGetWithLineItemResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetWithLineItemResponse',
      'WEBCentralizedShoppingCartRefresh' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRefresh',
      'WEBCentralizedShoppingCartRefreshResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRefreshResponse',
      'WEBCentralizedShoppingCartInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartInsert',
      'WEBCentralizedShoppingCartInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartInsertResponse',
      'WEBCentralizedShoppingCartApplySourceCode' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartApplySourceCode',
      'WEBCentralizedShoppingCartApplySourceCodeResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartApplySourceCodeResponse',
      'WEBCentralizedShoppingCartClearSourceCode' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartClearSourceCode',
      'WEBCentralizedShoppingCartClearSourceCodeResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartClearSourceCodeResponse',
      'WEBCentralizedShoppingCartApplyDiscountCode' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartApplyDiscountCode',
      'WEBCentralizedShoppingCartApplyDiscountCodeResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartApplyDiscountCodeResponse',
      'WEBCentralizedShoppingCartGetProductTypeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductTypeList',
      'WEBCentralizedShoppingCartGetProductTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductTypeListResponse',
      'WEBCentralizedShoppingCartGetProductTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductTypeListResult',
      'WEBCentralizedShoppingCartGetProductCategoryList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductCategoryList',
      'WEBCentralizedShoppingCartGetProductCategoryListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductCategoryListResponse',
      'WEBCentralizedShoppingCartGetProductCategoryListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductCategoryListResult',
      'WEBCentralizedShoppingCartGetProductList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductList',
      'WEBCentralizedShoppingCartGetProductListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListResponse',
      'WEBCentralizedShoppingCartGetProductListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListResult',
      'WEBCentralizedShoppingCartGetProductListByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListByName',
      'WEBCentralizedShoppingCartGetProductListByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListByNameResponse',
      'WEBCentralizedShoppingCartGetProductListByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListByNameResult',
      'WEBCentralizedShoppingCartGetProductByKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductByKey',
      'WEBCentralizedShoppingCartGetProductByKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductByKeyResponse',
      'WEBCentralizedShoppingCartGetProductByKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductByKeyResult',
      'WEBCentralizedShoppingCartGetProductListKeys' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListKeys',
      'WEBCentralizedShoppingCartGetProductListKeysResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListKeysResponse',
      'WEBCentralizedShoppingCartGetProductListKeysResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListKeysResult',
      'WEBCentralizedShoppingCartGetProductComplements' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductComplements',
      'WEBCentralizedShoppingCartGetProductComplementsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductComplementsResponse',
      'WEBCentralizedShoppingCartGetProductComplementsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductComplementsResult',
      'WEBCentralizedShoppingCartGetProductComplementListByProductKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductComplementListByProductKey',
      'WEBCentralizedShoppingCartGetProductComplementListByProductKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductComplementListByProductKeyResponse',
      'WEBCentralizedShoppingCartGetProductComplementListByProductKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductComplementListByProductKeyResult',
      'WEBCentralizedShoppingCartGetProductSubstitutes' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductSubstitutes',
      'WEBCentralizedShoppingCartGetProductSubstitutesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductSubstitutesResponse',
      'WEBCentralizedShoppingCartGetProductSubstitutesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductSubstitutesResult',
      'WEBCentralizedShoppingCartGetProductSubstituteListByProductKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductSubstituteListByProductKey',
      'WEBCentralizedShoppingCartGetProductSubstituteListByProductKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductSubstituteListByProductKeyResponse',
      'WEBCentralizedShoppingCartGetProductSubstituteListByProductKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductSubstituteListByProductKeyResult',
      'WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKey',
      'WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKeyResponse',
      'WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKeyResult',
      'WEBCentralizedShoppingCartGetMerchandiseList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetMerchandiseList',
      'WEBCentralizedShoppingCartGetMerchandiseListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetMerchandiseListResponse',
      'WEBCentralizedShoppingCartGetMerchandiseListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetMerchandiseListResult',
      'WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PC' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PC',
      'WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PCResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PCResponse',
      'WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PCResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PCResult',
      'WEBCentralizedShoppingCartGetPublicationList_Ignore_PC' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetPublicationList_Ignore_PC',
      'WEBCentralizedShoppingCartGetPublicationList_Ignore_PCResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetPublicationList_Ignore_PCResponse',
      'WEBCentralizedShoppingCartGetPublicationList_Ignore_PCResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetPublicationList_Ignore_PCResult',
      'WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PC' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PC',
      'WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PCResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PCResponse',
      'WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PCResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PCResult',
      'WEBCentralizedShoppingCartGetEventList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventList',
      'WEBCentralizedShoppingCartGetEventListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListResponse',
      'WEBCentralizedShoppingCartGetEventListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListResult',
      'WEBCentralizedShoppingCartGetEventListByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListByName',
      'WEBCentralizedShoppingCartGetEventListByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListByNameResponse',
      'WEBCentralizedShoppingCartGetEventListByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListByNameResult',
      'WEBCentralizedShoppingCartGetEventByKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventByKey',
      'WEBCentralizedShoppingCartGetEventByKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventByKeyResponse',
      'WEBCentralizedShoppingCartGetEventByKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventByKeyResult',
      'WEBCentralizedShoppingCartGetEventListKeys' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListKeys',
      'WEBCentralizedShoppingCartGetEventListKeysResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListKeysResponse',
      'WEBCentralizedShoppingCartGetEventListKeysResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventListKeysResult',
      'WEBCentralizedShoppingCartGetTrackListByEventKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetTrackListByEventKey',
      'WEBCentralizedShoppingCartGetTrackListByEventKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetTrackListByEventKeyResponse',
      'WEBCentralizedShoppingCartGetTrackListByEventKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetTrackListByEventKeyResult',
      'WEBCentralizedShoppingCartGetSessionListByEventKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSessionListByEventKey',
      'WEBCentralizedShoppingCartGetSessionListByEventKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSessionListByEventKeyResponse',
      'WEBCentralizedShoppingCartGetSessionListByEventKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSessionListByEventKeyResult',
      'WEBCentralizedShoppingCartGetFacultyListByEventKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetFacultyListByEventKey',
      'WEBCentralizedShoppingCartGetFacultyListByEventKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetFacultyListByEventKeyResponse',
      'WEBCentralizedShoppingCartGetFacultyListByEventKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetFacultyListByEventKeyResult',
      'WEBCentralizedShoppingCartGetFacultyListBySessionKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetFacultyListBySessionKey',
      'WEBCentralizedShoppingCartGetFacultyListBySessionKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetFacultyListBySessionKeyResponse',
      'WEBCentralizedShoppingCartGetFacultyListBySessionKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetFacultyListBySessionKeyResult',
      'WEBCentralizedShoppingCartGetSponsorListByEventKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSponsorListByEventKey',
      'WEBCentralizedShoppingCartGetSponsorListByEventKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSponsorListByEventKeyResponse',
      'WEBCentralizedShoppingCartGetSponsorListByEventKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSponsorListByEventKeyResult',
      'WEBCentralizedShoppingCartGetSponsorListBySessionKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSponsorListBySessionKey',
      'WEBCentralizedShoppingCartGetSponsorListBySessionKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSponsorListBySessionKeyResponse',
      'WEBCentralizedShoppingCartGetSponsorListBySessionKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSponsorListBySessionKeyResult',
      'WEBCentralizedShoppingCartGetSessionListByTrackKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSessionListByTrackKey',
      'WEBCentralizedShoppingCartGetSessionListByTrackKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSessionListByTrackKeyResponse',
      'WEBCentralizedShoppingCartGetSessionListByTrackKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetSessionListByTrackKeyResult',
      'WEBCentralizedShoppingCartGetEventRegistrantTypeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantTypeList',
      'WEBCentralizedShoppingCartGetEventRegistrantTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantTypeListResponse',
      'WEBCentralizedShoppingCartGetEventRegistrantTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantTypeListResult',
      'WEBCentralizedShoppingCartGetEventRegistrantRoomTypeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantRoomTypeList',
      'WEBCentralizedShoppingCartGetEventRegistrantRoomTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantRoomTypeListResponse',
      'WEBCentralizedShoppingCartGetEventRegistrantRoomTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantRoomTypeListResult',
      'WEBCentralizedShoppingCartGetEventRegistrantTypeListByEvent' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantTypeListByEvent',
      'WEBCentralizedShoppingCartGetEventRegistrantTypeListByEventResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantTypeListByEventResponse',
      'WEBCentralizedShoppingCartGetEventRegistrantTypeListByEventResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantTypeListByEventResult',
      'WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEvent' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEvent',
      'WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEventResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEventResponse',
      'WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEventResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEventResult',
      'WEBCentralizedShoppingCartGetEventRegistrantSourceCodeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantSourceCodeList',
      'WEBCentralizedShoppingCartGetEventRegistrantSourceCodeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantSourceCodeListResponse',
      'WEBCentralizedShoppingCartGetEventRegistrantSourceCodeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantSourceCodeListResult',
      'WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList',
      'WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualListResponse',
      'WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualListResult',
      'WEBCentralizedShoppingCartEventRegistrantGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGet',
      'WEBCentralizedShoppingCartEventRegistrantGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGetResponse',
      'WEBCentralizedShoppingCartEventRegistrantGetNew' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGetNew',
      'WEBCentralizedShoppingCartEventRegistrantGetNewResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGetNewResponse',
      'WEBCentralizedShoppingCartEventRegistrantGroupGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGroupGet',
      'WEBCentralizedShoppingCartEventRegistrantGroupGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGroupGetResponse',
      'WEBCentralizedShoppingCartEventRegistrantGroupGetNew' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGroupGetNew',
      'WEBCentralizedShoppingCartEventRegistrantGroupGetNewResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGroupGetNewResponse',
      'WEBCentralizedShoppingCartGetEventFees' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventFees',
      'WEBCentralizedShoppingCartGetEventFeesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventFeesResponse',
      'WEBCentralizedShoppingCartGetEventFeesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventFeesResult',
      'WEBCentralizedShoppingCartGetEventTrackFees' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventTrackFees',
      'WEBCentralizedShoppingCartGetEventTrackFeesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventTrackFeesResponse',
      'WEBCentralizedShoppingCartGetEventTrackFeesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventTrackFeesResult',
      'WEBCentralizedShoppingCartGetEventSessionFees' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventSessionFees',
      'WEBCentralizedShoppingCartGetEventSessionFeesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventSessionFeesResponse',
      'WEBCentralizedShoppingCartGetEventSessionFeesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetEventSessionFeesResult',
      'WEBCentralizedShoppingCartEventRegistrantSetLineItems' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantSetLineItems',
      'Fees' => 'netForum\\xWeb\\Xml\\Generated\\Fees',
      'Fee' => 'netForum\\xWeb\\Xml\\Generated\\Fee',
      'WEBCentralizedShoppingCartEventRegistrantSetLineItemsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantSetLineItemsResponse',
      'WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart',
      'WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResponse',
      'WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration',
      'WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistrationResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistrationResponse',
      'WEBCentralizedShoppingCartEventRegistrantRefresh' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantRefresh',
      'WEBCentralizedShoppingCartEventRegistrantRefreshResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantRefreshResponse',
      'WEBCentralizedShoppingCartAddEventRegistrant' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddEventRegistrant',
      'WEBCentralizedShoppingCartAddEventRegistrantResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddEventRegistrantResponse',
      'WEBCentralizedShoppingCartRemoveEventRegistrant' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveEventRegistrant',
      'WEBCentralizedShoppingCartRemoveEventRegistrantResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveEventRegistrantResponse',
      'WEBCentralizedShoppingCartEventRegistrantGroupRefresh' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGroupRefresh',
      'WEBCentralizedShoppingCartEventRegistrantGroupRefreshResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartEventRegistrantGroupRefreshResponse',
      'WEBCentralizedShoppingCartAddEventRegistrantToGroup' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddEventRegistrantToGroup',
      'WEBCentralizedShoppingCartAddEventRegistrantToGroupResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddEventRegistrantToGroupResponse',
      'WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup',
      'WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResponse',
      'WEBCentralizedShoppingCartAddEventRegistrantGroup' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddEventRegistrantGroup',
      'WEBCentralizedShoppingCartAddEventRegistrantGroupResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddEventRegistrantGroupResponse',
      'WEBCentralizedShoppingCartRemoveEventRegistrantGroup' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveEventRegistrantGroup',
      'WEBCentralizedShoppingCartRemoveEventRegistrantGroupResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveEventRegistrantGroupResponse',
      'WEBCentralizedShoppingCartGiftGetGiftProductList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductList',
      'WEBCentralizedShoppingCartGiftGetGiftProductListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListResponse',
      'WEBCentralizedShoppingCartGiftGetGiftProductListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListResult',
      'WEBCentralizedShoppingCartGiftGetGiftProductListByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListByName',
      'WEBCentralizedShoppingCartGiftGetGiftProductListByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListByNameResponse',
      'WEBCentralizedShoppingCartGiftGetGiftProductListByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListByNameResult',
      'WEBCentralizedShoppingCartGiftGetGiftProductByKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductByKey',
      'WEBCentralizedShoppingCartGiftGetGiftProductByKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductByKeyResponse',
      'WEBCentralizedShoppingCartGiftGetGiftProductByKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductByKeyResult',
      'WEBCentralizedShoppingCartGiftGetGiftProductListKeys' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListKeys',
      'WEBCentralizedShoppingCartGiftGetGiftProductListKeysResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListKeysResponse',
      'WEBCentralizedShoppingCartGiftGetGiftProductListKeysResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftProductListKeysResult',
      'WEBCentralizedShoppingCartGiftGetGiftTypeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftTypeList',
      'WEBCentralizedShoppingCartGiftGetGiftTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftTypeListResponse',
      'WEBCentralizedShoppingCartGiftGetGiftTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetGiftTypeListResult',
      'WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift',
      'WEBCentralizedShoppingCartGiftGetPremiumProductsListByGiftResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetPremiumProductsListByGiftResponse',
      'WEBCentralizedShoppingCartGiftGetPremiumProductsListByGiftResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftGetPremiumProductsListByGiftResult',
      'WEBCentralizedShoppingCartGiftFundraisingGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingGet',
      'WEBCentralizedShoppingCartGiftFundraisingGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingGetResponse',
      'WEBCentralizedShoppingCartGiftFundraisingGetNew' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingGetNew',
      'WEBCentralizedShoppingCartGiftFundraisingGetNewResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingGetNewResponse',
      'WEBCentralizedShoppingCartGiftFundraisingSetLineItems' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingSetLineItems',
      'WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResponse',
      'WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart',
      'WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCartResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCartResponse',
      'WEBCentralizedShoppingCartGiftFundraisingRefresh' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingRefresh',
      'WEBCentralizedShoppingCartGiftFundraisingRefreshResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftFundraisingRefreshResponse',
      'WEBCentralizedShoppingCartGiftAddGiftFundraising' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftAddGiftFundraising',
      'WEBCentralizedShoppingCartGiftAddGiftFundraisingResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftAddGiftFundraisingResponse',
      'WEBCentralizedShoppingCartGiftRemoveFundraisingGift' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftRemoveFundraisingGift',
      'WEBCentralizedShoppingCartGiftRemoveFundraisingGiftResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGiftRemoveFundraisingGiftResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageList',
      'WEBCentralizedShoppingCartMembershipGetPackageListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListResult',
      'WEBCentralizedShoppingCartMembershipGetRenewalPackageList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetRenewalPackageList',
      'WEBCentralizedShoppingCartMembershipGetRenewalPackageListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetRenewalPackageListResponse',
      'WEBCentralizedShoppingCartMembershipGetRenewalPackageListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetRenewalPackageListResult',
      'WEBCentralizedShoppingCartMembershipGetMembershipTypeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetMembershipTypeList',
      'WEBCentralizedShoppingCartMembershipGetMembershipTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetMembershipTypeListResponse',
      'WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetMembershipTypeListResult',
      'WEBCentralizedShoppingCartMembershipGetPackageListByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListByName',
      'WEBCentralizedShoppingCartMembershipGetPackageListByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListByNameResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageListByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListByNameResult',
      'WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey',
      'WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKeyResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKeyResult',
      'WEBCentralizedShoppingCartMembershipGetPackageByKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageByKey',
      'WEBCentralizedShoppingCartMembershipGetPackageByKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageByKeyResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageByKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageByKeyResult',
      'WEBCentralizedShoppingCartMembershipGetPackageListKeys' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListKeys',
      'WEBCentralizedShoppingCartMembershipGetPackageListKeysResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListKeysResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageListKeysResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageListKeysResult',
      'WEBCentralizedShoppingCartMembershipGetPackageComponentList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageComponentList',
      'WEBCentralizedShoppingCartMembershipGetPackageComponentListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageComponentListResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageComponentListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageComponentListResult',
      'WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject',
      'WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObjectResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObjectResponse',
      'WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObjectResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObjectResult',
      'WEBCentralizedShoppingCartMembershipGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGet',
      'WEBCentralizedShoppingCartMembershipGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetResponse',
      'WEBCentralizedShoppingCartMembershipGetNew' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetNew',
      'WEBCentralizedShoppingCartMembershipGetNewResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipGetNewResponse',
      'WEBCentralizedShoppingCartMembesrhipSetLineItems' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembesrhipSetLineItems',
      'WEBCentralizedShoppingCartMembesrhipSetLineItemsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembesrhipSetLineItemsResponse',
      'WEBCentralizedShoppingCartMembershipSetLineItemsWithCart' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipSetLineItemsWithCart',
      'WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResponse',
      'WEBCentralizedShoppingCartOpenInvoiceAdd' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceAdd',
      'WEBCentralizedShoppingCartOpenInvoiceAddResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceAddResponse',
      'WEBCentralizedShoppingCartOpenInvoiceGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceGet',
      'WEBCentralizedShoppingCartOpenInvoiceGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceGetResponse',
      'WEBCentralizedShoppingCartOpenInvoiceGetList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceGetList',
      'WEBCentralizedShoppingCartOpenInvoiceGetListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceGetListResponse',
      'WEBCentralizedShoppingCartOpenInvoiceGetListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartOpenInvoiceGetListResult',
      'WEBCentralizedShoppingCartMembershipRefresh' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipRefresh',
      'WEBCentralizedShoppingCartMembershipRefreshResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipRefreshResponse',
      'WEBCentralizedShoppingCartMembershipAddMembership' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipAddMembership',
      'WEBCentralizedShoppingCartMembershipAddMembershipResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipAddMembershipResponse',
      'WEBCentralizedShoppingCartMebmershipRemoveMembership' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMebmershipRemoveMembership',
      'WEBCentralizedShoppingCartMebmershipRemoveMembershipResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMebmershipRemoveMembershipResponse',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceGetList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceGetList',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceGetListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceGetListResponse',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceGetListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceGetListResult',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceGet',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceGetResponse',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceAdd' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceAdd',
      'WEBCentralizedShoppingCartMembershipOpenInvoiceAddResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartMembershipOpenInvoiceAddResponse',
      'WEBCentralizedShoppingCartExhibitorGetExhibitList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetExhibitList',
      'WEBCentralizedShoppingCartExhibitorGetExhibitListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetExhibitListResponse',
      'WEBCentralizedShoppingCartExhibitorGetExhibitListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetExhibitListResult',
      'WEBCentralizedShoppingCartExhibitorGetNew' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetNew',
      'WEBCentralizedShoppingCartExhibitorGetNewResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetNewResponse',
      'WEBCentralizedShoppingCartExhibitorGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGet',
      'WEBCentralizedShoppingCartExhibitorGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetResponse',
      'WEBCentralizedShoppingCartExhibitorGetBoothTypeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetBoothTypeList',
      'WEBCentralizedShoppingCartExhibitorGetBoothTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetBoothTypeListResponse',
      'WEBCentralizedShoppingCartExhibitorGetBoothTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetBoothTypeListResult',
      'WEBCentralizedShoppingCartExhibitorGetBoothCategoryList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetBoothCategoryList',
      'WEBCentralizedShoppingCartExhibitorGetBoothCategoryListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetBoothCategoryListResponse',
      'WEBCentralizedShoppingCartExhibitorGetBoothCategoryListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorGetBoothCategoryListResult',
      'WEBCentralizedShoppingCartGetBoothList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetBoothList',
      'WEBCentralizedShoppingCartGetBoothListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetBoothListResponse',
      'WEBCentralizedShoppingCartGetBoothListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetBoothListResult',
      'WEBCentralizedShoppingCartExhibitorSetLineItems' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorSetLineItems',
      'WEBCentralizedShoppingCartExhibitorSetLineItemsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorSetLineItemsResponse',
      'WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart',
      'WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResponse',
      'WEBCentralizedShoppingCartExhibitorAddExhibitor' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorAddExhibitor',
      'WEBCentralizedShoppingCartExhibitorAddExhibitorResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartExhibitorAddExhibitorResponse',
      'WEBCentralizedShoppingCartGetShippingOptions' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetShippingOptions',
      'WEBCentralizedShoppingCartGetShippingOptionsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetShippingOptionsResponse',
      'WEBCentralizedShoppingCartGetShippingOptionsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetShippingOptionsResult',
      'WEBCentralizedShoppingCartAddShippingItem' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddShippingItem',
      'WEBCentralizedShoppingCartAddShippingItemResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddShippingItemResponse',
      'WEBCentralizedShoppingCartGetPaymentOptions' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetPaymentOptions',
      'WEBCentralizedShoppingCartGetPaymentOptionsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetPaymentOptionsResponse',
      'WEBCentralizedShoppingCartGetPaymentOptionsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetPaymentOptionsResult',
      'WEBCentralizedShoppingCartGetInstallmentFrequencyOptions' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetInstallmentFrequencyOptions',
      'WEBCentralizedShoppingCartGetInstallmentFrequencyOptionsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetInstallmentFrequencyOptionsResponse',
      'WEBCentralizedShoppingCartGetInstallmentFrequencyOptionsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetInstallmentFrequencyOptionsResult',
      'WEBCentralizedShoppingCartGetInstallmentTermsOptions' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetInstallmentTermsOptions',
      'WEBCentralizedShoppingCartGetInstallmentTermsOptionsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetInstallmentTermsOptionsResponse',
      'WEBCentralizedShoppingCartGetInstallmentTermsOptionsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetInstallmentTermsOptionsResult',
      'WEBCentralizedShoppingCartGetProductLineItem' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductLineItem',
      'WEBCentralizedShoppingCartGetProductLineItemResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductLineItemResponse',
      'WEBCentralizedShoppingCartGetProductLineItemWithCart' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductLineItemWithCart',
      'WEBCentralizedShoppingCartGetProductLineItemWithCartResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartGetProductLineItemWithCartResponse',
      'WEBCentralizedShoppingCartLoadLineItem' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartLoadLineItem',
      'WEBCentralizedShoppingCartLoadLineItemResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartLoadLineItemResponse',
      'WEBCentralizedShoppingCartAddLineItem' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddLineItem',
      'WEBCentralizedShoppingCartAddLineItemResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartAddLineItemResponse',
      'WEBCentralizedShoppingCartRemoveLineItem' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveLineItem',
      'WEBCentralizedShoppingCartRemoveLineItemResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveLineItemResponse',
      'WEBCentralizedShoppingCartRemoveAllLineItems' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveAllLineItems',
      'WEBCentralizedShoppingCartRemoveAllLineItemsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCentralizedShoppingCartRemoveAllLineItemsResponse',
      'GetDateTime' => 'netForum\\xWeb\\Xml\\Generated\\GetDateTime',
      'GetDateTimeResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetDateTimeResponse',
      'MetaDataGetForm' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetForm',
      'MetaDataGetFormResponse' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormResponse',
      'AVForm' => 'netForum\\xWeb\\Xml\\Generated\\AVForm',
      'ArrayOfAVFormControl' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfAVFormControl',
      'AVFormControl' => 'netForum\\xWeb\\Xml\\Generated\\AVFormControl',
      'DesignedFormControl' => 'netForum\\xWeb\\Xml\\Generated\\DesignedFormControl',
      'ArrayOfAvailableValue' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfAvailableValue',
      'AvailableValue' => 'netForum\\xWeb\\Xml\\Generated\\AvailableValue',
      'ArrayOfString' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfString',
      'ArrayOfAVFormAction' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfAVFormAction',
      'AVFormAction' => 'netForum\\xWeb\\Xml\\Generated\\AVFormAction',
      'AVFormDataInterface' => 'netForum\\xWeb\\Xml\\Generated\\AVFormDataInterface',
      'MetaDataGetFormForFacadeObject' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormForFacadeObject',
      'oNode' => 'netForum\\xWeb\\Xml\\Generated\\oNode',
      'MetaDataGetFormForFacadeObjectResponse' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormForFacadeObjectResponse',
      'MetaDataGetFormControlForFacadeObject' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormControlForFacadeObject',
      'MetaDataGetFormControlForFacadeObjectResponse' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormControlForFacadeObjectResponse',
      'MetaDataGetFormForIndividual' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormForIndividual',
      'MetaDataGetFormForIndividualResponse' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetFormForIndividualResponse',
      'MetaDataGetWizard' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetWizard',
      'MetaDataGetWizardResponse' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetWizardResponse',
      'AVWizard' => 'netForum\\xWeb\\Xml\\Generated\\AVWizard',
      'ArrayOfAVWizardForm' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfAVWizardForm',
      'AVWizardForm' => 'netForum\\xWeb\\Xml\\Generated\\AVWizardForm',
      'MetaDataGetWizardForm' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetWizardForm',
      'MetaDataGetWizardFormResponse' => 'netForum\\xWeb\\Xml\\Generated\\MetaDataGetWizardFormResponse',
      'WEBColumnGetColumnValuesByColumnName' => 'netForum\\xWeb\\Xml\\Generated\\WEBColumnGetColumnValuesByColumnName',
      'WEBColumnGetColumnValuesByColumnNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBColumnGetColumnValuesByColumnNameResponse',
      'GetPromotionalMailingTypes' => 'netForum\\xWeb\\Xml\\Generated\\GetPromotionalMailingTypes',
      'GetPromotionalMailingTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetPromotionalMailingTypesResponse',
      'ArrayOfMailingList' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfMailingList',
      'MailingList' => 'netForum\\xWeb\\Xml\\Generated\\MailingList',
      'GetSubscriptionMailingTypes' => 'netForum\\xWeb\\Xml\\Generated\\GetSubscriptionMailingTypes',
      'GetSubscriptionMailingTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetSubscriptionMailingTypesResponse',
      'Authenticate' => 'netForum\\xWeb\\Xml\\Generated\\Authenticate',
      'AuthenticateResponse' => 'netForum\\xWeb\\Xml\\Generated\\AuthenticateResponse',
      'AuthenticateLdap' => 'netForum\\xWeb\\Xml\\Generated\\AuthenticateLdap',
      'AuthenticateLdapResponse' => 'netForum\\xWeb\\Xml\\Generated\\AuthenticateLdapResponse',
      'WebLogin' => 'netForum\\xWeb\\Xml\\Generated\\WebLogin',
      'WebLoginResponse' => 'netForum\\xWeb\\Xml\\Generated\\WebLoginResponse',
      'WebValidate' => 'netForum\\xWeb\\Xml\\Generated\\WebValidate',
      'WebValidateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WebValidateResponse',
      'WebLogout' => 'netForum\\xWeb\\Xml\\Generated\\WebLogout',
      'WebLogoutResponse' => 'netForum\\xWeb\\Xml\\Generated\\WebLogoutResponse',
      'GetQuery' => 'netForum\\xWeb\\Xml\\Generated\\GetQuery',
      'GetQueryResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetQueryResponse',
      'GetQueryResult' => 'netForum\\xWeb\\Xml\\Generated\\GetQueryResult',
      'GetDynamicQuery' => 'netForum\\xWeb\\Xml\\Generated\\GetDynamicQuery',
      'ArrayOfParameter' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfParameter',
      'Parameter' => 'netForum\\xWeb\\Xml\\Generated\\Parameter',
      'GetDynamicQueryResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetDynamicQueryResponse',
      'GetDynamicQueryResult' => 'netForum\\xWeb\\Xml\\Generated\\GetDynamicQueryResult',
      'GetDynamicQueryDefinition' => 'netForum\\xWeb\\Xml\\Generated\\GetDynamicQueryDefinition',
      'GetDynamicQueryDefinitionResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetDynamicQueryDefinitionResponse',
      'QueryDefinition' => 'netForum\\xWeb\\Xml\\Generated\\QueryDefinition',
      'ArrayOfQueryParameter' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfQueryParameter',
      'QueryParameter' => 'netForum\\xWeb\\Xml\\Generated\\QueryParameter',
      'ArrayOfListOption' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfListOption',
      'ListOption' => 'netForum\\xWeb\\Xml\\Generated\\ListOption',
      'ArrayOfQueryColumn' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfQueryColumn',
      'QueryColumn' => 'netForum\\xWeb\\Xml\\Generated\\QueryColumn',
      'GetAudienceList' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceList',
      'GetAudienceListResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceListResponse',
      'GetAudienceListResult' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceListResult',
      'GetAudience' => 'netForum\\xWeb\\Xml\\Generated\\GetAudience',
      'GetAudienceResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceResponse',
      'GetAudienceResult' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceResult',
      'GetAudienceDefinition' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceDefinition',
      'GetAudienceDefinitionResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetAudienceDefinitionResponse',
      'AudienceDefinition' => 'netForum\\xWeb\\Xml\\Generated\\AudienceDefinition',
      'GetQueryDefinition' => 'netForum\\xWeb\\Xml\\Generated\\GetQueryDefinition',
      'GetQueryDefinitionResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetQueryDefinitionResponse',
      'Object' => 'netForum\\xWeb\\Xml\\Generated\\Object',
      'ListTable' => 'netForum\\xWeb\\Xml\\Generated\\ListTable',
      'ArrayOfListFromTable' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfListFromTable',
      'ListFromTable' => 'netForum\\xWeb\\Xml\\Generated\\ListFromTable',
      'ArrayOfColumn' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfColumn',
      'Column' => 'netForum\\xWeb\\Xml\\Generated\\Column',
      'GetFacadeXMLSchema' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeXMLSchema',
      'GetFacadeXMLSchemaResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeXMLSchemaResponse',
      'GetFacadeXMLSchemaResult' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeXMLSchemaResult',
      'GetFacadeObjectList' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeObjectList',
      'GetFacadeObjectListResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeObjectListResponse',
      'GetFacadeObjectListResult' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeObjectListResult',
      'GetFacadeObject' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeObject',
      'GetFacadeObjectResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeObjectResponse',
      'GetFacadeObjectResult' => 'netForum\\xWeb\\Xml\\Generated\\GetFacadeObjectResult',
      'UpdateFacadeObject' => 'netForum\\xWeb\\Xml\\Generated\\UpdateFacadeObject',
      'UpdateFacadeObjectResponse' => 'netForum\\xWeb\\Xml\\Generated\\UpdateFacadeObjectResponse',
      'UpdateFacadeObjectResult' => 'netForum\\xWeb\\Xml\\Generated\\UpdateFacadeObjectResult',
      'InsertFacadeObject' => 'netForum\\xWeb\\Xml\\Generated\\InsertFacadeObject',
      'InsertFacadeObjectResponse' => 'netForum\\xWeb\\Xml\\Generated\\InsertFacadeObjectResponse',
      'InsertFacadeObjectResult' => 'netForum\\xWeb\\Xml\\Generated\\InsertFacadeObjectResult',
      'GetIndividualInformation' => 'netForum\\xWeb\\Xml\\Generated\\GetIndividualInformation',
      'GetIndividualInformationResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetIndividualInformationResponse',
      'GetIndividualInformationResult' => 'netForum\\xWeb\\Xml\\Generated\\GetIndividualInformationResult',
      'SetIndividualInformation' => 'netForum\\xWeb\\Xml\\Generated\\SetIndividualInformation',
      'oUpdateNode' => 'netForum\\xWeb\\Xml\\Generated\\oUpdateNode',
      'SetIndividualInformationResponse' => 'netForum\\xWeb\\Xml\\Generated\\SetIndividualInformationResponse',
      'SetIndividualInformationResult' => 'netForum\\xWeb\\Xml\\Generated\\SetIndividualInformationResult',
      'NewIndividualInformation' => 'netForum\\xWeb\\Xml\\Generated\\NewIndividualInformation',
      'NewIndividualInformationResponse' => 'netForum\\xWeb\\Xml\\Generated\\NewIndividualInformationResponse',
      'NewIndividualInformationResult' => 'netForum\\xWeb\\Xml\\Generated\\NewIndividualInformationResult',
      'GetOrganizationInformation' => 'netForum\\xWeb\\Xml\\Generated\\GetOrganizationInformation',
      'GetOrganizationInformationResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetOrganizationInformationResponse',
      'GetOrganizationInformationResult' => 'netForum\\xWeb\\Xml\\Generated\\GetOrganizationInformationResult',
      'SetOrganizationInformation' => 'netForum\\xWeb\\Xml\\Generated\\SetOrganizationInformation',
      'SetOrganizationInformationResponse' => 'netForum\\xWeb\\Xml\\Generated\\SetOrganizationInformationResponse',
      'SetOrganizationInformationResult' => 'netForum\\xWeb\\Xml\\Generated\\SetOrganizationInformationResult',
      'NewOrganizationInformation' => 'netForum\\xWeb\\Xml\\Generated\\NewOrganizationInformation',
      'NewOrganizationInformationResponse' => 'netForum\\xWeb\\Xml\\Generated\\NewOrganizationInformationResponse',
      'NewOrganizationInformationResult' => 'netForum\\xWeb\\Xml\\Generated\\NewOrganizationInformationResult',
      'CreateInvoice' => 'netForum\\xWeb\\Xml\\Generated\\CreateInvoice',
      'InvoiceNode' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceNode',
      'CreateInvoiceResponse' => 'netForum\\xWeb\\Xml\\Generated\\CreateInvoiceResponse',
      'CreateInvoiceResult' => 'netForum\\xWeb\\Xml\\Generated\\CreateInvoiceResult',
      'CreatePayment' => 'netForum\\xWeb\\Xml\\Generated\\CreatePayment',
      'CreatePaymentResponse' => 'netForum\\xWeb\\Xml\\Generated\\CreatePaymentResponse',
      'CreatePaymentResult' => 'netForum\\xWeb\\Xml\\Generated\\CreatePaymentResult',
      'CreateAdvocacyData' => 'netForum\\xWeb\\Xml\\Generated\\CreateAdvocacyData',
      'CreateAdvocacyDataResponse' => 'netForum\\xWeb\\Xml\\Generated\\CreateAdvocacyDataResponse',
      'GetActionTypeList' => 'netForum\\xWeb\\Xml\\Generated\\GetActionTypeList',
      'GetActionTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetActionTypeListResponse',
      'GetActionTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\GetActionTypeListResult',
      'GetActionSubTypeList' => 'netForum\\xWeb\\Xml\\Generated\\GetActionSubTypeList',
      'GetActionSubTypeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetActionSubTypeListResponse',
      'GetActionSubTypeListResult' => 'netForum\\xWeb\\Xml\\Generated\\GetActionSubTypeListResult',
      'InsertCustomerAction' => 'netForum\\xWeb\\Xml\\Generated\\InsertCustomerAction',
      'ArrayOfGuid' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfGuid',
      'InsertCustomerActionResponse' => 'netForum\\xWeb\\Xml\\Generated\\InsertCustomerActionResponse',
      'InsertActionSubType' => 'netForum\\xWeb\\Xml\\Generated\\InsertActionSubType',
      'InsertActionSubTypeResponse' => 'netForum\\xWeb\\Xml\\Generated\\InsertActionSubTypeResponse',
      'ElectronicSubscriptionGetCstListByIP' => 'netForum\\xWeb\\Xml\\Generated\\ElectronicSubscriptionGetCstListByIP',
      'ElectronicSubscriptionGetCstListByIPResponse' => 'netForum\\xWeb\\Xml\\Generated\\ElectronicSubscriptionGetCstListByIPResponse',
      'ElectronicSubscriptionGetCstListByIPResult' => 'netForum\\xWeb\\Xml\\Generated\\ElectronicSubscriptionGetCstListByIPResult',
      'ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer',
      'ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResponse',
      'ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResult',
      'ExecuteMethod' => 'netForum\\xWeb\\Xml\\Generated\\ExecuteMethod',
      'ExecuteMethodResponse' => 'netForum\\xWeb\\Xml\\Generated\\ExecuteMethodResponse',
      'ExecuteMethodResult' => 'netForum\\xWeb\\Xml\\Generated\\ExecuteMethodResult',
      'GetVersion' => 'netForum\\xWeb\\Xml\\Generated\\GetVersion',
      'GetVersionResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetVersionResponse',
      'xWebVersion' => 'netForum\\xWeb\\Xml\\Generated\\xWebVersion',
      'VersionClass' => 'netForum\\xWeb\\Xml\\Generated\\VersionClass',
      'TestConnection' => 'netForum\\xWeb\\Xml\\Generated\\TestConnection',
      'TestConnectionResponse' => 'netForum\\xWeb\\Xml\\Generated\\TestConnectionResponse',
      'GetTimeZones' => 'netForum\\xWeb\\Xml\\Generated\\GetTimeZones',
      'GetTimeZonesResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetTimeZonesResponse',
      'GetTimeZonesResult' => 'netForum\\xWeb\\Xml\\Generated\\GetTimeZonesResult',
      'MergeCustomers' => 'netForum\\xWeb\\Xml\\Generated\\MergeCustomers',
      'ArrayOfMergeCustomer' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfMergeCustomer',
      'MergeCustomer' => 'netForum\\xWeb\\Xml\\Generated\\MergeCustomer',
      'ArrayOfString1' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfString1',
      'MergeCustomersResponse' => 'netForum\\xWeb\\Xml\\Generated\\MergeCustomersResponse',
      'MergeCustomerResults' => 'netForum\\xWeb\\Xml\\Generated\\MergeCustomerResults',
      'ArrayOfMergeCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfMergeCustomerResult',
      'MergeCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\MergeCustomerResult',
      'ArrayOfModuleResult' => 'netForum\\xWeb\\Xml\\Generated\\ArrayOfModuleResult',
      'ModuleResult' => 'netForum\\xWeb\\Xml\\Generated\\ModuleResult',
      'GetMergeCustomerModules' => 'netForum\\xWeb\\Xml\\Generated\\GetMergeCustomerModules',
      'GetMergeCustomerModulesResponse' => 'netForum\\xWeb\\Xml\\Generated\\GetMergeCustomerModulesResponse',
      'GetMergeCustomerModulesResult' => 'netForum\\xWeb\\Xml\\Generated\\GetMergeCustomerModulesResult',
      'WEBGetSystemOptions' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetSystemOptions',
      'WEBGetSystemOptionsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetSystemOptionsResponse',
      'WEBGetSystemOptionsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetSystemOptionsResult',
      'WEBUpdateSystemOption' => 'netForum\\xWeb\\Xml\\Generated\\WEBUpdateSystemOption',
      'WEBUpdateSystemOptionResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBUpdateSystemOptionResponse',
      'WEBGetAllRoles' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetAllRoles',
      'WEBGetAllRolesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetAllRolesResponse',
      'WEBGetAllRolesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetAllRolesResult',
      'WEBFindUsersInRole' => 'netForum\\xWeb\\Xml\\Generated\\WEBFindUsersInRole',
      'WEBFindUsersInRoleResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBFindUsersInRoleResponse',
      'WEBFindUsersInRoleResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBFindUsersInRoleResult',
      'WEBGetRolesForUser' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetRolesForUser',
      'WEBGetRolesForUserResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetRolesForUserResponse',
      'WEBGetRolesForUserResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetRolesForUserResult',
      'WEBGetUsersInRole' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetUsersInRole',
      'WEBGetUsersInRoleResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetUsersInRoleResponse',
      'WEBGetUsersInRoleResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBGetUsersInRoleResult',
      'WEBIsUserInRole' => 'netForum\\xWeb\\Xml\\Generated\\WEBIsUserInRole',
      'WEBIsUserInRoleResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBIsUserInRoleResponse',
      'WEBRoleExists' => 'netForum\\xWeb\\Xml\\Generated\\WEBRoleExists',
      'WEBRoleExistsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBRoleExistsResponse',
      'WEBWebUserChangePassword' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserChangePassword',
      'WEBWebUserChangePasswordResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserChangePasswordResponse',
      'WEBWebUserCreate' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserCreate',
      'WEBWebUserCreateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserCreateResponse',
      'WEBWebUserUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserUpdate',
      'WEBWebUserUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserUpdateResponse',
      'WEBWebUserFindUsersByEmail' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByEmail',
      'WEBWebUserFindUsersByEmailResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByEmailResponse',
      'WEBWebUserFindUsersByEmailResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByEmailResult',
      'WEBWebUserFindUsersByDomain' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByDomain',
      'WEBWebUserFindUsersByDomainResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByDomainResponse',
      'WEBWebUserFindUsersByDomainResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByDomainResult',
      'WEBWebUserFindOrganizationsByDomain' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindOrganizationsByDomain',
      'WEBWebUserFindOrganizationsByDomainResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindOrganizationsByDomainResponse',
      'WEBWebUserFindOrganizationsByDomainResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindOrganizationsByDomainResult',
      'WEBWebUserFindUsersByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByName',
      'WEBWebUserFindUsersByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByNameResponse',
      'WEBWebUserFindUsersByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByNameResult',
      'WEBWebUserFindUsersByUserNameFirstNameLastName' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByUserNameFirstNameLastName',
      'WEBWebUserFindUsersByUserNameFirstNameLastNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByUserNameFirstNameLastNameResponse',
      'WEBWebUserFindUsersByUserNameFirstNameLastNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserFindUsersByUserNameFirstNameLastNameResult',
      'WEBWebUserGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserGet',
      'WEBWebUserGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserGetResponse',
      'WEBWebUserGetByRecno_Custom' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserGetByRecno_Custom',
      'WEBWebUserGetByRecno_CustomResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserGetByRecno_CustomResponse',
      'WEBWebUserUnlock' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserUnlock',
      'WEBWebUserUnlockResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserUnlockResponse',
      'WEBWebUserLock' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLock',
      'WEBWebUserLockResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLockResponse',
      'WEBWebUserLogin' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLogin',
      'WEBWebUserLoginResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginResponse',
      'WEBWebUserLoginAndRememberMe' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginAndRememberMe',
      'WEBWebUserLoginAndRememberMeResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginAndRememberMeResponse',
      'WEBWebUserLoginByRememberMe' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginByRememberMe',
      'WEBWebUserLoginByRememberMeResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginByRememberMeResponse',
      'WEBWebUserValidateLogin' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateLogin',
      'WEBWebUserValidateLoginResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateLoginResponse',
      'WEBWebUserValidateToken' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateToken',
      'WEBWebUserValidateTokenResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateTokenResponse',
      'WEBWebUserLogin_Custom' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLogin_Custom',
      'WEBWebUserLogin_CustomResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLogin_CustomResponse',
      'WEBWebUserLoginByRecno_Custom' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginByRecno_Custom',
      'WEBWebUserLoginByRecno_CustomResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserLoginByRecno_CustomResponse',
      'WEBWebUserValidateLogin_Custom' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateLogin_Custom',
      'WEBWebUserValidateLogin_CustomResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateLogin_CustomResponse',
      'WEBWebUserValidateToken_Custom' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateToken_Custom',
      'WEBWebUserValidateToken_CustomResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBWebUserValidateToken_CustomResponse',
      'WEBIndividualGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGet',
      'WEBIndividualGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetResponse',
      'WEBIndividualUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualUpdate',
      'WEBIndividualUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualUpdateResponse',
      'WEBIndividualInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualInsert',
      'WEBIndividualInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualInsertResponse',
      'WEBIndividualGetPrefixes' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetPrefixes',
      'WEBIndividualGetPrefixesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetPrefixesResponse',
      'WEBIndividualGetPrefixesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetPrefixesResult',
      'WEBIndividualGetSuffixes' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetSuffixes',
      'WEBIndividualGetSuffixesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetSuffixesResponse',
      'WEBIndividualGetSuffixesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBIndividualGetSuffixesResult',
      'WEBAddressGetTypes' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetTypes',
      'WEBAddressGetTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetTypesResponse',
      'WEBAddressGetTypesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetTypesResult',
      'WEBAddressGetCountries' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetCountries',
      'WEBAddressGetCountriesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetCountriesResponse',
      'WEBAddressGetCountriesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetCountriesResult',
      'WEBAddressGetStates' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetStates',
      'WEBAddressGetStatesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetStatesResponse',
      'WEBAddressGetStatesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetStatesResult',
      'WEBAddressGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGet',
      'WEBAddressGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetResponse',
      'WEBAddressUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressUpdate',
      'WEBAddressUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressUpdateResponse',
      'WEBAddressInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressInsert',
      'WEBAddressInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressInsertResponse',
      'WEBAddressGetAddressesByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetAddressesByCustomer',
      'WEBAddressGetAddressesByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetAddressesByCustomerResponse',
      'WEBAddressGetAddressesByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBAddressGetAddressesByCustomerResult',
      'WEBPhoneGetTypes' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetTypes',
      'WEBPhoneGetTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetTypesResponse',
      'WEBPhoneGetTypesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetTypesResult',
      'WEBPhoneGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGet',
      'WEBPhoneGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetResponse',
      'WEBPhoneUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneUpdate',
      'WEBPhoneUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneUpdateResponse',
      'WEBPhoneInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneInsert',
      'WEBPhoneInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneInsertResponse',
      'WEBPhoneGetPhonesByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetPhonesByCustomer',
      'WEBPhoneGetPhonesByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetPhonesByCustomerResponse',
      'WEBPhoneGetPhonesByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBPhoneGetPhonesByCustomerResult',
      'WEBFaxGetTypes' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetTypes',
      'WEBFaxGetTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetTypesResponse',
      'WEBFaxGetTypesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetTypesResult',
      'WEBFaxGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGet',
      'WEBFaxGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetResponse',
      'WEBFaxUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxUpdate',
      'WEBFaxUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxUpdateResponse',
      'WEBFaxInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxInsert',
      'WEBFaxInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxInsertResponse',
      'WEBFaxGetFaxesByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetFaxesByCustomer',
      'WEBFaxGetFaxesByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetFaxesByCustomerResponse',
      'WEBFaxGetFaxesByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBFaxGetFaxesByCustomerResult',
      'WEBEmailGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailGet',
      'WEBEmailGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailGetResponse',
      'WEBEmailUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailUpdate',
      'WEBEmailUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailUpdateResponse',
      'WEBEmailInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailInsert',
      'WEBEmailInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailInsertResponse',
      'WEBEmailGetEmailsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailGetEmailsByCustomer',
      'WEBEmailGetEmailsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailGetEmailsByCustomerResponse',
      'WEBEmailGetEmailsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBEmailGetEmailsByCustomerResult',
      'WEBOrganizationGetTypes' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationGetTypes',
      'WEBOrganizationGetTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationGetTypesResponse',
      'WEBOrganizationGetTypesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationGetTypesResult',
      'WEBOrganizationGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationGet',
      'WEBOrganizationGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationGetResponse',
      'WEBOrganizationUpdate' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationUpdate',
      'WEBOrganizationUpdateResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationUpdateResponse',
      'WEBOrganizationInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationInsert',
      'WEBOrganizationInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBOrganizationInsertResponse',
      'WEBContactRequestInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestInsert',
      'WEBContactRequestInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestInsertResponse',
      'WEBContactRequestGetOriginations' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetOriginations',
      'WEBContactRequestGetOriginationsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetOriginationsResponse',
      'WEBContactRequestGetOriginationsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetOriginationsResult',
      'WEBContactRequestGetPriorities' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetPriorities',
      'WEBContactRequestGetPrioritiesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetPrioritiesResponse',
      'WEBContactRequestGetPrioritiesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetPrioritiesResult',
      'WEBContactRequestGetRequestTypes' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetRequestTypes',
      'WEBContactRequestGetRequestTypesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetRequestTypesResponse',
      'WEBContactRequestGetRequestTypesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetRequestTypesResult',
      'WEBContactRequestGetRequestTypeReasons' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetRequestTypeReasons',
      'WEBContactRequestGetRequestTypeReasonsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetRequestTypeReasonsResponse',
      'WEBContactRequestGetRequestTypeReasonsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetRequestTypeReasonsResult',
      'WEBContactRequestGetStatuses' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetStatuses',
      'WEBContactRequestGetStatusesResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetStatusesResponse',
      'WEBContactRequestGetStatusesResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBContactRequestGetStatusesResult',
      'WEBActivityGetPurchasedProductsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedProductsByCustomer',
      'WEBActivityGetPurchasedProductsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedProductsByCustomerResponse',
      'WEBActivityGetPurchasedProductsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedProductsByCustomerResult',
      'WEBActivityGetPurchasedEventsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedEventsByCustomer',
      'WEBActivityGetPurchasedEventsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedEventsByCustomerResponse',
      'WEBActivityGetPurchasedEventsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedEventsByCustomerResult',
      'WEBActivityAlreadyRegisteredForEvent' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityAlreadyRegisteredForEvent',
      'WEBActivityAlreadyRegisteredForEventResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityAlreadyRegisteredForEventResponse',
      'WEBActivityNumberOfRegisteredGuests' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityNumberOfRegisteredGuests',
      'WEBActivityNumberOfRegisteredGuestsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityNumberOfRegisteredGuestsResponse',
      'WEBActivityGetPurchasedMembershipsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedMembershipsByCustomer',
      'WEBActivityGetPurchasedMembershipsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedMembershipsByCustomerResponse',
      'WEBActivityGetPurchasedMembershipsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedMembershipsByCustomerResult',
      'WEBActivityGetPurchasedChapterMembershipsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedChapterMembershipsByCustomer',
      'WEBActivityGetPurchasedChapterMembershipsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedChapterMembershipsByCustomerResponse',
      'WEBActivityGetPurchasedChapterMembershipsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedChapterMembershipsByCustomerResult',
      'WEBActivityGetPurchasedDownoadableProductsByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedDownoadableProductsByCustomer',
      'WEBActivityGetPurchasedDownoadableProductsByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedDownoadableProductsByCustomerResponse',
      'WEBActivityGetPurchasedDownoadableProductsByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetPurchasedDownoadableProductsByCustomerResult',
      'WEBActivityGetRegistrantEvents' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantEvents',
      'WEBActivityGetRegistrantEventsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantEventsResponse',
      'WEBActivityGetRegistrantEventsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantEventsResult',
      'WEBActivityGetRegistrantSessions' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantSessions',
      'WEBActivityGetRegistrantSessionsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantSessionsResponse',
      'WEBActivityGetRegistrantSessionsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantSessionsResult',
      'WEBActivityGetRegistrantTracks' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantTracks',
      'WEBActivityGetRegistrantTracksResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantTracksResponse',
      'WEBActivityGetRegistrantTracksResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantTracksResult',
      'WEBActivityGetRegistrantGuests' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantGuests',
      'WEBActivityGetRegistrantGuestsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantGuestsResponse',
      'WEBActivityGetRegistrantGuestsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBActivityGetRegistrantGuestsResult',
      'WEBCommitteeGetCommitteeList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeList',
      'WEBCommitteeGetCommitteeListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeListResponse',
      'WEBCommitteeGetCommitteeListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeListResult',
      'WEBCommitteeGetCommitteeListByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeListByName',
      'WEBCommitteeGetCommitteeListByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeListByNameResponse',
      'WEBCommitteeGetCommitteeListByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeListByNameResult',
      'WEBCommitteeGetCommitteesByCustomer' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteesByCustomer',
      'WEBCommitteeGetCommitteesByCustomerResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteesByCustomerResponse',
      'WEBCommitteeGetCommitteesByCustomerResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteesByCustomerResult',
      'WEBCommitteeGetSubCommitteeListByCommittee' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetSubCommitteeListByCommittee',
      'WEBCommitteeGetSubCommitteeListByCommitteeResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetSubCommitteeListByCommitteeResponse',
      'WEBCommitteeGetSubCommitteeListByCommitteeResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetSubCommitteeListByCommitteeResult',
      'WEBCommitteeGetMembers' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetMembers',
      'WEBCommitteeGetMembersResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetMembersResponse',
      'WEBCommitteeGetMembersResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetMembersResult',
      'WEBCommitteeGetDocuments' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetDocuments',
      'WEBCommitteeGetDocumentsResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetDocumentsResponse',
      'WEBCommitteeGetDocumentsResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetDocumentsResult',
      'WEBCommitteeGetCommitteeByKey' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeByKey',
      'WEBCommitteeGetCommitteeByKeyResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeByKeyResponse',
      'WEBCommitteeGetCommitteeByKeyResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetCommitteeByKeyResult',
      'WEBCommitteeGet' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGet',
      'WEBCommitteeGetResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetResponse',
      'WEBCommitteeNominationInsert' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeNominationInsert',
      'WEBCommitteeNominationInsertResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeNominationInsertResponse',
      'WEBCommitteeGetPositionList' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetPositionList',
      'WEBCommitteeGetPositionListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetPositionListResponse',
      'WEBCommitteeGetPositionListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBCommitteeGetPositionListResult',
      'WEBMemberDirectorySearch' => 'netForum\\xWeb\\Xml\\Generated\\WEBMemberDirectorySearch',
      'WEBMemberDirectorySearchResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBMemberDirectorySearchResponse',
      'WEBMemberDirectorySearchResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBMemberDirectorySearchResult',
      'WEBMemberDirectoryOrganizationSearch' => 'netForum\\xWeb\\Xml\\Generated\\WEBMemberDirectoryOrganizationSearch',
      'WEBMemberDirectoryOrganizationSearchResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBMemberDirectoryOrganizationSearchResponse',
      'WEBMemberDirectoryOrganizationSearchResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBMemberDirectoryOrganizationSearchResult',
      'WEBChaptersGetChapterList' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterList',
      'WEBChaptersGetChapterListResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterListResponse',
      'WEBChaptersGetChapterListResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterListResult',
      'WEBChaptersGetChapterListByName' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterListByName',
      'WEBChaptersGetChapterListByNameResponse' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterListByNameResponse',
      'WEBChaptersGetChapterListByNameResult' => 'netForum\\xWeb\\Xml\\Generated\\WEBChaptersGetChapterListByNameResult',
      'EventsRegistrantSessionType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSessionType',
      'EventsRegistrantSession_ev_registration_session_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSession_ev_registration_session_DataObjectType',
      'EventsRegistrantSession_ev_registration_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSession_ev_registration_DataObjectType',
      'EventsRegistrantSession_ev_session_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSession_ev_session_DataObjectType',
      'EventsRegistrantSession_ev_track_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSession_ev_track_DataObjectType',
      'EventsRegistrantSession_co_customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSession_co_customer_DataObjectType',
      'EventsRegistrantSession_ev_event_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantSession_ev_event_DataObjectType',
      'InvoiceDetailAdditionalType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetailAdditionalType',
      'InvoiceDetailAdditional_Invoice_Detail_Additional_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetailAdditional_Invoice_Detail_Additional_DataObjectType',
      'InvoiceDetailAdditional_Price_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetailAdditional_Price_DataObjectType',
      'InvoiceDetailType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetailType',
      'InvoiceDetail_Invoice_Detail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Invoice_Detail_DataObjectType',
      'InvoiceDetail_Invoice_Detail_Term_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Invoice_Detail_Term_DataObjectType',
      'InvoiceDetail_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Invoice_DataObjectType',
      'InvoiceDetail_Price_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Price_DataObjectType',
      'InvoiceDetail_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Product_DataObjectType',
      'InvoiceDetail_ShipToCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_ShipToCustomer_DataObjectType',
      'InvoiceDetail_SoldToCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_SoldToCustomer_DataObjectType',
      'InvoiceDetail_Shipping_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Shipping_Address_DataObjectType',
      'InvoiceDetail_Shipping_Address_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Shipping_Address_Type_DataObjectType',
      'InvoiceDetail_Invoice_Detail_Additional_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Invoice_Detail_Additional_DataObjectType',
      'InvoiceDetail_Package_Component_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Package_Component_DataObjectType',
      'InvoiceDetail_Bundle_Component_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Bundle_Component_DataObjectType',
      'InvoiceDetail_Product_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Product_Type_DataObjectType',
      'InvoiceDetail_Discount_Product_X_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Discount_Product_X_Product_DataObjectType',
      'InvoiceDetail_Billing_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Billing_Address_DataObjectType',
      'InvoiceDetail_Currency_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Currency_DataObjectType',
      'InvoiceDetail_Order_Detail_Schedule_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Order_Detail_Schedule_DataObjectType',
      'InvoiceDetail_Invoice_Detail_IP_Range_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Invoice_Detail_IP_Range_DataObjectType',
      'InvoiceDetail_Product_Type_Social_Messages_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Product_Type_Social_Messages_DataObjectType',
      'InvoiceDetail_Invoice_Detail_Liability_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceDetail_Invoice_Detail_Liability_DataObjectType',
      'Invoice_Detail_AdditionalCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Detail_AdditionalCollectionType',
      'EventsRegistrantType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantType',
      'EventsRegistrant_Registrant_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Registrant_DataObjectType',
      'EventsRegistrant_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Individual_DataObjectType',
      'EventsRegistrant_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Customer_DataObjectType',
      'EventsRegistrant_Individual_X_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Individual_X_Organization_DataObjectType',
      'EventsRegistrant_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Organization_DataObjectType',
      'EventsRegistrant_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Address_XRef_DataObjectType',
      'EventsRegistrant_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Address_DataObjectType',
      'EventsRegistrant_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Email_DataObjectType',
      'EventsRegistrant_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Website_DataObjectType',
      'EventsRegistrant_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Messaging_DataObjectType',
      'EventsRegistrant_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Phone_XRef_DataObjectType',
      'EventsRegistrant_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Phone_DataObjectType',
      'EventsRegistrant_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Fax_XRef_DataObjectType',
      'EventsRegistrant_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Fax_DataObjectType',
      'EventsRegistrant_Event_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Event_DataObjectType',
      'EventsRegistrant_Event_Location_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Event_Location_DataObjectType',
      'EventsRegistrant_Location_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Location_DataObjectType',
      'EventsRegistrant_Location_Customer_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Location_Customer_Address_DataObjectType',
      'EventsRegistrant_Location_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Location_Address_DataObjectType',
      'EventsRegistrant_Location_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Location_Phone_XRef_DataObjectType',
      'EventsRegistrant_Location_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Location_Website_DataObjectType',
      'EventsRegistrant_Event_Location_Room_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Event_Location_Room_Type_DataObjectType',
      'EventsRegistrant_Room_Request_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Room_Request_DataObjectType',
      'EventsRegistrant_Registrant_Housing_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Registrant_Housing_DataObjectType',
      'EventsRegistrant_RegistrantGuest_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_RegistrantGuest_DataObjectType',
      'EventsRegistrant_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Invoice_DataObjectType',
      'EventsRegistrant_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Payment_DataObjectType',
      'EventsRegistrant_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Payment_Info_DataObjectType',
      'EventsRegistrant_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Payment_Method_DataObjectType',
      'EventsRegistrant_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Product_DataObjectType',
      'EventsRegistrant_Price_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Price_DataObjectType',
      'EventsRegistrant_Registrant_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Registrant_Type_DataObjectType',
      'EventsRegistrant_Registrant_Custom_Demographics_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Registrant_Custom_Demographics_DataObjectType',
      'EventsRegistrant_Gift_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Gift_DataObjectType',
      'EventsRegistrant_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_source_code_DataObjectType',
      'EventsRegistrant_Registrant_Session_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrant_Registrant_Session_DataObjectType',
      'Registrant_SessionCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\Registrant_SessionCollectionType',
      'Invoice_DetailCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_DetailCollectionType',
      'Additional_Invoice_DetailCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\Additional_Invoice_DetailCollectionType',
      'CommitteeNominationsType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominationsType',
      'CommitteeNominations_Nominations_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Nominations_DataObjectType',
      'CommitteeNominations_Nominee_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Nominee_DataObjectType',
      'CommitteeNominations_Nominated_By_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Nominated_By_DataObjectType',
      'CommitteeNominations_Committee_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Committee_DataObjectType',
      'CommitteeNominations_Committee_Nomination_Status_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Committee_Nomination_Status_DataObjectType',
      'CommitteeNominations_Committee_Position_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Committee_Position_DataObjectType',
      'CommitteeNominations_Committee_Position_Codes_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Committee_Position_Codes_DataObjectType',
      'CommitteeNominations_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Address_DataObjectType',
      'CommitteeNominations_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeNominations_Individual_DataObjectType',
      'WebUserType' => 'netForum\\xWeb\\Xml\\Generated\\WebUserType',
      'WebUser_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Individual_DataObjectType',
      'WebUser_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Customer_DataObjectType',
      'WebUser_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Email_DataObjectType',
      'WebUser_Business_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Business_Address_DataObjectType',
      'WebUser_Business_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Business_Phone_DataObjectType',
      'WebUser_Business_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Business_Phone_XRef_DataObjectType',
      'WebUser_Business_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Business_Fax_DataObjectType',
      'WebUser_Business_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\WebUser_Business_Fax_XRef_DataObjectType',
      'CustomerPhoneType' => 'netForum\\xWeb\\Xml\\Generated\\CustomerPhoneType',
      'IndividualPhone_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualPhone_Phone_XRef_DataObjectType',
      'IndividualPhone_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualPhone_Customer_DataObjectType',
      'IndividualPhone_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualPhone_Phone_DataObjectType',
      'IndividualPhone_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualPhone_Country_DataObjectType',
      'ChapterType' => 'netForum\\xWeb\\Xml\\Generated\\ChapterType',
      'Chapter_Chapter_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Chapter_DataObjectType',
      'Chapter_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Customer_DataObjectType',
      'Chapter_Association_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Association_DataObjectType',
      'Chapter_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Email_DataObjectType',
      'Chapter_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Website_DataObjectType',
      'Chapter_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Messaging_DataObjectType',
      'Chapter_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Phone_DataObjectType',
      'Chapter_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Phone_XRef_DataObjectType',
      'Chapter_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Fax_DataObjectType',
      'Chapter_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Fax_XRef_DataObjectType',
      'Chapter_Address_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Address_1_DataObjectType',
      'Chapter_Address_XRef_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Address_XRef_1_DataObjectType',
      'Chapter_Address_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Address_Country_DataObjectType',
      'Chapter_Billing_Address_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Billing_Address_1_DataObjectType',
      'Chapter_Billing_Address_XRef_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Billing_Address_XRef_1_DataObjectType',
      'Chapter_Primary_Contact_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Primary_Contact_DataObjectType',
      'Chapter_Primary_Contact_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Primary_Contact_XRef_DataObjectType',
      'Chapter_Prim._Contact_Adr_Xref_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Prim_Contact_Adr_Xref_DataObjectType',
      'Chapter_Prim._Contact_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Prim_Contact_Address_DataObjectType',
      'Chapter_Address_Change_Log_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Chapter_Address_Change_Log_DataObjectType',
      'mb_membershipType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membershipType',
      'mb_membership_Membership_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Membership_DataObjectType',
      'mb_membership_Chapter_Membership_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Chapter_Membership_DataObjectType',
      'mb_membership_Change_Membership_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Change_Membership_DataObjectType',
      'mb_membership_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Invoice_DataObjectType',
      'mb_membership_Batch_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Batch_DataObjectType',
      'mb_membership_Inovice_Terms_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Inovice_Terms_DataObjectType',
      'mb_membership_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Individual_DataObjectType',
      'mb_membership_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Customer_DataObjectType',
      'mb_membership_Customer_Lookup_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Customer_Lookup_DataObjectType',
      'mb_membership_Referring_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Referring_Customer_DataObjectType',
      'mb_membership_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Organization_DataObjectType',
      'mb_membership_Membership_Invoices_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Membership_Invoices_DataObjectType',
      'mb_membership_Chapter_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Chapter_DataObjectType',
      'mb_membership_Member_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Member_Type_DataObjectType',
      'mb_membership_Membership_Audit_Trail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Membership_Audit_Trail_DataObjectType',
      'mb_membership_Member_Dues_History_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Member_Dues_History_DataObjectType',
      'mb_membership_Dues_Variables_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Dues_Variables_DataObjectType',
      'mb_membership_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Payment_DataObjectType',
      'mb_membership_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Payment_Info_DataObjectType',
      'mb_membership_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Payment_Method_DataObjectType',
      'mb_membership_Association_Package_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Association_Package_DataObjectType',
      'mb_membership_Association_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Association_DataObjectType',
      'mb_membership_Bundle_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Bundle_DataObjectType',
      'mb_membership_Installment_Billing_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Installment_Billing_DataObjectType',
      'mb_membership_Package_Component_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Package_Component_DataObjectType',
      'mb_membership_Package_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Package_DataObjectType',
      'mb_membership_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Product_DataObjectType',
      'mb_membership_Chapter_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_Chapter_Product_DataObjectType',
      'mb_membership_CustomerAddress_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_CustomerAddress_DataObjectType',
      'mb_membership_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\mb_membership_source_code_DataObjectType',
      'EventsRegistrantGroupType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroupType',
      'EventsRegistrantGroup_Group_Registration_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Group_Registration_DataObjectType',
      'EventsRegistrantGroup_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Organization_DataObjectType',
      'EventsRegistrantGroup_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Customer_DataObjectType',
      'EventsRegistrantGroup_Individual_X_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Individual_X_Organization_DataObjectType',
      'EventsRegistrantGroup_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Individual_DataObjectType',
      'EventsRegistrantGroup_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Address_DataObjectType',
      'EventsRegistrantGroup_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Address_XRef_DataObjectType',
      'EventsRegistrantGroup_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Email_DataObjectType',
      'EventsRegistrantGroup_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Website_DataObjectType',
      'EventsRegistrantGroup_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Messaging_DataObjectType',
      'EventsRegistrantGroup_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Phone_DataObjectType',
      'EventsRegistrantGroup_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Phone_XRef_DataObjectType',
      'EventsRegistrantGroup_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Fax_DataObjectType',
      'EventsRegistrantGroup_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Fax_XRef_DataObjectType',
      'EventsRegistrantGroup_Event_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Event_DataObjectType',
      'EventsRegistrantGroup_Event_Location_Room_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Event_Location_Room_Type_DataObjectType',
      'EventsRegistrantGroup_Room_Request_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Room_Request_DataObjectType',
      'EventsRegistrantGroup_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Invoice_DataObjectType',
      'EventsRegistrantGroup_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Payment_DataObjectType',
      'EventsRegistrantGroup_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Payment_Info_DataObjectType',
      'EventsRegistrantGroup_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Payment_Method_DataObjectType',
      'EventsRegistrantGroup_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_source_code_DataObjectType',
      'EventsRegistrantGroup_Registrant_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\EventsRegistrantGroup_Registrant_DataObjectType',
      'FundraisingGiftType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGiftType',
      'FundraisingGift_Gift_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Gift_DataObjectType',
      'FundraisingGift_Constituent_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Constituent_DataObjectType',
      'FundraisingGift_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Customer_DataObjectType',
      'FundraisingGift_Indivdiual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Indivdiual_DataObjectType',
      'FundraisingGift_Ind_Business_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Address_DataObjectType',
      'FundraisingGift_Ind_Business_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Address_XRef_DataObjectType',
      'FundraisingGift_Ind_Business_Address_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Address_Country_DataObjectType',
      'FundraisingGift_Ind_Business_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Phone_DataObjectType',
      'FundraisingGift_Ind_Business_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Phone_XRef_DataObjectType',
      'FundraisingGift_Ind_Business_Phone_country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Phone_country_DataObjectType',
      'FundraisingGift_Ind_Business_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Fax_DataObjectType',
      'FundraisingGift_Ind_Business_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Fax_XRef_DataObjectType',
      'FundraisingGift_Ind_Business_Fax_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Business_Fax_Country_DataObjectType',
      'FundraisingGift_Ind_eMail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_eMail_DataObjectType',
      'FundraisingGift_Ind_URL_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_URL_DataObjectType',
      'FundraisingGift_Ind_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Ind_Messaging_DataObjectType',
      'FundraisingGift_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Organization_DataObjectType',
      'FundraisingGift_Org_Business_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Address_DataObjectType',
      'FundraisingGift_Org_Business_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Address_XRef_DataObjectType',
      'FundraisingGift_Org_Business_Address_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Address_Country_DataObjectType',
      'FundraisingGift_Org_Business_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Phone_DataObjectType',
      'FundraisingGift_Org_Business_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Phone_XRef_DataObjectType',
      'FundraisingGift_Org_Business_Phone_country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Phone_country_DataObjectType',
      'FundraisingGift_Org_Business_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Fax_DataObjectType',
      'FundraisingGift_Org_Business_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Fax_XRef_DataObjectType',
      'FundraisingGift_Org_Business_Fax_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Business_Fax_Country_DataObjectType',
      'FundraisingGift_Org_eMail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_eMail_DataObjectType',
      'FundraisingGift_Org_URL_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_URL_DataObjectType',
      'FundraisingGift_Org_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Org_Messaging_DataObjectType',
      'FundraisingGift_Pledge_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Pledge_DataObjectType',
      'FundraisingGift_Premium_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Premium_DataObjectType',
      'FundraisingGift_Product_Code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Product_Code_DataObjectType',
      'FundraisingGift_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Product_DataObjectType',
      'FundraisingGift_Campaign_Code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Campaign_Code_DataObjectType',
      'FundraisingGift_Fund_Code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Fund_Code_DataObjectType',
      'FundraisingGift_Appeal_Code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Appeal_Code_DataObjectType',
      'FundraisingGift_Package_Code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Package_Code_DataObjectType',
      'FundraisingGift_Order_Detail_Schedule_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Order_Detail_Schedule_DataObjectType',
      'FundraisingGift_Recognition_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Recognition_Customer_DataObjectType',
      'FundraisingGift_Tribute_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Tribute_DataObjectType',
      'FundraisingGift_Tribute_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Tribute_Customer_DataObjectType',
      'FundraisingGift_Gift_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Gift_Type_DataObjectType',
      'FundraisingGift_Recogntion_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Recogntion_Type_DataObjectType',
      'FundraisingGift_Contributor_Gift_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Contributor_Gift_DataObjectType',
      'FundraisingGift_Solicitor_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Solicitor_Customer_DataObjectType',
      'FundraisingGift_Source_Code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Source_Code_DataObjectType',
      'FundraisingGift_ComplementaryGifts_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_ComplementaryGifts_DataObjectType',
      'FundraisingGift_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Invoice_DataObjectType',
      'FundraisingGift_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Payment_DataObjectType',
      'FundraisingGift_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Payment_Info_DataObjectType',
      'FundraisingGift_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Payment_Method_DataObjectType',
      'FundraisingGift_Installment_Billing_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Installment_Billing_DataObjectType',
      'FundraisingGift_Gift_Price_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Gift_Price_DataObjectType',
      'FundraisingGift_Event_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Event_DataObjectType',
      'FundraisingGift_Registrant_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Registrant_DataObjectType',
      'FundraisingGift_Registrant_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\FundraisingGift_Registrant_Customer_DataObjectType',
      'InvoiceType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceType',
      'Invoice_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Invoice_DataObjectType',
      'Invoice_Invoice_Detail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Invoice_Detail_DataObjectType',
      'Invoice_Claim_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Claim_DataObjectType',
      'Invoice_Default_Shipping_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Default_Shipping_Address_DataObjectType',
      'Invoice_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Payment_DataObjectType',
      'Invoice_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Payment_Info_DataObjectType',
      'Invoice_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Payment_Method_DataObjectType',
      'Invoice_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Customer_DataObjectType',
      'Invoice_Billing_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Billing_Address_DataObjectType',
      'Invoice_Billing_Adr_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Billing_Adr_DataObjectType',
      'Invoice_Price_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Price_DataObjectType',
      'Invoice_Batch_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Batch_DataObjectType',
      'Invoice_BillToCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_BillToCustomer_DataObjectType',
      'Invoice_BillToIndividual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_BillToIndividual_DataObjectType',
      'Invoice_InstallmentBilling_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_InstallmentBilling_DataObjectType',
      'Invoice_Company-Business_Unit_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_CompanyBusiness_Unit_DataObjectType',
      'Invoice_Credit_Available_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Credit_Available_DataObjectType',
      'Invoice_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_source_code_DataObjectType',
      'Invoice_Sales_Opportunity_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_Sales_Opportunity_DataObjectType',
      'Invoice_currency_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Invoice_currency_DataObjectType',
      'ExhibitorBoothNewType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNewType',
      'ExhibitorBoothNew_Exhibitor_Booth_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Exhibitor_Booth_DataObjectType',
      'ExhibitorBoothNew_ExhibitorCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_ExhibitorCustomer_DataObjectType',
      'ExhibitorBoothNew_Exhibitor_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Exhibitor_DataObjectType',
      'ExhibitorBoothNew_Priority_Point_Detail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Priority_Point_Detail_DataObjectType',
      'ExhibitorBoothNew_Booth_Complement_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Booth_Complement_DataObjectType',
      'ExhibitorBoothNew_Exhibit_Show_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Exhibit_Show_DataObjectType',
      'ExhibitorBoothNew_Booth_Fee_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Booth_Fee_DataObjectType',
      'ExhibitorBoothNew_Exhibit_Booth_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Exhibit_Booth_DataObjectType',
      'ExhibitorBoothNew_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Invoice_DataObjectType',
      'ExhibitorBoothNew_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Payment_DataObjectType',
      'ExhibitorBoothNew_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Payment_Info_DataObjectType',
      'ExhibitorBoothNew_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Payment_Method_DataObjectType',
      'ExhibitorBoothNew_Product_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Product_DataObjectType',
      'ExhibitorBoothNew_Booth_Number_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Booth_Number_DataObjectType',
      'ExhibitorBoothNew_Booth_Type_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Booth_Type_DataObjectType',
      'ExhibitorBoothNew_Booth_Category_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorBoothNew_Booth_Category_DataObjectType',
      'ExhibitorNewType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNewType',
      'ExhibitorNew_Exhibitor_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibitor_DataObjectType',
      'ExhibitorNew_Exhibit_Show_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibit_Show_DataObjectType',
      'ExhibitorNew_Booth_Person_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Booth_Person_DataObjectType',
      'ExhibitorNew_Exhibitor_Booth_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibitor_Booth_DataObjectType',
      'ExhibitorNew_booth_complement_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_booth_complement_DataObjectType',
      'ExhibitorNew_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Customer_DataObjectType',
      'ExhibitorNew_Contact_Person_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Contact_Person_DataObjectType',
      'ExhibitorNew_priority_points_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_priority_points_DataObjectType',
      'ExhibitorNew_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Invoice_DataObjectType',
      'ExhibitorNew_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Payment_DataObjectType',
      'ExhibitorNew_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Payment_Info_DataObjectType',
      'ExhibitorNew_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Payment_Method_DataObjectType',
      'ExhibitorNew_Billing_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Billing_Address_DataObjectType',
      'ExhibitorNew_BillToCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_BillToCustomer_DataObjectType',
      'ExhibitorNew_Installment_Billing_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Installment_Billing_DataObjectType',
      'ExhibitorNew_Exhibitor_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibitor_Address_DataObjectType',
      'ExhibitorNew_Primary_Contact_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Primary_Contact_Address_DataObjectType',
      'ExhibitorNew_Exhibitor_X_Contact_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibitor_X_Contact_DataObjectType',
      'ExhibitorNew_Shared_Booth_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Shared_Booth_DataObjectType',
      'ExhibitorNew_Sponsor_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Sponsor_DataObjectType',
      'ExhibitorNew_Primary_Contact_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Primary_Contact_Email_DataObjectType',
      'ExhibitorNew_Primary_Contact_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Primary_Contact_Website_DataObjectType',
      'ExhibitorNew_Exhibitor_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibitor_Email_DataObjectType',
      'ExhibitorNew_Exhibitor_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorNew_Exhibitor_Website_DataObjectType',
      'Exhibitor_BoothCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\Exhibitor_BoothCollectionType',
      'CentralizedOrderEntryType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntryType',
      'CentralizedOrderEntry_Invoice_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Invoice_DataObjectType',
      'CentralizedOrderEntry_Invoice_Detail_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Invoice_Detail_DataObjectType',
      'CentralizedOrderEntry_Claim_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Claim_DataObjectType',
      'CentralizedOrderEntry_Default_Shipping_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Default_Shipping_Address_DataObjectType',
      'CentralizedOrderEntry_Payment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Payment_DataObjectType',
      'CentralizedOrderEntry_Payment_Info_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Payment_Info_DataObjectType',
      'CentralizedOrderEntry_Payment_Method_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Payment_Method_DataObjectType',
      'CentralizedOrderEntry_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Customer_DataObjectType',
      'CentralizedOrderEntry_Billing_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Billing_Address_DataObjectType',
      'CentralizedOrderEntry_Billing_Adr_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Billing_Adr_DataObjectType',
      'CentralizedOrderEntry_Price_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Price_DataObjectType',
      'CentralizedOrderEntry_Batch_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Batch_DataObjectType',
      'CentralizedOrderEntry_BillToCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_BillToCustomer_DataObjectType',
      'CentralizedOrderEntry_BillToIndividual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_BillToIndividual_DataObjectType',
      'CentralizedOrderEntry_InstallmentBilling_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_InstallmentBilling_DataObjectType',
      'CentralizedOrderEntry_Company-Business_Unit_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_CompanyBusiness_Unit_DataObjectType',
      'CentralizedOrderEntry_Credit_Available_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Credit_Available_DataObjectType',
      'CentralizedOrderEntry_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_source_code_DataObjectType',
      'CentralizedOrderEntry_Sales_Opportunity_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_Sales_Opportunity_DataObjectType',
      'CentralizedOrderEntry_currency_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\CentralizedOrderEntry_currency_DataObjectType',
      'MembershipCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\MembershipCollectionType',
      'RegistrantCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\RegistrantCollectionType',
      'Group_RegistrantionCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\Group_RegistrantionCollectionType',
      'GiftCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\GiftCollectionType',
      'InvoiceToPayCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\InvoiceToPayCollectionType',
      'ExhibitorCollectionType' => 'netForum\\xWeb\\Xml\\Generated\\ExhibitorCollectionType',
      'CustomerAddressType' => 'netForum\\xWeb\\Xml\\Generated\\CustomerAddressType',
      'IndividualAddress_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Address_XRef_DataObjectType',
      'IndividualAddress_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Customer_DataObjectType',
      'IndividualAddress_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Individual_DataObjectType',
      'IndividualAddress_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Organization_DataObjectType',
      'IndividualAddress_Chapter_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Chapter_DataObjectType',
      'IndividualAddress_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Address_DataObjectType',
      'IndividualAddress_Address_Change_Log_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Address_Change_Log_DataObjectType',
      'IndividualAddress_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Country_DataObjectType',
      'IndividualAddress_Primary_Affiliation_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_Primary_Affiliation_DataObjectType',
      'IndividualAddress_StateTerritory_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualAddress_StateTerritory_DataObjectType',
      'IndividualType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualType',
      'Individual_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Individual_DataObjectType',
      'Individual_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Customer_DataObjectType',
      'Individual_Organization_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Organization_XRef_DataObjectType',
      'Individual_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Organization_DataObjectType',
      'Individual_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Email_DataObjectType',
      'Individual_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Website_DataObjectType',
      'Individual_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Messaging_DataObjectType',
      'Individual_Business_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Address_XRef_DataObjectType',
      'Individual_Business_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Address_DataObjectType',
      'Individual_Business_Address_State_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Address_State_DataObjectType',
      'Individual_Business_Address_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Address_Country_DataObjectType',
      'Individual_Business_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Phone_XRef_DataObjectType',
      'Individual_Business_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Phone_DataObjectType',
      'Individual_Business_Phone_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Phone_Country_DataObjectType',
      'Individual_Business_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Fax_XRef_DataObjectType',
      'Individual_Business_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Fax_DataObjectType',
      'Individual_Business_Fax_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Business_Fax_Country_DataObjectType',
      'Individual_Home_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Address_XRef_DataObjectType',
      'Individual_Home_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Address_DataObjectType',
      'Individual_Home_Address_State_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Address_State_DataObjectType',
      'Individual_Home_Address_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Address_Country_DataObjectType',
      'Individual_Home_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Phone_DataObjectType',
      'Individual_Home_Phone_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Phone_Country_DataObjectType',
      'Individual_Home_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Phone_XRef_DataObjectType',
      'Individual_Home_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Fax_DataObjectType',
      'Individual_Home_Fax_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Fax_Country_DataObjectType',
      'Individual_Home_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Home_Fax_XRef_DataObjectType',
      'Individual_Address_Change_Log_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Address_Change_Log_DataObjectType',
      'Individual_TransferToCustomer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_TransferToCustomer_DataObjectType',
      'Individual_Individual_Custom_Demographics_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Individual_Custom_Demographics_DataObjectType',
      'Individual_Social_Links_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_Social_Links_DataObjectType',
      'Individual_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Individual_source_code_DataObjectType',
      'OrganizationType' => 'netForum\\xWeb\\Xml\\Generated\\OrganizationType',
      'Organization_Organization_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Organization_DataObjectType',
      'Organization_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Customer_DataObjectType',
      'Organization_Parent_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Parent_Customer_DataObjectType',
      'Organization_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Email_DataObjectType',
      'Organization_Website_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Website_DataObjectType',
      'Organization_Messaging_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Messaging_DataObjectType',
      'Organization_Phone_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Phone_XRef_DataObjectType',
      'Organization_Phone_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Phone_DataObjectType',
      'Organization_Phone_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Phone_Country_DataObjectType',
      'Organization_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Fax_XRef_DataObjectType',
      'Organization_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Fax_DataObjectType',
      'Organization_Fax_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Fax_Country_DataObjectType',
      'Organization_Address_XRef_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Address_XRef_1_DataObjectType',
      'Organization_Address_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Address_1_DataObjectType',
      'Organization_Firm_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Firm_DataObjectType',
      'Organization_Business_Address_State_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Business_Address_State_DataObjectType',
      'Organization_Address_1_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Address_1_Country_DataObjectType',
      'Organization_Billing_Address_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Billing_Address_1_DataObjectType',
      'Organization_Home_Address_State_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Home_Address_State_DataObjectType',
      'Organization_Billing_Address_1_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Billing_Address_1_Country_DataObjectType',
      'Organization_Billing_Address_XRef_1_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Billing_Address_XRef_1_DataObjectType',
      'Organization_Customer_X_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Customer_X_Customer_DataObjectType',
      'Organization_Primary_Contact_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Primary_Contact_DataObjectType',
      'Organization_Address_Change_Log_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Address_Change_Log_DataObjectType',
      'Organization_Organization_Custom_Demographics_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Organization_Custom_Demographics_DataObjectType',
      'Organization_Social_Links_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_Social_Links_DataObjectType',
      'Organization_source_code_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Organization_source_code_DataObjectType',
      'CustomerFaxType' => 'netForum\\xWeb\\Xml\\Generated\\CustomerFaxType',
      'IndividualFax_Fax_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualFax_Fax_XRef_DataObjectType',
      'IndividualFax_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualFax_Customer_DataObjectType',
      'IndividualFax_Fax_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualFax_Fax_DataObjectType',
      'IndividualFax_Country_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualFax_Country_DataObjectType',
      'ContactRequestType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequestType',
      'ContactRequest_Contact_Request_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Contact_Request_DataObjectType',
      'ContactRequest_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Customer_DataObjectType',
      'ContactRequest_Individual_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Individual_DataObjectType',
      'ContactRequest_Comments_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Comments_DataObjectType',
      'ContactRequest_Document_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Document_DataObjectType',
      'ContactRequest_Primary_Address_XRef_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Primary_Address_XRef_DataObjectType',
      'ContactRequest_Primary_Address_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Primary_Address_DataObjectType',
      'ContactRequest_Assignment_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Assignment_Customer_DataObjectType',
      'ContactRequest_Customer_Alias_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Customer_Alias_DataObjectType',
      'ContactRequest_Customer_Activity_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Customer_Activity_DataObjectType',
      'ContactRequest_Assignment_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Assignment_DataObjectType',
      'ContactRequest_Org_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Org_Customer_DataObjectType',
      'ContactRequest_Org_Request_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\ContactRequest_Org_Request_DataObjectType',
      'CommitteeType' => 'netForum\\xWeb\\Xml\\Generated\\CommitteeType',
      'Committee_Committee_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Committee_Committee_DataObjectType',
      'Committee_Parent_Committee_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Committee_Parent_Committee_DataObjectType',
      'Committee_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Committee_Customer_DataObjectType',
      'Committee_Committee_Participant_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\Committee_Committee_Participant_DataObjectType',
      'CustomerEmailType' => 'netForum\\xWeb\\Xml\\Generated\\CustomerEmailType',
      'IndividualEmail_Email_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualEmail_Email_DataObjectType',
      'IndividualEmail_Customer_DataObjectType' => 'netForum\\xWeb\\Xml\\Generated\\IndividualEmail_Customer_DataObjectType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'WSDLs/xWeb-2015.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Retrieve an individual's contact preference for a single mailing type.
     *
     * @param GetCustomerCommunicationPreference $parameters
     * @return GetCustomerCommunicationPreferenceResponse
     */
    public function GetCustomerCommunicationPreference(GetCustomerCommunicationPreference $parameters)
    {
      return $this->__soapCall('GetCustomerCommunicationPreference', array($parameters));
    }

    /**
     * Retrieve an individual's contact preferences.
     *
     * @param GetAllCustomerCommunicationPreferences $parameters
     * @return GetAllCustomerCommunicationPreferencesResponse
     */
    public function GetAllCustomerCommunicationPreferences(GetAllCustomerCommunicationPreferences $parameters)
    {
      return $this->__soapCall('GetAllCustomerCommunicationPreferences', array($parameters));
    }

    /**
     * Set an individual's contact preferences.
     *
     * @param SetCustomerCommunicationPreferences $parameters
     * @return SetCustomerCommunicationPreferencesResponse
     */
    public function SetCustomerCommunicationPreferences(SetCustomerCommunicationPreferences $parameters)
    {
      return $this->__soapCall('SetCustomerCommunicationPreferences', array($parameters));
    }

    /**
     * Get the fundraising goal and achieved amount for a fundraising event participant.
     *
     * @param GetFundraisingEventRegistrantionTotal $parameters
     * @return GetFundraisingEventRegistrantionTotalResponse
     */
    public function GetFundraisingEventRegistrationTotal(GetFundraisingEventRegistrantionTotal $parameters)
    {
      return $this->__soapCall('GetFundraisingEventRegistrationTotal', array($parameters));
    }

    /**
     * Get a list of donations provided to a fundraising event partifipant.
     *
     * @param GetFundraisingEventDonations $parameters
     * @return GetFundraisingEventDonationsResponse
     */
    public function GetFundraisingEventDonations(GetFundraisingEventDonations $parameters)
    {
      return $this->__soapCall('GetFundraisingEventDonations', array($parameters));
    }

    /**
     * Get a link to a web page that be used to donate on behalf of a fundraising event participant.
     *
     * @param GetFundraisingEventDonationUrl $parameters
     * @return GetFundraisingEventDonationUrlResponse
     */
    public function GetFundraisingEventDonationUrl(GetFundraisingEventDonationUrl $parameters)
    {
      return $this->__soapCall('GetFundraisingEventDonationUrl', array($parameters));
    }

    /**
     * Retrieves a chapter's roster.
     *
     * @param WEBChaptersGetChapterMembershipRoster $parameters
     * @return WEBChaptersGetChapterMembershipRosterResponse
     */
    public function WEBChaptersGetChapterMembershipRoster(WEBChaptersGetChapterMembershipRoster $parameters)
    {
      return $this->__soapCall('WEBChaptersGetChapterMembershipRoster', array($parameters));
    }

    /**
     * Retrieves a chapter's officers.
     *
     * @param WEBChaptersGetChapterOfficers $parameters
     * @return WEBChaptersGetChapterOfficersResponse
     */
    public function WEBChaptersGetChapterOfficers(WEBChaptersGetChapterOfficers $parameters)
    {
      return $this->__soapCall('WEBChaptersGetChapterOfficers', array($parameters));
    }

    /**
     * Returns chapter information.
     *
     * @param WEBChaptersGetChapterByKey $parameters
     * @return WEBChaptersGetChapterByKeyResponse
     */
    public function WEBChaptersGetChapterByKey(WEBChaptersGetChapterByKey $parameters)
    {
      return $this->__soapCall('WEBChaptersGetChapterByKey', array($parameters));
    }

    /**
     * Returns chapter information.
     *
     * @param WEBChapterGet $parameters
     * @return WEBChapterGetResponse
     */
    public function WEBChapterGet(WEBChapterGet $parameters)
    {
      return $this->__soapCall('WEBChapterGet', array($parameters));
    }

    /**
     * @param WEBCentralizedShoppingCartStoreForeWeb $parameters
     * @return WEBCentralizedShoppingCartStoreForeWebResponse
     */
    public function WEBCentralizedShoppingCartStoreForeWeb(WEBCentralizedShoppingCartStoreForeWeb $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartStoreForeWeb', array($parameters));
    }

    /**
     * Returns a new shopping cart
     *
     * @param WEBCentralizedShoppingCartGetNew $parameters
     * @return WEBCentralizedShoppingCartGetNewResponse
     */
    public function WEBCentralizedShoppingCartGetNew(WEBCentralizedShoppingCartGetNew $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetNew', array($parameters));
    }

    /**
     * Returns a new shopping cart
     *
     * @param WEBCentralizedShoppingCartGet $parameters
     * @return WEBCentralizedShoppingCartGetResponse
     */
    public function WEBCentralizedShoppingCartGet(WEBCentralizedShoppingCartGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGet', array($parameters));
    }

    /**
     * Returns a new shopping cart, with a line item added
     *
     * @param WEBCentralizedShoppingCartGetWithLineItem $parameters
     * @return WEBCentralizedShoppingCartGetWithLineItemResponse
     */
    public function WEBCentralizedShoppingCartGetWithLineItem(WEBCentralizedShoppingCartGetWithLineItem $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetWithLineItem', array($parameters));
    }

    /**
     * Refresh Shopping cart
     *
     * @param WEBCentralizedShoppingCartRefresh $parameters
     * @return WEBCentralizedShoppingCartRefreshResponse
     */
    public function WEBCentralizedShoppingCartRefresh(WEBCentralizedShoppingCartRefresh $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartRefresh', array($parameters));
    }

    /**
     * Create Order and/or Invoice. To process a Paypal Express Checkout payment, be sure to set the payment method (pin_apm_key) accordingly and provide the token and payer id (pin_paypaltoken and pin_paypalpayerid respectively
     *
     * @param WEBCentralizedShoppingCartInsert $parameters
     * @return WEBCentralizedShoppingCartInsertResponse
     */
    public function WEBCentralizedShoppingCartInsert(WEBCentralizedShoppingCartInsert $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartInsert', array($parameters));
    }

    /**
     * Apply a source code to Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartApplySourceCode $parameters
     * @return WEBCentralizedShoppingCartApplySourceCodeResponse
     */
    public function WEBCentralizedShoppingCartApplySourceCode(WEBCentralizedShoppingCartApplySourceCode $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartApplySourceCode', array($parameters));
    }

    /**
     * Clears the source code that is applied to Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartClearSourceCode $parameters
     * @return WEBCentralizedShoppingCartClearSourceCodeResponse
     */
    public function WEBCentralizedShoppingCartClearSourceCode(WEBCentralizedShoppingCartClearSourceCode $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartClearSourceCode', array($parameters));
    }

    /**
     * Add a discount code to Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartApplyDiscountCode $parameters
     * @return WEBCentralizedShoppingCartApplyDiscountCodeResponse
     */
    public function WEBCentralizedShoppingCartApplyDiscountCode(WEBCentralizedShoppingCartApplyDiscountCode $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartApplyDiscountCode', array($parameters));
    }

    /**
     * Retrieves Product Type List
     *
     * @param WEBCentralizedShoppingCartGetProductTypeList $parameters
     * @return WEBCentralizedShoppingCartGetProductTypeListResponse
     */
    public function WEBCentralizedShoppingCartGetProductTypeList(WEBCentralizedShoppingCartGetProductTypeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductTypeList', array($parameters));
    }

    /**
     * Retrieves Product Category List
     *
     * @param WEBCentralizedShoppingCartGetProductCategoryList $parameters
     * @return WEBCentralizedShoppingCartGetProductCategoryListResponse
     */
    public function WEBCentralizedShoppingCartGetProductCategoryList(WEBCentralizedShoppingCartGetProductCategoryList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductCategoryList', array($parameters));
    }

    /**
     * Retrieves Product List; includes price range
     *
     * @param WEBCentralizedShoppingCartGetProductList $parameters
     * @return WEBCentralizedShoppingCartGetProductListResponse
     */
    public function WEBCentralizedShoppingCartGetProductList(WEBCentralizedShoppingCartGetProductList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductList', array($parameters));
    }

    /**
     * Retrieves Product List by name; includes price range
     *
     * @param WEBCentralizedShoppingCartGetProductListByName $parameters
     * @return WEBCentralizedShoppingCartGetProductListByNameResponse
     */
    public function WEBCentralizedShoppingCartGetProductListByName(WEBCentralizedShoppingCartGetProductListByName $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductListByName', array($parameters));
    }

    /**
     * Retrieves Product Info; includes price range
     *
     * @param WEBCentralizedShoppingCartGetProductByKey $parameters
     * @return WEBCentralizedShoppingCartGetProductByKeyResponse
     */
    public function WEBCentralizedShoppingCartGetProductByKey(WEBCentralizedShoppingCartGetProductByKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductByKey', array($parameters));
    }

    /**
     * Retrieves List of product keys
     *
     * @param WEBCentralizedShoppingCartGetProductListKeys $parameters
     * @return WEBCentralizedShoppingCartGetProductListKeysResponse
     */
    public function WEBCentralizedShoppingCartGetProductListKeys(WEBCentralizedShoppingCartGetProductListKeys $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductListKeys', array($parameters));
    }

    /**
     * Retrieves list of all product complements
     *
     * @param WEBCentralizedShoppingCartGetProductComplements $parameters
     * @return WEBCentralizedShoppingCartGetProductComplementsResponse
     */
    public function WEBCentralizedShoppingCartGetProductComplements(WEBCentralizedShoppingCartGetProductComplements $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductComplements', array($parameters));
    }

    /**
     * Retrieves list of product complements for specified product
     *
     * @param WEBCentralizedShoppingCartGetProductComplementListByProductKey $parameters
     * @return WEBCentralizedShoppingCartGetProductComplementListByProductKeyResponse
     */
    public function WEBCentralizedShoppingCartGetProductComplementListByProductKey(WEBCentralizedShoppingCartGetProductComplementListByProductKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductComplementListByProductKey', array($parameters));
    }

    /**
     * Retrieves list of all product substitutes
     *
     * @param WEBCentralizedShoppingCartGetProductSubstitutes $parameters
     * @return WEBCentralizedShoppingCartGetProductSubstitutesResponse
     */
    public function WEBCentralizedShoppingCartGetProductSubstitutes(WEBCentralizedShoppingCartGetProductSubstitutes $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductSubstitutes', array($parameters));
    }

    /**
     * Retrieves list of product substitutes for specified product
     *
     * @param WEBCentralizedShoppingCartGetProductSubstituteListByProductKey $parameters
     * @return WEBCentralizedShoppingCartGetProductSubstituteListByProductKeyResponse
     */
    public function WEBCentralizedShoppingCartGetProductSubstituteListByProductKey(WEBCentralizedShoppingCartGetProductSubstituteListByProductKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductSubstituteListByProductKey', array($parameters));
    }

    /**
     * Retrieves list of all products also purchased
     *
     * @param WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKey $parameters
     * @return WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKeyResponse
     */
    public function WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKey(WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductListAlsoPurchasedByProductKey', array($parameters));
    }

    /**
     * Retrieves Merchandise List.
     *
     * @param WEBCentralizedShoppingCartGetMerchandiseList $parameters
     * @return WEBCentralizedShoppingCartGetMerchandiseListResponse
     */
    public function WEBCentralizedShoppingCartGetMerchandiseList(WEBCentralizedShoppingCartGetMerchandiseList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetMerchandiseList', array($parameters));
    }

    /**
     * Retrieves Merchandise List without Pricing Control Check.
     *
     * @param WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PC $parameters
     * @return WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PCResponse
     */
    public function WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PC(WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PC $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetMerchandiseList_Ignore_PC', array($parameters));
    }

    /**
     * Retrieves Publication List without Pricing Control Check.
     *
     * @param WEBCentralizedShoppingCartGetPublicationList_Ignore_PC $parameters
     * @return WEBCentralizedShoppingCartGetPublicationList_Ignore_PCResponse
     */
    public function WEBCentralizedShoppingCartGetPublicationList_Ignore_PC(WEBCentralizedShoppingCartGetPublicationList_Ignore_PC $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetPublicationList_Ignore_PC', array($parameters));
    }

    /**
     * Retrieves Subscription List without Pricing Control Check.
     *
     * @param WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PC $parameters
     * @return WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PCResponse
     */
    public function WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PC(WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PC $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetSubscriptionList_Ignore_PC', array($parameters));
    }

    /**
     * Retrieves Event List
     *
     * @param WEBCentralizedShoppingCartGetEventList $parameters
     * @return WEBCentralizedShoppingCartGetEventListResponse
     */
    public function WEBCentralizedShoppingCartGetEventList(WEBCentralizedShoppingCartGetEventList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventList', array($parameters));
    }

    /**
     * Retrieves Event List By Name
     *
     * @param WEBCentralizedShoppingCartGetEventListByName $parameters
     * @return WEBCentralizedShoppingCartGetEventListByNameResponse
     */
    public function WEBCentralizedShoppingCartGetEventListByName(WEBCentralizedShoppingCartGetEventListByName $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventListByName', array($parameters));
    }

    /**
     * Retrieves Event Info
     *
     * @param WEBCentralizedShoppingCartGetEventByKey $parameters
     * @return WEBCentralizedShoppingCartGetEventByKeyResponse
     */
    public function WEBCentralizedShoppingCartGetEventByKey(WEBCentralizedShoppingCartGetEventByKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventByKey', array($parameters));
    }

    /**
     * Retrieves List of event keys
     *
     * @param WEBCentralizedShoppingCartGetEventListKeys $parameters
     * @return WEBCentralizedShoppingCartGetEventListKeysResponse
     */
    public function WEBCentralizedShoppingCartGetEventListKeys(WEBCentralizedShoppingCartGetEventListKeys $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventListKeys', array($parameters));
    }

    /**
     * Retrieves Track list by event
     *
     * @param WEBCentralizedShoppingCartGetTrackListByEventKey $parameters
     * @return WEBCentralizedShoppingCartGetTrackListByEventKeyResponse
     */
    public function WEBCentralizedShoppingCartGetTrackListByEventKey(WEBCentralizedShoppingCartGetTrackListByEventKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetTrackListByEventKey', array($parameters));
    }

    /**
     * Retrieves Session list by event
     *
     * @param WEBCentralizedShoppingCartGetSessionListByEventKey $parameters
     * @return WEBCentralizedShoppingCartGetSessionListByEventKeyResponse
     */
    public function WEBCentralizedShoppingCartGetSessionListByEventKey(WEBCentralizedShoppingCartGetSessionListByEventKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetSessionListByEventKey', array($parameters));
    }

    /**
     * Retrieves faculty list by event
     *
     * @param WEBCentralizedShoppingCartGetFacultyListByEventKey $parameters
     * @return WEBCentralizedShoppingCartGetFacultyListByEventKeyResponse
     */
    public function WEBCentralizedShoppingCartGetFacultyListByEventKey(WEBCentralizedShoppingCartGetFacultyListByEventKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetFacultyListByEventKey', array($parameters));
    }

    /**
     * Retrieves faculty list by session
     *
     * @param WEBCentralizedShoppingCartGetFacultyListBySessionKey $parameters
     * @return WEBCentralizedShoppingCartGetFacultyListBySessionKeyResponse
     */
    public function WEBCentralizedShoppingCartGetFacultyListBySessionKey(WEBCentralizedShoppingCartGetFacultyListBySessionKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetFacultyListBySessionKey', array($parameters));
    }

    /**
     * Retrieves sponsor list by event
     *
     * @param WEBCentralizedShoppingCartGetSponsorListByEventKey $parameters
     * @return WEBCentralizedShoppingCartGetSponsorListByEventKeyResponse
     */
    public function WEBCentralizedShoppingCartGetSponsorListByEventKey(WEBCentralizedShoppingCartGetSponsorListByEventKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetSponsorListByEventKey', array($parameters));
    }

    /**
     * Retrieves sponsor list by session
     *
     * @param WEBCentralizedShoppingCartGetSponsorListBySessionKey $parameters
     * @return WEBCentralizedShoppingCartGetSponsorListBySessionKeyResponse
     */
    public function WEBCentralizedShoppingCartGetSponsorListBySessionKey(WEBCentralizedShoppingCartGetSponsorListBySessionKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetSponsorListBySessionKey', array($parameters));
    }

    /**
     * Retrieves Session Info by track
     *
     * @param WEBCentralizedShoppingCartGetSessionListByTrackKey $parameters
     * @return WEBCentralizedShoppingCartGetSessionListByTrackKeyResponse
     */
    public function WEBCentralizedShoppingCartGetSessionListByTrackKey(WEBCentralizedShoppingCartGetSessionListByTrackKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetSessionListByTrackKey', array($parameters));
    }

    /**
     * Retrieves All Event Registrant Type List
     *
     * @param WEBCentralizedShoppingCartGetEventRegistrantTypeList $parameters
     * @return WEBCentralizedShoppingCartGetEventRegistrantTypeListResponse
     */
    public function WEBCentralizedShoppingCartGetEventRegistrantTypeList(WEBCentralizedShoppingCartGetEventRegistrantTypeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventRegistrantTypeList', array($parameters));
    }

    /**
     * Retrieves Housing Room Type List
     *
     * @param WEBCentralizedShoppingCartGetEventRegistrantRoomTypeList $parameters
     * @return WEBCentralizedShoppingCartGetEventRegistrantRoomTypeListResponse
     */
    public function WEBCentralizedShoppingCartGetEventRegistrantRoomTypeList(WEBCentralizedShoppingCartGetEventRegistrantRoomTypeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventRegistrantRoomTypeList', array($parameters));
    }

    /**
     * Retrieves Event Registrant Type List by event
     *
     * @param WEBCentralizedShoppingCartGetEventRegistrantTypeListByEvent $parameters
     * @return WEBCentralizedShoppingCartGetEventRegistrantTypeListByEventResponse
     */
    public function WEBCentralizedShoppingCartGetEventRegistrantTypeListByEvent(WEBCentralizedShoppingCartGetEventRegistrantTypeListByEvent $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventRegistrantTypeListByEvent', array($parameters));
    }

    /**
     * Retrieves Event Guest Registrant Type List by event
     *
     * @param WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEvent $parameters
     * @return WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEventResponse
     */
    public function WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEvent(WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEvent $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventGuestRegistrantTypeListByEvent', array($parameters));
    }

    /**
     * Retrieves Event Registrant Type List
     *
     * @param WEBCentralizedShoppingCartGetEventRegistrantSourceCodeList $parameters
     * @return WEBCentralizedShoppingCartGetEventRegistrantSourceCodeListResponse
     */
    public function WEBCentralizedShoppingCartGetEventRegistrantSourceCodeList(WEBCentralizedShoppingCartGetEventRegistrantSourceCodeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventRegistrantSourceCodeList', array($parameters));
    }

    /**
     * Retrieves Event Registrant Type List by event
     *
     * @param WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList $parameters
     * @return WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualListResponse
     */
    public function WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList(WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventRegistrantGroupIndividualList', array($parameters));
    }

    /**
     * Returns an existing event registration
     *
     * @param WEBCentralizedShoppingCartEventRegistrantGet $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantGetResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantGet(WEBCentralizedShoppingCartEventRegistrantGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantGet', array($parameters));
    }

    /**
     * Returns a new event registration object
     *
     * @param WEBCentralizedShoppingCartEventRegistrantGetNew $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantGetNewResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantGetNew(WEBCentralizedShoppingCartEventRegistrantGetNew $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantGetNew', array($parameters));
    }

    /**
     * Returns an existing group event registration
     *
     * @param WEBCentralizedShoppingCartEventRegistrantGroupGet $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantGroupGetResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantGroupGet(WEBCentralizedShoppingCartEventRegistrantGroupGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantGroupGet', array($parameters));
    }

    /**
     * Returns a new group event registration object
     *
     * @param WEBCentralizedShoppingCartEventRegistrantGroupGetNew $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantGroupGetNewResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantGroupGetNew(WEBCentralizedShoppingCartEventRegistrantGroupGetNew $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantGroupGetNew', array($parameters));
    }

    /**
     * Retrieves Event Registration Fees.
     *
     * @param WEBCentralizedShoppingCartGetEventFees $parameters
     * @return WEBCentralizedShoppingCartGetEventFeesResponse
     */
    public function WEBCentralizedShoppingCartGetEventFees(WEBCentralizedShoppingCartGetEventFees $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventFees', array($parameters));
    }

    /**
     * Retrieves Event Track Registration Fees.
     *
     * @param WEBCentralizedShoppingCartGetEventTrackFees $parameters
     * @return WEBCentralizedShoppingCartGetEventTrackFeesResponse
     */
    public function WEBCentralizedShoppingCartGetEventTrackFees(WEBCentralizedShoppingCartGetEventTrackFees $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventTrackFees', array($parameters));
    }

    /**
     * Retrieves Event Session Registration Fees.
     *
     * @param WEBCentralizedShoppingCartGetEventSessionFees $parameters
     * @return WEBCentralizedShoppingCartGetEventSessionFeesResponse
     */
    public function WEBCentralizedShoppingCartGetEventSessionFees(WEBCentralizedShoppingCartGetEventSessionFees $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetEventSessionFees', array($parameters));
    }

    /**
     * Adds/Removes Event Registration Fees. Use this method before the registration object is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartEventRegistrantSetLineItems $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantSetLineItemsResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantSetLineItems(WEBCentralizedShoppingCartEventRegistrantSetLineItems $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantSetLineItems', array($parameters));
    }

    /**
     * Adds/Removes Event Registration Fees. Use this method after the registration object is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCartResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart(WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithCart', array($parameters));
    }

    /**
     * Adds/Removes Event Registration Fees. Use this method after the registration object is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistrationResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration(WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantSetLineItemsWithGroupRegistration', array($parameters));
    }

    /**
     * Refreshes the registration object
     *
     * @param WEBCentralizedShoppingCartEventRegistrantRefresh $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantRefreshResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantRefresh(WEBCentralizedShoppingCartEventRegistrantRefresh $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantRefresh', array($parameters));
    }

    /**
     * Add a registrant to the shopping cart.
     *
     * @param WEBCentralizedShoppingCartAddEventRegistrant $parameters
     * @return WEBCentralizedShoppingCartAddEventRegistrantResponse
     */
    public function WEBCentralizedShoppingCartAddEventRegistrant(WEBCentralizedShoppingCartAddEventRegistrant $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartAddEventRegistrant', array($parameters));
    }

    /**
     * Remove a registrant from the shopping cart.
     *
     * @param WEBCentralizedShoppingCartRemoveEventRegistrant $parameters
     * @return WEBCentralizedShoppingCartRemoveEventRegistrantResponse
     */
    public function WEBCentralizedShoppingCartRemoveEventRegistrant(WEBCentralizedShoppingCartRemoveEventRegistrant $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartRemoveEventRegistrant', array($parameters));
    }

    /**
     * Refreshes the group registration object
     *
     * @param WEBCentralizedShoppingCartEventRegistrantGroupRefresh $parameters
     * @return WEBCentralizedShoppingCartEventRegistrantGroupRefreshResponse
     */
    public function WEBCentralizedShoppingCartEventRegistrantGroupRefresh(WEBCentralizedShoppingCartEventRegistrantGroupRefresh $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartEventRegistrantGroupRefresh', array($parameters));
    }

    /**
     * Add an individual registration to a group registration.
     *
     * @param WEBCentralizedShoppingCartAddEventRegistrantToGroup $parameters
     * @return WEBCentralizedShoppingCartAddEventRegistrantToGroupResponse
     */
    public function WEBCentralizedShoppingCartAddEventRegistrantToGroup(WEBCentralizedShoppingCartAddEventRegistrantToGroup $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartAddEventRegistrantToGroup', array($parameters));
    }

    /**
     * Remove a registration from a group registration.
     *
     * @param WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup $parameters
     * @return WEBCentralizedShoppingCartRemoveEventRegistrantFromGroupResponse
     */
    public function WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup(WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartRemoveEventRegistrantFromGroup', array($parameters));
    }

    /**
     * Add a group registration to the shopping cart.
     *
     * @param WEBCentralizedShoppingCartAddEventRegistrantGroup $parameters
     * @return WEBCentralizedShoppingCartAddEventRegistrantGroupResponse
     */
    public function WEBCentralizedShoppingCartAddEventRegistrantGroup(WEBCentralizedShoppingCartAddEventRegistrantGroup $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartAddEventRegistrantGroup', array($parameters));
    }

    /**
     * Remove a group registration from the shopping cart.
     *
     * @param WEBCentralizedShoppingCartRemoveEventRegistrantGroup $parameters
     * @return WEBCentralizedShoppingCartRemoveEventRegistrantGroupResponse
     */
    public function WEBCentralizedShoppingCartRemoveEventRegistrantGroup(WEBCentralizedShoppingCartRemoveEventRegistrantGroup $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartRemoveEventRegistrantGroup', array($parameters));
    }

    /**
     * Retrieves Gift List
     *
     * @param WEBCentralizedShoppingCartGiftGetGiftProductList $parameters
     * @return WEBCentralizedShoppingCartGiftGetGiftProductListResponse
     */
    public function WEBCentralizedShoppingCartGiftGetGiftProductList(WEBCentralizedShoppingCartGiftGetGiftProductList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftGetGiftProductList', array($parameters));
    }

    /**
     * Retrieves Gift List By Name
     *
     * @param WEBCentralizedShoppingCartGiftGetGiftProductListByName $parameters
     * @return WEBCentralizedShoppingCartGiftGetGiftProductListByNameResponse
     */
    public function WEBCentralizedShoppingCartGiftGetGiftProductListByName(WEBCentralizedShoppingCartGiftGetGiftProductListByName $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftGetGiftProductListByName', array($parameters));
    }

    /**
     * Retrieves Gift Info (use prc_key for GiftKey)
     *
     * @param WEBCentralizedShoppingCartGiftGetGiftProductByKey $parameters
     * @return WEBCentralizedShoppingCartGiftGetGiftProductByKeyResponse
     */
    public function WEBCentralizedShoppingCartGiftGetGiftProductByKey(WEBCentralizedShoppingCartGiftGetGiftProductByKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftGetGiftProductByKey', array($parameters));
    }

    /**
     * Retrieves List of gift keys
     *
     * @param WEBCentralizedShoppingCartGiftGetGiftProductListKeys $parameters
     * @return WEBCentralizedShoppingCartGiftGetGiftProductListKeysResponse
     */
    public function WEBCentralizedShoppingCartGiftGetGiftProductListKeys(WEBCentralizedShoppingCartGiftGetGiftProductListKeys $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftGetGiftProductListKeys', array($parameters));
    }

    /**
     * Retrieves All Gift Type List (selected value should be set to gft_gty_key)
     *
     * @param WEBCentralizedShoppingCartGiftGetGiftTypeList $parameters
     * @return WEBCentralizedShoppingCartGiftGetGiftTypeListResponse
     */
    public function WEBCentralizedShoppingCartGiftGetGiftTypeList(WEBCentralizedShoppingCartGiftGetGiftTypeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftGetGiftTypeList', array($parameters));
    }

    /**
     * Retrieves Gift Premium Products (should set selected value to gft_prm_prc_key)
     *
     * @param WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift $parameters
     * @return WEBCentralizedShoppingCartGiftGetPremiumProductsListByGiftResponse
     */
    public function WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift(WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftGetPremiumProductsListByGift', array($parameters));
    }

    /**
     * Returns an existing fundraising gift
     *
     * @param WEBCentralizedShoppingCartGiftFundraisingGet $parameters
     * @return WEBCentralizedShoppingCartGiftFundraisingGetResponse
     */
    public function WEBCentralizedShoppingCartGiftFundraisingGet(WEBCentralizedShoppingCartGiftFundraisingGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftFundraisingGet', array($parameters));
    }

    /**
     * Returns a new fundraising gift object
     *
     * @param WEBCentralizedShoppingCartGiftFundraisingGetNew $parameters
     * @return WEBCentralizedShoppingCartGiftFundraisingGetNewResponse
     */
    public function WEBCentralizedShoppingCartGiftFundraisingGetNew(WEBCentralizedShoppingCartGiftFundraisingGetNew $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftFundraisingGetNew', array($parameters));
    }

    /**
     * Adds/Removes Gift line items. Use this method before the Fundraising Gift object is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartGiftFundraisingSetLineItems $parameters
     * @return WEBCentralizedShoppingCartGiftFundraisingSetLineItemsResponse
     */
    public function WEBCentralizedShoppingCartGiftFundraisingSetLineItems(WEBCentralizedShoppingCartGiftFundraisingSetLineItems $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftFundraisingSetLineItems', array($parameters));
    }

    /**
     * Adds/Removes Gift line items. Use this method after the fundraising gift is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart $parameters
     * @return WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCartResponse
     */
    public function WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart(WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftFundraisingSetLineItemsWithCart', array($parameters));
    }

    /**
     * Refreshes the fundraising gift object
     *
     * @param WEBCentralizedShoppingCartGiftFundraisingRefresh $parameters
     * @return WEBCentralizedShoppingCartGiftFundraisingRefreshResponse
     */
    public function WEBCentralizedShoppingCartGiftFundraisingRefresh(WEBCentralizedShoppingCartGiftFundraisingRefresh $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftFundraisingRefresh', array($parameters));
    }

    /**
     * Add a fundraising gift to the shopping cart.
     *
     * @param WEBCentralizedShoppingCartGiftAddGiftFundraising $parameters
     * @return WEBCentralizedShoppingCartGiftAddGiftFundraisingResponse
     */
    public function WEBCentralizedShoppingCartGiftAddGiftFundraising(WEBCentralizedShoppingCartGiftAddGiftFundraising $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftAddGiftFundraising', array($parameters));
    }

    /**
     * Remove a fundraising gift from the shopping cart.
     *
     * @param WEBCentralizedShoppingCartGiftRemoveFundraisingGift $parameters
     * @return WEBCentralizedShoppingCartGiftRemoveFundraisingGiftResponse
     */
    public function WEBCentralizedShoppingCartGiftRemoveFundraisingGift(WEBCentralizedShoppingCartGiftRemoveFundraisingGift $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGiftRemoveFundraisingGift', array($parameters));
    }

    /**
     * Retrieves Memembership Package List; the package product key mbr_pak_prd_key can be set in the membership object with the value of asp_pak_prd_key returned in this list.
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageList $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageListResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageList(WEBCentralizedShoppingCartMembershipGetPackageList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageList', array($parameters));
    }

    /**
     * Retrieves Memembership Package List; the package product key mbr_pak_prd_key can be set in the membership object with the value of asp_pak_prd_key returned in this list.
     *
     * @param WEBCentralizedShoppingCartMembershipGetRenewalPackageList $parameters
     * @return WEBCentralizedShoppingCartMembershipGetRenewalPackageListResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetRenewalPackageList(WEBCentralizedShoppingCartMembershipGetRenewalPackageList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetRenewalPackageList', array($parameters));
    }

    /**
     * Retrieves Memembership Type List.
     *
     * @param WEBCentralizedShoppingCartMembershipGetMembershipTypeList $parameters
     * @return WEBCentralizedShoppingCartMembershipGetMembershipTypeListResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetMembershipTypeList(WEBCentralizedShoppingCartMembershipGetMembershipTypeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetMembershipTypeList', array($parameters));
    }

    /**
     * Retrieves Membership Package List By Name
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageListByName $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageListByNameResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageListByName(WEBCentralizedShoppingCartMembershipGetPackageListByName $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageListByName', array($parameters));
    }

    /**
     * Retrieves Membership Package List By Membership Type
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKeyResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey(WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageListByMembershipTypeKey', array($parameters));
    }

    /**
     * Retrieves Package Info (use value of asp_pak_prd_key for PackageKey)
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageByKey $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageByKeyResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageByKey(WEBCentralizedShoppingCartMembershipGetPackageByKey $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageByKey', array($parameters));
    }

    /**
     * Retrieves List of package keys
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageListKeys $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageListKeysResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageListKeys(WEBCentralizedShoppingCartMembershipGetPackageListKeys $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageListKeys', array($parameters));
    }

    /**
     * Retrieves List of package components
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageComponentList $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageComponentListResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageComponentList(WEBCentralizedShoppingCartMembershipGetPackageComponentList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageComponentList', array($parameters));
    }

    /**
     * Retrieves List of package components with custom prices from the membership object; mbr_pak_prd_key and mbr_cst_key must both be set.
     *
     * @param WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject $parameters
     * @return WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObjectResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject(WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetPackageComponentListFromObject', array($parameters));
    }

    /**
     * Returns an existing membership object
     *
     * @param WEBCentralizedShoppingCartMembershipGet $parameters
     * @return WEBCentralizedShoppingCartMembershipGetResponse
     */
    public function WEBCentralizedShoppingCartMembershipGet(WEBCentralizedShoppingCartMembershipGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGet', array($parameters));
    }

    /**
     * Returns a new membership object
     *
     * @param WEBCentralizedShoppingCartMembershipGetNew $parameters
     * @return WEBCentralizedShoppingCartMembershipGetNewResponse
     */
    public function WEBCentralizedShoppingCartMembershipGetNew(WEBCentralizedShoppingCartMembershipGetNew $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipGetNew', array($parameters));
    }

    /**
     * Adds/Removes membership package line items. Use this method before the membership object is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartMembesrhipSetLineItems $parameters
     * @return WEBCentralizedShoppingCartMembesrhipSetLineItemsResponse
     */
    public function WEBCentralizedShoppingCartMembesrhipSetLineItems(WEBCentralizedShoppingCartMembesrhipSetLineItems $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembesrhipSetLineItems', array($parameters));
    }

    /**
     * Adds/Removes membership pacakge line items. Use this method after the membership object is added to Centralized Order Entry
     *
     * @param WEBCentralizedShoppingCartMembershipSetLineItemsWithCart $parameters
     * @return WEBCentralizedShoppingCartMembershipSetLineItemsWithCartResponse
     */
    public function WEBCentralizedShoppingCartMembershipSetLineItemsWithCart(WEBCentralizedShoppingCartMembershipSetLineItemsWithCart $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipSetLineItemsWithCart', array($parameters));
    }

    /**
     * Adds an open invoice and returns the object
     *
     * @param WEBCentralizedShoppingCartOpenInvoiceAdd $parameters
     * @return WEBCentralizedShoppingCartOpenInvoiceAddResponse
     */
    public function WEBCentralizedShoppingCartOpenInvoiceAdd(WEBCentralizedShoppingCartOpenInvoiceAdd $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartOpenInvoiceAdd', array($parameters));
    }

    /**
     * Returns an existing open invoice
     *
     * @param WEBCentralizedShoppingCartOpenInvoiceGet $parameters
     * @return WEBCentralizedShoppingCartOpenInvoiceGetResponse
     */
    public function WEBCentralizedShoppingCartOpenInvoiceGet(WEBCentralizedShoppingCartOpenInvoiceGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartOpenInvoiceGet', array($parameters));
    }

    /**
     * Retrieves List of open invoices -  invoice date, invoice ID, total, amt paid, balance, amt due
     *
     * @param WEBCentralizedShoppingCartOpenInvoiceGetList $parameters
     * @return WEBCentralizedShoppingCartOpenInvoiceGetListResponse
     */
    public function WEBCentralizedShoppingCartOpenInvoiceGetList(WEBCentralizedShoppingCartOpenInvoiceGetList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartOpenInvoiceGetList', array($parameters));
    }

    /**
     * Refreshes the membership object
     *
     * @param WEBCentralizedShoppingCartMembershipRefresh $parameters
     * @return WEBCentralizedShoppingCartMembershipRefreshResponse
     */
    public function WEBCentralizedShoppingCartMembershipRefresh(WEBCentralizedShoppingCartMembershipRefresh $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipRefresh', array($parameters));
    }

    /**
     * Add a membership to the shopping cart.
     *
     * @param WEBCentralizedShoppingCartMembershipAddMembership $parameters
     * @return WEBCentralizedShoppingCartMembershipAddMembershipResponse
     */
    public function WEBCentralizedShoppingCartMembershipAddMembership(WEBCentralizedShoppingCartMembershipAddMembership $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipAddMembership', array($parameters));
    }

    /**
     * Remove a membership from the shopping cart.
     *
     * @param WEBCentralizedShoppingCartMebmershipRemoveMembership $parameters
     * @return WEBCentralizedShoppingCartMebmershipRemoveMembershipResponse
     */
    public function WEBCentralizedShoppingCartMebmershipRemoveMembership(WEBCentralizedShoppingCartMebmershipRemoveMembership $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMebmershipRemoveMembership', array($parameters));
    }

    /**
     * Retrieves List of open invoices - a record with a membership type, indicates a
     *
     * @param WEBCentralizedShoppingCartMembershipOpenInvoiceGetList $parameters
     * @return WEBCentralizedShoppingCartMembershipOpenInvoiceGetListResponse
     */
    public function WEBCentralizedShoppingCartMembershipOpenInvoiceGetList(WEBCentralizedShoppingCartMembershipOpenInvoiceGetList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipOpenInvoiceGetList', array($parameters));
    }

    /**
     * Returns an existing open invoice object
     *
     * @param WEBCentralizedShoppingCartMembershipOpenInvoiceGet $parameters
     * @return WEBCentralizedShoppingCartMembershipOpenInvoiceGetResponse
     */
    public function WEBCentralizedShoppingCartMembershipOpenInvoiceGet(WEBCentralizedShoppingCartMembershipOpenInvoiceGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipOpenInvoiceGet', array($parameters));
    }

    /**
     * Adds the open invoice to the shopping cart
     *
     * @param WEBCentralizedShoppingCartMembershipOpenInvoiceAdd $parameters
     * @return WEBCentralizedShoppingCartMembershipOpenInvoiceAddResponse
     */
    public function WEBCentralizedShoppingCartMembershipOpenInvoiceAdd(WEBCentralizedShoppingCartMembershipOpenInvoiceAdd $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartMembershipOpenInvoiceAdd', array($parameters));
    }

    /**
     * Returns a list of exhibits
     *
     * @param WEBCentralizedShoppingCartExhibitorGetExhibitList $parameters
     * @return WEBCentralizedShoppingCartExhibitorGetExhibitListResponse
     */
    public function WEBCentralizedShoppingCartExhibitorGetExhibitList(WEBCentralizedShoppingCartExhibitorGetExhibitList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorGetExhibitList', array($parameters));
    }

    /**
     * Returns a new exhibitor object
     *
     * @param WEBCentralizedShoppingCartExhibitorGetNew $parameters
     * @return WEBCentralizedShoppingCartExhibitorGetNewResponse
     */
    public function WEBCentralizedShoppingCartExhibitorGetNew(WEBCentralizedShoppingCartExhibitorGetNew $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorGetNew', array($parameters));
    }

    /**
     * Returns an existing exhibitor object
     *
     * @param WEBCentralizedShoppingCartExhibitorGet $parameters
     * @return WEBCentralizedShoppingCartExhibitorGetResponse
     */
    public function WEBCentralizedShoppingCartExhibitorGet(WEBCentralizedShoppingCartExhibitorGet $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorGet', array($parameters));
    }

    /**
     * Returns a list of available booth types by exhibit key
     *
     * @param WEBCentralizedShoppingCartExhibitorGetBoothTypeList $parameters
     * @return WEBCentralizedShoppingCartExhibitorGetBoothTypeListResponse
     */
    public function WEBCentralizedShoppingCartExhibitorGetBoothTypeList(WEBCentralizedShoppingCartExhibitorGetBoothTypeList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorGetBoothTypeList', array($parameters));
    }

    /**
     * Returns a list of available booth categories by exhibit key
     *
     * @param WEBCentralizedShoppingCartExhibitorGetBoothCategoryList $parameters
     * @return WEBCentralizedShoppingCartExhibitorGetBoothCategoryListResponse
     */
    public function WEBCentralizedShoppingCartExhibitorGetBoothCategoryList(WEBCentralizedShoppingCartExhibitorGetBoothCategoryList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorGetBoothCategoryList', array($parameters));
    }

    /**
     * @param WEBCentralizedShoppingCartGetBoothList $parameters
     * @return WEBCentralizedShoppingCartGetBoothListResponse
     */
    public function WEBCentralizedShoppingCartExhibitorGetBoothList(WEBCentralizedShoppingCartGetBoothList $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorGetBoothList', array($parameters));
    }

    /**
     * @param WEBCentralizedShoppingCartExhibitorSetLineItems $parameters
     * @return WEBCentralizedShoppingCartExhibitorSetLineItemsResponse
     */
    public function WEBCentralizedShoppingCartExhibitorSetLineItems(WEBCentralizedShoppingCartExhibitorSetLineItems $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorSetLineItems', array($parameters));
    }

    /**
     * @param WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart $parameters
     * @return WEBCentralizedShoppingCartExhibitorSetLineItemsWithCartResponse
     */
    public function WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart(WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorSetLineItemsWithCart', array($parameters));
    }

    /**
     * @param WEBCentralizedShoppingCartExhibitorAddExhibitor $parameters
     * @return WEBCentralizedShoppingCartExhibitorAddExhibitorResponse
     */
    public function WEBCentralizedShoppingCartExhibitorAddExhibitor(WEBCentralizedShoppingCartExhibitorAddExhibitor $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartExhibitorAddExhibitor', array($parameters));
    }

    /**
     * Retrieves Shipping Product List.
     *
     * @param WEBCentralizedShoppingCartGetShippingOptions $parameters
     * @return WEBCentralizedShoppingCartGetShippingOptionsResponse
     */
    public function WEBCentralizedShoppingCartGetShippingOptions(WEBCentralizedShoppingCartGetShippingOptions $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetShippingOptions', array($parameters));
    }

    /**
     * Add a shipping item to Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartAddShippingItem $parameters
     * @return WEBCentralizedShoppingCartAddShippingItemResponse
     */
    public function WEBCentralizedShoppingCartAddShippingItem(WEBCentralizedShoppingCartAddShippingItem $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartAddShippingItem', array($parameters));
    }

    /**
     * Retrieves Available Payment Methods.
     *
     * @param WEBCentralizedShoppingCartGetPaymentOptions $parameters
     * @return WEBCentralizedShoppingCartGetPaymentOptionsResponse
     */
    public function WEBCentralizedShoppingCartGetPaymentOptions(WEBCentralizedShoppingCartGetPaymentOptions $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetPaymentOptions', array($parameters));
    }

    /**
     * Retrieves Installment Frequency Options. Assign ord_frequency to desired value. To generate Installments, set values for the following fields: ord_num_of_installments, ord_frequency, ord_ait_key
     *
     * @param WEBCentralizedShoppingCartGetInstallmentFrequencyOptions $parameters
     * @return WEBCentralizedShoppingCartGetInstallmentFrequencyOptionsResponse
     */
    public function WEBCentralizedShoppingCartGetInstallmentFrequencyOptions(WEBCentralizedShoppingCartGetInstallmentFrequencyOptions $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetInstallmentFrequencyOptions', array($parameters));
    }

    /**
     * Retrieves Installment Terms Options. Assign ord_ait_key to desired value. To generate Installments, set values for the following fields: ord_num_of_installments, ord_frequency, ord_ait_key
     *
     * @param WEBCentralizedShoppingCartGetInstallmentTermsOptions $parameters
     * @return WEBCentralizedShoppingCartGetInstallmentTermsOptionsResponse
     */
    public function WEBCentralizedShoppingCartGetInstallmentTermsOptions(WEBCentralizedShoppingCartGetInstallmentTermsOptions $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetInstallmentTermsOptions', array($parameters));
    }

    /**
     * Returns Product Detail / Line Item.
     *
     * @param WEBCentralizedShoppingCartGetProductLineItem $parameters
     * @return WEBCentralizedShoppingCartGetProductLineItemResponse
     */
    public function WEBCentralizedShoppingCartGetProductLineItem(WEBCentralizedShoppingCartGetProductLineItem $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductLineItem', array($parameters));
    }

    /**
     * Returns Product Detail / Line Item.
     *
     * @param WEBCentralizedShoppingCartGetProductLineItemWithCart $parameters
     * @return WEBCentralizedShoppingCartGetProductLineItemWithCartResponse
     */
    public function WEBCentralizedShoppingCartGetProductLineItemWithCart(WEBCentralizedShoppingCartGetProductLineItemWithCart $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartGetProductLineItemWithCart', array($parameters));
    }

    /**
     * Loads a line item.
     *
     * @param WEBCentralizedShoppingCartLoadLineItem $parameters
     * @return WEBCentralizedShoppingCartLoadLineItemResponse
     */
    public function WEBCentralizedShoppingCartLoadLineItem(WEBCentralizedShoppingCartLoadLineItem $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartLoadLineItem', array($parameters));
    }

    /**
     * Adds a line item to Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartAddLineItem $parameters
     * @return WEBCentralizedShoppingCartAddLineItemResponse
     */
    public function WEBCentralizedShoppingCartAddLineItem(WEBCentralizedShoppingCartAddLineItem $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartAddLineItem', array($parameters));
    }

    /**
     * Removes a line item from Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartRemoveLineItem $parameters
     * @return WEBCentralizedShoppingCartRemoveLineItemResponse
     */
    public function WEBCentralizedShoppingCartRemoveLineItem(WEBCentralizedShoppingCartRemoveLineItem $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartRemoveLineItem', array($parameters));
    }

    /**
     * Removes all line items from Centralized Shopping Cart
     *
     * @param WEBCentralizedShoppingCartRemoveAllLineItems $parameters
     * @return WEBCentralizedShoppingCartRemoveAllLineItemsResponse
     */
    public function WEBCentralizedShoppingCartRemoveAllLineItems(WEBCentralizedShoppingCartRemoveAllLineItems $parameters)
    {
      return $this->__soapCall('WEBCentralizedShoppingCartRemoveAllLineItems', array($parameters));
    }

    /**
     * @param GetDateTime $parameters
     * @return GetDateTimeResponse
     */
    public function GetDateTime(GetDateTime $parameters)
    {
      return $this->__soapCall('GetDateTime', array($parameters));
    }

    /**
     * Retrieves Form Controls By Form Key
     *
     * @param MetaDataGetForm $parameters
     * @return MetaDataGetFormResponse
     */
    public function MetaDataGetForm(MetaDataGetForm $parameters)
    {
      return $this->__soapCall('MetaDataGetForm', array($parameters));
    }

    /**
     * Retrieves Form Controls By Form Key
     *
     * @param MetaDataGetFormForFacadeObject $parameters
     * @return MetaDataGetFormForFacadeObjectResponse
     */
    public function MetaDataGetFormForFacadeObject(MetaDataGetFormForFacadeObject $parameters)
    {
      return $this->__soapCall('MetaDataGetFormForFacadeObject', array($parameters));
    }

    /**
     * Retrieves Form Control details By Form Key and control name
     *
     * @param MetaDataGetFormControlForFacadeObject $parameters
     * @return MetaDataGetFormControlForFacadeObjectResponse
     */
    public function MetaDataGetFormControlForFacadeObject(MetaDataGetFormControlForFacadeObject $parameters)
    {
      return $this->__soapCall('MetaDataGetFormControlForFacadeObject', array($parameters));
    }

    /**
     * Retrieves Form Controls By Form Key
     *
     * @param MetaDataGetFormForIndividual $parameters
     * @return MetaDataGetFormForIndividualResponse
     */
    public function MetaDataGetFormForIndividual(MetaDataGetFormForIndividual $parameters)
    {
      return $this->__soapCall('MetaDataGetFormForIndividual', array($parameters));
    }

    /**
     * Retrieves Wizard detaild by key
     *
     * @param MetaDataGetWizard $parameters
     * @return MetaDataGetWizardResponse
     */
    public function MetaDataGetWizard(MetaDataGetWizard $parameters)
    {
      return $this->__soapCall('MetaDataGetWizard', array($parameters));
    }

    /**
     * Retrieves Wizard form detaild by key
     *
     * @param MetaDataGetWizardForm $parameters
     * @return MetaDataGetWizardFormResponse
     */
    public function MetaDataGetWizardForm(MetaDataGetWizardForm $parameters)
    {
      return $this->__soapCall('MetaDataGetWizardForm', array($parameters));
    }

    /**
     * Retrieves the column values for DropDownLists and ListBoxes.
     *
     * @param WEBColumnGetColumnValuesByColumnName $parameters
     * @return WEBColumnGetColumnValuesByColumnNameResponse
     */
    public function WEBColumnGetColumnValuesByColumnName(WEBColumnGetColumnValuesByColumnName $parameters)
    {
      return $this->__soapCall('WEBColumnGetColumnValuesByColumnName', array($parameters));
    }

    /**
     * Get available promotional mailing types available for customers
     *
     * @param GetPromotionalMailingTypes $parameters
     * @return GetPromotionalMailingTypesResponse
     */
    public function GetPromotionalMailingTypes(GetPromotionalMailingTypes $parameters)
    {
      return $this->__soapCall('GetPromotionalMailingTypes', array($parameters));
    }

    /**
     * Get available subscription mailing types available for customers
     *
     * @param GetSubscriptionMailingTypes $parameters
     * @return GetSubscriptionMailingTypesResponse
     */
    public function GetSubscriptionMailingTypes(GetSubscriptionMailingTypes $parameters)
    {
      return $this->__soapCall('GetSubscriptionMailingTypes', array($parameters));
    }

    /**
     * Passing correct credentials to this method will return an authentication token - without an authentication token, the rest of the xWeb web methods will be inoperable.  The authentication token is governed by the group privileges assigned to the account invoking the xWeb web methods.  Please consult with the administrator of the netForum database to ensure your level of authorization.  This method MUST be the first method invoked at xWeb, as the authentication token that is returned is required for every xWeb method.
     *
     * @param Authenticate $parameters
     * @return AuthenticateResponse
     */
    public function Authenticate(Authenticate $parameters)
    {
      return $this->__soapCall('Authenticate', array($parameters));
    }

    /**
     * Passing correct credentials to this method will return an authentication token - without an authentication token, the rest of the xWeb web methods will be inoperable.  The authentication token is governed by the group privileges assigned to the account invoking the xWeb web methods.  Please consult with the administrator of the netForum database to ensure your level of authorization.  This method MUST be the first method invoked at xWeb, as the authentication token that is returned is required for every xWeb method.
     *
     * @param AuthenticateLdap $parameters
     * @return AuthenticateLdapResponse
     */
    public function AuthenticateLdap(AuthenticateLdap $parameters)
    {
      return $this->__soapCall('AuthenticateLdap', array($parameters));
    }

    /**
     * Provides an authentication token for a valid customer login and password.  The value for the login field depends on a netForum Systems Option ("useEmailForAuthorization"), so please check with the netforum administrator for the setting.  If there are more than one record with the exact same login and password combination, then the service will return the first match.  The keyOverride parameter is an implementation specific parameter (web.config change) to force xWeb to return the customer key (cst_key) for a valid credential.
     *
     * @param WebLogin $parameters
     * @return WebLoginResponse
     */
    public function WebLogin(WebLogin $parameters)
    {
      return $this->__soapCall('WebLogin', array($parameters));
    }

    /**
     * Provides the customer key (cst_key) for the authenticated token that is passed as a parameter - this method can be invoked after a successful WebLogin() method returns an authentication token.  The authentication token is the only parameter for this method.
     *
     * @param WebValidate $parameters
     * @return WebValidateResponse
     */
    public function WebValidate(WebValidate $parameters)
    {
      return $this->__soapCall('WebValidate', array($parameters));
    }

    /**
     * Forces the authentication token to be destroyed - this method is the companion method to the WebLogin() method or the WebValidate() method.  xWeb doesn't return an Xml Node for success.
     *
     * @param WebLogout $parameters
     * @return WebLogoutResponse
     */
    public function WebLogout(WebLogout $parameters)
    {
      return $this->__soapCall('WebLogout', array($parameters));
    }

    /**
     * Provides a means of retrieving single or multiple data records and returns either the specific columns (pruning the number of elements is governed by how the netforum facade object was constructed, for example, the one-to-many relationships cannot be rendered in a flat-view - in these cases, no value will be returned for the impacted elements) or the complete Facade object record (returning all the fields associated with a netForum Facade object can be done by passing a * as the sole value for the szColumnList value).
     *
     * @param GetQuery $parameters
     * @return GetQueryResponse
     */
    public function GetQuery(GetQuery $parameters)
    {
      return $this->__soapCall('GetQuery', array($parameters));
    }

    /**
     * Retrieve data from a query that was built in the netForum iWeb Run Query form.
     *
     * @param GetDynamicQuery $parameters
     * @return GetDynamicQueryResponse
     */
    public function GetDynamicQuery(GetDynamicQuery $parameters)
    {
      return $this->__soapCall('GetDynamicQuery', array($parameters));
    }

    /**
     * Retrieve definition of an iWeb Dynamic Query
     *
     * @param GetDynamicQueryDefinition $parameters
     * @return GetDynamicQueryDefinitionResponse
     */
    public function GetDynamicQueryDefinition(GetDynamicQueryDefinition $parameters)
    {
      return $this->__soapCall('GetDynamicQueryDefinition', array($parameters));
    }

    /**
     * Retrieves list of all audiences that a user can run.
     *
     * @param GetAudienceList $parameters
     * @return GetAudienceListResponse
     */
    public function GetAudienceList(GetAudienceList $parameters)
    {
      return $this->__soapCall('GetAudienceList', array($parameters));
    }

    /**
     * Retrieve data from an audience that was built in the netForum iWeb Audience form.
     *
     * @param GetAudience $parameters
     * @return GetAudienceResponse
     */
    public function GetAudience(GetAudience $parameters)
    {
      return $this->__soapCall('GetAudience', array($parameters));
    }

    /**
     * Retrieve definition of an iWeb Audience.
     *
     * @param GetAudienceDefinition $parameters
     * @return GetAudienceDefinitionResponse
     */
    public function GetAudienceDefinition(GetAudienceDefinition $parameters)
    {
      return $this->__soapCall('GetAudienceDefinition', array($parameters));
    }

    /**
     * Returns XmlNode with List Table definition for a given netFORUM Object.  This information is provided for documentation for using the GetQuery web method.
     *
     * @param GetQueryDefinition $parameters
     * @return GetQueryDefinitionResponse
     */
    public function GetQueryDefinition(GetQueryDefinition $parameters)
    {
      return $this->__soapCall('GetQueryDefinition', array($parameters));
    }

    /**
     * Provides a W3C XML Schema for any netFORUM Facade object.  The only parameter for this method is a valid ObjectName - the textual display name of the object for which the Xml Schema document is being requested (individual, address, etc.).  The Xml Schema document that is returned contains the data relationships, the datatypes, and the documentation for each element and group.  In short, this method returns a complete snapshot of the netForum Facade object.
     *
     * @param GetFacadeXMLSchema $parameters
     * @return GetFacadeXMLSchemaResponse
     */
    public function GetFacadeXMLSchema(GetFacadeXMLSchema $parameters)
    {
      return $this->__soapCall('GetFacadeXMLSchema', array($parameters));
    }

    /**
     * Retrieves the complete list of netForum Facade Objects that can be invoked.
     *
     * @param GetFacadeObjectList $parameters
     * @return GetFacadeObjectListResponse
     */
    public function GetFacadeObjectList(GetFacadeObjectList $parameters)
    {
      return $this->__soapCall('GetFacadeObjectList', array($parameters));
    }

    /**
     * Returns all the fields and related data for the requested object.  This method is marked for removal - the GetQuery() method returns same functionality.
     *
     * @param GetFacadeObject $parameters
     * @return GetFacadeObjectResponse
     */
    public function GetFacadeObject(GetFacadeObject $parameters)
    {
      return $this->__soapCall('GetFacadeObject', array($parameters));
    }

    /**
     * Updates a netForum Facade object and returns the modified netForum Facade object record. Parameters: szObjectName, szObjectKey, oNode.  szObjectName - the textual display name of the object for which the schema information is being Requested (individual, address, etc.).  szObjectKey - the GUID representing an object's unique identity (primary key).  oNode - an XML node containing elements that correspond to the Facade object's fields used to update the netForum data store.
     *
     * @param UpdateFacadeObject $parameters
     * @return UpdateFacadeObjectResponse
     */
    public function UpdateFacadeObject(UpdateFacadeObject $parameters)
    {
      return $this->__soapCall('UpdateFacadeObject', array($parameters));
    }

    /**
     * Inserts a netForum Facade object and if successful returns the primary key of the Facade object record that was created.
     *
     * @param InsertFacadeObject $parameters
     * @return InsertFacadeObjectResponse
     */
    public function InsertFacadeObject(InsertFacadeObject $parameters)
    {
      return $this->__soapCall('InsertFacadeObject', array($parameters));
    }

    /**
     * Returns basic contact information for the individual.
     *
     * @param GetIndividualInformation $parameters
     * @return GetIndividualInformationResponse
     */
    public function GetIndividualInformation(GetIndividualInformation $parameters)
    {
      return $this->__soapCall('GetIndividualInformation', array($parameters));
    }

    /**
     * Updates basic contact information for the individual.
     *
     * @param SetIndividualInformation $parameters
     * @return SetIndividualInformationResponse
     */
    public function SetIndividualInformation(SetIndividualInformation $parameters)
    {
      return $this->__soapCall('SetIndividualInformation', array($parameters));
    }

    /**
     * Creates basic contact information for the individual.
     *
     * @param NewIndividualInformation $parameters
     * @return NewIndividualInformationResponse
     */
    public function NewIndividualInformation(NewIndividualInformation $parameters)
    {
      return $this->__soapCall('NewIndividualInformation', array($parameters));
    }

    /**
     * Returns basic contact information for the organization.
     *
     * @param GetOrganizationInformation $parameters
     * @return GetOrganizationInformationResponse
     */
    public function GetOrganizationInformation(GetOrganizationInformation $parameters)
    {
      return $this->__soapCall('GetOrganizationInformation', array($parameters));
    }

    /**
     * Updates basic contact information for the organization.
     *
     * @param SetOrganizationInformation $parameters
     * @return SetOrganizationInformationResponse
     */
    public function SetOrganizationInformation(SetOrganizationInformation $parameters)
    {
      return $this->__soapCall('SetOrganizationInformation', array($parameters));
    }

    /**
     * Creates basic contact information for the organization.
     *
     * @param NewOrganizationInformation $parameters
     * @return NewOrganizationInformationResponse
     */
    public function NewOrganizationInformation(NewOrganizationInformation $parameters)
    {
      return $this->__soapCall('NewOrganizationInformation', array($parameters));
    }

    /**
     * Returns the inserted key(s) for the invoice.  Parameters: XmlNode or 3DES encrypted string.
     *
     * @param CreateInvoice $parameters
     * @return CreateInvoiceResponse
     */
    public function CreateInvoice(CreateInvoice $parameters)
    {
      return $this->__soapCall('CreateInvoice', array($parameters));
    }

    /**
     * Returns the inserted key(s) for the payment.  Parameters: XmlNode or 3DES encrypted string.
     *
     * @param CreatePayment $parameters
     * @return CreatePaymentResponse
     */
    public function CreatePayment(CreatePayment $parameters)
    {
      return $this->__soapCall('CreatePayment', array($parameters));
    }

    /**
     * Inserts advocacy data for US Representatives and US Senators.  This method can only create content and cannot update content.
     *
     * @param CreateAdvocacyData $parameters
     * @return CreateAdvocacyDataResponse
     */
    public function CreateAdvocacyData(CreateAdvocacyData $parameters)
    {
      return $this->__soapCall('CreateAdvocacyData', array($parameters));
    }

    /**
     * Return a list of available action types.
     *
     * @param GetActionTypeList $parameters
     * @return GetActionTypeListResponse
     */
    public function GetActionTypeList(GetActionTypeList $parameters)
    {
      return $this->__soapCall('GetActionTypeList', array($parameters));
    }

    /**
     * Return a list of action sub types for a specified action type.
     *
     * @param GetActionSubTypeList $parameters
     * @return GetActionSubTypeListResponse
     */
    public function GetActionSubTypeList(GetActionSubTypeList $parameters)
    {
      return $this->__soapCall('GetActionSubTypeList', array($parameters));
    }

    /**
     * Insert an action record for a customer.
     *
     * @param InsertCustomerAction $parameters
     * @return InsertCustomerActionResponse
     */
    public function InsertCustomerAction(InsertCustomerAction $parameters)
    {
      return $this->__soapCall('InsertCustomerAction', array($parameters));
    }

    /**
     * Create a new action sub type for a specified action type.
     *
     * @param InsertActionSubType $parameters
     * @return InsertActionSubTypeResponse
     */
    public function InsertActionSubType(InsertActionSubType $parameters)
    {
      return $this->__soapCall('InsertActionSubType', array($parameters));
    }

    /**
     * Return a list of cst of the IP.
     *
     * @param ElectronicSubscriptionGetCstListByIP $parameters
     * @return ElectronicSubscriptionGetCstListByIPResponse
     */
    public function ElectronicSubscriptionGetCustomerListByIP(ElectronicSubscriptionGetCstListByIP $parameters)
    {
      return $this->__soapCall('ElectronicSubscriptionGetCustomerListByIP', array($parameters));
    }

    /**
     * Return a list of Subscriptions of Customer.
     *
     * @param ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer $parameters
     * @return ElectronicSubscriptionGetPurchasedSubscriptionsByCustomerResponse
     */
    public function ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer(ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer $parameters)
    {
      return $this->__soapCall('ElectronicSubscriptionGetPurchasedSubscriptionsByCustomer', array($parameters));
    }

    /**
     * @param ExecuteMethod $parameters
     * @return ExecuteMethodResponse
     */
    public function ExecuteMethod(ExecuteMethod $parameters)
    {
      return $this->__soapCall('ExecuteMethod', array($parameters));
    }

    /**
     * Provides version  information about the xWeb application and Database Server and Name.
     *
     * @param GetVersion $parameters
     * @return GetVersionResponse
     */
    public function GetVersion(GetVersion $parameters)
    {
      return $this->__soapCall('GetVersion', array($parameters));
    }

    /**
     * Tests the applications connection to the database.
     *
     * @param TestConnection $parameters
     * @return TestConnectionResponse
     */
    public function TestConnection(TestConnection $parameters)
    {
      return $this->__soapCall('TestConnection', array($parameters));
    }

    /**
     * Get a list of all the time zones defined in netFORUM.
     *
     * @param GetTimeZones $parameters
     * @return GetTimeZonesResponse
     */
    public function GetTimeZones(GetTimeZones $parameters)
    {
      return $this->__soapCall('GetTimeZones', array($parameters));
    }

    /**
     * Merges one or more customers in the customersToMerge list with the customer designated by the cst_key_keep parameter. The method returns a MergeCustomersResult containing detailed information about the results of the merger of each customer and module.
     *
     * @param MergeCustomers $parameters
     * @return MergeCustomersResponse
     */
    public function MergeCustomers(MergeCustomers $parameters)
    {
      return $this->__soapCall('MergeCustomers', array($parameters));
    }

    /**
     * Returns a list of Module groups for the merging of customers.
     *
     * @param GetMergeCustomerModules $parameters
     * @return GetMergeCustomerModulesResponse
     */
    public function GetMergeCustomerModules(GetMergeCustomerModules $parameters)
    {
      return $this->__soapCall('GetMergeCustomerModules', array($parameters));
    }

    /**
     * Retrieves WEB integration relevent system options.
     *
     * @param WEBGetSystemOptions $parameters
     * @return WEBGetSystemOptionsResponse
     */
    public function WEBGetSystemOptions(WEBGetSystemOptions $parameters)
    {
      return $this->__soapCall('WEBGetSystemOptions', array($parameters));
    }

    /**
     * Updates a netForum System Option and returns the modified netForum Facade object record. Parameters: szOptionName, szOptionValue. Returns true if successful, false otherwise.
     *
     * @param WEBUpdateSystemOption $parameters
     * @return WEBUpdateSystemOptionResponse
     */
    public function WEBUpdateSystemOption(WEBUpdateSystemOption $parameters)
    {
      return $this->__soapCall('WEBUpdateSystemOption', array($parameters));
    }

    /**
     * Retrieves netForum roles.
     *
     * @param WEBGetAllRoles $parameters
     * @return WEBGetAllRolesResponse
     */
    public function WEBGetAllRoles(WEBGetAllRoles $parameters)
    {
      return $this->__soapCall('WEBGetAllRoles', array($parameters));
    }

    /**
     * Matches username to specified role and returns matching usernames.
     *
     * @param WEBFindUsersInRole $parameters
     * @return WEBFindUsersInRoleResponse
     */
    public function WEBFindUsersInRole(WEBFindUsersInRole $parameters)
    {
      return $this->__soapCall('WEBFindUsersInRole', array($parameters));
    }

    /**
     * Retrieves all roles for specified username.
     *
     * @param WEBGetRolesForUser $parameters
     * @return WEBGetRolesForUserResponse
     */
    public function WEBGetRolesForUser(WEBGetRolesForUser $parameters)
    {
      return $this->__soapCall('WEBGetRolesForUser', array($parameters));
    }

    /**
     * Retrieves all users in a specified role.
     *
     * @param WEBGetUsersInRole $parameters
     * @return WEBGetUsersInRoleResponse
     */
    public function WEBGetUsersInRole(WEBGetUsersInRole $parameters)
    {
      return $this->__soapCall('WEBGetUsersInRole', array($parameters));
    }

    /**
     * Returns a boolean indicating if the user is in the specified role.
     *
     * @param WEBIsUserInRole $parameters
     * @return WEBIsUserInRoleResponse
     */
    public function WEBIsUserInRole(WEBIsUserInRole $parameters)
    {
      return $this->__soapCall('WEBIsUserInRole', array($parameters));
    }

    /**
     * Returns a boolean indicating if the specified role exists.
     *
     * @param WEBRoleExists $parameters
     * @return WEBRoleExistsResponse
     */
    public function WEBRoleExists(WEBRoleExists $parameters)
    {
      return $this->__soapCall('WEBRoleExists', array($parameters));
    }

    /**
     * Changes the user password. Returns true if successful, false otherwise.
     *
     * @param WEBWebUserChangePassword $parameters
     * @return WEBWebUserChangePasswordResponse
     */
    public function WEBWebUserChangePassword(WEBWebUserChangePassword $parameters)
    {
      return $this->__soapCall('WEBWebUserChangePassword', array($parameters));
    }

    /**
     * Creates a web user. if susccessul, returns cst_recno used subsequently as username. if email is used as login id, leave username empty.
     *
     * @param WEBWebUserCreate $parameters
     * @return WEBWebUserCreateResponse
     */
    public function WEBWebUserCreate(WEBWebUserCreate $parameters)
    {
      return $this->__soapCall('WEBWebUserCreate', array($parameters));
    }

    /**
     * Creates a web user. if susccessul, returns cst_recno used subsequently as username. if email is used as login id, leave username empty.
     *
     * @param WEBWebUserUpdate $parameters
     * @return WEBWebUserUpdateResponse
     */
    public function WEBWebUserUpdate(WEBWebUserUpdate $parameters)
    {
      return $this->__soapCall('WEBWebUserUpdate', array($parameters));
    }

    /**
     * Matches username to specified email and returns matching users.
     *
     * @param WEBWebUserFindUsersByEmail $parameters
     * @return WEBWebUserFindUsersByEmailResponse
     */
    public function WEBWebUserFindUsersByEmail(WEBWebUserFindUsersByEmail $parameters)
    {
      return $this->__soapCall('WEBWebUserFindUsersByEmail', array($parameters));
    }

    /**
     * Matches username to domain and returns matching users.
     *
     * @param WEBWebUserFindUsersByDomain $parameters
     * @return WEBWebUserFindUsersByDomainResponse
     */
    public function WEBWebUserFindUsersByDomain(WEBWebUserFindUsersByDomain $parameters)
    {
      return $this->__soapCall('WEBWebUserFindUsersByDomain', array($parameters));
    }

    /**
     * Matches organizations to domain and returns matching organizations.
     *
     * @param WEBWebUserFindOrganizationsByDomain $parameters
     * @return WEBWebUserFindOrganizationsByDomainResponse
     */
    public function WEBWebUserFindOrganizationsByDomain(WEBWebUserFindOrganizationsByDomain $parameters)
    {
      return $this->__soapCall('WEBWebUserFindOrganizationsByDomain', array($parameters));
    }

    /**
     * returns web users with a matching userName, firstName or lastName.
     *
     * @param WEBWebUserFindUsersByName $parameters
     * @return WEBWebUserFindUsersByNameResponse
     */
    public function WEBWebUserFindUsersByName(WEBWebUserFindUsersByName $parameters)
    {
      return $this->__soapCall('WEBWebUserFindUsersByName', array($parameters));
    }

    /**
     * returns web users with a matching userName, firstName and lastName.
     *
     * @param WEBWebUserFindUsersByUserNameFirstNameLastName $parameters
     * @return WEBWebUserFindUsersByUserNameFirstNameLastNameResponse
     */
    public function WEBWebUserFindUsersByUserNameFirstNameLastName(WEBWebUserFindUsersByUserNameFirstNameLastName $parameters)
    {
      return $this->__soapCall('WEBWebUserFindUsersByUserNameFirstNameLastName', array($parameters));
    }

    /**
     * returns web user info.
     *
     * @param WEBWebUserGet $parameters
     * @return WEBWebUserGetResponse
     */
    public function WEBWebUserGet(WEBWebUserGet $parameters)
    {
      return $this->__soapCall('WEBWebUserGet', array($parameters));
    }

    /**
     * returns web user info.
     *
     * @param WEBWebUserGetByRecno_Custom $parameters
     * @return WEBWebUserGetByRecno_CustomResponse
     */
    public function WEBWebUserGetByRecno_Custom(WEBWebUserGetByRecno_Custom $parameters)
    {
      return $this->__soapCall('WEBWebUserGetByRecno_Custom', array($parameters));
    }

    /**
     * unlock the web user. Returns true if successful, false otherwise.
     *
     * @param WEBWebUserUnlock $parameters
     * @return WEBWebUserUnlockResponse
     */
    public function WEBWebUserUnlock(WEBWebUserUnlock $parameters)
    {
      return $this->__soapCall('WEBWebUserUnlock', array($parameters));
    }

    /**
     * lock-out the web user. Returns true if successful, false otherwise.
     *
     * @param WEBWebUserLock $parameters
     * @return WEBWebUserLockResponse
     */
    public function WEBWebUserLock(WEBWebUserLock $parameters)
    {
      return $this->__soapCall('WEBWebUserLock', array($parameters));
    }

    /**
     * pass login id/email and password to validate the web user. Returns Web User Info if successful.
     *
     * @param WEBWebUserLogin $parameters
     * @return WEBWebUserLoginResponse
     */
    public function WEBWebUserLogin(WEBWebUserLogin $parameters)
    {
      return $this->__soapCall('WEBWebUserLogin', array($parameters));
    }

    /**
     * pass login id/email and password to validate the web user and return a remember-me token. Returns Web User Info if successful.
     *
     * @param WEBWebUserLoginAndRememberMe $parameters
     * @return WEBWebUserLoginAndRememberMeResponse
     */
    public function WEBWebUserLoginAndRememberMe(WEBWebUserLoginAndRememberMe $parameters)
    {
      return $this->__soapCall('WEBWebUserLoginAndRememberMe', array($parameters));
    }

    /**
     * Provides the Web User info for the authenticated token that is passed as a parameter - this method can be invoked after a successful Login that returns an authentication token.  The authentication token is the only parameter for this method.
     *
     * @param WEBWebUserLoginByRememberMe $parameters
     * @return WEBWebUserLoginByRememberMeResponse
     */
    public function WEBWebUserLoginByRememberMe(WEBWebUserLoginByRememberMe $parameters)
    {
      return $this->__soapCall('WEBWebUserLoginByRememberMe', array($parameters));
    }

    /**
     * pass login id/email and password to validate the web user. Returns Web User info if validated.
     *
     * @param WEBWebUserValidateLogin $parameters
     * @return WEBWebUserValidateLoginResponse
     */
    public function WEBWebUserValidateLogin(WEBWebUserValidateLogin $parameters)
    {
      return $this->__soapCall('WEBWebUserValidateLogin', array($parameters));
    }

    /**
     * Provides the Web User info for the authenticated token that is passed as a parameter - this method can be invoked after a successful Login that returns an authentication token.  The authentication token is the only parameter for this method.
     *
     * @param WEBWebUserValidateToken $parameters
     * @return WEBWebUserValidateTokenResponse
     */
    public function WEBWebUserValidateToken(WEBWebUserValidateToken $parameters)
    {
      return $this->__soapCall('WEBWebUserValidateToken', array($parameters));
    }

    /**
     * pass login id/email and password to validate the web user. Returns cst_recno/username if successful.
     *
     * @param WEBWebUserLogin_Custom $parameters
     * @return WEBWebUserLogin_CustomResponse
     */
    public function WEBWebUserLogin_Custom(WEBWebUserLogin_Custom $parameters)
    {
      return $this->__soapCall('WEBWebUserLogin_Custom', array($parameters));
    }

    /**
     * pass login id/email and password to validate the web user. Returns cst_recno/username if successful.
     *
     * @param WEBWebUserLoginByRecno_Custom $parameters
     * @return WEBWebUserLoginByRecno_CustomResponse
     */
    public function WEBWebUserLoginByRecno_Custom(WEBWebUserLoginByRecno_Custom $parameters)
    {
      return $this->__soapCall('WEBWebUserLoginByRecno_Custom', array($parameters));
    }

    /**
     * pass login id/email and password to validate the web user. Returns cst_recno/username if validated.
     *
     * @param WEBWebUserValidateLogin_Custom $parameters
     * @return WEBWebUserValidateLogin_CustomResponse
     */
    public function WEBWebUserValidateLogin_Custom(WEBWebUserValidateLogin_Custom $parameters)
    {
      return $this->__soapCall('WEBWebUserValidateLogin_Custom', array($parameters));
    }

    /**
     * Provides the cst_recno for the authenticated token that is passed as a parameter - this method can be invoked after a successful Login that returns an authentication token.  The authentication token is the only parameter for this method.
     *
     * @param WEBWebUserValidateToken_Custom $parameters
     * @return WEBWebUserValidateToken_CustomResponse
     */
    public function WEBWebUserValidateToken_Custom(WEBWebUserValidateToken_Custom $parameters)
    {
      return $this->__soapCall('WEBWebUserValidateToken_Custom', array($parameters));
    }

    /**
     * Gets an individual's Info.
     *
     * @param WEBIndividualGet $parameters
     * @return WEBIndividualGetResponse
     */
    public function WEBIndividualGet(WEBIndividualGet $parameters)
    {
      return $this->__soapCall('WEBIndividualGet', array($parameters));
    }

    /**
     * Updates an individual's infor.
     *
     * @param WEBIndividualUpdate $parameters
     * @return WEBIndividualUpdateResponse
     */
    public function WEBIndividualUpdate(WEBIndividualUpdate $parameters)
    {
      return $this->__soapCall('WEBIndividualUpdate', array($parameters));
    }

    /**
     * Inserts a new individual.
     *
     * @param WEBIndividualInsert $parameters
     * @return WEBIndividualInsertResponse
     */
    public function WEBIndividualInsert(WEBIndividualInsert $parameters)
    {
      return $this->__soapCall('WEBIndividualInsert', array($parameters));
    }

    /**
     * Retrieves a list of individual prefixes. A prefix code can be assigned to ind_prf_code when inserting/updating an individual.
     *
     * @param WEBIndividualGetPrefixes $parameters
     * @return WEBIndividualGetPrefixesResponse
     */
    public function WEBIndividualGetPrefixes(WEBIndividualGetPrefixes $parameters)
    {
      return $this->__soapCall('WEBIndividualGetPrefixes', array($parameters));
    }

    /**
     * Retrieves a list of individual suffixes. A suffix code can be assigned to ind_sfx_code when inserting/updating an individual.
     *
     * @param WEBIndividualGetSuffixes $parameters
     * @return WEBIndividualGetSuffixesResponse
     */
    public function WEBIndividualGetSuffixes(WEBIndividualGetSuffixes $parameters)
    {
      return $this->__soapCall('WEBIndividualGetSuffixes', array($parameters));
    }

    /**
     * Retrieves a list of address types. An address type key can be assigned to cxa_adt_key when inserting/updating an address.
     *
     * @param WEBAddressGetTypes $parameters
     * @return WEBAddressGetTypesResponse
     */
    public function WEBAddressGetTypes(WEBAddressGetTypes $parameters)
    {
      return $this->__soapCall('WEBAddressGetTypes', array($parameters));
    }

    /**
     * Retrieves a list of countries. A country code can be assigned to adr_country when inserting/updating an address.
     *
     * @param WEBAddressGetCountries $parameters
     * @return WEBAddressGetCountriesResponse
     */
    public function WEBAddressGetCountries(WEBAddressGetCountries $parameters)
    {
      return $this->__soapCall('WEBAddressGetCountries', array($parameters));
    }

    /**
     * Retrieves a list of states. A state code can be assigned to adr_state when inserting/updating an address.
     *
     * @param WEBAddressGetStates $parameters
     * @return WEBAddressGetStatesResponse
     */
    public function WEBAddressGetStates(WEBAddressGetStates $parameters)
    {
      return $this->__soapCall('WEBAddressGetStates', array($parameters));
    }

    /**
     * Gets a customer's address info.
     *
     * @param WEBAddressGet $parameters
     * @return WEBAddressGetResponse
     */
    public function WEBAddressGet(WEBAddressGet $parameters)
    {
      return $this->__soapCall('WEBAddressGet', array($parameters));
    }

    /**
     * Updates a customer's address info.
     *
     * @param WEBAddressUpdate $parameters
     * @return WEBAddressUpdateResponse
     */
    public function WEBAddressUpdate(WEBAddressUpdate $parameters)
    {
      return $this->__soapCall('WEBAddressUpdate', array($parameters));
    }

    /**
     * Inserts a new customer address.
     *
     * @param WEBAddressInsert $parameters
     * @return WEBAddressInsertResponse
     */
    public function WEBAddressInsert(WEBAddressInsert $parameters)
    {
      return $this->__soapCall('WEBAddressInsert', array($parameters));
    }

    /**
     * Retrieves list of addresses for specified customer.
     *
     * @param WEBAddressGetAddressesByCustomer $parameters
     * @return WEBAddressGetAddressesByCustomerResponse
     */
    public function WEBAddressGetAddressesByCustomer(WEBAddressGetAddressesByCustomer $parameters)
    {
      return $this->__soapCall('WEBAddressGetAddressesByCustomer', array($parameters));
    }

    /**
     * Retrieves a list of phone types. A phone type key can be assigned to cph_pht_key when inserting/updating a phone number.
     *
     * @param WEBPhoneGetTypes $parameters
     * @return WEBPhoneGetTypesResponse
     */
    public function WEBPhoneGetTypes(WEBPhoneGetTypes $parameters)
    {
      return $this->__soapCall('WEBPhoneGetTypes', array($parameters));
    }

    /**
     * Gets a customer's phone info.
     *
     * @param WEBPhoneGet $parameters
     * @return WEBPhoneGetResponse
     */
    public function WEBPhoneGet(WEBPhoneGet $parameters)
    {
      return $this->__soapCall('WEBPhoneGet', array($parameters));
    }

    /**
     * Updates a customer's fax info.
     *
     * @param WEBPhoneUpdate $parameters
     * @return WEBPhoneUpdateResponse
     */
    public function WEBPhoneUpdate(WEBPhoneUpdate $parameters)
    {
      return $this->__soapCall('WEBPhoneUpdate', array($parameters));
    }

    /**
     * Inserts a new customer phone.
     *
     * @param WEBPhoneInsert $parameters
     * @return WEBPhoneInsertResponse
     */
    public function WEBPhoneInsert(WEBPhoneInsert $parameters)
    {
      return $this->__soapCall('WEBPhoneInsert', array($parameters));
    }

    /**
     * Retrieves list of phone numbers for specified customer.
     *
     * @param WEBPhoneGetPhonesByCustomer $parameters
     * @return WEBPhoneGetPhonesByCustomerResponse
     */
    public function WEBPhoneGetPhonesByCustomer(WEBPhoneGetPhonesByCustomer $parameters)
    {
      return $this->__soapCall('WEBPhoneGetPhonesByCustomer', array($parameters));
    }

    /**
     * Retrieves a list of fax types. A fax type key can be assigned to cfx_fxt_key when inserting/updating a fax number.
     *
     * @param WEBFaxGetTypes $parameters
     * @return WEBFaxGetTypesResponse
     */
    public function WEBFaxGetTypes(WEBFaxGetTypes $parameters)
    {
      return $this->__soapCall('WEBFaxGetTypes', array($parameters));
    }

    /**
     * Gets a customer's fax info.
     *
     * @param WEBFaxGet $parameters
     * @return WEBFaxGetResponse
     */
    public function WEBFaxGet(WEBFaxGet $parameters)
    {
      return $this->__soapCall('WEBFaxGet', array($parameters));
    }

    /**
     * Updates a customer's fax info.
     *
     * @param WEBFaxUpdate $parameters
     * @return WEBFaxUpdateResponse
     */
    public function WEBFaxUpdate(WEBFaxUpdate $parameters)
    {
      return $this->__soapCall('WEBFaxUpdate', array($parameters));
    }

    /**
     * Inserts a new customer fax.
     *
     * @param WEBFaxInsert $parameters
     * @return WEBFaxInsertResponse
     */
    public function WEBFaxInsert(WEBFaxInsert $parameters)
    {
      return $this->__soapCall('WEBFaxInsert', array($parameters));
    }

    /**
     * Retrieves list of faxes for specified customer.
     *
     * @param WEBFaxGetFaxesByCustomer $parameters
     * @return WEBFaxGetFaxesByCustomerResponse
     */
    public function WEBFaxGetFaxesByCustomer(WEBFaxGetFaxesByCustomer $parameters)
    {
      return $this->__soapCall('WEBFaxGetFaxesByCustomer', array($parameters));
    }

    /**
     * Gets a customer's email info.
     *
     * @param WEBEmailGet $parameters
     * @return WEBEmailGetResponse
     */
    public function WEBEmailGet(WEBEmailGet $parameters)
    {
      return $this->__soapCall('WEBEmailGet', array($parameters));
    }

    /**
     * Updates a customer's email info.
     *
     * @param WEBEmailUpdate $parameters
     * @return WEBEmailUpdateResponse
     */
    public function WEBEmailUpdate(WEBEmailUpdate $parameters)
    {
      return $this->__soapCall('WEBEmailUpdate', array($parameters));
    }

    /**
     * Inserts a new customer email.
     *
     * @param WEBEmailInsert $parameters
     * @return WEBEmailInsertResponse
     */
    public function WEBEmailInsert(WEBEmailInsert $parameters)
    {
      return $this->__soapCall('WEBEmailInsert', array($parameters));
    }

    /**
     * Retrieves list of emails for specified customer.
     *
     * @param WEBEmailGetEmailsByCustomer $parameters
     * @return WEBEmailGetEmailsByCustomerResponse
     */
    public function WEBEmailGetEmailsByCustomer(WEBEmailGetEmailsByCustomer $parameters)
    {
      return $this->__soapCall('WEBEmailGetEmailsByCustomer', array($parameters));
    }

    /**
     * Retrieves a list of organization types. The organization type code can be assigned to org_ogt_code when inserting/updating an organization.
     *
     * @param WEBOrganizationGetTypes $parameters
     * @return WEBOrganizationGetTypesResponse
     */
    public function WEBOrganizationGetTypes(WEBOrganizationGetTypes $parameters)
    {
      return $this->__soapCall('WEBOrganizationGetTypes', array($parameters));
    }

    /**
     * Gets an individual's Organization Info.
     *
     * @param WEBOrganizationGet $parameters
     * @return WEBOrganizationGetResponse
     */
    public function WEBOrganizationGet(WEBOrganizationGet $parameters)
    {
      return $this->__soapCall('WEBOrganizationGet', array($parameters));
    }

    /**
     * Updates an individual's Organization info.
     *
     * @param WEBOrganizationUpdate $parameters
     * @return WEBOrganizationUpdateResponse
     */
    public function WEBOrganizationUpdate(WEBOrganizationUpdate $parameters)
    {
      return $this->__soapCall('WEBOrganizationUpdate', array($parameters));
    }

    /**
     * Inserts a new organization.
     *
     * @param WEBOrganizationInsert $parameters
     * @return WEBOrganizationInsertResponse
     */
    public function WEBOrganizationInsert(WEBOrganizationInsert $parameters)
    {
      return $this->__soapCall('WEBOrganizationInsert', array($parameters));
    }

    /**
     * Creates a new contact request.
     *
     * @param WEBContactRequestInsert $parameters
     * @return WEBContactRequestInsertResponse
     */
    public function WEBContactRequestInsert(WEBContactRequestInsert $parameters)
    {
      return $this->__soapCall('WEBContactRequestInsert', array($parameters));
    }

    /**
     * Retrieves a list of contact request originations.
     *
     * @param WEBContactRequestGetOriginations $parameters
     * @return WEBContactRequestGetOriginationsResponse
     */
    public function WEBContactRequestGetOriginations(WEBContactRequestGetOriginations $parameters)
    {
      return $this->__soapCall('WEBContactRequestGetOriginations', array($parameters));
    }

    /**
     * Retrieves a list of contact request priorities.
     *
     * @param WEBContactRequestGetPriorities $parameters
     * @return WEBContactRequestGetPrioritiesResponse
     */
    public function WEBContactRequestGetPriorities(WEBContactRequestGetPriorities $parameters)
    {
      return $this->__soapCall('WEBContactRequestGetPriorities', array($parameters));
    }

    /**
     * Retrieves a list of contact request types.
     *
     * @param WEBContactRequestGetRequestTypes $parameters
     * @return WEBContactRequestGetRequestTypesResponse
     */
    public function WEBContactRequestGetRequestTypes(WEBContactRequestGetRequestTypes $parameters)
    {
      return $this->__soapCall('WEBContactRequestGetRequestTypes', array($parameters));
    }

    /**
     * Retrieves a list of contact request reasons for all types.
     *
     * @param WEBContactRequestGetRequestTypeReasons $parameters
     * @return WEBContactRequestGetRequestTypeReasonsResponse
     */
    public function WEBContactRequestGetRequestTypeReasons(WEBContactRequestGetRequestTypeReasons $parameters)
    {
      return $this->__soapCall('WEBContactRequestGetRequestTypeReasons', array($parameters));
    }

    /**
     * Retrieves a list of contact request statuses.
     *
     * @param WEBContactRequestGetStatuses $parameters
     * @return WEBContactRequestGetStatusesResponse
     */
    public function WEBContactRequestGetStatuses(WEBContactRequestGetStatuses $parameters)
    {
      return $this->__soapCall('WEBContactRequestGetStatuses', array($parameters));
    }

    /**
     * Retrieves list of purchased products by customer.
     *
     * @param WEBActivityGetPurchasedProductsByCustomer $parameters
     * @return WEBActivityGetPurchasedProductsByCustomerResponse
     */
    public function WEBActivityGetPurchasedProductsByCustomer(WEBActivityGetPurchasedProductsByCustomer $parameters)
    {
      return $this->__soapCall('WEBActivityGetPurchasedProductsByCustomer', array($parameters));
    }

    /**
     * Retrieves list of purchased events by customer.
     *
     * @param WEBActivityGetPurchasedEventsByCustomer $parameters
     * @return WEBActivityGetPurchasedEventsByCustomerResponse
     */
    public function WEBActivityGetPurchasedEventsByCustomer(WEBActivityGetPurchasedEventsByCustomer $parameters)
    {
      return $this->__soapCall('WEBActivityGetPurchasedEventsByCustomer', array($parameters));
    }

    /**
     * Returns TRUE if the customer is already registered for the event..
     *
     * @param WEBActivityAlreadyRegisteredForEvent $parameters
     * @return WEBActivityAlreadyRegisteredForEventResponse
     */
    public function WEBActivityAlreadyRegisteredForEvent(WEBActivityAlreadyRegisteredForEvent $parameters)
    {
      return $this->__soapCall('WEBActivityAlreadyRegisteredForEvent', array($parameters));
    }

    /**
     * Returns the number of guests attached to a particular registration.
     *
     * @param WEBActivityNumberOfRegisteredGuests $parameters
     * @return WEBActivityNumberOfRegisteredGuestsResponse
     */
    public function WEBActivityNumberOfRegisteredGuests(WEBActivityNumberOfRegisteredGuests $parameters)
    {
      return $this->__soapCall('WEBActivityNumberOfRegisteredGuests', array($parameters));
    }

    /**
     * Retrieves list of purchased memberships by customer.
     *
     * @param WEBActivityGetPurchasedMembershipsByCustomer $parameters
     * @return WEBActivityGetPurchasedMembershipsByCustomerResponse
     */
    public function WEBActivityGetPurchasedMembershipsByCustomer(WEBActivityGetPurchasedMembershipsByCustomer $parameters)
    {
      return $this->__soapCall('WEBActivityGetPurchasedMembershipsByCustomer', array($parameters));
    }

    /**
     * Retrieves list of purchased chapter memberships by customer.
     *
     * @param WEBActivityGetPurchasedChapterMembershipsByCustomer $parameters
     * @return WEBActivityGetPurchasedChapterMembershipsByCustomerResponse
     */
    public function WEBActivityGetPurchasedChapterMembershipsByCustomer(WEBActivityGetPurchasedChapterMembershipsByCustomer $parameters)
    {
      return $this->__soapCall('WEBActivityGetPurchasedChapterMembershipsByCustomer', array($parameters));
    }

    /**
     * Retrieves list of downloadable purchased products by customer.
     *
     * @param WEBActivityGetPurchasedDownoadableProductsByCustomer $parameters
     * @return WEBActivityGetPurchasedDownoadableProductsByCustomerResponse
     */
    public function WEBActivityGetPurchasedDownoadableProductsByCustomer(WEBActivityGetPurchasedDownoadableProductsByCustomer $parameters)
    {
      return $this->__soapCall('WEBActivityGetPurchasedDownoadableProductsByCustomer', array($parameters));
    }

    /**
     * Retrieves Registrant Events.
     *
     * @param WEBActivityGetRegistrantEvents $parameters
     * @return WEBActivityGetRegistrantEventsResponse
     */
    public function WEBActivityGetRegistrantEvents(WEBActivityGetRegistrantEvents $parameters)
    {
      return $this->__soapCall('WEBActivityGetRegistrantEvents', array($parameters));
    }

    /**
     * Retrieves Registrant Sessions
     *
     * @param WEBActivityGetRegistrantSessions $parameters
     * @return WEBActivityGetRegistrantSessionsResponse
     */
    public function WEBActivityGetRegistrantSessions(WEBActivityGetRegistrantSessions $parameters)
    {
      return $this->__soapCall('WEBActivityGetRegistrantSessions', array($parameters));
    }

    /**
     * Retrieves Registrant Tracks
     *
     * @param WEBActivityGetRegistrantTracks $parameters
     * @return WEBActivityGetRegistrantTracksResponse
     */
    public function WEBActivityGetRegistrantTracks(WEBActivityGetRegistrantTracks $parameters)
    {
      return $this->__soapCall('WEBActivityGetRegistrantTracks', array($parameters));
    }

    /**
     * Retrieves Registrant Guests
     *
     * @param WEBActivityGetRegistrantGuests $parameters
     * @return WEBActivityGetRegistrantGuestsResponse
     */
    public function WEBActivityGetRegistrantGuests(WEBActivityGetRegistrantGuests $parameters)
    {
      return $this->__soapCall('WEBActivityGetRegistrantGuests', array($parameters));
    }

    /**
     * Retrieves List of Active Committees.
     *
     * @param WEBCommitteeGetCommitteeList $parameters
     * @return WEBCommitteeGetCommitteeListResponse
     */
    public function WEBCommitteeGetCommitteeList(WEBCommitteeGetCommitteeList $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetCommitteeList', array($parameters));
    }

    /**
     * Retrieves List of Active Committees by name.
     *
     * @param WEBCommitteeGetCommitteeListByName $parameters
     * @return WEBCommitteeGetCommitteeListByNameResponse
     */
    public function WEBCommitteeGetCommitteeListByName(WEBCommitteeGetCommitteeListByName $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetCommitteeListByName', array($parameters));
    }

    /**
     * Retrieves Committee List for logged in web user.
     *
     * @param WEBCommitteeGetCommitteesByCustomer $parameters
     * @return WEBCommitteeGetCommitteesByCustomerResponse
     */
    public function WEBCommitteeGetCommitteesByCustomer(WEBCommitteeGetCommitteesByCustomer $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetCommitteesByCustomer', array($parameters));
    }

    /**
     * Retrieves List of Active Sub-Committees.
     *
     * @param WEBCommitteeGetSubCommitteeListByCommittee $parameters
     * @return WEBCommitteeGetSubCommitteeListByCommitteeResponse
     */
    public function WEBCommitteeGetSubCommitteeListByCommittee(WEBCommitteeGetSubCommitteeListByCommittee $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetSubCommitteeListByCommittee', array($parameters));
    }

    /**
     * Retrieves Committee Members for specified committee.
     *
     * @param WEBCommitteeGetMembers $parameters
     * @return WEBCommitteeGetMembersResponse
     */
    public function WEBCommitteeGetMembers(WEBCommitteeGetMembers $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetMembers', array($parameters));
    }

    /**
     * Retrieves Committee Documents for specified committee.
     *
     * @param WEBCommitteeGetDocuments $parameters
     * @return WEBCommitteeGetDocumentsResponse
     */
    public function WEBCommitteeGetDocuments(WEBCommitteeGetDocuments $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetDocuments', array($parameters));
    }

    /**
     * Returns committee information.
     *
     * @param WEBCommitteeGetCommitteeByKey $parameters
     * @return WEBCommitteeGetCommitteeByKeyResponse
     */
    public function WEBCommitteeGetCommitteeByKey(WEBCommitteeGetCommitteeByKey $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetCommitteeByKey', array($parameters));
    }

    /**
     * Returns committee information.
     *
     * @param WEBCommitteeGet $parameters
     * @return WEBCommitteeGetResponse
     */
    public function WEBCommitteeGet(WEBCommitteeGet $parameters)
    {
      return $this->__soapCall('WEBCommitteeGet', array($parameters));
    }

    /**
     * Adds a committee nomination.
     *
     * @param WEBCommitteeNominationInsert $parameters
     * @return WEBCommitteeNominationInsertResponse
     */
    public function WEBCommitteeNominationInsert(WEBCommitteeNominationInsert $parameters)
    {
      return $this->__soapCall('WEBCommitteeNominationInsert', array($parameters));
    }

    /**
     * Retrieves position list by committee.
     *
     * @param WEBCommitteeGetPositionList $parameters
     * @return WEBCommitteeGetPositionListResponse
     */
    public function WEBCommitteeGetPositionList(WEBCommitteeGetPositionList $parameters)
    {
      return $this->__soapCall('WEBCommitteeGetPositionList', array($parameters));
    }

    /**
     * Searches the membership directory.
     *
     * @param WEBMemberDirectorySearch $parameters
     * @return WEBMemberDirectorySearchResponse
     */
    public function WEBMemberDirectorySearch(WEBMemberDirectorySearch $parameters)
    {
      return $this->__soapCall('WEBMemberDirectorySearch', array($parameters));
    }

    /**
     * Searches the membership directory.
     *
     * @param WEBMemberDirectoryOrganizationSearch $parameters
     * @return WEBMemberDirectoryOrganizationSearchResponse
     */
    public function WEBMemberDirectoryOrganizationSearch(WEBMemberDirectoryOrganizationSearch $parameters)
    {
      return $this->__soapCall('WEBMemberDirectoryOrganizationSearch', array($parameters));
    }

    /**
     * Retrieves list of chapters.
     *
     * @param WEBChaptersGetChapterList $parameters
     * @return WEBChaptersGetChapterListResponse
     */
    public function WEBChaptersGetChapterList(WEBChaptersGetChapterList $parameters)
    {
      return $this->__soapCall('WEBChaptersGetChapterList', array($parameters));
    }

    /**
     * Retrieves list of chapters by name.
     *
     * @param WEBChaptersGetChapterListByName $parameters
     * @return WEBChaptersGetChapterListByNameResponse
     */
    public function WEBChaptersGetChapterListByName(WEBChaptersGetChapterListByName $parameters)
    {
      return $this->__soapCall('WEBChaptersGetChapterListByName', array($parameters));
    }

}
