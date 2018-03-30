<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for OfferGridGroupTypeEnum EnumType
 * @subpackage Enumerations
 */
class OfferGridGroupTypeEnum
{
    /**
     * Constant for value 'DEPARTUREDAY'
     * @return string 'DEPARTUREDAY'
     */
    const VALUE_DEPARTUREDAY = 'DEPARTUREDAY';
    /**
     * Constant for value 'TOUROPERATOR'
     * @return string 'TOUROPERATOR'
     */
    const VALUE_TOUROPERATOR = 'TOUROPERATOR';
    /**
     * Constant for value 'TRAVELDURATION'
     * @return string 'TRAVELDURATION'
     */
    const VALUE_TRAVELDURATION = 'TRAVELDURATION';
    /**
     * Constant for value 'BOARD'
     * @return string 'BOARD'
     */
    const VALUE_BOARD = 'BOARD';
    /**
     * Constant for value 'ROOM'
     * @return string 'ROOM'
     */
    const VALUE_ROOM = 'ROOM';
    /**
     * Constant for value 'DEPARTUREAIRPORT'
     * @return string 'DEPARTUREAIRPORT'
     */
    const VALUE_DEPARTUREAIRPORT = 'DEPARTUREAIRPORT';
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
     * @uses self::VALUE_DEPARTUREDAY
     * @uses self::VALUE_TOUROPERATOR
     * @uses self::VALUE_TRAVELDURATION
     * @uses self::VALUE_BOARD
     * @uses self::VALUE_ROOM
     * @uses self::VALUE_DEPARTUREAIRPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEPARTUREDAY,
            self::VALUE_TOUROPERATOR,
            self::VALUE_TRAVELDURATION,
            self::VALUE_BOARD,
            self::VALUE_ROOM,
            self::VALUE_DEPARTUREAIRPORT,
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
