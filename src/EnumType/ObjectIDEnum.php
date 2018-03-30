<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for ObjectIDEnum EnumType
 * @subpackage Enumerations
 */
class ObjectIDEnum
{
    /**
     * Constant for value 'IFF'
     * @return string 'IFF'
     */
    const VALUE_IFF = 'IFF';
    /**
     * Constant for value 'ICMS'
     * @return string 'ICMS'
     */
    const VALUE_ICMS = 'ICMS';
    /**
     * Constant for value 'Giata'
     * @return string 'Giata'
     */
    const VALUE_GIATA = 'Giata';
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
     * @uses self::VALUE_IFF
     * @uses self::VALUE_ICMS
     * @uses self::VALUE_GIATA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IFF,
            self::VALUE_ICMS,
            self::VALUE_GIATA,
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
