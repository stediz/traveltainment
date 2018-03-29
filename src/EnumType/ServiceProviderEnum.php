<?php

namespace EnumType;

/**
 * This class stands for ServiceProviderEnum EnumType
 * @subpackage Enumerations
 */
class ServiceProviderEnum
{
    /**
     * Constant for value 'Wirecard'
     * @return string 'Wirecard'
     */
    const VALUE_WIRECARD = 'Wirecard';
    /**
     * Constant for value 'Ogone'
     * @return string 'Ogone'
     */
    const VALUE_OGONE = 'Ogone';
    /**
     * Constant for value 'Paypoint'
     * @return string 'Paypoint'
     */
    const VALUE_PAYPOINT = 'Paypoint';
    /**
     * Constant for value 'Servebase'
     * @return string 'Servebase'
     */
    const VALUE_SERVEBASE = 'Servebase';
    /**
     * Constant for value 'Atos'
     * @return string 'Atos'
     */
    const VALUE_ATOS = 'Atos';
    /**
     * Constant for value 'Fleetway'
     * @return string 'Fleetway'
     */
    const VALUE_FLEETWAY = 'Fleetway';
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
     * @uses self::VALUE_WIRECARD
     * @uses self::VALUE_OGONE
     * @uses self::VALUE_PAYPOINT
     * @uses self::VALUE_SERVEBASE
     * @uses self::VALUE_ATOS
     * @uses self::VALUE_FLEETWAY
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WIRECARD,
            self::VALUE_OGONE,
            self::VALUE_PAYPOINT,
            self::VALUE_SERVEBASE,
            self::VALUE_ATOS,
            self::VALUE_FLEETWAY,
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
