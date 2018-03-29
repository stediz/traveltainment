<?php

namespace EnumType;

/**
 * This class stands for HotelReviewActivitiesAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewActivitiesAttribute
{
    /**
     * Constant for value 'DIVERSITY'
     * @return string 'DIVERSITY'
     */
    const VALUE_DIVERSITY = 'DIVERSITY';
    /**
     * Constant for value 'OFFERS'
     * @return string 'OFFERS'
     */
    const VALUE_OFFERS = 'OFFERS';
    /**
     * Constant for value 'QUALITY'
     * @return string 'QUALITY'
     */
    const VALUE_QUALITY = 'QUALITY';
    /**
     * Constant for value 'HOTELACTIVITIES'
     * @return string 'HOTELACTIVITIES'
     */
    const VALUE_HOTELACTIVITIES = 'HOTELACTIVITIES';
    /**
     * Constant for value 'COURSES'
     * @return string 'COURSES'
     */
    const VALUE_COURSES = 'COURSES';
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
     * @uses self::VALUE_DIVERSITY
     * @uses self::VALUE_OFFERS
     * @uses self::VALUE_QUALITY
     * @uses self::VALUE_HOTELACTIVITIES
     * @uses self::VALUE_COURSES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIVERSITY,
            self::VALUE_OFFERS,
            self::VALUE_QUALITY,
            self::VALUE_HOTELACTIVITIES,
            self::VALUE_COURSES,
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
