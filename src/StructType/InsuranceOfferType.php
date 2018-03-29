<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceOfferType StructType
 * @subpackage Structs
 */
class InsuranceOfferType extends Offer3pType
{
    /**
     * The InsuranceFeatures
     * @var \StructType\InsuranceFeaturesType
     */
    public $InsuranceFeatures;
    /**
     * Constructor method for InsuranceOfferType
     * @uses InsuranceOfferType::setInsuranceFeatures()
     * @param \StructType\InsuranceFeaturesType $insuranceFeatures
     */
    public function __construct(\StructType\InsuranceFeaturesType $insuranceFeatures = null)
    {
        $this
            ->setInsuranceFeatures($insuranceFeatures);
    }
    /**
     * Get InsuranceFeatures value
     * @return \StructType\InsuranceFeaturesType|null
     */
    public function getInsuranceFeatures()
    {
        return $this->InsuranceFeatures;
    }
    /**
     * Set InsuranceFeatures value
     * @param \StructType\InsuranceFeaturesType $insuranceFeatures
     * @return \StructType\InsuranceOfferType
     */
    public function setInsuranceFeatures(\StructType\InsuranceFeaturesType $insuranceFeatures = null)
    {
        $this->InsuranceFeatures = $insuranceFeatures;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InsuranceOfferType
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
