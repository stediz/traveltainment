<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for BookingTypeEnum EnumType
 * @subpackage Enumerations
 */
class BookingTypeEnum
{
    /**
     * Constant for value 'BookSoft'
     * @return string 'BookSoft'
     */
    const VALUE_BOOK_SOFT = 'BookSoft';
    /**
     * Constant for value 'BookOnFix'
     * @return string 'BookOnFix'
     */
    const VALUE_BOOK_ON_FIX = 'BookOnFix';
    /**
     * Constant for value 'BookOnRequest'
     * @return string 'BookOnRequest'
     */
    const VALUE_BOOK_ON_REQUEST = 'BookOnRequest';
    /**
     * Constant for value 'BookOnConfirm'
     * @return string 'BookOnConfirm'
     */
    const VALUE_BOOK_ON_CONFIRM = 'BookOnConfirm';
    /**
     * Constant for value 'BookOnOption'
     * @return string 'BookOnOption'
     */
    const VALUE_BOOK_ON_OPTION = 'BookOnOption';
    /**
     * Constant for value 'BookUnable'
     * @return string 'BookUnable'
     */
    const VALUE_BOOK_UNABLE = 'BookUnable';
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
     * @uses self::VALUE_BOOK_SOFT
     * @uses self::VALUE_BOOK_ON_FIX
     * @uses self::VALUE_BOOK_ON_REQUEST
     * @uses self::VALUE_BOOK_ON_CONFIRM
     * @uses self::VALUE_BOOK_ON_OPTION
     * @uses self::VALUE_BOOK_UNABLE
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOOK_SOFT,
            self::VALUE_BOOK_ON_FIX,
            self::VALUE_BOOK_ON_REQUEST,
            self::VALUE_BOOK_ON_CONFIRM,
            self::VALUE_BOOK_ON_OPTION,
            self::VALUE_BOOK_UNABLE,
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
