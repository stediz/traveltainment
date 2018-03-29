<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewSportAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewSportAttributesType extends AbstractStructBase
{
    /**
     * The SportAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var string[]
     */
    public $SportAttribute;
    /**
     * Constructor method for HotelReviewSportAttributesType
     * @uses HotelReviewSportAttributesType::setSportAttribute()
     * @param string[] $sportAttribute
     */
    public function __construct(array $sportAttribute = array())
    {
        $this
            ->setSportAttribute($sportAttribute);
    }
    /**
     * Get SportAttribute value
     * @return string[]|null
     */
    public function getSportAttribute()
    {
        return $this->SportAttribute;
    }
    /**
     * Set SportAttribute value
     * @uses \EnumType\HotelReviewSportAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewSportAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $sportAttribute
     * @return \StructType\HotelReviewSportAttributesType
     */
    public function setSportAttribute(array $sportAttribute = array())
    {
        $invalidValues = array();
        foreach ($sportAttribute as $hotelReviewSportAttributesTypeSportAttributeItem) {
            if (!\EnumType\HotelReviewSportAttribute::valueIsValid($hotelReviewSportAttributesTypeSportAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewSportAttributesTypeSportAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\HotelReviewSportAttribute::getValidValues())), __LINE__);
        }
        $this->SportAttribute = $sportAttribute;
        return $this;
    }
    /**
     * Add item to SportAttribute value
     * @uses \EnumType\HotelReviewSportAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewSportAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\HotelReviewSportAttributesType
     */
    public function addToSportAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HotelReviewSportAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\HotelReviewSportAttribute::getValidValues())), __LINE__);
        }
        $this->SportAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReviewSportAttributesType
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
