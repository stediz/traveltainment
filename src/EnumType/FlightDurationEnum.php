<?php

namespace EnumType;

/**
 * This class stands for FlightDurationEnum EnumType
 * @subpackage Enumerations
 */
class FlightDurationEnum
{
    /**
     * Constant for value 'Shorthaul'
     * @return string 'Shorthaul'
     */
    const VALUE_SHORTHAUL = 'Shorthaul';
    /**
     * Constant for value 'Midhaul'
     * @return string 'Midhaul'
     */
    const VALUE_MIDHAUL = 'Midhaul';
    /**
     * Constant for value 'Longhaul'
     * @return string 'Longhaul'
     */
    const VALUE_LONGHAUL = 'Longhaul';
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
     * @uses self::VALUE_SHORTHAUL
     * @uses self::VALUE_MIDHAUL
     * @uses self::VALUE_LONGHAUL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHORTHAUL,
            self::VALUE_MIDHAUL,
            self::VALUE_LONGHAUL,
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
