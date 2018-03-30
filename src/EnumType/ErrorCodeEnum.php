<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for ErrorCodeEnum EnumType
 * @subpackage Enumerations
 */
class ErrorCodeEnum
{
    /**
     * Constant for value 'SYSTEM_ERROR'
     * @return string 'SYSTEM_ERROR'
     */
    const VALUE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    /**
     * Constant for value 'INVALID_OFFERID'
     * @return string 'INVALID_OFFERID'
     */
    const VALUE_INVALID_OFFERID = 'INVALID_OFFERID';
    /**
     * Constant for value 'INVALID_INPUT'
     * @return string 'INVALID_INPUT'
     */
    const VALUE_INVALID_INPUT = 'INVALID_INPUT';
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
     * @uses self::VALUE_SYSTEM_ERROR
     * @uses self::VALUE_INVALID_OFFERID
     * @uses self::VALUE_INVALID_INPUT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SYSTEM_ERROR,
            self::VALUE_INVALID_OFFERID,
            self::VALUE_INVALID_INPUT,
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
