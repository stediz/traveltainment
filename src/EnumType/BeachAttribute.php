<?php

namespace EnumType;

/**
 * This class stands for BeachAttribute EnumType
 * @subpackage Enumerations
 */
class BeachAttribute
{
    /**
     * Constant for value 'DIRECTBEACHACCESS'
     * @return string 'DIRECTBEACHACCESS'
     */
    const VALUE_DIRECTBEACHACCESS = 'DIRECTBEACHACCESS';
    /**
     * Constant for value 'SANDYBEACH'
     * @return string 'SANDYBEACH'
     */
    const VALUE_SANDYBEACH = 'SANDYBEACH';
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
     * @uses self::VALUE_DIRECTBEACHACCESS
     * @uses self::VALUE_SANDYBEACH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIRECTBEACHACCESS,
            self::VALUE_SANDYBEACH,
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
