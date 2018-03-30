<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for BookingCategoryEnum EnumType
 * @subpackage Enumerations
 */
class BookingCategoryEnum
{
    /**
     * Constant for value 'Travel'
     * @return string 'Travel'
     */
    const VALUE_TRAVEL = 'Travel';
    /**
     * Constant for value 'Insurance'
     * @return string 'Insurance'
     */
    const VALUE_INSURANCE = 'Insurance';
    /**
     * Constant for value 'RentalCar'
     * @return string 'RentalCar'
     */
    const VALUE_RENTAL_CAR = 'RentalCar';
    /**
     * Constant for value 'Transfer'
     * @return string 'Transfer'
     */
    const VALUE_TRANSFER = 'Transfer';
    /**
     * Constant for value 'Parking'
     * @return string 'Parking'
     */
    const VALUE_PARKING = 'Parking';
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
     * @uses self::VALUE_TRAVEL
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_RENTAL_CAR
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_PARKING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TRAVEL,
            self::VALUE_INSURANCE,
            self::VALUE_RENTAL_CAR,
            self::VALUE_TRANSFER,
            self::VALUE_PARKING,
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
