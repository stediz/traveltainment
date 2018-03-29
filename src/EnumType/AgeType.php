<?php

namespace EnumType;

/**
 * This class stands for AgeType EnumType
 * Meta informations extracted from the WSDL
 * - maxInclusive: 18
 * - minInclusive: 0
 * @subpackage Enumerations
 */
class AgeType
{
    /**
     * Constant for value 'ADULT'
     * @return string 'ADULT'
     */
    const VALUE_ADULT = 'ADULT';
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
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADULT,
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
