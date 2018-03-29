<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_CarRentalOfferConditions StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_CarRentalOfferConditions
 * @subpackage Structs
 */
class Search_CrossSelling_CarRentalOfferConditions extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetCarRentalOfferConditionsRQType
     */
    public $request;
    /**
     * Constructor method for Search_CrossSelling_CarRentalOfferConditions
     * @uses Search_CrossSelling_CarRentalOfferConditions::setRequest()
     * @param \StructType\GetCarRentalOfferConditionsRQType $request
     */
    public function __construct(\StructType\GetCarRentalOfferConditionsRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetCarRentalOfferConditionsRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetCarRentalOfferConditionsRQType $request
     * @return \StructType\Search_CrossSelling_CarRentalOfferConditions
     */
    public function setRequest(\StructType\GetCarRentalOfferConditionsRQType $request = null)
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
     * @return \StructType\Search_CrossSelling_CarRentalOfferConditions
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
