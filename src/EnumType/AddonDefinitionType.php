<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for AddonDefinitionType EnumType
 * @subpackage Enumerations
 */
class AddonDefinitionType
{
    /**
     * Constant for value 'Rentalcar'
     * @return string 'Rentalcar'
     */
    const VALUE_RENTALCAR = 'Rentalcar';
    /**
     * Constant for value 'Insurance'
     * @return string 'Insurance'
     */
    const VALUE_INSURANCE = 'Insurance';
    /**
     * Constant for value 'Transfer'
     * @return string 'Transfer'
     */
    const VALUE_TRANSFER = 'Transfer';
    /**
     * Constant for value 'VoucherConvert'
     * @return string 'VoucherConvert'
     */
    const VALUE_VOUCHER_CONVERT = 'VoucherConvert';
    /**
     * Constant for value 'VoucherGet'
     * @return string 'VoucherGet'
     */
    const VALUE_VOUCHER_GET = 'VoucherGet';
    /**
     * Constant for value 'NewsletterMarketing'
     * @return string 'NewsletterMarketing'
     */
    const VALUE_NEWSLETTER_MARKETING = 'NewsletterMarketing';
    /**
     * Constant for value 'Tracking'
     * @return string 'Tracking'
     */
    const VALUE_TRACKING = 'Tracking';
    /**
     * Constant for value 'Agency'
     * @return string 'Agency'
     */
    const VALUE_AGENCY = 'Agency';
    /**
     * Constant for value 'CustomerNumbers'
     * @return string 'CustomerNumbers'
     */
    const VALUE_CUSTOMER_NUMBERS = 'CustomerNumbers';
    /**
     * Constant for value 'PartnerProgramData'
     * @return string 'PartnerProgramData'
     */
    const VALUE_PARTNER_PROGRAM_DATA = 'PartnerProgramData';
    /**
     * Constant for value 'RailwayTickets'
     * @return string 'RailwayTickets'
     */
    const VALUE_RAILWAY_TICKETS = 'RailwayTickets';
    /**
     * Constant for value 'Edocs'
     * @return string 'Edocs'
     */
    const VALUE_EDOCS = 'Edocs';
    /**
     * Constant for value 'ExtraFeatures'
     * @return string 'ExtraFeatures'
     */
    const VALUE_EXTRA_FEATURES = 'ExtraFeatures';
    /**
     * Constant for value 'MiscBookableProducts'
     * @return string 'MiscBookableProducts'
     */
    const VALUE_MISC_BOOKABLE_PRODUCTS = 'MiscBookableProducts';
    /**
     * Constant for value 'Miscellaneous'
     * @return string 'Miscellaneous'
     */
    const VALUE_MISCELLANEOUS = 'Miscellaneous';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
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
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_VOUCHER_CONVERT
     * @uses self::VALUE_VOUCHER_GET
     * @uses self::VALUE_NEWSLETTER_MARKETING
     * @uses self::VALUE_TRACKING
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_CUSTOMER_NUMBERS
     * @uses self::VALUE_PARTNER_PROGRAM_DATA
     * @uses self::VALUE_RAILWAY_TICKETS
     * @uses self::VALUE_EDOCS
     * @uses self::VALUE_EXTRA_FEATURES
     * @uses self::VALUE_MISC_BOOKABLE_PRODUCTS
     * @uses self::VALUE_MISCELLANEOUS
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RENTALCAR,
            self::VALUE_INSURANCE,
            self::VALUE_TRANSFER,
            self::VALUE_VOUCHER_CONVERT,
            self::VALUE_VOUCHER_GET,
            self::VALUE_NEWSLETTER_MARKETING,
            self::VALUE_TRACKING,
            self::VALUE_AGENCY,
            self::VALUE_CUSTOMER_NUMBERS,
            self::VALUE_PARTNER_PROGRAM_DATA,
            self::VALUE_RAILWAY_TICKETS,
            self::VALUE_EDOCS,
            self::VALUE_EXTRA_FEATURES,
            self::VALUE_MISC_BOOKABLE_PRODUCTS,
            self::VALUE_MISCELLANEOUS,
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
