<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewWellnessAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewWellnessAttributesType extends AbstractStructBase
{
    /**
     * The WellnessAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $WellnessAttribute;
    /**
     * Constructor method for HotelReviewWellnessAttributesType
     * @uses HotelReviewWellnessAttributesType::setWellnessAttribute()
     * @param string[] $wellnessAttribute
     */
    public function __construct(array $wellnessAttribute = array())
    {
        $this
            ->setWellnessAttribute($wellnessAttribute);
    }
    /**
     * Get WellnessAttribute value
     * @return string[]|null
     */
    public function getWellnessAttribute()
    {
        return $this->WellnessAttribute;
    }
    /**
     * Set WellnessAttribute value
     * @uses \EnumType\HotelReviewWellnessAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewWellnessAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $wellnessAttribute
     * @return \StructType\HotelReviewWellnessAttributesType
     */
    public function setWellnessAttribute(array $wellnessAttribute = array())
    {
        $invalidValues = array();
        foreach ($wellnessAttribute as $hotelReviewWellnessAttributesTypeWellnessAttributeItem) {
            if (!\EnumType\HotelReviewWellnessAttribute::valueIsValid($hotelReviewWellnessAttributesTypeWellnessAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewWellnessAttributesTypeWellnessAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\HotelReviewWellnessAttribute::getValidValues())), __LINE__);
        }
        $this->WellnessAttribute = $wellnessAttribute;
        return $this;
    }
    /**
     * Add item to WellnessAttribute value
     * @uses \EnumType\HotelReviewWellnessAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewWellnessAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\HotelReviewWellnessAttributesType
     */
    public function addToWellnessAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HotelReviewWellnessAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\HotelReviewWellnessAttribute::getValidValues())), __LINE__);
        }
        $this->WellnessAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReviewWellnessAttributesType
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
