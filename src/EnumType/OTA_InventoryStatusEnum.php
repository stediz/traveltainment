<?php

namespace EnumType;

/**
 * This class stands for OTA_InventoryStatusEnum EnumType
 * @subpackage Enumerations
 */
class OTA_InventoryStatusEnum
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'OnRequest'
     * @return string 'OnRequest'
     */
    const VALUE_ON_REQUEST = 'OnRequest';
    /**
     * Constant for value 'SupplierBooked'
     * @return string 'SupplierBooked'
     */
    const VALUE_SUPPLIER_BOOKED = 'SupplierBooked';
    /**
     * Constant for value 'ToConfirm'
     * @return string 'ToConfirm'
     */
    const VALUE_TO_CONFIRM = 'ToConfirm';
    /**
     * Constant for value 'Unavailable'
     * @return string 'Unavailable'
     */
    const VALUE_UNAVAILABLE = 'Unavailable';
    /**
     * Constant for value 'Waitlist'
     * @return string 'Waitlist'
     */
    const VALUE_WAITLIST = 'Waitlist';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_ON_REQUEST
     * @uses self::VALUE_SUPPLIER_BOOKED
     * @uses self::VALUE_TO_CONFIRM
     * @uses self::VALUE_UNAVAILABLE
     * @uses self::VALUE_WAITLIST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_AVAILABLE,
            self::VALUE_CANCELLED,
            self::VALUE_CONFIRMED,
            self::VALUE_ON_REQUEST,
            self::VALUE_SUPPLIER_BOOKED,
            self::VALUE_TO_CONFIRM,
            self::VALUE_UNAVAILABLE,
            self::VALUE_WAITLIST,
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
