<?php

namespace EnumType;

/**
 * This class stands for HotelReviewSkiingAreaAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewSkiingAreaAttribute
{
    /**
     * Constant for value 'SNOWBOARD'
     * @return string 'SNOWBOARD'
     */
    const VALUE_SNOWBOARD = 'SNOWBOARD';
    /**
     * Constant for value 'DOWNHILLSKIING'
     * @return string 'DOWNHILLSKIING'
     */
    const VALUE_DOWNHILLSKIING = 'DOWNHILLSKIING';
    /**
     * Constant for value 'CROSSCOUNTRYSKIING'
     * @return string 'CROSSCOUNTRYSKIING'
     */
    const VALUE_CROSSCOUNTRYSKIING = 'CROSSCOUNTRYSKIING';
    /**
     * Constant for value 'BEGINNERS'
     * @return string 'BEGINNERS'
     */
    const VALUE_BEGINNERS = 'BEGINNERS';
    /**
     * Constant for value 'ADVANCEDSKIERS'
     * @return string 'ADVANCEDSKIERS'
     */
    const VALUE_ADVANCEDSKIERS = 'ADVANCEDSKIERS';
    /**
     * Constant for value 'PISTEQUALITY'
     * @return string 'PISTEQUALITY'
     */
    const VALUE_PISTEQUALITY = 'PISTEQUALITY';
    /**
     * Constant for value 'VARIETYOFPISTES'
     * @return string 'VARIETYOFPISTES'
     */
    const VALUE_VARIETYOFPISTES = 'VARIETYOFPISTES';
    /**
     * Constant for value 'ACCESSIBILITYOFSKILIFT'
     * @return string 'ACCESSIBILITYOFSKILIFT'
     */
    const VALUE_ACCESSIBILITYOFSKILIFT = 'ACCESSIBILITYOFSKILIFT';
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
     * @uses self::VALUE_SNOWBOARD
     * @uses self::VALUE_DOWNHILLSKIING
     * @uses self::VALUE_CROSSCOUNTRYSKIING
     * @uses self::VALUE_BEGINNERS
     * @uses self::VALUE_ADVANCEDSKIERS
     * @uses self::VALUE_PISTEQUALITY
     * @uses self::VALUE_VARIETYOFPISTES
     * @uses self::VALUE_ACCESSIBILITYOFSKILIFT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SNOWBOARD,
            self::VALUE_DOWNHILLSKIING,
            self::VALUE_CROSSCOUNTRYSKIING,
            self::VALUE_BEGINNERS,
            self::VALUE_ADVANCEDSKIERS,
            self::VALUE_PISTEQUALITY,
            self::VALUE_VARIETYOFPISTES,
            self::VALUE_ACCESSIBILITYOFSKILIFT,
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
