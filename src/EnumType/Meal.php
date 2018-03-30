<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for Meal EnumType
 * @subpackage Enumerations
 */
class Meal
{
    /**
     * Constant for value 'ONLYSTAY'
     * @return string 'ONLYSTAY'
     */
    const VALUE_ONLYSTAY = 'ONLYSTAY';
    /**
     * Constant for value 'BREAKFAST'
     * @return string 'BREAKFAST'
     */
    const VALUE_BREAKFAST = 'BREAKFAST';
    /**
     * Constant for value 'HALFBOARD'
     * @return string 'HALFBOARD'
     */
    const VALUE_HALFBOARD = 'HALFBOARD';
    /**
     * Constant for value 'FULLBOARD'
     * @return string 'FULLBOARD'
     */
    const VALUE_FULLBOARD = 'FULLBOARD';
    /**
     * Constant for value 'ALLINCLUSIVE'
     * @return string 'ALLINCLUSIVE'
     */
    const VALUE_ALLINCLUSIVE = 'ALLINCLUSIVE';
    /**
     * Constant for value 'FULLBOARDPLUS'
     * @return string 'FULLBOARDPLUS'
     */
    const VALUE_FULLBOARDPLUS = 'FULLBOARDPLUS';
    /**
     * Constant for value 'HALFBOARDPLUS'
     * @return string 'HALFBOARDPLUS'
     */
    const VALUE_HALFBOARDPLUS = 'HALFBOARDPLUS';
    /**
     * Constant for value 'ALLINCLUSIVEPLUS'
     * @return string 'ALLINCLUSIVEPLUS'
     */
    const VALUE_ALLINCLUSIVEPLUS = 'ALLINCLUSIVEPLUS';
    /**
     * Constant for value 'SPECIALBOARD'
     * @return string 'SPECIALBOARD'
     */
    const VALUE_SPECIALBOARD = 'SPECIALBOARD';
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
     * @uses self::VALUE_ONLYSTAY
     * @uses self::VALUE_BREAKFAST
     * @uses self::VALUE_HALFBOARD
     * @uses self::VALUE_FULLBOARD
     * @uses self::VALUE_ALLINCLUSIVE
     * @uses self::VALUE_FULLBOARDPLUS
     * @uses self::VALUE_HALFBOARDPLUS
     * @uses self::VALUE_ALLINCLUSIVEPLUS
     * @uses self::VALUE_SPECIALBOARD
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONLYSTAY,
            self::VALUE_BREAKFAST,
            self::VALUE_HALFBOARD,
            self::VALUE_FULLBOARD,
            self::VALUE_ALLINCLUSIVE,
            self::VALUE_FULLBOARDPLUS,
            self::VALUE_HALFBOARDPLUS,
            self::VALUE_ALLINCLUSIVEPLUS,
            self::VALUE_SPECIALBOARD,
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
