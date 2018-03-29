<?php

namespace EnumType;

/**
 * This class stands for ShoppingCartSortCriteriaEnum EnumType
 * @subpackage Enumerations
 */
class ShoppingCartSortCriteriaEnum
{
    /**
     * Constant for value 'BookingDate'
     * @return string 'BookingDate'
     */
    const VALUE_BOOKING_DATE = 'BookingDate';
    /**
     * Constant for value 'DepartureDate'
     * @return string 'DepartureDate'
     */
    const VALUE_DEPARTURE_DATE = 'DepartureDate';
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
     * @uses self::VALUE_BOOKING_DATE
     * @uses self::VALUE_DEPARTURE_DATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOOKING_DATE,
            self::VALUE_DEPARTURE_DATE,
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
