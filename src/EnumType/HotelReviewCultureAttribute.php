<?php

namespace EnumType;

/**
 * This class stands for HotelReviewCultureAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewCultureAttribute
{
    /**
     * Constant for value 'SIGHTS'
     * @return string 'SIGHTS'
     */
    const VALUE_SIGHTS = 'SIGHTS';
    /**
     * Constant for value 'MUSEUMS'
     * @return string 'MUSEUMS'
     */
    const VALUE_MUSEUMS = 'MUSEUMS';
    /**
     * Constant for value 'EVENTS'
     * @return string 'EVENTS'
     */
    const VALUE_EVENTS = 'EVENTS';
    /**
     * Constant for value 'GALLERIES'
     * @return string 'GALLERIES'
     */
    const VALUE_GALLERIES = 'GALLERIES';
    /**
     * Constant for value 'THEATRES'
     * @return string 'THEATRES'
     */
    const VALUE_THEATRES = 'THEATRES';
    /**
     * Constant for value 'PARKS'
     * @return string 'PARKS'
     */
    const VALUE_PARKS = 'PARKS';
    /**
     * Constant for value 'GUIDEDCITYTOURS'
     * @return string 'GUIDEDCITYTOURS'
     */
    const VALUE_GUIDEDCITYTOURS = 'GUIDEDCITYTOURS';
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
     * @uses self::VALUE_SIGHTS
     * @uses self::VALUE_MUSEUMS
     * @uses self::VALUE_EVENTS
     * @uses self::VALUE_GALLERIES
     * @uses self::VALUE_THEATRES
     * @uses self::VALUE_PARKS
     * @uses self::VALUE_GUIDEDCITYTOURS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGHTS,
            self::VALUE_MUSEUMS,
            self::VALUE_EVENTS,
            self::VALUE_GALLERIES,
            self::VALUE_THEATRES,
            self::VALUE_PARKS,
            self::VALUE_GUIDEDCITYTOURS,
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
