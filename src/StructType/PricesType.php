<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricesType StructType
 * @subpackage Structs
 */
class PricesType extends AbstractStructBase
{
    /**
     * The TotalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SimplePriceType
     */
    public $TotalPrice;
    /**
     * The ConvertedTotalPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConvertedSimplePriceType[]
     */
    public $ConvertedTotalPrice;
    /**
     * The PerPersonPrices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PersonPricesType
     */
    public $PerPersonPrices;
    /**
     * The ConvertedPerPersonPrices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConvertedPersonPricesType[]
     */
    public $ConvertedPerPersonPrices;
    /**
     * Constructor method for PricesType
     * @uses PricesType::setTotalPrice()
     * @uses PricesType::setConvertedTotalPrice()
     * @uses PricesType::setPerPersonPrices()
     * @uses PricesType::setConvertedPerPersonPrices()
     * @param \StructType\SimplePriceType $totalPrice
     * @param \StructType\ConvertedSimplePriceType[] $convertedTotalPrice
     * @param \StructType\PersonPricesType $perPersonPrices
     * @param \StructType\ConvertedPersonPricesType[] $convertedPerPersonPrices
     */
    public function __construct(\StructType\SimplePriceType $totalPrice = null, array $convertedTotalPrice = array(), \StructType\PersonPricesType $perPersonPrices = null, array $convertedPerPersonPrices = array())
    {
        $this
            ->setTotalPrice($totalPrice)
            ->setConvertedTotalPrice($convertedTotalPrice)
            ->setPerPersonPrices($perPersonPrices)
            ->setConvertedPerPersonPrices($convertedPerPersonPrices);
    }
    /**
     * Get TotalPrice value
     * @return \StructType\SimplePriceType|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \StructType\SimplePriceType $totalPrice
     * @return \StructType\PricesType
     */
    public function setTotalPrice(\StructType\SimplePriceType $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get ConvertedTotalPrice value
     * @return \StructType\ConvertedSimplePriceType[]|null
     */
    public function getConvertedTotalPrice()
    {
        return $this->ConvertedTotalPrice;
    }
    /**
     * Set ConvertedTotalPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedSimplePriceType[] $convertedTotalPrice
     * @return \StructType\PricesType
     */
    public function setConvertedTotalPrice(array $convertedTotalPrice = array())
    {
        foreach ($convertedTotalPrice as $pricesTypeConvertedTotalPriceItem) {
            // validation for constraint: itemType
            if (!$pricesTypeConvertedTotalPriceItem instanceof \StructType\ConvertedSimplePriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedTotalPrice property can only contain items of \StructType\ConvertedSimplePriceType, "%s" given', is_object($pricesTypeConvertedTotalPriceItem) ? get_class($pricesTypeConvertedTotalPriceItem) : gettype($pricesTypeConvertedTotalPriceItem)), __LINE__);
            }
        }
        $this->ConvertedTotalPrice = $convertedTotalPrice;
        return $this;
    }
    /**
     * Add item to ConvertedTotalPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedSimplePriceType $item
     * @return \StructType\PricesType
     */
    public function addToConvertedTotalPrice(\StructType\ConvertedSimplePriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConvertedSimplePriceType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedTotalPrice property can only contain items of \StructType\ConvertedSimplePriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedTotalPrice[] = $item;
        return $this;
    }
    /**
     * Get PerPersonPrices value
     * @return \StructType\PersonPricesType|null
     */
    public function getPerPersonPrices()
    {
        return $this->PerPersonPrices;
    }
    /**
     * Set PerPersonPrices value
     * @param \StructType\PersonPricesType $perPersonPrices
     * @return \StructType\PricesType
     */
    public function setPerPersonPrices(\StructType\PersonPricesType $perPersonPrices = null)
    {
        $this->PerPersonPrices = $perPersonPrices;
        return $this;
    }
    /**
     * Get ConvertedPerPersonPrices value
     * @return \StructType\ConvertedPersonPricesType[]|null
     */
    public function getConvertedPerPersonPrices()
    {
        return $this->ConvertedPerPersonPrices;
    }
    /**
     * Set ConvertedPerPersonPrices value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedPersonPricesType[] $convertedPerPersonPrices
     * @return \StructType\PricesType
     */
    public function setConvertedPerPersonPrices(array $convertedPerPersonPrices = array())
    {
        foreach ($convertedPerPersonPrices as $pricesTypeConvertedPerPersonPricesItem) {
            // validation for constraint: itemType
            if (!$pricesTypeConvertedPerPersonPricesItem instanceof \StructType\ConvertedPersonPricesType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedPerPersonPrices property can only contain items of \StructType\ConvertedPersonPricesType, "%s" given', is_object($pricesTypeConvertedPerPersonPricesItem) ? get_class($pricesTypeConvertedPerPersonPricesItem) : gettype($pricesTypeConvertedPerPersonPricesItem)), __LINE__);
            }
        }
        $this->ConvertedPerPersonPrices = $convertedPerPersonPrices;
        return $this;
    }
    /**
     * Add item to ConvertedPerPersonPrices value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedPersonPricesType $item
     * @return \StructType\PricesType
     */
    public function addToConvertedPerPersonPrices(\StructType\ConvertedPersonPricesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConvertedPersonPricesType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedPerPersonPrices property can only contain items of \StructType\ConvertedPersonPricesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedPerPersonPrices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PricesType
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
