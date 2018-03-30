<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for OfferScopeEnum EnumType
 * @subpackage Enumerations
 */
class OfferScopeEnum
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Public'
     * @return string 'Public'
     */
    const VALUE_PUBLIC = 'Public';
    /**
     * Constant for value 'Exclusive'
     * @return string 'Exclusive'
     */
    const VALUE_EXCLUSIVE = 'Exclusive';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PUBLIC
     * @uses self::VALUE_EXCLUSIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_PUBLIC,
            self::VALUE_EXCLUSIVE,
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
