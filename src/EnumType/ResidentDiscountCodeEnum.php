<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for ResidentDiscountCodeEnum EnumType
 * @subpackage Enumerations
 */
class ResidentDiscountCodeEnum
{
    /**
     * Constant for value 'RC'
     * @return string 'RC'
     */
    const VALUE_RC = 'RC';
    /**
     * Constant for value 'DC'
     * @return string 'DC'
     */
    const VALUE_DC = 'DC';
    /**
     * Constant for value 'BP'
     * @return string 'BP'
     */
    const VALUE_BP = 'BP';
    /**
     * Constant for value 'BI'
     * @return string 'BI'
     */
    const VALUE_BI = 'BI';
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
     * @uses self::VALUE_RC
     * @uses self::VALUE_DC
     * @uses self::VALUE_BP
     * @uses self::VALUE_BI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RC,
            self::VALUE_DC,
            self::VALUE_BP,
            self::VALUE_BI,
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
