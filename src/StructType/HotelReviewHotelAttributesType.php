<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewHotelAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewHotelAttributesType extends AbstractStructBase
{
    /**
     * The HotelAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * @var string[]
     */
    public $HotelAttribute;
    /**
     * Constructor method for HotelReviewHotelAttributesType
     * @uses HotelReviewHotelAttributesType::setHotelAttribute()
     * @param string[] $hotelAttribute
     */
    public function __construct(array $hotelAttribute = array())
    {
        $this
            ->setHotelAttribute($hotelAttribute);
    }
    /**
     * Get HotelAttribute value
     * @return string[]|null
     */
    public function getHotelAttribute()
    {
        return $this->HotelAttribute;
    }
    /**
     * Set HotelAttribute value
     * @uses \EnumType\HotelReviewHotelAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewHotelAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $hotelAttribute
     * @return \StructType\HotelReviewHotelAttributesType
     */
    public function setHotelAttribute(array $hotelAttribute = array())
    {
        $invalidValues = array();
        foreach ($hotelAttribute as $hotelReviewHotelAttributesTypeHotelAttributeItem) {
            if (!\EnumType\HotelReviewHotelAttribute::valueIsValid($hotelReviewHotelAttributesTypeHotelAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewHotelAttributesTypeHotelAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\HotelReviewHotelAttribute::getValidValues())), __LINE__);
        }
        $this->HotelAttribute = $hotelAttribute;
        return $this;
    }
    /**
     * Add item to HotelAttribute value
     * @uses \EnumType\HotelReviewHotelAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewHotelAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\HotelReviewHotelAttributesType
     */
    public function addToHotelAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HotelReviewHotelAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\HotelReviewHotelAttribute::getValidValues())), __LINE__);
        }
        $this->HotelAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReviewHotelAttributesType
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
