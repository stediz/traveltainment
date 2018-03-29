<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * Meta informations extracted from the WSDL
 * - fractionDigits: 2
 * - minInclusive: 0.0
 * - totalDigits: 16
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
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
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: Waehrung nach ISO-4217
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $Currency;
    /**
     * The ServiceCharge
     * Meta informations extracted from the WSDL
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 16
     * @var float
     */
    public $ServiceCharge;
    /**
     * Constructor method for AmountType
     * @uses AmountType::set_()
     * @uses AmountType::setCurrency()
     * @uses AmountType::setServiceCharge()
     * @param float $_
     * @param string $currency
     * @param float $serviceCharge
     */
    public function __construct($_ = null, $currency = null, $serviceCharge = null)
    {
        $this
            ->set_($_)
            ->setCurrency($currency)
            ->setServiceCharge($serviceCharge);
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
     * @return \StructType\AmountType
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
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \StructType\AmountType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currency) && !preg_match('/[A-Z]{3}/', $currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($currency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get ServiceCharge value
     * @return float|null
     */
    public function getServiceCharge()
    {
        return $this->ServiceCharge;
    }
    /**
     * Set ServiceCharge value
     * @param float $serviceCharge
     * @return \StructType\AmountType
     */
    public function setServiceCharge($serviceCharge = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($serviceCharge) && strlen(substr($serviceCharge, strpos($serviceCharge, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($serviceCharge, strpos($serviceCharge, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($serviceCharge < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $serviceCharge), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($serviceCharge) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $serviceCharge)) !== 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 16 digits, "%d" given', strlen(substr($serviceCharge, strpos($serviceCharge, '.')))), __LINE__);
        }
        $this->ServiceCharge = $serviceCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AmountType
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
