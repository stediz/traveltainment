<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for TransferTypeEnum EnumType
 * @subpackage Enumerations
 */
class TransferTypeEnum
{
    /**
     * Constant for value 'Inbound'
     * @return string 'Inbound'
     */
    const VALUE_INBOUND = 'Inbound';
    /**
     * Constant for value 'Outbound'
     * @return string 'Outbound'
     */
    const VALUE_OUTBOUND = 'Outbound';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
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
     * @uses self::VALUE_INBOUND
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INBOUND,
            self::VALUE_OUTBOUND,
            self::VALUE_RETURN,
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
