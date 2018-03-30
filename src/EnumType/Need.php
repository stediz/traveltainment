<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for Need EnumType
 * @subpackage Enumerations
 */
class Need
{
    /**
     * Constant for value 'ALLOWED'
     * @return string 'ALLOWED'
     */
    const VALUE_ALLOWED = 'ALLOWED';
    /**
     * Constant for value 'DENIED'
     * @return string 'DENIED'
     */
    const VALUE_DENIED = 'DENIED';
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
     * @uses self::VALUE_ALLOWED
     * @uses self::VALUE_DENIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOWED,
            self::VALUE_DENIED,
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
