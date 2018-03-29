<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewLocationAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewLocationAttributesType extends AbstractStructBase
{
    /**
     * The LocationAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var string[]
     */
    public $LocationAttribute;
    /**
     * Constructor method for HotelReviewLocationAttributesType
     * @uses HotelReviewLocationAttributesType::setLocationAttribute()
     * @param string[] $locationAttribute
     */
    public function __construct(array $locationAttribute = array())
    {
        $this
            ->setLocationAttribute($locationAttribute);
    }
    /**
     * Get LocationAttribute value
     * @return string[]|null
     */
    public function getLocationAttribute()
    {
        return $this->LocationAttribute;
    }
    /**
     * Set LocationAttribute value
     * @uses \EnumType\HotelReviewLocationAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewLocationAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $locationAttribute
     * @return \StructType\HotelReviewLocationAttributesType
     */
    public function setLocationAttribute(array $locationAttribute = array())
    {
        $invalidValues = array();
        foreach ($locationAttribute as $hotelReviewLocationAttributesTypeLocationAttributeItem) {
            if (!\EnumType\HotelReviewLocationAttribute::valueIsValid($hotelReviewLocationAttributesTypeLocationAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewLocationAttributesTypeLocationAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\HotelReviewLocationAttribute::getValidValues())), __LINE__);
        }
        $this->LocationAttribute = $locationAttribute;
        return $this;
    }
    /**
     * Add item to LocationAttribute value
     * @uses \EnumType\HotelReviewLocationAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewLocationAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\HotelReviewLocationAttributesType
     */
    public function addToLocationAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HotelReviewLocationAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\HotelReviewLocationAttribute::getValidValues())), __LINE__);
        }
        $this->LocationAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReviewLocationAttributesType
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
