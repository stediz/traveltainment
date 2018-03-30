<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for UseLocationTypeEnum EnumType
 * @subpackage Enumerations
 */
class UseLocationTypeEnum
{
    /**
     * Constant for value 'Home'
     * @return string 'Home'
     */
    const VALUE_HOME = 'Home';
    /**
     * Constant for value 'Work'
     * @return string 'Work'
     */
    const VALUE_WORK = 'Work';
    /**
     * Constant for value 'Delivery'
     * @return string 'Delivery'
     */
    const VALUE_DELIVERY = 'Delivery';
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
     * @uses self::VALUE_HOME
     * @uses self::VALUE_WORK
     * @uses self::VALUE_DELIVERY
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOME,
            self::VALUE_WORK,
            self::VALUE_DELIVERY,
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
