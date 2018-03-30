<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for PersType EnumType
 * @subpackage Enumerations
 */
class PersType
{
    /**
     * Constant for value 'ADULT'
     * @return string 'ADULT'
     */
    const VALUE_ADULT = 'ADULT';
    /**
     * Constant for value 'CHILD'
     * @return string 'CHILD'
     */
    const VALUE_CHILD = 'CHILD';
    /**
     * Constant for value 'INFANT'
     * @return string 'INFANT'
     */
    const VALUE_INFANT = 'INFANT';
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
     * @uses self::VALUE_INFANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADULT,
            self::VALUE_CHILD,
            self::VALUE_INFANT,
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
