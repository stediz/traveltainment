<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for Transfer EnumType
 * @subpackage Enumerations
 */
class Transfer
{
    /**
     * Constant for value 'NOTRANSFER'
     * @return string 'NOTRANSFER'
     */
    const VALUE_NOTRANSFER = 'NOTRANSFER';
    /**
     * Constant for value 'TRANSFER'
     * @return string 'TRANSFER'
     */
    const VALUE_TRANSFER = 'TRANSFER';
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
     * @uses self::VALUE_NOTRANSFER
     * @uses self::VALUE_TRANSFER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTRANSFER,
            self::VALUE_TRANSFER,
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
