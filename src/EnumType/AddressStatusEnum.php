<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for AddressStatusEnum EnumType
 * @subpackage Enumerations
 */
class AddressStatusEnum
{
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Constant for value 'Booking'
     * @return string 'Booking'
     */
    const VALUE_BOOKING = 'Booking';
    /**
     * Constant for value 'Corrected'
     * @return string 'Corrected'
     */
    const VALUE_CORRECTED = 'Corrected';
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
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_BOOKING
     * @uses self::VALUE_CORRECTED
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORIGINAL,
            self::VALUE_BOOKING,
            self::VALUE_CORRECTED,
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
