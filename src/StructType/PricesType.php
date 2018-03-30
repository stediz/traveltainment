<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $TotalPrice;
    /**
     * The ConvertedTotalPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedSimplePriceType[]
     */
    public $ConvertedTotalPrice;
    /**
     * The PerPersonPrices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PersonPricesType
     */
    public $PerPersonPrices;
    /**
     * The ConvertedPerPersonPrices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedPersonPricesType[]
     */
    public $ConvertedPerPersonPrices;
    /**
     * Constructor method for PricesType
     * @uses PricesType::setTotalPrice()
     * @uses PricesType::setConvertedTotalPrice()
     * @uses PricesType::setPerPersonPrices()
     * @uses PricesType::setConvertedPerPersonPrices()
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $totalPrice
     * @param \traveltainment\SOAP17\StructType\ConvertedSimplePriceType[] $convertedTotalPrice
     * @param \traveltainment\SOAP17\StructType\PersonPricesType $perPersonPrices
     * @param \traveltainment\SOAP17\StructType\ConvertedPersonPricesType[] $convertedPerPersonPrices
     */
    public function __construct(\traveltainment\SOAP17\StructType\SimplePriceType $totalPrice = null, array $convertedTotalPrice = array(), \traveltainment\SOAP17\StructType\PersonPricesType $perPersonPrices = null, array $convertedPerPersonPrices = array())
    {
        $this
            ->setTotalPrice($totalPrice)
            ->setConvertedTotalPrice($convertedTotalPrice)
            ->setPerPersonPrices($perPersonPrices)
            ->setConvertedPerPersonPrices($convertedPerPersonPrices);
    }
    /**
     * Get TotalPrice value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $totalPrice
     * @return \traveltainment\SOAP17\StructType\PricesType
     */
    public function setTotalPrice(\traveltainment\SOAP17\StructType\SimplePriceType $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get ConvertedTotalPrice value
     * @return \traveltainment\SOAP17\StructType\ConvertedSimplePriceType[]|null
     */
    public function getConvertedTotalPrice()
    {
        return $this->ConvertedTotalPrice;
    }
    /**
     * Set ConvertedTotalPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedSimplePriceType[] $convertedTotalPrice
     * @return \traveltainment\SOAP17\StructType\PricesType
     */
    public function setConvertedTotalPrice(array $convertedTotalPrice = array())
    {
        foreach ($convertedTotalPrice as $pricesTypeConvertedTotalPriceItem) {
            // validation for constraint: itemType
            if (!$pricesTypeConvertedTotalPriceItem instanceof \traveltainment\SOAP17\StructType\ConvertedSimplePriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedTotalPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedSimplePriceType, "%s" given', is_object($pricesTypeConvertedTotalPriceItem) ? get_class($pricesTypeConvertedTotalPriceItem) : gettype($pricesTypeConvertedTotalPriceItem)), __LINE__);
            }
        }
        $this->ConvertedTotalPrice = $convertedTotalPrice;
        return $this;
    }
    /**
     * Add item to ConvertedTotalPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedSimplePriceType $item
     * @return \traveltainment\SOAP17\StructType\PricesType
     */
    public function addToConvertedTotalPrice(\traveltainment\SOAP17\StructType\ConvertedSimplePriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedSimplePriceType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedTotalPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedSimplePriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedTotalPrice[] = $item;
        return $this;
    }
    /**
     * Get PerPersonPrices value
     * @return \traveltainment\SOAP17\StructType\PersonPricesType|null
     */
    public function getPerPersonPrices()
    {
        return $this->PerPersonPrices;
    }
    /**
     * Set PerPersonPrices value
     * @param \traveltainment\SOAP17\StructType\PersonPricesType $perPersonPrices
     * @return \traveltainment\SOAP17\StructType\PricesType
     */
    public function setPerPersonPrices(\traveltainment\SOAP17\StructType\PersonPricesType $perPersonPrices = null)
    {
        $this->PerPersonPrices = $perPersonPrices;
        return $this;
    }
    /**
     * Get ConvertedPerPersonPrices value
     * @return \traveltainment\SOAP17\StructType\ConvertedPersonPricesType[]|null
     */
    public function getConvertedPerPersonPrices()
    {
        return $this->ConvertedPerPersonPrices;
    }
    /**
     * Set ConvertedPerPersonPrices value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedPersonPricesType[] $convertedPerPersonPrices
     * @return \traveltainment\SOAP17\StructType\PricesType
     */
    public function setConvertedPerPersonPrices(array $convertedPerPersonPrices = array())
    {
        foreach ($convertedPerPersonPrices as $pricesTypeConvertedPerPersonPricesItem) {
            // validation for constraint: itemType
            if (!$pricesTypeConvertedPerPersonPricesItem instanceof \traveltainment\SOAP17\StructType\ConvertedPersonPricesType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedPerPersonPrices property can only contain items of \traveltainment\SOAP17\StructType\ConvertedPersonPricesType, "%s" given', is_object($pricesTypeConvertedPerPersonPricesItem) ? get_class($pricesTypeConvertedPerPersonPricesItem) : gettype($pricesTypeConvertedPerPersonPricesItem)), __LINE__);
            }
        }
        $this->ConvertedPerPersonPrices = $convertedPerPersonPrices;
        return $this;
    }
    /**
     * Add item to ConvertedPerPersonPrices value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedPersonPricesType $item
     * @return \traveltainment\SOAP17\StructType\PricesType
     */
    public function addToConvertedPerPersonPrices(\traveltainment\SOAP17\StructType\ConvertedPersonPricesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedPersonPricesType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedPerPersonPrices property can only contain items of \traveltainment\SOAP17\StructType\ConvertedPersonPricesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\PricesType
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
