<?php

namespace EnumType;

/**
 * This class stands for HotelListSortingType EnumType
 * @subpackage Enumerations
 */
class HotelListSortingType
{
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const VALUE_DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'CITY'
     * @return string 'CITY'
     */
    const VALUE_CITY = 'CITY';
    /**
     * Constant for value 'PRICE'
     * @return string 'PRICE'
     */
    const VALUE_PRICE = 'PRICE';
    /**
     * Constant for value 'DURATION'
     * @return string 'DURATION'
     */
    const VALUE_DURATION = 'DURATION';
    /**
     * Constant for value 'CATEGORY'
     * @return string 'CATEGORY'
     */
    const VALUE_CATEGORY = 'CATEGORY';
    /**
     * Constant for value 'EVALUATION'
     * @return string 'EVALUATION'
     */
    const VALUE_EVALUATION = 'EVALUATION';
    /**
     * Constant for value 'PERCENTAGEFIT'
     * @return string 'PERCENTAGEFIT'
     */
    const VALUE_PERCENTAGEFIT = 'PERCENTAGEFIT';
    /**
     * Constant for value 'HOTELNAME'
     * @return string 'HOTELNAME'
     */
    const VALUE_HOTELNAME = 'HOTELNAME';
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
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_CITY
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_DURATION
     * @uses self::VALUE_CATEGORY
     * @uses self::VALUE_EVALUATION
     * @uses self::VALUE_PERCENTAGEFIT
     * @uses self::VALUE_HOTELNAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DESTINATION,
            self::VALUE_CITY,
            self::VALUE_PRICE,
            self::VALUE_DURATION,
            self::VALUE_CATEGORY,
            self::VALUE_EVALUATION,
            self::VALUE_PERCENTAGEFIT,
            self::VALUE_HOTELNAME,
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
