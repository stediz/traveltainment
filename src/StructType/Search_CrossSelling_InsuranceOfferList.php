<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_InsuranceOfferList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_InsuranceOfferList
 * @subpackage Structs
 */
class Search_CrossSelling_InsuranceOfferList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetInsuranceOfferListRQType
     */
    public $request;
    /**
     * Constructor method for Search_CrossSelling_InsuranceOfferList
     * @uses Search_CrossSelling_InsuranceOfferList::setRequest()
     * @param \StructType\GetInsuranceOfferListRQType $request
     */
    public function __construct(\StructType\GetInsuranceOfferListRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetInsuranceOfferListRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetInsuranceOfferListRQType $request
     * @return \StructType\Search_CrossSelling_InsuranceOfferList
     */
    public function setRequest(\StructType\GetInsuranceOfferListRQType $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Search_CrossSelling_InsuranceOfferList
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
