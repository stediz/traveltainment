<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for StatusEnum EnumType
 * @subpackage Enumerations
 */
class StatusEnum
{
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'OnRequest'
     * @return string 'OnRequest'
     */
    const VALUE_ON_REQUEST = 'OnRequest';
    /**
     * Constant for value 'ToConfirm'
     * @return string 'ToConfirm'
     */
    const VALUE_TO_CONFIRM = 'ToConfirm';
    /**
     * Constant for value 'NotAvailable'
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'CheckUnable'
     * @return string 'CheckUnable'
     */
    const VALUE_CHECK_UNABLE = 'CheckUnable';
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
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_ON_REQUEST
     * @uses self::VALUE_TO_CONFIRM
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_CHECK_UNABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AVAILABLE,
            self::VALUE_ON_REQUEST,
            self::VALUE_TO_CONFIRM,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_UNDEFINED,
            self::VALUE_CHECK_UNABLE,
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
