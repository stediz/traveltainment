<?php

namespace EnumType;

/**
 * This class stands for HotelReviewTravellerType EnumType
 * @subpackage Enumerations
 */
class HotelReviewTravellerType
{
    /**
     * Constant for value 'ANY'
     * @return string 'ANY'
     */
    const VALUE_ANY = 'ANY';
    /**
     * Constant for value 'FAMILY'
     * @return string 'FAMILY'
     */
    const VALUE_FAMILY = 'FAMILY';
    /**
     * Constant for value 'GROUP'
     * @return string 'GROUP'
     */
    const VALUE_GROUP = 'GROUP';
    /**
     * Constant for value 'COUPLE'
     * @return string 'COUPLE'
     */
    const VALUE_COUPLE = 'COUPLE';
    /**
     * Constant for value 'SINGLE'
     * @return string 'SINGLE'
     */
    const VALUE_SINGLE = 'SINGLE';
    /**
     * The TravellerType
     * @var string
     */
    public $TravellerType;
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_FAMILY
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_COUPLE
     * @uses self::VALUE_SINGLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_FAMILY,
            self::VALUE_GROUP,
            self::VALUE_COUPLE,
            self::VALUE_SINGLE,
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
