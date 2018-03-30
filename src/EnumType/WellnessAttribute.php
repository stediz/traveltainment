<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for WellnessAttribute EnumType
 * @subpackage Enumerations
 */
class WellnessAttribute
{
    /**
     * Constant for value 'MASSAGES'
     * @return string 'MASSAGES'
     */
    const VALUE_MASSAGES = 'MASSAGES';
    /**
     * Constant for value 'AYURVEDA'
     * @return string 'AYURVEDA'
     */
    const VALUE_AYURVEDA = 'AYURVEDA';
    /**
     * Constant for value 'BEAUTYFARM'
     * @return string 'BEAUTYFARM'
     */
    const VALUE_BEAUTYFARM = 'BEAUTYFARM';
    /**
     * Constant for value 'THALASSO'
     * @return string 'THALASSO'
     */
    const VALUE_THALASSO = 'THALASSO';
    /**
     * Constant for value 'SAUNA'
     * @return string 'SAUNA'
     */
    const VALUE_SAUNA = 'SAUNA';
    /**
     * Constant for value 'COSMETIC'
     * @return string 'COSMETIC'
     */
    const VALUE_COSMETIC = 'COSMETIC';
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
     * @uses self::VALUE_MASSAGES
     * @uses self::VALUE_AYURVEDA
     * @uses self::VALUE_BEAUTYFARM
     * @uses self::VALUE_THALASSO
     * @uses self::VALUE_SAUNA
     * @uses self::VALUE_COSMETIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MASSAGES,
            self::VALUE_AYURVEDA,
            self::VALUE_BEAUTYFARM,
            self::VALUE_THALASSO,
            self::VALUE_SAUNA,
            self::VALUE_COSMETIC,
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
