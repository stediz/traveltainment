<?php

namespace EnumType;

/**
 * This class stands for HotelReviewRoomAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewRoomAttribute
{
    /**
     * Constant for value 'CLEANNESS'
     * @return string 'CLEANNESS'
     */
    const VALUE_CLEANNESS = 'CLEANNESS';
    /**
     * Constant for value 'ROOMSIZE'
     * @return string 'ROOMSIZE'
     */
    const VALUE_ROOMSIZE = 'ROOMSIZE';
    /**
     * Constant for value 'EQUIPMENT'
     * @return string 'EQUIPMENT'
     */
    const VALUE_EQUIPMENT = 'EQUIPMENT';
    /**
     * Constant for value 'BATHROOM'
     * @return string 'BATHROOM'
     */
    const VALUE_BATHROOM = 'BATHROOM';
    /**
     * Constant for value 'DESIGN'
     * @return string 'DESIGN'
     */
    const VALUE_DESIGN = 'DESIGN';
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
     * @uses self::VALUE_CLEANNESS
     * @uses self::VALUE_ROOMSIZE
     * @uses self::VALUE_EQUIPMENT
     * @uses self::VALUE_BATHROOM
     * @uses self::VALUE_DESIGN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLEANNESS,
            self::VALUE_ROOMSIZE,
            self::VALUE_EQUIPMENT,
            self::VALUE_BATHROOM,
            self::VALUE_DESIGN,
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
