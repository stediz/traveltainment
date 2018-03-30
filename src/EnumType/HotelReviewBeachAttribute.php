<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HotelReviewBeachAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewBeachAttribute
{
    /**
     * Constant for value 'ACCESSIBILITY'
     * @return string 'ACCESSIBILITY'
     */
    const VALUE_ACCESSIBILITY = 'ACCESSIBILITY';
    /**
     * Constant for value 'SPACIOUSNESS'
     * @return string 'SPACIOUSNESS'
     */
    const VALUE_SPACIOUSNESS = 'SPACIOUSNESS';
    /**
     * Constant for value 'EQUIPMENT'
     * @return string 'EQUIPMENT'
     */
    const VALUE_EQUIPMENT = 'EQUIPMENT';
    /**
     * Constant for value 'CATERING'
     * @return string 'CATERING'
     */
    const VALUE_CATERING = 'CATERING';
    /**
     * Constant for value 'SPORTOPTIONS'
     * @return string 'SPORTOPTIONS'
     */
    const VALUE_SPORTOPTIONS = 'SPORTOPTIONS';
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
     * @uses self::VALUE_ACCESSIBILITY
     * @uses self::VALUE_SPACIOUSNESS
     * @uses self::VALUE_EQUIPMENT
     * @uses self::VALUE_CATERING
     * @uses self::VALUE_SPORTOPTIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCESSIBILITY,
            self::VALUE_SPACIOUSNESS,
            self::VALUE_EQUIPMENT,
            self::VALUE_CATERING,
            self::VALUE_SPORTOPTIONS,
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
