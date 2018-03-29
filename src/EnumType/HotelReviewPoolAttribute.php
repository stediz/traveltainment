<?php

namespace EnumType;

/**
 * This class stands for HotelReviewPoolAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewPoolAttribute
{
    /**
     * Constant for value 'CLEANNESS'
     * @return string 'CLEANNESS'
     */
    const VALUE_CLEANNESS = 'CLEANNESS';
    /**
     * Constant for value 'SIZE'
     * @return string 'SIZE'
     */
    const VALUE_SIZE = 'SIZE';
    /**
     * Constant for value 'RECREATIONALVALUE'
     * @return string 'RECREATIONALVALUE'
     */
    const VALUE_RECREATIONALVALUE = 'RECREATIONALVALUE';
    /**
     * Constant for value 'WATERSLIDE'
     * @return string 'WATERSLIDE'
     */
    const VALUE_WATERSLIDE = 'WATERSLIDE';
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
     * @uses self::VALUE_CLEANNESS
     * @uses self::VALUE_SIZE
     * @uses self::VALUE_RECREATIONALVALUE
     * @uses self::VALUE_WATERSLIDE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLEANNESS,
            self::VALUE_SIZE,
            self::VALUE_RECREATIONALVALUE,
            self::VALUE_WATERSLIDE,
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
