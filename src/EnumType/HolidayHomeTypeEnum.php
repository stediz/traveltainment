<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HolidayHomeTypeEnum EnumType
 * @subpackage Enumerations
 */
class HolidayHomeTypeEnum
{
    /**
     * Constant for value 'Any'
     * @return string 'Any'
     */
    const VALUE_ANY = 'Any';
    /**
     * Constant for value 'HolidayHouse'
     * @return string 'HolidayHouse'
     */
    const VALUE_HOLIDAY_HOUSE = 'HolidayHouse';
    /**
     * Constant for value 'HolidayPark'
     * @return string 'HolidayPark'
     */
    const VALUE_HOLIDAY_PARK = 'HolidayPark';
    /**
     * Constant for value 'HolidayFlat'
     * @return string 'HolidayFlat'
     */
    const VALUE_HOLIDAY_FLAT = 'HolidayFlat';
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_HOLIDAY_HOUSE
     * @uses self::VALUE_HOLIDAY_PARK
     * @uses self::VALUE_HOLIDAY_FLAT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_HOLIDAY_HOUSE,
            self::VALUE_HOLIDAY_PARK,
            self::VALUE_HOLIDAY_FLAT,
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
