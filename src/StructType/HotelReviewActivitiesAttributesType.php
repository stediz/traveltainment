<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewActivitiesAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewActivitiesAttributesType extends AbstractStructBase
{
    /**
     * The ActivitiesAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $ActivitiesAttribute;
    /**
     * Constructor method for HotelReviewActivitiesAttributesType
     * @uses HotelReviewActivitiesAttributesType::setActivitiesAttribute()
     * @param string[] $activitiesAttribute
     */
    public function __construct(array $activitiesAttribute = array())
    {
        $this
            ->setActivitiesAttribute($activitiesAttribute);
    }
    /**
     * Get ActivitiesAttribute value
     * @return string[]|null
     */
    public function getActivitiesAttribute()
    {
        return $this->ActivitiesAttribute;
    }
    /**
     * Set ActivitiesAttribute value
     * @uses \EnumType\HotelReviewActivitiesAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewActivitiesAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $activitiesAttribute
     * @return \StructType\HotelReviewActivitiesAttributesType
     */
    public function setActivitiesAttribute(array $activitiesAttribute = array())
    {
        $invalidValues = array();
        foreach ($activitiesAttribute as $hotelReviewActivitiesAttributesTypeActivitiesAttributeItem) {
            if (!\EnumType\HotelReviewActivitiesAttribute::valueIsValid($hotelReviewActivitiesAttributesTypeActivitiesAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewActivitiesAttributesTypeActivitiesAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\HotelReviewActivitiesAttribute::getValidValues())), __LINE__);
        }
        $this->ActivitiesAttribute = $activitiesAttribute;
        return $this;
    }
    /**
     * Add item to ActivitiesAttribute value
     * @uses \EnumType\HotelReviewActivitiesAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewActivitiesAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\HotelReviewActivitiesAttributesType
     */
    public function addToActivitiesAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HotelReviewActivitiesAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\HotelReviewActivitiesAttribute::getValidValues())), __LINE__);
        }
        $this->ActivitiesAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReviewActivitiesAttributesType
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
