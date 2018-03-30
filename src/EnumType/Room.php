<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for Room EnumType
 * @subpackage Enumerations
 */
class Room
{
    /**
     * Constant for value 'PROGRAM'
     * @return string 'PROGRAM'
     */
    const VALUE_PROGRAM = 'PROGRAM';
    /**
     * Constant for value 'STUDIO'
     * @return string 'STUDIO'
     */
    const VALUE_STUDIO = 'STUDIO';
    /**
     * Constant for value 'FAMILYROOM'
     * @return string 'FAMILYROOM'
     */
    const VALUE_FAMILYROOM = 'FAMILYROOM';
    /**
     * Constant for value 'BUNGALOW'
     * @return string 'BUNGALOW'
     */
    const VALUE_BUNGALOW = 'BUNGALOW';
    /**
     * Constant for value 'SUITE'
     * @return string 'SUITE'
     */
    const VALUE_SUITE = 'SUITE';
    /**
     * Constant for value 'SINGLEBEDROOM'
     * @return string 'SINGLEBEDROOM'
     */
    const VALUE_SINGLEBEDROOM = 'SINGLEBEDROOM';
    /**
     * Constant for value 'DOUBLEBEDROOM'
     * @return string 'DOUBLEBEDROOM'
     */
    const VALUE_DOUBLEBEDROOM = 'DOUBLEBEDROOM';
    /**
     * Constant for value 'APPARTEMENT'
     * @return string 'APPARTEMENT'
     */
    const VALUE_APPARTEMENT = 'APPARTEMENT';
    /**
     * Constant for value 'VILLA'
     * @return string 'VILLA'
     */
    const VALUE_VILLA = 'VILLA';
    /**
     * Constant for value 'SUPERIOR'
     * @return string 'SUPERIOR'
     */
    const VALUE_SUPERIOR = 'SUPERIOR';
    /**
     * Constant for value 'TRIPLEBEDROOM'
     * @return string 'TRIPLEBEDROOM'
     */
    const VALUE_TRIPLEBEDROOM = 'TRIPLEBEDROOM';
    /**
     * Constant for value 'DUPLEXBEDROOM'
     * @return string 'DUPLEXBEDROOM'
     */
    const VALUE_DUPLEXBEDROOM = 'DUPLEXBEDROOM';
    /**
     * Constant for value 'MULTISHAREROOM'
     * @return string 'MULTISHAREROOM'
     */
    const VALUE_MULTISHAREROOM = 'MULTISHAREROOM';
    /**
     * Constant for value 'HOLIDAYFLAT'
     * @return string 'HOLIDAYFLAT'
     */
    const VALUE_HOLIDAYFLAT = 'HOLIDAYFLAT';
    /**
     * Constant for value 'HOLIDAYHOUSE'
     * @return string 'HOLIDAYHOUSE'
     */
    const VALUE_HOLIDAYHOUSE = 'HOLIDAYHOUSE';
    /**
     * Constant for value 'DELUXEBEDROOM'
     * @return string 'DELUXEBEDROOM'
     */
    const VALUE_DELUXEBEDROOM = 'DELUXEBEDROOM';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
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
     * @uses self::VALUE_PROGRAM
     * @uses self::VALUE_STUDIO
     * @uses self::VALUE_FAMILYROOM
     * @uses self::VALUE_BUNGALOW
     * @uses self::VALUE_SUITE
     * @uses self::VALUE_SINGLEBEDROOM
     * @uses self::VALUE_DOUBLEBEDROOM
     * @uses self::VALUE_APPARTEMENT
     * @uses self::VALUE_VILLA
     * @uses self::VALUE_SUPERIOR
     * @uses self::VALUE_TRIPLEBEDROOM
     * @uses self::VALUE_DUPLEXBEDROOM
     * @uses self::VALUE_MULTISHAREROOM
     * @uses self::VALUE_HOLIDAYFLAT
     * @uses self::VALUE_HOLIDAYHOUSE
     * @uses self::VALUE_DELUXEBEDROOM
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PROGRAM,
            self::VALUE_STUDIO,
            self::VALUE_FAMILYROOM,
            self::VALUE_BUNGALOW,
            self::VALUE_SUITE,
            self::VALUE_SINGLEBEDROOM,
            self::VALUE_DOUBLEBEDROOM,
            self::VALUE_APPARTEMENT,
            self::VALUE_VILLA,
            self::VALUE_SUPERIOR,
            self::VALUE_TRIPLEBEDROOM,
            self::VALUE_DUPLEXBEDROOM,
            self::VALUE_MULTISHAREROOM,
            self::VALUE_HOLIDAYFLAT,
            self::VALUE_HOLIDAYHOUSE,
            self::VALUE_DELUXEBEDROOM,
            self::VALUE_UNKNOWN,
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
