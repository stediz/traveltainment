<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for SportAttribute EnumType
 * @subpackage Enumerations
 */
class SportAttribute
{
    /**
     * Constant for value 'WATERSPORTS'
     * @return string 'WATERSPORTS'
     */
    const VALUE_WATERSPORTS = 'WATERSPORTS';
    /**
     * Constant for value 'ACTIONANDFUN'
     * @return string 'ACTIONANDFUN'
     */
    const VALUE_ACTIONANDFUN = 'ACTIONANDFUN';
    /**
     * Constant for value 'WINTERSPORTS'
     * @return string 'WINTERSPORTS'
     */
    const VALUE_WINTERSPORTS = 'WINTERSPORTS';
    /**
     * Constant for value 'SURFING'
     * @return string 'SURFING'
     */
    const VALUE_SURFING = 'SURFING';
    /**
     * Constant for value 'SAILING'
     * @return string 'SAILING'
     */
    const VALUE_SAILING = 'SAILING';
    /**
     * Constant for value 'DIVING'
     * @return string 'DIVING'
     */
    const VALUE_DIVING = 'DIVING';
    /**
     * Constant for value 'SQUASH'
     * @return string 'SQUASH'
     */
    const VALUE_SQUASH = 'SQUASH';
    /**
     * Constant for value 'CYCLING'
     * @return string 'CYCLING'
     */
    const VALUE_CYCLING = 'CYCLING';
    /**
     * Constant for value 'HIKING'
     * @return string 'HIKING'
     */
    const VALUE_HIKING = 'HIKING';
    /**
     * Constant for value 'FITNESS'
     * @return string 'FITNESS'
     */
    const VALUE_FITNESS = 'FITNESS';
    /**
     * Constant for value 'GOLF'
     * @return string 'GOLF'
     */
    const VALUE_GOLF = 'GOLF';
    /**
     * Constant for value 'TENNIS'
     * @return string 'TENNIS'
     */
    const VALUE_TENNIS = 'TENNIS';
    /**
     * Constant for value 'HORSERIDING'
     * @return string 'HORSERIDING'
     */
    const VALUE_HORSERIDING = 'HORSERIDING';
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
     * @uses self::VALUE_WATERSPORTS
     * @uses self::VALUE_ACTIONANDFUN
     * @uses self::VALUE_WINTERSPORTS
     * @uses self::VALUE_SURFING
     * @uses self::VALUE_SAILING
     * @uses self::VALUE_DIVING
     * @uses self::VALUE_SQUASH
     * @uses self::VALUE_CYCLING
     * @uses self::VALUE_HIKING
     * @uses self::VALUE_FITNESS
     * @uses self::VALUE_GOLF
     * @uses self::VALUE_TENNIS
     * @uses self::VALUE_HORSERIDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WATERSPORTS,
            self::VALUE_ACTIONANDFUN,
            self::VALUE_WINTERSPORTS,
            self::VALUE_SURFING,
            self::VALUE_SAILING,
            self::VALUE_DIVING,
            self::VALUE_SQUASH,
            self::VALUE_CYCLING,
            self::VALUE_HIKING,
            self::VALUE_FITNESS,
            self::VALUE_GOLF,
            self::VALUE_TENNIS,
            self::VALUE_HORSERIDING,
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
