<?php

namespace EnumType;

/**
 * This class stands for RoomAddition EnumType
 * @subpackage Enumerations
 */
class RoomAddition
{
    /**
     * Constant for value 'OCEANVIEW'
     * @return string 'OCEANVIEW'
     */
    const VALUE_OCEANVIEW = 'OCEANVIEW';
    /**
     * Constant for value 'PARTIALOCEANVIEW'
     * @return string 'PARTIALOCEANVIEW'
     */
    const VALUE_PARTIALOCEANVIEW = 'PARTIALOCEANVIEW';
    /**
     * Constant for value 'PARTIALORFULLOCEANVIEW'
     * @return string 'PARTIALORFULLOCEANVIEW'
     */
    const VALUE_PARTIALORFULLOCEANVIEW = 'PARTIALORFULLOCEANVIEW';
    /**
     * Constant for value 'UNDEFINED'
     * @return string 'UNDEFINED'
     */
    const VALUE_UNDEFINED = 'UNDEFINED';
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
     * @uses self::VALUE_OCEANVIEW
     * @uses self::VALUE_PARTIALOCEANVIEW
     * @uses self::VALUE_PARTIALORFULLOCEANVIEW
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OCEANVIEW,
            self::VALUE_PARTIALOCEANVIEW,
            self::VALUE_PARTIALORFULLOCEANVIEW,
            self::VALUE_UNDEFINED,
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
