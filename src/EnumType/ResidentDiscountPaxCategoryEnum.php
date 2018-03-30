<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for ResidentDiscountPaxCategoryEnum EnumType
 * @subpackage Enumerations
 */
class ResidentDiscountPaxCategoryEnum
{
    /**
     * Constant for value 'DN'
     * @return string 'DN'
     */
    const VALUE_DN = 'DN';
    /**
     * Constant for value 'TR'
     * @return string 'TR'
     */
    const VALUE_TR = 'TR';
    /**
     * Constant for value 'MR'
     * @return string 'MR'
     */
    const VALUE_MR = 'MR';
    /**
     * Constant for value 'GR'
     * @return string 'GR'
     */
    const VALUE_GR = 'GR';
    /**
     * Constant for value 'CR'
     * @return string 'CR'
     */
    const VALUE_CR = 'CR';
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
     * @uses self::VALUE_DN
     * @uses self::VALUE_TR
     * @uses self::VALUE_MR
     * @uses self::VALUE_GR
     * @uses self::VALUE_CR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DN,
            self::VALUE_TR,
            self::VALUE_MR,
            self::VALUE_GR,
            self::VALUE_CR,
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
