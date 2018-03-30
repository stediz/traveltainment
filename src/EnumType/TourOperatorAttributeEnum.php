<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for TourOperatorAttributeEnum EnumType
 * @subpackage Enumerations
 */
class TourOperatorAttributeEnum
{
    /**
     * Constant for value 'FamilyFriendly'
     * @return string 'FamilyFriendly'
     */
    const VALUE_FAMILY_FRIENDLY = 'FamilyFriendly';
    /**
     * Constant for value 'DirectBeachAccess'
     * @return string 'DirectBeachAccess'
     */
    const VALUE_DIRECT_BEACH_ACCESS = 'DirectBeachAccess';
    /**
     * Constant for value 'SportOffer'
     * @return string 'SportOffer'
     */
    const VALUE_SPORT_OFFER = 'SportOffer';
    /**
     * Constant for value 'Wellness'
     * @return string 'Wellness'
     */
    const VALUE_WELLNESS = 'Wellness';
    /**
     * Constant for value 'ChildDiscount'
     * @return string 'ChildDiscount'
     */
    const VALUE_CHILD_DISCOUNT = 'ChildDiscount';
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
     * @uses self::VALUE_FAMILY_FRIENDLY
     * @uses self::VALUE_DIRECT_BEACH_ACCESS
     * @uses self::VALUE_SPORT_OFFER
     * @uses self::VALUE_WELLNESS
     * @uses self::VALUE_CHILD_DISCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FAMILY_FRIENDLY,
            self::VALUE_DIRECT_BEACH_ACCESS,
            self::VALUE_SPORT_OFFER,
            self::VALUE_WELLNESS,
            self::VALUE_CHILD_DISCOUNT,
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
