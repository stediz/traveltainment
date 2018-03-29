<?php

namespace EnumType;

/**
 * This class stands for ClimaDataTypeEnum EnumType
 * @subpackage Enumerations
 */
class ClimaDataTypeEnum
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'MaxTemperature'
     * @return string 'MaxTemperature'
     */
    const VALUE_MAX_TEMPERATURE = 'MaxTemperature';
    /**
     * Constant for value 'MinTemperature'
     * @return string 'MinTemperature'
     */
    const VALUE_MIN_TEMPERATURE = 'MinTemperature';
    /**
     * Constant for value 'WaterTemperature'
     * @return string 'WaterTemperature'
     */
    const VALUE_WATER_TEMPERATURE = 'WaterTemperature';
    /**
     * Constant for value 'SunshineHours'
     * @return string 'SunshineHours'
     */
    const VALUE_SUNSHINE_HOURS = 'SunshineHours';
    /**
     * Constant for value 'RainDays'
     * @return string 'RainDays'
     */
    const VALUE_RAIN_DAYS = 'RainDays';
    /**
     * Constant for value 'RelativeHumidity'
     * @return string 'RelativeHumidity'
     */
    const VALUE_RELATIVE_HUMIDITY = 'RelativeHumidity';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_MAX_TEMPERATURE
     * @uses self::VALUE_MIN_TEMPERATURE
     * @uses self::VALUE_WATER_TEMPERATURE
     * @uses self::VALUE_SUNSHINE_HOURS
     * @uses self::VALUE_RAIN_DAYS
     * @uses self::VALUE_RELATIVE_HUMIDITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_MAX_TEMPERATURE,
            self::VALUE_MIN_TEMPERATURE,
            self::VALUE_WATER_TEMPERATURE,
            self::VALUE_SUNSHINE_HOURS,
            self::VALUE_RAIN_DAYS,
            self::VALUE_RELATIVE_HUMIDITY,
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
