<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for AddCostInfoAvailableEnum EnumType
 * @subpackage Enumerations
 */
class AddCostInfoAvailableEnum
{
    /**
     * Constant for value 'Found'
     * @return string 'Found'
     */
    const VALUE_FOUND = 'Found';
    /**
     * Constant for value 'NotFound'
     * @return string 'NotFound'
     */
    const VALUE_NOT_FOUND = 'NotFound';
    /**
     * Constant for value 'NoAdditionalCost'
     * @return string 'NoAdditionalCost'
     */
    const VALUE_NO_ADDITIONAL_COST = 'NoAdditionalCost';
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
     * @uses self::VALUE_FOUND
     * @uses self::VALUE_NOT_FOUND
     * @uses self::VALUE_NO_ADDITIONAL_COST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FOUND,
            self::VALUE_NOT_FOUND,
            self::VALUE_NO_ADDITIONAL_COST,
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
