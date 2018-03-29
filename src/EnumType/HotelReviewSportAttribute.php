<?php

namespace EnumType;

/**
 * This class stands for HotelReviewSportAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewSportAttribute
{
    /**
     * Constant for value 'SPORTOPTIONS'
     * @return string 'SPORTOPTIONS'
     */
    const VALUE_SPORTOPTIONS = 'SPORTOPTIONS';
    /**
     * Constant for value 'SPORTSEQUIPMENT'
     * @return string 'SPORTSEQUIPMENT'
     */
    const VALUE_SPORTSEQUIPMENT = 'SPORTSEQUIPMENT';
    /**
     * Constant for value 'ENTERTAINMENT'
     * @return string 'ENTERTAINMENT'
     */
    const VALUE_ENTERTAINMENT = 'ENTERTAINMENT';
    /**
     * Constant for value 'TENNIS'
     * @return string 'TENNIS'
     */
    const VALUE_TENNIS = 'TENNIS';
    /**
     * Constant for value 'GOLF'
     * @return string 'GOLF'
     */
    const VALUE_GOLF = 'GOLF';
    /**
     * Constant for value 'FITNESSCLUB'
     * @return string 'FITNESSCLUB'
     */
    const VALUE_FITNESSCLUB = 'FITNESSCLUB';
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
     * @uses self::VALUE_SPORTOPTIONS
     * @uses self::VALUE_SPORTSEQUIPMENT
     * @uses self::VALUE_ENTERTAINMENT
     * @uses self::VALUE_TENNIS
     * @uses self::VALUE_GOLF
     * @uses self::VALUE_FITNESSCLUB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SPORTOPTIONS,
            self::VALUE_SPORTSEQUIPMENT,
            self::VALUE_ENTERTAINMENT,
            self::VALUE_TENNIS,
            self::VALUE_GOLF,
            self::VALUE_FITNESSCLUB,
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
