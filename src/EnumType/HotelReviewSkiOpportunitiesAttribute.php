<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HotelReviewSkiOpportunitiesAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewSkiOpportunitiesAttribute
{
    /**
     * Constant for value 'SKIPASS'
     * @return string 'SKIPASS'
     */
    const VALUE_SKIPASS = 'SKIPASS';
    /**
     * Constant for value 'RANGEOFCOURSES'
     * @return string 'RANGEOFCOURSES'
     */
    const VALUE_RANGEOFCOURSES = 'RANGEOFCOURSES';
    /**
     * Constant for value 'SKISCHOOL'
     * @return string 'SKISCHOOL'
     */
    const VALUE_SKISCHOOL = 'SKISCHOOL';
    /**
     * Constant for value 'RENTAL'
     * @return string 'RENTAL'
     */
    const VALUE_RENTAL = 'RENTAL';
    /**
     * Constant for value 'OPPORTUNITIESFORWINTERSPORTS'
     * @return string 'OPPORTUNITIESFORWINTERSPORTS'
     */
    const VALUE_OPPORTUNITIESFORWINTERSPORTS = 'OPPORTUNITIESFORWINTERSPORTS';
    /**
     * Constant for value 'APRESSKI'
     * @return string 'APRESSKI'
     */
    const VALUE_APRESSKI = 'APRESSKI';
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
     * @uses self::VALUE_SKIPASS
     * @uses self::VALUE_RANGEOFCOURSES
     * @uses self::VALUE_SKISCHOOL
     * @uses self::VALUE_RENTAL
     * @uses self::VALUE_OPPORTUNITIESFORWINTERSPORTS
     * @uses self::VALUE_APRESSKI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SKIPASS,
            self::VALUE_RANGEOFCOURSES,
            self::VALUE_SKISCHOOL,
            self::VALUE_RENTAL,
            self::VALUE_OPPORTUNITIESFORWINTERSPORTS,
            self::VALUE_APRESSKI,
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
