<?php

namespace EnumType;

/**
 * This class stands for GenderType EnumType
 * @subpackage Enumerations
 */
class GenderType
{
    /**
     * Constant for value 'MALE'
     * @return string 'MALE'
     */
    const VALUE_MALE = 'MALE';
    /**
     * Constant for value 'FEMALE'
     * @return string 'FEMALE'
     */
    const VALUE_FEMALE = 'FEMALE';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
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
     * @uses self::VALUE_MALE
     * @uses self::VALUE_FEMALE
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MALE,
            self::VALUE_FEMALE,
            self::VALUE_UNKNOWN,
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
