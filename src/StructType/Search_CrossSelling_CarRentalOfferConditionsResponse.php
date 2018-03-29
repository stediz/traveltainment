<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_CarRentalOfferConditionsResponse
 * StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_CarRentalOfferConditionsResponse
 * @subpackage Structs
 */
class Search_CrossSelling_CarRentalOfferConditionsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetCarRentalOfferConditionsRSType
     */
    public $return;
    /**
     * Constructor method for Search_CrossSelling_CarRentalOfferConditionsResponse
     * @uses Search_CrossSelling_CarRentalOfferConditionsResponse::setReturn()
     * @param \StructType\GetCarRentalOfferConditionsRSType $return
     */
    public function __construct(\StructType\GetCarRentalOfferConditionsRSType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\GetCarRentalOfferConditionsRSType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\GetCarRentalOfferConditionsRSType $return
     * @return \StructType\Search_CrossSelling_CarRentalOfferConditionsResponse
     */
    public function setReturn(\StructType\GetCarRentalOfferConditionsRSType $return = null)
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
     * @return \StructType\Search_CrossSelling_CarRentalOfferConditionsResponse
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
