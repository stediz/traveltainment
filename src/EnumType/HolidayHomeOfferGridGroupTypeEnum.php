<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HolidayHomeOfferGridGroupTypeEnum EnumType
 * @subpackage Enumerations
 */
class HolidayHomeOfferGridGroupTypeEnum
{
    /**
     * Constant for value 'StartDate'
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'TourOperator'
     * @return string 'TourOperator'
     */
    const VALUE_TOUR_OPERATOR = 'TourOperator';
    /**
     * Constant for value 'StayDuration'
     * @return string 'StayDuration'
     */
    const VALUE_STAY_DURATION = 'StayDuration';
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
     * @uses self::VALUE_START_DATE
     * @uses self::VALUE_TOUR_OPERATOR
     * @uses self::VALUE_STAY_DURATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_START_DATE,
            self::VALUE_TOUR_OPERATOR,
            self::VALUE_STAY_DURATION,
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
