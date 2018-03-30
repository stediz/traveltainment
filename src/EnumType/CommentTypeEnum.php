<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for CommentTypeEnum EnumType
 * @subpackage Enumerations
 */
class CommentTypeEnum
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'CallCenter'
     * @return string 'CallCenter'
     */
    const VALUE_CALL_CENTER = 'CallCenter';
    /**
     * Constant for value 'Traveller'
     * @return string 'Traveller'
     */
    const VALUE_TRAVELLER = 'Traveller';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_CALL_CENTER
     * @uses self::VALUE_TRAVELLER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_CALL_CENTER,
            self::VALUE_TRAVELLER,
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
