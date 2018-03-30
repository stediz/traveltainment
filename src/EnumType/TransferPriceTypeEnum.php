<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for TransferPriceTypeEnum EnumType
 * @subpackage Enumerations
 */
class TransferPriceTypeEnum
{
    /**
     * Constant for value 'Adult'
     * @return string 'Adult'
     */
    const VALUE_ADULT = 'Adult';
    /**
     * Constant for value 'Child'
     * @return string 'Child'
     */
    const VALUE_CHILD = 'Child';
    /**
     * Constant for value 'FirstChild'
     * @return string 'FirstChild'
     */
    const VALUE_FIRST_CHILD = 'FirstChild';
    /**
     * Constant for value 'Vehicle'
     * @return string 'Vehicle'
     */
    const VALUE_VEHICLE = 'Vehicle';
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
     * @uses self::VALUE_ADULT
     * @uses self::VALUE_CHILD
     * @uses self::VALUE_FIRST_CHILD
     * @uses self::VALUE_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADULT,
            self::VALUE_CHILD,
            self::VALUE_FIRST_CHILD,
            self::VALUE_VEHICLE,
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
