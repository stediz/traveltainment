<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for HotelReviewHotelAttribute EnumType
 * @subpackage Enumerations
 */
class HotelReviewHotelAttribute
{
    /**
     * Constant for value 'CLEANNESS'
     * @return string 'CLEANNESS'
     */
    const VALUE_CLEANNESS = 'CLEANNESS';
    /**
     * Constant for value 'SUITABLEFORFAMILIES'
     * @return string 'SUITABLEFORFAMILIES'
     */
    const VALUE_SUITABLEFORFAMILIES = 'SUITABLEFORFAMILIES';
    /**
     * Constant for value 'SUITABLEFORCOUPLES'
     * @return string 'SUITABLEFORCOUPLES'
     */
    const VALUE_SUITABLEFORCOUPLES = 'SUITABLEFORCOUPLES';
    /**
     * Constant for value 'SUITABLEFORSINGLES'
     * @return string 'SUITABLEFORSINGLES'
     */
    const VALUE_SUITABLEFORSINGLES = 'SUITABLEFORSINGLES';
    /**
     * Constant for value 'SUITABLEFORGROUPS'
     * @return string 'SUITABLEFORGROUPS'
     */
    const VALUE_SUITABLEFORGROUPS = 'SUITABLEFORGROUPS';
    /**
     * Constant for value 'RECREATIONALVALUE'
     * @return string 'RECREATIONALVALUE'
     */
    const VALUE_RECREATIONALVALUE = 'RECREATIONALVALUE';
    /**
     * Constant for value 'CHARM'
     * @return string 'CHARM'
     */
    const VALUE_CHARM = 'CHARM';
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
     * @uses self::VALUE_SUITABLEFORFAMILIES
     * @uses self::VALUE_SUITABLEFORCOUPLES
     * @uses self::VALUE_SUITABLEFORSINGLES
     * @uses self::VALUE_SUITABLEFORGROUPS
     * @uses self::VALUE_RECREATIONALVALUE
     * @uses self::VALUE_CHARM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLEANNESS,
            self::VALUE_SUITABLEFORFAMILIES,
            self::VALUE_SUITABLEFORCOUPLES,
            self::VALUE_SUITABLEFORSINGLES,
            self::VALUE_SUITABLEFORGROUPS,
            self::VALUE_RECREATIONALVALUE,
            self::VALUE_CHARM,
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
