<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComponentPriceType StructType
 * @subpackage Structs
 */
class ComponentPriceType extends AbstractStructBase
{
    /**
     * The ComponentName
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ComponentName;
    /**
     * The ComponentType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ComponentType;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Geldbetrag
     * - nillable: true
     * @var \traveltainment\SOAP17\StructType\SimpleAmountType
     */
    public $Amount;
    /**
     * The ConvertedAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedAmountType[]
     */
    public $ConvertedAmount;
    /**
     * Constructor method for ComponentPriceType
     * @uses ComponentPriceType::setComponentName()
     * @uses ComponentPriceType::setComponentType()
     * @uses ComponentPriceType::setAmount()
     * @uses ComponentPriceType::setConvertedAmount()
     * @param string $componentName
     * @param string $componentType
     * @param \traveltainment\SOAP17\StructType\SimpleAmountType $amount
     * @param \traveltainment\SOAP17\StructType\ConvertedAmountType[] $convertedAmount
     */
    public function __construct($componentName = null, $componentType = null, \traveltainment\SOAP17\StructType\SimpleAmountType $amount = null, array $convertedAmount = array())
    {
        $this
            ->setComponentName($componentName)
            ->setComponentType($componentType)
            ->setAmount($amount)
            ->setConvertedAmount($convertedAmount);
    }
    /**
     * Get ComponentName value
     * @return string
     */
    public function getComponentName()
    {
        return $this->ComponentName;
    }
    /**
     * Set ComponentName value
     * @param string $componentName
     * @return \traveltainment\SOAP17\StructType\ComponentPriceType
     */
    public function setComponentName($componentName = null)
    {
        // validation for constraint: string
        if (!is_null($componentName) && !is_string($componentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($componentName)), __LINE__);
        }
        $this->ComponentName = $componentName;
        return $this;
    }
    /**
     * Get ComponentType value
     * @return string
     */
    public function getComponentType()
    {
        return $this->ComponentType;
    }
    /**
     * Set ComponentType value
     * @uses \traveltainment\SOAP17\EnumType\OfferCategory::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OfferCategory::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $componentType
     * @return \traveltainment\SOAP17\StructType\ComponentPriceType
     */
    public function setComponentType($componentType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\OfferCategory::valueIsValid($componentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $componentType, implode(', ', \traveltainment\SOAP17\EnumType\OfferCategory::getValidValues())), __LINE__);
        }
        $this->ComponentType = $componentType;
        return $this;
    }
    /**
     * Get Amount value
     * @return \traveltainment\SOAP17\StructType\SimpleAmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \traveltainment\SOAP17\StructType\SimpleAmountType $amount
     * @return \traveltainment\SOAP17\StructType\ComponentPriceType
     */
    public function setAmount(\traveltainment\SOAP17\StructType\SimpleAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ConvertedAmount value
     * @return \traveltainment\SOAP17\StructType\ConvertedAmountType[]|null
     */
    public function getConvertedAmount()
    {
        return $this->ConvertedAmount;
    }
    /**
     * Set ConvertedAmount value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedAmountType[] $convertedAmount
     * @return \traveltainment\SOAP17\StructType\ComponentPriceType
     */
    public function setConvertedAmount(array $convertedAmount = array())
    {
        foreach ($convertedAmount as $componentPriceTypeConvertedAmountItem) {
            // validation for constraint: itemType
            if (!$componentPriceTypeConvertedAmountItem instanceof \traveltainment\SOAP17\StructType\ConvertedAmountType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedAmount property can only contain items of \traveltainment\SOAP17\StructType\ConvertedAmountType, "%s" given', is_object($componentPriceTypeConvertedAmountItem) ? get_class($componentPriceTypeConvertedAmountItem) : gettype($componentPriceTypeConvertedAmountItem)), __LINE__);
            }
        }
        $this->ConvertedAmount = $convertedAmount;
        return $this;
    }
    /**
     * Add item to ConvertedAmount value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedAmountType $item
     * @return \traveltainment\SOAP17\StructType\ComponentPriceType
     */
    public function addToConvertedAmount(\traveltainment\SOAP17\StructType\ConvertedAmountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedAmountType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedAmount property can only contain items of \traveltainment\SOAP17\StructType\ConvertedAmountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedAmount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ComponentPriceType
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
