<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurchargeType StructType
 * @subpackage Structs
 */
class SurchargeType extends AbstractStructBase
{
    /**
     * The Absolute
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 10
     * @var float
     */
    public $Absolute;
    /**
     * The ExtendedAbsolute
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceInformationType
     */
    public $ExtendedAbsolute;
    /**
     * The Relative
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 5
     * @var float
     */
    public $Relative;
    /**
     * The MinimalSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 10
     * @var float
     */
    public $MinimalSurcharge;
    /**
     * The ExtendedMinimalSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceInformationType
     */
    public $ExtendedMinimalSurcharge;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The ServiceText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceText;
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Order;
    /**
     * Constructor method for SurchargeType
     * @uses SurchargeType::setAbsolute()
     * @uses SurchargeType::setExtendedAbsolute()
     * @uses SurchargeType::setRelative()
     * @uses SurchargeType::setMinimalSurcharge()
     * @uses SurchargeType::setExtendedMinimalSurcharge()
     * @uses SurchargeType::setCurrency()
     * @uses SurchargeType::setServiceText()
     * @uses SurchargeType::setOrder()
     * @param float $absolute
     * @param \StructType\PriceInformationType $extendedAbsolute
     * @param float $relative
     * @param float $minimalSurcharge
     * @param \StructType\PriceInformationType $extendedMinimalSurcharge
     * @param string $currency
     * @param string $serviceText
     * @param string $order
     */
    public function __construct($absolute = null, \StructType\PriceInformationType $extendedAbsolute = null, $relative = null, $minimalSurcharge = null, \StructType\PriceInformationType $extendedMinimalSurcharge = null, $currency = null, $serviceText = null, $order = null)
    {
        $this
            ->setAbsolute($absolute)
            ->setExtendedAbsolute($extendedAbsolute)
            ->setRelative($relative)
            ->setMinimalSurcharge($minimalSurcharge)
            ->setExtendedMinimalSurcharge($extendedMinimalSurcharge)
            ->setCurrency($currency)
            ->setServiceText($serviceText)
            ->setOrder($order);
    }
    /**
     * Get Absolute value
     * @return float|null
     */
    public function getAbsolute()
    {
        return $this->Absolute;
    }
    /**
     * Set Absolute value
     * @param float $absolute
     * @return \StructType\SurchargeType
     */
    public function setAbsolute($absolute = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($absolute) && strlen(substr($absolute, strpos($absolute, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($absolute, strpos($absolute, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($absolute < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $absolute), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($absolute) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $absolute)) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 10 digits, "%d" given', strlen(substr($absolute, strpos($absolute, '.')))), __LINE__);
        }
        $this->Absolute = $absolute;
        return $this;
    }
    /**
     * Get ExtendedAbsolute value
     * @return \StructType\PriceInformationType|null
     */
    public function getExtendedAbsolute()
    {
        return $this->ExtendedAbsolute;
    }
    /**
     * Set ExtendedAbsolute value
     * @param \StructType\PriceInformationType $extendedAbsolute
     * @return \StructType\SurchargeType
     */
    public function setExtendedAbsolute(\StructType\PriceInformationType $extendedAbsolute = null)
    {
        $this->ExtendedAbsolute = $extendedAbsolute;
        return $this;
    }
    /**
     * Get Relative value
     * @return float|null
     */
    public function getRelative()
    {
        return $this->Relative;
    }
    /**
     * Set Relative value
     * @param float $relative
     * @return \StructType\SurchargeType
     */
    public function setRelative($relative = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($relative) && strlen(substr($relative, strpos($relative, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($relative, strpos($relative, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($relative < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $relative), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($relative) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $relative)) !== 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 5 digits, "%d" given', strlen(substr($relative, strpos($relative, '.')))), __LINE__);
        }
        $this->Relative = $relative;
        return $this;
    }
    /**
     * Get MinimalSurcharge value
     * @return float|null
     */
    public function getMinimalSurcharge()
    {
        return $this->MinimalSurcharge;
    }
    /**
     * Set MinimalSurcharge value
     * @param float $minimalSurcharge
     * @return \StructType\SurchargeType
     */
    public function setMinimalSurcharge($minimalSurcharge = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($minimalSurcharge) && strlen(substr($minimalSurcharge, strpos($minimalSurcharge, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($minimalSurcharge, strpos($minimalSurcharge, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($minimalSurcharge < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $minimalSurcharge), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($minimalSurcharge) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $minimalSurcharge)) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 10 digits, "%d" given', strlen(substr($minimalSurcharge, strpos($minimalSurcharge, '.')))), __LINE__);
        }
        $this->MinimalSurcharge = $minimalSurcharge;
        return $this;
    }
    /**
     * Get ExtendedMinimalSurcharge value
     * @return \StructType\PriceInformationType|null
     */
    public function getExtendedMinimalSurcharge()
    {
        return $this->ExtendedMinimalSurcharge;
    }
    /**
     * Set ExtendedMinimalSurcharge value
     * @param \StructType\PriceInformationType $extendedMinimalSurcharge
     * @return \StructType\SurchargeType
     */
    public function setExtendedMinimalSurcharge(\StructType\PriceInformationType $extendedMinimalSurcharge = null)
    {
        $this->ExtendedMinimalSurcharge = $extendedMinimalSurcharge;
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
     * @return \StructType\SurchargeType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get ServiceText value
     * @return string|null
     */
    public function getServiceText()
    {
        return $this->ServiceText;
    }
    /**
     * Set ServiceText value
     * @param string $serviceText
     * @return \StructType\SurchargeType
     */
    public function setServiceText($serviceText = null)
    {
        // validation for constraint: string
        if (!is_null($serviceText) && !is_string($serviceText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceText)), __LINE__);
        }
        $this->ServiceText = $serviceText;
        return $this;
    }
    /**
     * Get Order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \EnumType\SurchargeOrderEnum::valueIsValid()
     * @uses \EnumType\SurchargeOrderEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \StructType\SurchargeType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SurchargeOrderEnum::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \EnumType\SurchargeOrderEnum::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SurchargeType
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
