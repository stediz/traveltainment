<?php

namespace EnumType;

/**
 * This class stands for SpecialJourneyAttribute EnumType
 * @subpackage Enumerations
 */
class SpecialJourneyAttribute
{
    /**
     * Constant for value 'RENTALCAR'
     * @return string 'RENTALCAR'
     */
    const VALUE_RENTALCAR = 'RENTALCAR';
    /**
     * Constant for value 'RAILANDFLY'
     * @return string 'RAILANDFLY'
     */
    const VALUE_RAILANDFLY = 'RAILANDFLY';
    /**
     * Constant for value 'TRANSFER'
     * @return string 'TRANSFER'
     */
    const VALUE_TRANSFER = 'TRANSFER';
    /**
     * Constant for value 'EARLYBIRD'
     * @return string 'EARLYBIRD'
     */
    const VALUE_EARLYBIRD = 'EARLYBIRD';
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
     * @uses self::VALUE_RENTALCAR
     * @uses self::VALUE_RAILANDFLY
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_EARLYBIRD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RENTALCAR,
            self::VALUE_RAILANDFLY,
            self::VALUE_TRANSFER,
            self::VALUE_EARLYBIRD,
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
