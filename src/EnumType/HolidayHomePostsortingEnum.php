<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HolidayHomePostsortingEnum EnumType
 * @subpackage Enumerations
 */
class HolidayHomePostsortingEnum
{
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'Alphabetic'
     * @return string 'Alphabetic'
     */
    const VALUE_ALPHABETIC = 'Alphabetic';
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
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_ALPHABETIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRICE,
            self::VALUE_ALPHABETIC,
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
