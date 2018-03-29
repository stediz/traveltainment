<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceInformationType StructType
 * @subpackage Structs
 */
class PriceInformationType extends AbstractStructBase
{
    /**
     * The OriginalPrice
     * @var \StructType\PriceType
     */
    public $OriginalPrice;
    /**
     * The ConvertedPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConvertedPriceType[]
     */
    public $ConvertedPrice;
    /**
     * The TotalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceType
     */
    public $TotalPrice;
    /**
     * The ConvertedTotalPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ConvertedTotalPriceListType
     */
    public $ConvertedTotalPriceList;
    /**
     * The TravellerPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravellerPriceListType
     */
    public $TravellerPriceList;
    /**
     * The ConvertedTravellerPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ConvertedTravellerPriceListType
     */
    public $ConvertedTravellerPriceList;
    /**
     * The ComponentPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ComponentPriceListType
     */
    public $ComponentPriceList;
    /**
     * Constructor method for PriceInformationType
     * @uses PriceInformationType::setOriginalPrice()
     * @uses PriceInformationType::setConvertedPrice()
     * @uses PriceInformationType::setTotalPrice()
     * @uses PriceInformationType::setConvertedTotalPriceList()
     * @uses PriceInformationType::setTravellerPriceList()
     * @uses PriceInformationType::setConvertedTravellerPriceList()
     * @uses PriceInformationType::setComponentPriceList()
     * @param \StructType\PriceType $originalPrice
     * @param \StructType\ConvertedPriceType[] $convertedPrice
     * @param \StructType\PriceType $totalPrice
     * @param \StructType\ConvertedTotalPriceListType $convertedTotalPriceList
     * @param \StructType\TravellerPriceListType $travellerPriceList
     * @param \StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList
     * @param \StructType\ComponentPriceListType $componentPriceList
     */
    public function __construct(\StructType\PriceType $originalPrice = null, array $convertedPrice = array(), \StructType\PriceType $totalPrice = null, \StructType\ConvertedTotalPriceListType $convertedTotalPriceList = null, \StructType\TravellerPriceListType $travellerPriceList = null, \StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList = null, \StructType\ComponentPriceListType $componentPriceList = null)
    {
        $this
            ->setOriginalPrice($originalPrice)
            ->setConvertedPrice($convertedPrice)
            ->setTotalPrice($totalPrice)
            ->setConvertedTotalPriceList($convertedTotalPriceList)
            ->setTravellerPriceList($travellerPriceList)
            ->setConvertedTravellerPriceList($convertedTravellerPriceList)
            ->setComponentPriceList($componentPriceList);
    }
    /**
     * Get OriginalPrice value
     * @return \StructType\PriceType|null
     */
    public function getOriginalPrice()
    {
        return $this->OriginalPrice;
    }
    /**
     * Set OriginalPrice value
     * @param \StructType\PriceType $originalPrice
     * @return \StructType\PriceInformationType
     */
    public function setOriginalPrice(\StructType\PriceType $originalPrice = null)
    {
        $this->OriginalPrice = $originalPrice;
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
     * @return \StructType\PriceInformationType
     */
    public function setConvertedPrice(array $convertedPrice = array())
    {
        foreach ($convertedPrice as $priceInformationTypeConvertedPriceItem) {
            // validation for constraint: itemType
            if (!$priceInformationTypeConvertedPriceItem instanceof \StructType\ConvertedPriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedPrice property can only contain items of \StructType\ConvertedPriceType, "%s" given', is_object($priceInformationTypeConvertedPriceItem) ? get_class($priceInformationTypeConvertedPriceItem) : gettype($priceInformationTypeConvertedPriceItem)), __LINE__);
            }
        }
        $this->ConvertedPrice = $convertedPrice;
        return $this;
    }
    /**
     * Add item to ConvertedPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedPriceType $item
     * @return \StructType\PriceInformationType
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
     * Get TotalPrice value
     * @return \StructType\PriceType|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \StructType\PriceType $totalPrice
     * @return \StructType\PriceInformationType
     */
    public function setTotalPrice(\StructType\PriceType $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get ConvertedTotalPriceList value
     * @return \StructType\ConvertedTotalPriceListType|null
     */
    public function getConvertedTotalPriceList()
    {
        return $this->ConvertedTotalPriceList;
    }
    /**
     * Set ConvertedTotalPriceList value
     * @param \StructType\ConvertedTotalPriceListType $convertedTotalPriceList
     * @return \StructType\PriceInformationType
     */
    public function setConvertedTotalPriceList(\StructType\ConvertedTotalPriceListType $convertedTotalPriceList = null)
    {
        $this->ConvertedTotalPriceList = $convertedTotalPriceList;
        return $this;
    }
    /**
     * Get TravellerPriceList value
     * @return \StructType\TravellerPriceListType|null
     */
    public function getTravellerPriceList()
    {
        return $this->TravellerPriceList;
    }
    /**
     * Set TravellerPriceList value
     * @param \StructType\TravellerPriceListType $travellerPriceList
     * @return \StructType\PriceInformationType
     */
    public function setTravellerPriceList(\StructType\TravellerPriceListType $travellerPriceList = null)
    {
        $this->TravellerPriceList = $travellerPriceList;
        return $this;
    }
    /**
     * Get ConvertedTravellerPriceList value
     * @return \StructType\ConvertedTravellerPriceListType|null
     */
    public function getConvertedTravellerPriceList()
    {
        return $this->ConvertedTravellerPriceList;
    }
    /**
     * Set ConvertedTravellerPriceList value
     * @param \StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList
     * @return \StructType\PriceInformationType
     */
    public function setConvertedTravellerPriceList(\StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList = null)
    {
        $this->ConvertedTravellerPriceList = $convertedTravellerPriceList;
        return $this;
    }
    /**
     * Get ComponentPriceList value
     * @return \StructType\ComponentPriceListType|null
     */
    public function getComponentPriceList()
    {
        return $this->ComponentPriceList;
    }
    /**
     * Set ComponentPriceList value
     * @param \StructType\ComponentPriceListType $componentPriceList
     * @return \StructType\PriceInformationType
     */
    public function setComponentPriceList(\StructType\ComponentPriceListType $componentPriceList = null)
    {
        $this->ComponentPriceList = $componentPriceList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PriceInformationType
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
