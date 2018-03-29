<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedTotalPriceListType StructType
 * @subpackage Structs
 */
class ConvertedTotalPriceListType extends AbstractStructBase
{
    /**
     * The OriginalAmount
     * Meta informations extracted from the WSDL
     * - documentation: Geldbetrag
     * - nillable: true
     * @var \StructType\AmountType
     */
    public $OriginalAmount;
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
     * The ConvertedPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ConvertedPriceType[]
     */
    public $ConvertedPrice;
    /**
     * Constructor method for ConvertedTotalPriceListType
     * @uses ConvertedTotalPriceListType::setOriginalAmount()
     * @uses ConvertedTotalPriceListType::setTaxesAndFees()
     * @uses ConvertedTotalPriceListType::setConvertedPrice()
     * @param \StructType\AmountType $originalAmount
     * @param float $taxesAndFees
     * @param \StructType\ConvertedPriceType[] $convertedPrice
     */
    public function __construct(\StructType\AmountType $originalAmount = null, $taxesAndFees = null, array $convertedPrice = array())
    {
        $this
            ->setOriginalAmount($originalAmount)
            ->setTaxesAndFees($taxesAndFees)
            ->setConvertedPrice($convertedPrice);
    }
    /**
     * Get OriginalAmount value
     * @return \StructType\AmountType|null
     */
    public function getOriginalAmount()
    {
        return $this->OriginalAmount;
    }
    /**
     * Set OriginalAmount value
     * @param \StructType\AmountType $originalAmount
     * @return \StructType\ConvertedTotalPriceListType
     */
    public function setOriginalAmount(\StructType\AmountType $originalAmount = null)
    {
        $this->OriginalAmount = $originalAmount;
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
     * @return \StructType\ConvertedTotalPriceListType
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
     * Get ConvertedPrice value
     * @return \StructType\ConvertedPriceType[]|null
     */
    public function getConvertedPrice()
    {
        return $this->ConvertedPrice;
    }
    /**
     * Set ConvertedPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedPriceType[] $convertedPrice
     * @return \StructType\ConvertedTotalPriceListType
     */
    public function setConvertedPrice(array $convertedPrice = array())
    {
        foreach ($convertedPrice as $convertedTotalPriceListTypeConvertedPriceItem) {
            // validation for constraint: itemType
            if (!$convertedTotalPriceListTypeConvertedPriceItem instanceof \StructType\ConvertedPriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedPrice property can only contain items of \StructType\ConvertedPriceType, "%s" given', is_object($convertedTotalPriceListTypeConvertedPriceItem) ? get_class($convertedTotalPriceListTypeConvertedPriceItem) : gettype($convertedTotalPriceListTypeConvertedPriceItem)), __LINE__);
            }
        }
        $this->ConvertedPrice = $convertedPrice;
        return $this;
    }
    /**
     * Add item to ConvertedPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedPriceType $item
     * @return \StructType\ConvertedTotalPriceListType
     */
    public function addToConvertedPrice(\StructType\ConvertedPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConvertedPriceType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedPrice property can only contain items of \StructType\ConvertedPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConvertedTotalPriceListType
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
