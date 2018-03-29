<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceSpanType StructType
 * @subpackage Structs
 */
class PriceSpanType extends AbstractStructBase
{
    /**
     * The MaxPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var float
     */
    public $MaxPrice;
    /**
     * The MinPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var float
     */
    public $MinPrice;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - default: EUR
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Weightage
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxInclusive: 100
     * - minInclusive: 0
     * @var int
     */
    public $Weightage;
    /**
     * Constructor method for PriceSpanType
     * @uses PriceSpanType::setMaxPrice()
     * @uses PriceSpanType::setMinPrice()
     * @uses PriceSpanType::setCurrencyCode()
     * @uses PriceSpanType::setWeightage()
     * @param float $maxPrice
     * @param float $minPrice
     * @param string $currencyCode
     * @param int $weightage
     */
    public function __construct($maxPrice = null, $minPrice = null, $currencyCode = 'EUR', $weightage = '0')
    {
        $this
            ->setMaxPrice($maxPrice)
            ->setMinPrice($minPrice)
            ->setCurrencyCode($currencyCode)
            ->setWeightage($weightage);
    }
    /**
     * Get MaxPrice value
     * @return float|null
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param float $maxPrice
     * @return \StructType\PriceSpanType
     */
    public function setMaxPrice($maxPrice = null)
    {
        // validation for constraint: minInclusive
        if ($maxPrice < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $maxPrice), __LINE__);
        }
        $this->MaxPrice = $maxPrice;
        return $this;
    }
    /**
     * Get MinPrice value
     * @return float|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param float $minPrice
     * @return \StructType\PriceSpanType
     */
    public function setMinPrice($minPrice = null)
    {
        // validation for constraint: minInclusive
        if ($minPrice < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $minPrice), __LINE__);
        }
        $this->MinPrice = $minPrice;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @uses \EnumType\CurrencyCode::valueIsValid()
     * @uses \EnumType\CurrencyCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyCode
     * @return \StructType\PriceSpanType
     */
    public function setCurrencyCode($currencyCode = 'EUR')
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCode::valueIsValid($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currencyCode, implode(', ', \EnumType\CurrencyCode::getValidValues())), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get Weightage value
     * @return int|null
     */
    public function getWeightage()
    {
        return $this->Weightage;
    }
    /**
     * Set Weightage value
     * @param int $weightage
     * @return \StructType\PriceSpanType
     */
    public function setWeightage($weightage = '0')
    {
        // validation for constraint: maxInclusive
        if ($weightage > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 100, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($weightage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($weightage) && !is_numeric($weightage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weightage)), __LINE__);
        }
        $this->Weightage = $weightage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PriceSpanType
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
