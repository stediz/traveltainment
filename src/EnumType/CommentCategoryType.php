<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for CommentCategoryType EnumType
 * @subpackage Enumerations
 */
class CommentCategoryType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'TourOperator'
     * @return string 'TourOperator'
     */
    const VALUE_TOUR_OPERATOR = 'TourOperator';
    /**
     * Constant for value 'Customer'
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Constant for value 'TravelAgent'
     * @return string 'TravelAgent'
     */
    const VALUE_TRAVEL_AGENT = 'TravelAgent';
    /**
     * Constant for value 'BookingEngine'
     * @return string 'BookingEngine'
     */
    const VALUE_BOOKING_ENGINE = 'BookingEngine';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_TOUR_OPERATOR
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_TRAVEL_AGENT
     * @uses self::VALUE_BOOKING_ENGINE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_TOUR_OPERATOR,
            self::VALUE_CUSTOMER,
            self::VALUE_TRAVEL_AGENT,
            self::VALUE_BOOKING_ENGINE,
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
