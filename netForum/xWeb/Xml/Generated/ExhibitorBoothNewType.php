<?php

namespace netForum\xWeb\Xml\Generated;

class ExhibitorBoothNewType
{

    /**
     * @var av_key_Type $CurrentKey
     */
    protected $CurrentKey = null;

    /**
     * @var ExhibitorBoothNew_Exhibitor_Booth_DataObjectType $Exhibitor_Booth
     */
    protected $Exhibitor_Booth = null;

    /**
     * @var ExhibitorBoothNew_ExhibitorCustomer_DataObjectType $ExhibitorCustomer
     */
    protected $ExhibitorCustomer = null;

    /**
     * @var ExhibitorBoothNew_Exhibitor_DataObjectType $Exhibitor
     */
    protected $Exhibitor = null;

    /**
     * @var ExhibitorBoothNew_Priority_Point_Detail_DataObjectType $Priority_Point_Detail
     */
    protected $Priority_Point_Detail = null;

    /**
     * @var ExhibitorBoothNew_Booth_Complement_DataObjectType $Booth_Complement
     */
    protected $Booth_Complement = null;

    /**
     * @var ExhibitorBoothNew_Exhibit_Show_DataObjectType $Exhibit_Show
     */
    protected $Exhibit_Show = null;

    /**
     * @var ExhibitorBoothNew_Booth_Fee_DataObjectType $Booth_Fee
     */
    protected $Booth_Fee = null;

    /**
     * @var ExhibitorBoothNew_Exhibit_Booth_DataObjectType $Exhibit_Booth
     */
    protected $Exhibit_Booth = null;

    /**
     * @var ExhibitorBoothNew_Invoice_DataObjectType $Invoice
     */
    protected $Invoice = null;

    /**
     * @var ExhibitorBoothNew_Payment_DataObjectType $Payment
     */
    protected $Payment = null;

    /**
     * @var ExhibitorBoothNew_Payment_Info_DataObjectType $Payment_Info
     */
    protected $Payment_Info = null;

    /**
     * @var ExhibitorBoothNew_Payment_Method_DataObjectType $Payment_Method
     */
    protected $Payment_Method = null;

    /**
     * @var ExhibitorBoothNew_Product_DataObjectType $Product
     */
    protected $Product = null;

    /**
     * @var ExhibitorBoothNew_Booth_Number_DataObjectType $Booth_Number
     */
    protected $Booth_Number = null;

    /**
     * @var ExhibitorBoothNew_Booth_Type_DataObjectType $Booth_Type
     */
    protected $Booth_Type = null;

    /**
     * @var ExhibitorBoothNew_Booth_Category_DataObjectType $Booth_Category
     */
    protected $Booth_Category = null;

    /**
     * @param ExhibitorBoothNew_Exhibitor_Booth_DataObjectType $Exhibitor_Booth
     * @param ExhibitorBoothNew_ExhibitorCustomer_DataObjectType $ExhibitorCustomer
     * @param ExhibitorBoothNew_Exhibitor_DataObjectType $Exhibitor
     * @param ExhibitorBoothNew_Priority_Point_Detail_DataObjectType $Priority_Point_Detail
     * @param ExhibitorBoothNew_Booth_Complement_DataObjectType $Booth_Complement
     * @param ExhibitorBoothNew_Exhibit_Show_DataObjectType $Exhibit_Show
     * @param ExhibitorBoothNew_Booth_Fee_DataObjectType $Booth_Fee
     * @param ExhibitorBoothNew_Exhibit_Booth_DataObjectType $Exhibit_Booth
     * @param ExhibitorBoothNew_Invoice_DataObjectType $Invoice
     * @param ExhibitorBoothNew_Payment_DataObjectType $Payment
     * @param ExhibitorBoothNew_Payment_Info_DataObjectType $Payment_Info
     * @param ExhibitorBoothNew_Payment_Method_DataObjectType $Payment_Method
     * @param ExhibitorBoothNew_Product_DataObjectType $Product
     * @param ExhibitorBoothNew_Booth_Number_DataObjectType $Booth_Number
     * @param ExhibitorBoothNew_Booth_Type_DataObjectType $Booth_Type
     * @param ExhibitorBoothNew_Booth_Category_DataObjectType $Booth_Category
     */
    public function __construct($Exhibitor_Booth, $ExhibitorCustomer, $Exhibitor, $Priority_Point_Detail, $Booth_Complement, $Exhibit_Show, $Booth_Fee, $Exhibit_Booth, $Invoice, $Payment, $Payment_Info, $Payment_Method, $Product, $Booth_Number, $Booth_Type, $Booth_Category)
    {
      $this->Exhibitor_Booth = $Exhibitor_Booth;
      $this->ExhibitorCustomer = $ExhibitorCustomer;
      $this->Exhibitor = $Exhibitor;
      $this->Priority_Point_Detail = $Priority_Point_Detail;
      $this->Booth_Complement = $Booth_Complement;
      $this->Exhibit_Show = $Exhibit_Show;
      $this->Booth_Fee = $Booth_Fee;
      $this->Exhibit_Booth = $Exhibit_Booth;
      $this->Invoice = $Invoice;
      $this->Payment = $Payment;
      $this->Payment_Info = $Payment_Info;
      $this->Payment_Method = $Payment_Method;
      $this->Product = $Product;
      $this->Booth_Number = $Booth_Number;
      $this->Booth_Type = $Booth_Type;
      $this->Booth_Category = $Booth_Category;
    }

    /**
     * @return av_key_Type
     */
    public function getCurrentKey()
    {
      return $this->CurrentKey;
    }

    /**
     * @param av_key_Type $CurrentKey
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setCurrentKey($CurrentKey)
    {
      $this->CurrentKey = $CurrentKey;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Exhibitor_Booth_DataObjectType
     */
    public function getExhibitor_Booth()
    {
      return $this->Exhibitor_Booth;
    }

    /**
     * @param ExhibitorBoothNew_Exhibitor_Booth_DataObjectType $Exhibitor_Booth
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setExhibitor_Booth($Exhibitor_Booth)
    {
      $this->Exhibitor_Booth = $Exhibitor_Booth;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_ExhibitorCustomer_DataObjectType
     */
    public function getExhibitorCustomer()
    {
      return $this->ExhibitorCustomer;
    }

    /**
     * @param ExhibitorBoothNew_ExhibitorCustomer_DataObjectType $ExhibitorCustomer
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setExhibitorCustomer($ExhibitorCustomer)
    {
      $this->ExhibitorCustomer = $ExhibitorCustomer;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Exhibitor_DataObjectType
     */
    public function getExhibitor()
    {
      return $this->Exhibitor;
    }

    /**
     * @param ExhibitorBoothNew_Exhibitor_DataObjectType $Exhibitor
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setExhibitor($Exhibitor)
    {
      $this->Exhibitor = $Exhibitor;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Priority_Point_Detail_DataObjectType
     */
    public function getPriority_Point_Detail()
    {
      return $this->Priority_Point_Detail;
    }

    /**
     * @param ExhibitorBoothNew_Priority_Point_Detail_DataObjectType $Priority_Point_Detail
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setPriority_Point_Detail($Priority_Point_Detail)
    {
      $this->Priority_Point_Detail = $Priority_Point_Detail;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Booth_Complement_DataObjectType
     */
    public function getBooth_Complement()
    {
      return $this->Booth_Complement;
    }

    /**
     * @param ExhibitorBoothNew_Booth_Complement_DataObjectType $Booth_Complement
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setBooth_Complement($Booth_Complement)
    {
      $this->Booth_Complement = $Booth_Complement;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Exhibit_Show_DataObjectType
     */
    public function getExhibit_Show()
    {
      return $this->Exhibit_Show;
    }

    /**
     * @param ExhibitorBoothNew_Exhibit_Show_DataObjectType $Exhibit_Show
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setExhibit_Show($Exhibit_Show)
    {
      $this->Exhibit_Show = $Exhibit_Show;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Booth_Fee_DataObjectType
     */
    public function getBooth_Fee()
    {
      return $this->Booth_Fee;
    }

    /**
     * @param ExhibitorBoothNew_Booth_Fee_DataObjectType $Booth_Fee
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setBooth_Fee($Booth_Fee)
    {
      $this->Booth_Fee = $Booth_Fee;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Exhibit_Booth_DataObjectType
     */
    public function getExhibit_Booth()
    {
      return $this->Exhibit_Booth;
    }

    /**
     * @param ExhibitorBoothNew_Exhibit_Booth_DataObjectType $Exhibit_Booth
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setExhibit_Booth($Exhibit_Booth)
    {
      $this->Exhibit_Booth = $Exhibit_Booth;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Invoice_DataObjectType
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param ExhibitorBoothNew_Invoice_DataObjectType $Invoice
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Payment_DataObjectType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param ExhibitorBoothNew_Payment_DataObjectType $Payment
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Payment_Info_DataObjectType
     */
    public function getPayment_Info()
    {
      return $this->Payment_Info;
    }

    /**
     * @param ExhibitorBoothNew_Payment_Info_DataObjectType $Payment_Info
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setPayment_Info($Payment_Info)
    {
      $this->Payment_Info = $Payment_Info;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Payment_Method_DataObjectType
     */
    public function getPayment_Method()
    {
      return $this->Payment_Method;
    }

    /**
     * @param ExhibitorBoothNew_Payment_Method_DataObjectType $Payment_Method
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setPayment_Method($Payment_Method)
    {
      $this->Payment_Method = $Payment_Method;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Product_DataObjectType
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param ExhibitorBoothNew_Product_DataObjectType $Product
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Booth_Number_DataObjectType
     */
    public function getBooth_Number()
    {
      return $this->Booth_Number;
    }

    /**
     * @param ExhibitorBoothNew_Booth_Number_DataObjectType $Booth_Number
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setBooth_Number($Booth_Number)
    {
      $this->Booth_Number = $Booth_Number;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Booth_Type_DataObjectType
     */
    public function getBooth_Type()
    {
      return $this->Booth_Type;
    }

    /**
     * @param ExhibitorBoothNew_Booth_Type_DataObjectType $Booth_Type
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setBooth_Type($Booth_Type)
    {
      $this->Booth_Type = $Booth_Type;
      return $this;
    }

    /**
     * @return ExhibitorBoothNew_Booth_Category_DataObjectType
     */
    public function getBooth_Category()
    {
      return $this->Booth_Category;
    }

    /**
     * @param ExhibitorBoothNew_Booth_Category_DataObjectType $Booth_Category
     * @return \netForum\xWeb\Xml\Generated\ExhibitorBoothNewType
     */
    public function setBooth_Category($Booth_Category)
    {
      $this->Booth_Category = $Booth_Category;
      return $this;
    }

}
