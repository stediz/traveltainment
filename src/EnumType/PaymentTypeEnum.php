<?php

namespace EnumType;

/**
 * This class stands for PaymentTypeEnum EnumType
 * @subpackage Enumerations
 */
class PaymentTypeEnum
{
    /**
     * Constant for value 'Phone'
     * @return string 'Phone'
     */
    const VALUE_PHONE = 'Phone';
    /**
     * Constant for value 'BankTransfer'
     * @return string 'BankTransfer'
     */
    const VALUE_BANK_TRANSFER = 'BankTransfer';
    /**
     * Constant for value 'DirectDebit'
     * @return string 'DirectDebit'
     */
    const VALUE_DIRECT_DEBIT = 'DirectDebit';
    /**
     * Constant for value 'DirectDebitInternational'
     * @return string 'DirectDebitInternational'
     */
    const VALUE_DIRECT_DEBIT_INTERNATIONAL = 'DirectDebitInternational';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'Agency'
     * @return string 'Agency'
     */
    const VALUE_AGENCY = 'Agency';
    /**
     * Constant for value 'Ideal'
     * @return string 'Ideal'
     */
    const VALUE_IDEAL = 'Ideal';
    /**
     * Constant for value 'UniqueAccreditation'
     * @return string 'UniqueAccreditation'
     */
    const VALUE_UNIQUE_ACCREDITATION = 'UniqueAccreditation';
    /**
     * Constant for value 'PayPal'
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'External'
     * @return string 'External'
     */
    const VALUE_EXTERNAL = 'External';
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
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_BANK_TRANSFER
     * @uses self::VALUE_DIRECT_DEBIT
     * @uses self::VALUE_DIRECT_DEBIT_INTERNATIONAL
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_IDEAL
     * @uses self::VALUE_UNIQUE_ACCREDITATION
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_EXTERNAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PHONE,
            self::VALUE_BANK_TRANSFER,
            self::VALUE_DIRECT_DEBIT,
            self::VALUE_DIRECT_DEBIT_INTERNATIONAL,
            self::VALUE_CREDIT_CARD,
            self::VALUE_AGENCY,
            self::VALUE_IDEAL,
            self::VALUE_UNIQUE_ACCREDITATION,
            self::VALUE_PAY_PAL,
            self::VALUE_UNDEFINED,
            self::VALUE_EXTERNAL,
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
