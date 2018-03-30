<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HotelReviewFoodAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewFoodAttribute
{
    /**
     * Constant for value 'CLEANNESS'
     * @return string 'CLEANNESS'
     */
    const VALUE_CLEANNESS = 'CLEANNESS';
    /**
     * Constant for value 'FOOD'
     * @return string 'FOOD'
     */
    const VALUE_FOOD = 'FOOD';
    /**
     * Constant for value 'DRINKS'
     * @return string 'DRINKS'
     */
    const VALUE_DRINKS = 'DRINKS';
    /**
     * Constant for value 'ALLINCLUSIVE'
     * @return string 'ALLINCLUSIVE'
     */
    const VALUE_ALLINCLUSIVE = 'ALLINCLUSIVE';
    /**
     * Constant for value 'SPECIALFOOD'
     * @return string 'SPECIALFOOD'
     */
    const VALUE_SPECIALFOOD = 'SPECIALFOOD';
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
     * @uses self::VALUE_CLEANNESS
     * @uses self::VALUE_FOOD
     * @uses self::VALUE_DRINKS
     * @uses self::VALUE_ALLINCLUSIVE
     * @uses self::VALUE_SPECIALFOOD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLEANNESS,
            self::VALUE_FOOD,
            self::VALUE_DRINKS,
            self::VALUE_ALLINCLUSIVE,
            self::VALUE_SPECIALFOOD,
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
