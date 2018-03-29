<?php

namespace EnumType;

/**
 * This class stands for SpecialStayAttribute EnumType
 * @subpackage Enumerations
 */
class SpecialStayAttribute
{
    /**
     * Constant for value 'GOLF'
     * @return string 'GOLF'
     */
    const VALUE_GOLF = 'GOLF';
    /**
     * Constant for value 'SKIPASS'
     * @return string 'SKIPASS'
     */
    const VALUE_SKIPASS = 'SKIPASS';
    /**
     * Constant for value 'SPORT'
     * @return string 'SPORT'
     */
    const VALUE_SPORT = 'SPORT';
    /**
     * Constant for value 'ENTRANCE'
     * @return string 'ENTRANCE'
     */
    const VALUE_ENTRANCE = 'ENTRANCE';
    /**
     * Constant for value 'EXCURSION'
     * @return string 'EXCURSION'
     */
    const VALUE_EXCURSION = 'EXCURSION';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'CHILDALLOWANCE'
     * @return string 'CHILDALLOWANCE'
     */
    const VALUE_CHILDALLOWANCE = 'CHILDALLOWANCE';
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Need
     * Meta informations extracted from the WSDL
     * - default: ALLOWED
     * @var string
     */
    public $Need;
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
     * @uses self::VALUE_GOLF
     * @uses self::VALUE_SKIPASS
     * @uses self::VALUE_SPORT
     * @uses self::VALUE_ENTRANCE
     * @uses self::VALUE_EXCURSION
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_CHILDALLOWANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GOLF,
            self::VALUE_SKIPASS,
            self::VALUE_SPORT,
            self::VALUE_ENTRANCE,
            self::VALUE_EXCURSION,
            self::VALUE_OTHER,
            self::VALUE_CHILDALLOWANCE,
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
