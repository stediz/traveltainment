<?php

namespace EnumType;

/**
 * This class stands for TargetType EnumType
 * @subpackage Enumerations
 */
class TargetType
{
    /**
     * Constant for value 'Production'
     * @return string 'Production'
     */
    const VALUE_PRODUCTION = 'Production';
    /**
     * Constant for value 'Test'
     * @return string 'Test'
     */
    const VALUE_TEST = 'Test';
    /**
     * Constant for value 'Fake'
     * @return string 'Fake'
     */
    const VALUE_FAKE = 'Fake';
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
     * @uses self::VALUE_PRODUCTION
     * @uses self::VALUE_TEST
     * @uses self::VALUE_FAKE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCTION,
            self::VALUE_TEST,
            self::VALUE_FAKE,
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
