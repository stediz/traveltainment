<?php

namespace EnumType;

/**
 * This class stands for OfferDefinitionType EnumType
 * @subpackage Enumerations
 */
class OfferDefinitionType
{
    /**
     * Constant for value 'Package'
     * @return string 'Package'
     */
    const VALUE_PACKAGE = 'Package';
    /**
     * Constant for value 'Flight'
     * @return string 'Flight'
     */
    const VALUE_FLIGHT = 'Flight';
    /**
     * Constant for value 'Hotel'
     * @return string 'Hotel'
     */
    const VALUE_HOTEL = 'Hotel';
    /**
     * Constant for value 'Holidayflat'
     * @return string 'Holidayflat'
     */
    const VALUE_HOLIDAYFLAT = 'Holidayflat';
    /**
     * Constant for value 'Insurance'
     * @return string 'Insurance'
     */
    const VALUE_INSURANCE = 'Insurance';
    /**
     * Constant for value 'Transfer'
     * @return string 'Transfer'
     */
    const VALUE_TRANSFER = 'Transfer';
    /**
     * Constant for value 'Rentalcar'
     * @return string 'Rentalcar'
     */
    const VALUE_RENTALCAR = 'Rentalcar';
    /**
     * Constant for value 'CarParking'
     * @return string 'CarParking'
     */
    const VALUE_CAR_PARKING = 'CarParking';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
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
     * @uses self::VALUE_PACKAGE
     * @uses self::VALUE_FLIGHT
     * @uses self::VALUE_HOTEL
     * @uses self::VALUE_HOLIDAYFLAT
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_RENTALCAR
     * @uses self::VALUE_CAR_PARKING
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PACKAGE,
            self::VALUE_FLIGHT,
            self::VALUE_HOTEL,
            self::VALUE_HOLIDAYFLAT,
            self::VALUE_INSURANCE,
            self::VALUE_TRANSFER,
            self::VALUE_RENTALCAR,
            self::VALUE_CAR_PARKING,
            self::VALUE_UNDEFINED,
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
