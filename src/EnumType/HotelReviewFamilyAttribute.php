<?php

namespace EnumType;

/**
 * This class stands for HotelReviewFamilyAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewFamilyAttribute
{
    /**
     * Constant for value 'ENTERTAINMENTFORCHILDREN'
     * @return string 'ENTERTAINMENTFORCHILDREN'
     */
    const VALUE_ENTERTAINMENTFORCHILDREN = 'ENTERTAINMENTFORCHILDREN';
    /**
     * Constant for value 'FOODFORCHILDREN'
     * @return string 'FOODFORCHILDREN'
     */
    const VALUE_FOODFORCHILDREN = 'FOODFORCHILDREN';
    /**
     * Constant for value 'CHILDRENSPOOL'
     * @return string 'CHILDRENSPOOL'
     */
    const VALUE_CHILDRENSPOOL = 'CHILDRENSPOOL';
    /**
     * Constant for value 'CHILDCARE'
     * @return string 'CHILDCARE'
     */
    const VALUE_CHILDCARE = 'CHILDCARE';
    /**
     * Constant for value 'PLAYGROUND'
     * @return string 'PLAYGROUND'
     */
    const VALUE_PLAYGROUND = 'PLAYGROUND';
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
     * @uses self::VALUE_ENTERTAINMENTFORCHILDREN
     * @uses self::VALUE_FOODFORCHILDREN
     * @uses self::VALUE_CHILDRENSPOOL
     * @uses self::VALUE_CHILDCARE
     * @uses self::VALUE_PLAYGROUND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENTERTAINMENTFORCHILDREN,
            self::VALUE_FOODFORCHILDREN,
            self::VALUE_CHILDRENSPOOL,
            self::VALUE_CHILDCARE,
            self::VALUE_PLAYGROUND,
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
