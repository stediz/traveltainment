<?php

namespace EnumType;

/**
 * This class stands for HotelReviewServiceAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewServiceAttribute
{
    /**
     * Constant for value 'STAFF'
     * @return string 'STAFF'
     */
    const VALUE_STAFF = 'STAFF';
    /**
     * Constant for value 'FOREIGNLANGUAGES'
     * @return string 'FOREIGNLANGUAGES'
     */
    const VALUE_FOREIGNLANGUAGES = 'FOREIGNLANGUAGES';
    /**
     * Constant for value 'RECEPTION'
     * @return string 'RECEPTION'
     */
    const VALUE_RECEPTION = 'RECEPTION';
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
     * @uses self::VALUE_STAFF
     * @uses self::VALUE_FOREIGNLANGUAGES
     * @uses self::VALUE_RECEPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STAFF,
            self::VALUE_FOREIGNLANGUAGES,
            self::VALUE_RECEPTION,
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
