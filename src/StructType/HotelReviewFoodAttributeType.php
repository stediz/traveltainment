<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewFoodAttributeType StructType
 * @subpackage Structs
 */
class HotelReviewFoodAttributeType extends AbstractStructBase
{
    /**
     * The FoodAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $FoodAttribute;
    /**
     * Constructor method for HotelReviewFoodAttributeType
     * @uses HotelReviewFoodAttributeType::setFoodAttribute()
     * @param string[] $foodAttribute
     */
    public function __construct(array $foodAttribute = array())
    {
        $this
            ->setFoodAttribute($foodAttribute);
    }
    /**
     * Get FoodAttribute value
     * @return string[]|null
     */
    public function getFoodAttribute()
    {
        return $this->FoodAttribute;
    }
    /**
     * Set FoodAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $foodAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType
     */
    public function setFoodAttribute(array $foodAttribute = array())
    {
        $invalidValues = array();
        foreach ($foodAttribute as $hotelReviewFoodAttributeTypeFoodAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::valueIsValid($hotelReviewFoodAttributeTypeFoodAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewFoodAttributeTypeFoodAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::getValidValues())), __LINE__);
        }
        $this->FoodAttribute = $foodAttribute;
        return $this;
    }
    /**
     * Add item to FoodAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType
     */
    public function addToFoodAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewFoodAttribute::getValidValues())), __LINE__);
        }
        $this->FoodAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType
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
