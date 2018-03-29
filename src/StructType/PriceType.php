<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceType StructType
 * Meta informations extracted from the WSDL
 * - fractionDigits: 2
 * - minInclusive: 0.0
 * - totalDigits: 16
 * @subpackage Structs
 */
class PriceType extends AbstractStructBase
{
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Currency;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 16
     * @var float
     */
    public $_;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Geldbetrag
     * - nillable: true
     * @var \StructType\AmountType
     */
    public $Amount;
    /**
     * The TaxesAndFees
     * Meta informations extracted from the WSDL
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 16
     * @var float
     */
    public $TaxesAndFees;
    /**
     * Constructor method for PriceType
     * @uses PriceType::setCurrency()
     * @uses PriceType::set_()
     * @uses PriceType::setAmount()
     * @uses PriceType::setTaxesAndFees()
     * @param string $currency
     * @param float $_
     * @param \StructType\AmountType $amount
     * @param float $taxesAndFees
     */
    public function __construct($currency = null, $_ = null, \StructType\AmountType $amount = null, $taxesAndFees = null)
    {
        $this
            ->setCurrency($currency)
            ->set_($_)
            ->setAmount($amount)
            ->setTaxesAndFees($taxesAndFees);
    }
    /**
     * Get Currency value
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \EnumType\CurrencyCode::valueIsValid()
     * @uses \EnumType\CurrencyCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \StructType\PriceType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCode::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \EnumType\CurrencyCode::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \StructType\PriceType
     */
    public function set_($_ = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($_) && strlen(substr($_, strpos($_, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($_, strpos($_, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($_ < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $_), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($_) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $_)) !== 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 16 digits, "%d" given', strlen(substr($_, strpos($_, '.')))), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Amount value
     * @return \StructType\AmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \StructType\AmountType $amount
     * @return \StructType\PriceType
     */
    public function setAmount(\StructType\AmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get TaxesAndFees value
     * @return float|null
     */
    public function getTaxesAndFees()
    {
        return $this->TaxesAndFees;
    }
    /**
     * Set TaxesAndFees value
     * @param float $taxesAndFees
     * @return \StructType\PriceType
     */
    public function setTaxesAndFees($taxesAndFees = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($taxesAndFees) && strlen(substr($taxesAndFees, strpos($taxesAndFees, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($taxesAndFees, strpos($taxesAndFees, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($taxesAndFees < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $taxesAndFees), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($taxesAndFees) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $taxesAndFees)) !== 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 16 digits, "%d" given', strlen(substr($taxesAndFees, strpos($taxesAndFees, '.')))), __LINE__);
        }
        $this->TaxesAndFees = $taxesAndFees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PriceType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
