<?php

namespace EnumType;

/**
 * This class stands for DownstreamProcessAcceptedDefinitionEnum EnumType
 * @subpackage Enumerations
 */
class DownstreamProcessAcceptedDefinitionEnum
{
    /**
     * Constant for value 'Yes'
     * @return string 'Yes'
     */
    const VALUE_YES = 'Yes';
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
    /**
     * Constant for value 'NotChosenYet'
     * @return string 'NotChosenYet'
     */
    const VALUE_NOT_CHOSEN_YET = 'NotChosenYet';
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
     * @uses self::VALUE_YES
     * @uses self::VALUE_NO
     * @uses self::VALUE_NOT_CHOSEN_YET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_YES,
            self::VALUE_NO,
            self::VALUE_NOT_CHOSEN_YET,
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
