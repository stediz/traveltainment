<?php

namespace EnumType;

/**
 * This class stands for VehicleClassEnum EnumType
 * @subpackage Enumerations
 */
class VehicleClassEnum
{
    /**
     * Constant for value 'Mini'
     * @return string 'Mini'
     */
    const VALUE_MINI = 'Mini';
    /**
     * Constant for value 'Economy'
     * @return string 'Economy'
     */
    const VALUE_ECONOMY = 'Economy';
    /**
     * Constant for value 'Compact'
     * @return string 'Compact'
     */
    const VALUE_COMPACT = 'Compact';
    /**
     * Constant for value 'Intermediate'
     * @return string 'Intermediate'
     */
    const VALUE_INTERMEDIATE = 'Intermediate';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Fullsize'
     * @return string 'Fullsize'
     */
    const VALUE_FULLSIZE = 'Fullsize';
    /**
     * Constant for value 'Luxury'
     * @return string 'Luxury'
     */
    const VALUE_LUXURY = 'Luxury';
    /**
     * Constant for value 'Premium'
     * @return string 'Premium'
     */
    const VALUE_PREMIUM = 'Premium';
    /**
     * Constant for value 'Oversize'
     * @return string 'Oversize'
     */
    const VALUE_OVERSIZE = 'Oversize';
    /**
     * Constant for value 'SUV'
     * @return string 'SUV'
     */
    const VALUE_SUV = 'SUV';
    /**
     * Constant for value 'Van'
     * @return string 'Van'
     */
    const VALUE_VAN = 'Van';
    /**
     * Constant for value 'Cabrio'
     * @return string 'Cabrio'
     */
    const VALUE_CABRIO = 'Cabrio';
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
     * @uses self::VALUE_MINI
     * @uses self::VALUE_ECONOMY
     * @uses self::VALUE_COMPACT
     * @uses self::VALUE_INTERMEDIATE
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_FULLSIZE
     * @uses self::VALUE_LUXURY
     * @uses self::VALUE_PREMIUM
     * @uses self::VALUE_OVERSIZE
     * @uses self::VALUE_SUV
     * @uses self::VALUE_VAN
     * @uses self::VALUE_CABRIO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MINI,
            self::VALUE_ECONOMY,
            self::VALUE_COMPACT,
            self::VALUE_INTERMEDIATE,
            self::VALUE_STANDARD,
            self::VALUE_FULLSIZE,
            self::VALUE_LUXURY,
            self::VALUE_PREMIUM,
            self::VALUE_OVERSIZE,
            self::VALUE_SUV,
            self::VALUE_VAN,
            self::VALUE_CABRIO,
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
