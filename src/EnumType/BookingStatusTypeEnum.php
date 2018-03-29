<?php

namespace EnumType;

/**
 * This class stands for BookingStatusTypeEnum EnumType
 * @subpackage Enumerations
 */
class BookingStatusTypeEnum
{
    /**
     * Constant for value 'Booked'
     * @return string 'Booked'
     */
    const VALUE_BOOKED = 'Booked';
    /**
     * Constant for value 'NotBooked'
     * @return string 'NotBooked'
     */
    const VALUE_NOT_BOOKED = 'NotBooked';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
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
     * @uses self::VALUE_BOOKED
     * @uses self::VALUE_NOT_BOOKED
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOOKED,
            self::VALUE_NOT_BOOKED,
            self::VALUE_ERROR,
            self::VALUE_UNDEFINED,
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
