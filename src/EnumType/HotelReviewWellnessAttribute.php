<?php

namespace EnumType;

/**
 * This class stands for HotelReviewWellnessAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewWellnessAttribute
{
    /**
     * Constant for value 'MASSAGE'
     * @return string 'MASSAGE'
     */
    const VALUE_MASSAGE = 'MASSAGE';
    /**
     * Constant for value 'SAUNA'
     * @return string 'SAUNA'
     */
    const VALUE_SAUNA = 'SAUNA';
    /**
     * Constant for value 'COSMETICS'
     * @return string 'COSMETICS'
     */
    const VALUE_COSMETICS = 'COSMETICS';
    /**
     * Constant for value 'THERMALBATH'
     * @return string 'THERMALBATH'
     */
    const VALUE_THERMALBATH = 'THERMALBATH';
    /**
     * Constant for value 'AMBIANCE'
     * @return string 'AMBIANCE'
     */
    const VALUE_AMBIANCE = 'AMBIANCE';
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
     * @uses self::VALUE_MASSAGE
     * @uses self::VALUE_SAUNA
     * @uses self::VALUE_COSMETICS
     * @uses self::VALUE_THERMALBATH
     * @uses self::VALUE_AMBIANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MASSAGE,
            self::VALUE_SAUNA,
            self::VALUE_COSMETICS,
            self::VALUE_THERMALBATH,
            self::VALUE_AMBIANCE,
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
