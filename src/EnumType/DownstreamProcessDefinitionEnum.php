<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for DownstreamProcessDefinitionEnum EnumType
 * @subpackage Enumerations
 */
class DownstreamProcessDefinitionEnum
{
    /**
     * Constant for value 'Review'
     * @return string 'Review'
     */
    const VALUE_REVIEW = 'Review';
    /**
     * Constant for value 'Trippage'
     * @return string 'Trippage'
     */
    const VALUE_TRIPPAGE = 'Trippage';
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
     * @uses self::VALUE_REVIEW
     * @uses self::VALUE_TRIPPAGE
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REVIEW,
            self::VALUE_TRIPPAGE,
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
