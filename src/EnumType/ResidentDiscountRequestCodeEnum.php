<?php

namespace EnumType;

/**
 * This class stands for ResidentDiscountRequestCodeEnum EnumType
 * @subpackage Enumerations
 */
class ResidentDiscountRequestCodeEnum
{
    /**
     * Constant for value 'CanaryIslands'
     * @return string 'CanaryIslands'
     */
    const VALUE_CANARY_ISLANDS = 'CanaryIslands';
    /**
     * Constant for value 'BalearicIslands'
     * @return string 'BalearicIslands'
     */
    const VALUE_BALEARIC_ISLANDS = 'BalearicIslands';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_CANARY_ISLANDS
     * @uses self::VALUE_BALEARIC_ISLANDS
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANARY_ISLANDS,
            self::VALUE_BALEARIC_ISLANDS,
            self::VALUE_NONE,
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
