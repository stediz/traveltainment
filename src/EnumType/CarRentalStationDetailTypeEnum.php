<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for CarRentalStationDetailTypeEnum EnumType
 * @subpackage Enumerations
 */
class CarRentalStationDetailTypeEnum
{
    /**
     * Constant for value 'AllTypes'
     * @return string 'AllTypes'
     */
    const VALUE_ALL_TYPES = 'AllTypes';
    /**
     * Constant for value 'Cautions'
     * @return string 'Cautions'
     */
    const VALUE_CAUTIONS = 'Cautions';
    /**
     * Constant for value 'Conditions'
     * @return string 'Conditions'
     */
    const VALUE_CONDITIONS = 'Conditions';
    /**
     * Constant for value 'Extras'
     * @return string 'Extras'
     */
    const VALUE_EXTRAS = 'Extras';
    /**
     * Constant for value 'Inclusives'
     * @return string 'Inclusives'
     */
    const VALUE_INCLUSIVES = 'Inclusives';
    /**
     * Constant for value 'OpeningHours'
     * @return string 'OpeningHours'
     */
    const VALUE_OPENING_HOURS = 'OpeningHours';
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
     * @uses self::VALUE_ALL_TYPES
     * @uses self::VALUE_CAUTIONS
     * @uses self::VALUE_CONDITIONS
     * @uses self::VALUE_EXTRAS
     * @uses self::VALUE_INCLUSIVES
     * @uses self::VALUE_OPENING_HOURS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_TYPES,
            self::VALUE_CAUTIONS,
            self::VALUE_CONDITIONS,
            self::VALUE_EXTRAS,
            self::VALUE_INCLUSIVES,
            self::VALUE_OPENING_HOURS,
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
