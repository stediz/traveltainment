<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedPriceType StructType
 * Meta informations extracted from the WSDL
 * - fractionDigits: 2
 * - minInclusive: 0.0
 * - totalDigits: 16
 * @subpackage Structs
 */
class ConvertedPriceType extends AbstractStructBase
{
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Currency;
    /**
     * The OriginalCurrency
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $OriginalCurrency;
    /**
     * The ExchangeRate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $ExchangeRate;
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
     * The ConvertedAmount
     * Meta informations extracted from the WSDL
     * - documentation: Geldbetrag
     * - nillable: true
     * @var \traveltainment\SOAP17\StructType\AmountType
     */
    public $ConvertedAmount;
    /**
     * The ConvertedTaxesAndFees
     * Meta informations extracted from the WSDL
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 16
     * @var float
     */
    public $ConvertedTaxesAndFees;
    /**
     * Constructor method for ConvertedPriceType
     * @uses ConvertedPriceType::setCurrency()
     * @uses ConvertedPriceType::setOriginalCurrency()
     * @uses ConvertedPriceType::setExchangeRate()
     * @uses ConvertedPriceType::set_()
     * @uses ConvertedPriceType::setConvertedAmount()
     * @uses ConvertedPriceType::setConvertedTaxesAndFees()
     * @param string $currency
     * @param string $originalCurrency
     * @param float $exchangeRate
     * @param float $_
     * @param \traveltainment\SOAP17\StructType\AmountType $convertedAmount
     * @param float $convertedTaxesAndFees
     */
    public function __construct($currency = null, $originalCurrency = null, $exchangeRate = null, $_ = null, \traveltainment\SOAP17\StructType\AmountType $convertedAmount = null, $convertedTaxesAndFees = null)
    {
        $this
            ->setCurrency($currency)
            ->setOriginalCurrency($originalCurrency)
            ->setExchangeRate($exchangeRate)
            ->set_($_)
            ->setConvertedAmount($convertedAmount)
            ->setConvertedTaxesAndFees($convertedTaxesAndFees);
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
     * @uses \traveltainment\SOAP17\EnumType\CurrencyCode::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CurrencyCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CurrencyCode::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \traveltainment\SOAP17\EnumType\CurrencyCode::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get OriginalCurrency value
     * @return string
     */
    public function getOriginalCurrency()
    {
        return $this->OriginalCurrency;
    }
    /**
     * Set OriginalCurrency value
     * @uses \traveltainment\SOAP17\EnumType\CurrencyCode::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CurrencyCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $originalCurrency
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
     */
    public function setOriginalCurrency($originalCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CurrencyCode::valueIsValid($originalCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $originalCurrency, implode(', ', \traveltainment\SOAP17\EnumType\CurrencyCode::getValidValues())), __LINE__);
        }
        $this->OriginalCurrency = $originalCurrency;
        return $this;
    }
    /**
     * Get ExchangeRate value
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }
    /**
     * Set ExchangeRate value
     * @param float $exchangeRate
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
     */
    public function setExchangeRate($exchangeRate = null)
    {
        $this->ExchangeRate = $exchangeRate;
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
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
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
     * Get ConvertedAmount value
     * @return \traveltainment\SOAP17\StructType\AmountType|null
     */
    public function getConvertedAmount()
    {
        return $this->ConvertedAmount;
    }
    /**
     * Set ConvertedAmount value
     * @param \traveltainment\SOAP17\StructType\AmountType $convertedAmount
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
     */
    public function setConvertedAmount(\traveltainment\SOAP17\StructType\AmountType $convertedAmount = null)
    {
        $this->ConvertedAmount = $convertedAmount;
        return $this;
    }
    /**
     * Get ConvertedTaxesAndFees value
     * @return float|null
     */
    public function getConvertedTaxesAndFees()
    {
        return $this->ConvertedTaxesAndFees;
    }
    /**
     * Set ConvertedTaxesAndFees value
     * @param float $convertedTaxesAndFees
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
     */
    public function setConvertedTaxesAndFees($convertedTaxesAndFees = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($convertedTaxesAndFees) && strlen(substr($convertedTaxesAndFees, strpos($convertedTaxesAndFees, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($convertedTaxesAndFees, strpos($convertedTaxesAndFees, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($convertedTaxesAndFees < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $convertedTaxesAndFees), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($convertedTaxesAndFees) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $convertedTaxesAndFees)) !== 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 16 digits, "%d" given', strlen(substr($convertedTaxesAndFees, strpos($convertedTaxesAndFees, '.')))), __LINE__);
        }
        $this->ConvertedTaxesAndFees = $convertedTaxesAndFees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType
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
