<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceFeaturesType StructType
 * @subpackage Structs
 */
class InsuranceFeaturesType extends AbstractStructBase
{
    /**
     * The InsuranceFeature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\InsuranceFeatureType[]
     */
    public $InsuranceFeature;
    /**
     * Constructor method for InsuranceFeaturesType
     * @uses InsuranceFeaturesType::setInsuranceFeature()
     * @param \StructType\InsuranceFeatureType[] $insuranceFeature
     */
    public function __construct(array $insuranceFeature = array())
    {
        $this
            ->setInsuranceFeature($insuranceFeature);
    }
    /**
     * Get InsuranceFeature value
     * @return \StructType\InsuranceFeatureType[]|null
     */
    public function getInsuranceFeature()
    {
        return $this->InsuranceFeature;
    }
    /**
     * Set InsuranceFeature value
     * @throws \InvalidArgumentException
     * @param \StructType\InsuranceFeatureType[] $insuranceFeature
     * @return \StructType\InsuranceFeaturesType
     */
    public function setInsuranceFeature(array $insuranceFeature = array())
    {
        foreach ($insuranceFeature as $insuranceFeaturesTypeInsuranceFeatureItem) {
            // validation for constraint: itemType
            if (!$insuranceFeaturesTypeInsuranceFeatureItem instanceof \StructType\InsuranceFeatureType) {
                throw new \InvalidArgumentException(sprintf('The InsuranceFeature property can only contain items of \StructType\InsuranceFeatureType, "%s" given', is_object($insuranceFeaturesTypeInsuranceFeatureItem) ? get_class($insuranceFeaturesTypeInsuranceFeatureItem) : gettype($insuranceFeaturesTypeInsuranceFeatureItem)), __LINE__);
            }
        }
        $this->InsuranceFeature = $insuranceFeature;
        return $this;
    }
    /**
     * Add item to InsuranceFeature value
     * @throws \InvalidArgumentException
     * @param \StructType\InsuranceFeatureType $item
     * @return \StructType\InsuranceFeaturesType
     */
    public function addToInsuranceFeature(\StructType\InsuranceFeatureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\InsuranceFeatureType) {
            throw new \InvalidArgumentException(sprintf('The InsuranceFeature property can only contain items of \StructType\InsuranceFeatureType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InsuranceFeature[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InsuranceFeaturesType
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
