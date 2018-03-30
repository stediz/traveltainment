<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewInfrastructureAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewInfrastructureAttributesType extends AbstractStructBase
{
    /**
     * The InfrastructureAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $InfrastructureAttribute;
    /**
     * Constructor method for HotelReviewInfrastructureAttributesType
     * @uses HotelReviewInfrastructureAttributesType::setInfrastructureAttribute()
     * @param string[] $infrastructureAttribute
     */
    public function __construct(array $infrastructureAttribute = array())
    {
        $this
            ->setInfrastructureAttribute($infrastructureAttribute);
    }
    /**
     * Get InfrastructureAttribute value
     * @return string[]|null
     */
    public function getInfrastructureAttribute()
    {
        return $this->InfrastructureAttribute;
    }
    /**
     * Set InfrastructureAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $infrastructureAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType
     */
    public function setInfrastructureAttribute(array $infrastructureAttribute = array())
    {
        $invalidValues = array();
        foreach ($infrastructureAttribute as $hotelReviewInfrastructureAttributesTypeInfrastructureAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::valueIsValid($hotelReviewInfrastructureAttributesTypeInfrastructureAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewInfrastructureAttributesTypeInfrastructureAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::getValidValues())), __LINE__);
        }
        $this->InfrastructureAttribute = $infrastructureAttribute;
        return $this;
    }
    /**
     * Add item to InfrastructureAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType
     */
    public function addToInfrastructureAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewInfrastructureAttribute::getValidValues())), __LINE__);
        }
        $this->InfrastructureAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType
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
