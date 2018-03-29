<?php

namespace EnumType;

/**
 * This class stands for RegionPostsortingEnum EnumType
 * @subpackage Enumerations
 */
class RegionPostsortingEnum
{
    /**
     * Constant for value 'AirTemperature'
     * @return string 'AirTemperature'
     */
    const VALUE_AIR_TEMPERATURE = 'AirTemperature';
    /**
     * Constant for value 'WaterTemperature'
     * @return string 'WaterTemperature'
     */
    const VALUE_WATER_TEMPERATURE = 'WaterTemperature';
    /**
     * Constant for value 'FlightDuration'
     * @return string 'FlightDuration'
     */
    const VALUE_FLIGHT_DURATION = 'FlightDuration';
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'Alphabetic'
     * @return string 'Alphabetic'
     */
    const VALUE_ALPHABETIC = 'Alphabetic';
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
     * @uses self::VALUE_AIR_TEMPERATURE
     * @uses self::VALUE_WATER_TEMPERATURE
     * @uses self::VALUE_FLIGHT_DURATION
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_ALPHABETIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AIR_TEMPERATURE,
            self::VALUE_WATER_TEMPERATURE,
            self::VALUE_FLIGHT_DURATION,
            self::VALUE_PRICE,
            self::VALUE_ALPHABETIC,
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
