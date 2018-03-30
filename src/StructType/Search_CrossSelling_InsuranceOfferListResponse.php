<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_InsuranceOfferListResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_InsuranceOfferListResponse
 * @subpackage Structs
 */
class Search_CrossSelling_InsuranceOfferListResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\GetInsuranceOfferListRSType
     */
    public $return;
    /**
     * Constructor method for Search_CrossSelling_InsuranceOfferListResponse
     * @uses Search_CrossSelling_InsuranceOfferListResponse::setReturn()
     * @param \traveltainment\SOAP17\StructType\GetInsuranceOfferListRSType $return
     */
    public function __construct(\traveltainment\SOAP17\StructType\GetInsuranceOfferListRSType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \traveltainment\SOAP17\StructType\GetInsuranceOfferListRSType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \traveltainment\SOAP17\StructType\GetInsuranceOfferListRSType $return
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferListResponse
     */
    public function setReturn(\traveltainment\SOAP17\StructType\GetInsuranceOfferListRSType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferListResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
