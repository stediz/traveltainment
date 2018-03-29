<?php

namespace EnumType;

/**
 * This class stands for SurchargeOrderEnum EnumType
 * @subpackage Enumerations
 */
class SurchargeOrderEnum
{
    /**
     * Constant for value 'Absolute'
     * @return string 'Absolute'
     */
    const VALUE_ABSOLUTE = 'Absolute';
    /**
     * Constant for value 'Relative'
     * @return string 'Relative'
     */
    const VALUE_RELATIVE = 'Relative';
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
     * @uses self::VALUE_ABSOLUTE
     * @uses self::VALUE_RELATIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ABSOLUTE,
            self::VALUE_RELATIVE,
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
