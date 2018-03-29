<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleAmountType StructType
 * Meta informations extracted from the WSDL
 * - fractionDigits: 2
 * - minInclusive: 0.0
 * - totalDigits: 16
 * @subpackage Structs
 */
class SimpleAmountType extends AbstractStructBase
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
     * Constructor method for SimpleAmountType
     * @uses SimpleAmountType::setCurrency()
     * @uses SimpleAmountType::set_()
     * @param string $currency
     * @param float $_
     */
    public function __construct($currency = null, $_ = null)
    {
        $this
            ->setCurrency($currency)
            ->set_($_);
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
     * @return \StructType\SimpleAmountType
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
     * @return \StructType\SimpleAmountType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleAmountType
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
