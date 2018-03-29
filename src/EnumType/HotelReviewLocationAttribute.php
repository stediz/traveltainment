<?php

namespace EnumType;

/**
 * This class stands for HotelReviewLocationAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewLocationAttribute
{
    /**
     * Constant for value 'DISTANCETOTHEBEACH'
     * @return string 'DISTANCETOTHEBEACH'
     */
    const VALUE_DISTANCETOTHEBEACH = 'DISTANCETOTHEBEACH';
    /**
     * Constant for value 'EXCOURSIONS'
     * @return string 'EXCOURSIONS'
     */
    const VALUE_EXCOURSIONS = 'EXCOURSIONS';
    /**
     * Constant for value 'SHOPPINGFACILITIES'
     * @return string 'SHOPPINGFACILITIES'
     */
    const VALUE_SHOPPINGFACILITIES = 'SHOPPINGFACILITIES';
    /**
     * Constant for value 'RESTAURANTS'
     * @return string 'RESTAURANTS'
     */
    const VALUE_RESTAURANTS = 'RESTAURANTS';
    /**
     * Constant for value 'PARTY'
     * @return string 'PARTY'
     */
    const VALUE_PARTY = 'PARTY';
    /**
     * Constant for value 'LEISUREOPPORTUNITIES'
     * @return string 'LEISUREOPPORTUNITIES'
     */
    const VALUE_LEISUREOPPORTUNITIES = 'LEISUREOPPORTUNITIES';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_DISTANCETOTHEBEACH
     * @uses self::VALUE_EXCOURSIONS
     * @uses self::VALUE_SHOPPINGFACILITIES
     * @uses self::VALUE_RESTAURANTS
     * @uses self::VALUE_PARTY
     * @uses self::VALUE_LEISUREOPPORTUNITIES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISTANCETOTHEBEACH,
            self::VALUE_EXCOURSIONS,
            self::VALUE_SHOPPINGFACILITIES,
            self::VALUE_RESTAURANTS,
            self::VALUE_PARTY,
            self::VALUE_LEISUREOPPORTUNITIES,
        );
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
