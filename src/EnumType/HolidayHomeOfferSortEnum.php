<?php

namespace EnumType;

/**
 * This class stands for HolidayHomeOfferSortEnum EnumType
 * @subpackage Enumerations
 */
class HolidayHomeOfferSortEnum
{
    /**
     * Constant for value 'PRICE'
     * @return string 'PRICE'
     */
    const VALUE_PRICE = 'PRICE';
    /**
     * Constant for value 'DURATION'
     * @return string 'DURATION'
     */
    const VALUE_DURATION = 'DURATION';
    /**
     * Constant for value 'DATE'
     * @return string 'DATE'
     */
    const VALUE_DATE = 'DATE';
    /**
     * Constant for value 'PERCENTAGEFIT'
     * @return string 'PERCENTAGEFIT'
     */
    const VALUE_PERCENTAGEFIT = 'PERCENTAGEFIT';
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
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_DURATION
     * @uses self::VALUE_DATE
     * @uses self::VALUE_PERCENTAGEFIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRICE,
            self::VALUE_DURATION,
            self::VALUE_DATE,
            self::VALUE_PERCENTAGEFIT,
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
