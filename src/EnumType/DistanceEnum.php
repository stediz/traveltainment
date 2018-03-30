<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for DistanceEnum EnumType
 * @subpackage Enumerations
 */
class DistanceEnum
{
    /**
     * Constant for value 'DIRECT'
     * @return string 'DIRECT'
     */
    const VALUE_DIRECT = 'DIRECT';
    /**
     * Constant for value '_200METER'
     * @return string '_200METER'
     */
    const VALUE_200_METER = '_200METER';
    /**
     * Constant for value '_500METER'
     * @return string '_500METER'
     */
    const VALUE_500_METER = '_500METER';
    /**
     * Constant for value '_1000METER'
     * @return string '_1000METER'
     */
    const VALUE_1000_METER = '_1000METER';
    /**
     * Constant for value '_2000METER'
     * @return string '_2000METER'
     */
    const VALUE_2000_METER = '_2000METER';
    /**
     * Constant for value '_5000METER'
     * @return string '_5000METER'
     */
    const VALUE_5000_METER = '_5000METER';
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
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_200_METER
     * @uses self::VALUE_500_METER
     * @uses self::VALUE_1000_METER
     * @uses self::VALUE_2000_METER
     * @uses self::VALUE_5000_METER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIRECT,
            self::VALUE_200_METER,
            self::VALUE_500_METER,
            self::VALUE_1000_METER,
            self::VALUE_2000_METER,
            self::VALUE_5000_METER,
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
