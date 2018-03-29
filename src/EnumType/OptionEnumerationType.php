<?php

namespace EnumType;

/**
 * This class stands for OptionEnumerationType EnumType
 * @subpackage Enumerations
 */
class OptionEnumerationType
{
    /**
     * Constant for value 'FetchDetailedFareConditions'
     * @return string 'FetchDetailedFareConditions'
     */
    const VALUE_FETCH_DETAILED_FARE_CONDITIONS = 'FetchDetailedFareConditions';
    /**
     * Constant for value 'DontReturnDetailedFareConditions'
     * @return string 'DontReturnDetailedFareConditions'
     */
    const VALUE_DONT_RETURN_DETAILED_FARE_CONDITIONS = 'DontReturnDetailedFareConditions';
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
     * @uses self::VALUE_FETCH_DETAILED_FARE_CONDITIONS
     * @uses self::VALUE_DONT_RETURN_DETAILED_FARE_CONDITIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FETCH_DETAILED_FARE_CONDITIONS,
            self::VALUE_DONT_RETURN_DETAILED_FARE_CONDITIONS,
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
