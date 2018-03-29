<?php

namespace EnumType;

/**
 * This class stands for HotelReviewHolidayType EnumType
 * @subpackage Enumerations
 */
class HotelReviewHolidayType
{
    /**
     * Constant for value 'ANY'
     * @return string 'ANY'
     */
    const VALUE_ANY = 'ANY';
    /**
     * Constant for value 'BEACHHOLIDAY'
     * @return string 'BEACHHOLIDAY'
     */
    const VALUE_BEACHHOLIDAY = 'BEACHHOLIDAY';
    /**
     * Constant for value 'CITYTRIP'
     * @return string 'CITYTRIP'
     */
    const VALUE_CITYTRIP = 'CITYTRIP';
    /**
     * Constant for value 'WELLNESS'
     * @return string 'WELLNESS'
     */
    const VALUE_WELLNESS = 'WELLNESS';
    /**
     * Constant for value 'BUSINESSTRIP'
     * @return string 'BUSINESSTRIP'
     */
    const VALUE_BUSINESSTRIP = 'BUSINESSTRIP';
    /**
     * Constant for value 'SKIINGHOLIDAY'
     * @return string 'SKIINGHOLIDAY'
     */
    const VALUE_SKIINGHOLIDAY = 'SKIINGHOLIDAY';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * The HolidayType
     * @var string
     */
    public $HolidayType;
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_BEACHHOLIDAY
     * @uses self::VALUE_CITYTRIP
     * @uses self::VALUE_WELLNESS
     * @uses self::VALUE_BUSINESSTRIP
     * @uses self::VALUE_SKIINGHOLIDAY
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_BEACHHOLIDAY,
            self::VALUE_CITYTRIP,
            self::VALUE_WELLNESS,
            self::VALUE_BUSINESSTRIP,
            self::VALUE_SKIINGHOLIDAY,
            self::VALUE_OTHER,
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
