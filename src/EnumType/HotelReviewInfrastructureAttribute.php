<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HotelReviewInfrastructureAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewInfrastructureAttribute
{
    /**
     * Constant for value 'TOURISTINFORMATION'
     * @return string 'TOURISTINFORMATION'
     */
    const VALUE_TOURISTINFORMATION = 'TOURISTINFORMATION';
    /**
     * Constant for value 'AIRPORT'
     * @return string 'AIRPORT'
     */
    const VALUE_AIRPORT = 'AIRPORT';
    /**
     * Constant for value 'TRAINSTATION'
     * @return string 'TRAINSTATION'
     */
    const VALUE_TRAINSTATION = 'TRAINSTATION';
    /**
     * Constant for value 'TRANSPORTATION'
     * @return string 'TRANSPORTATION'
     */
    const VALUE_TRANSPORTATION = 'TRANSPORTATION';
    /**
     * Constant for value 'CARHIRE'
     * @return string 'CARHIRE'
     */
    const VALUE_CARHIRE = 'CARHIRE';
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
     * @uses self::VALUE_TOURISTINFORMATION
     * @uses self::VALUE_AIRPORT
     * @uses self::VALUE_TRAINSTATION
     * @uses self::VALUE_TRANSPORTATION
     * @uses self::VALUE_CARHIRE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOURISTINFORMATION,
            self::VALUE_AIRPORT,
            self::VALUE_TRAINSTATION,
            self::VALUE_TRANSPORTATION,
            self::VALUE_CARHIRE,
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
