<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceInformationType StructType
 * @subpackage Structs
 */
class PriceInformationType extends AbstractStructBase
{
    /**
     * The OriginalPrice
     * @var \traveltainment\SOAP17\StructType\PriceType
     */
    public $OriginalPrice;
    /**
     * The ConvertedPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedPriceType[]
     */
    public $ConvertedPrice;
    /**
     * The TotalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PriceType
     */
    public $TotalPrice;
    /**
     * The ConvertedTotalPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType
     */
    public $ConvertedTotalPriceList;
    /**
     * The TravellerPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravellerPriceListType
     */
    public $TravellerPriceList;
    /**
     * The ConvertedTravellerPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedTravellerPriceListType
     */
    public $ConvertedTravellerPriceList;
    /**
     * The ComponentPriceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ComponentPriceListType
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
     * @param \traveltainment\SOAP17\StructType\PriceType $originalPrice
     * @param \traveltainment\SOAP17\StructType\ConvertedPriceType[] $convertedPrice
     * @param \traveltainment\SOAP17\StructType\PriceType $totalPrice
     * @param \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType $convertedTotalPriceList
     * @param \traveltainment\SOAP17\StructType\TravellerPriceListType $travellerPriceList
     * @param \traveltainment\SOAP17\StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList
     * @param \traveltainment\SOAP17\StructType\ComponentPriceListType $componentPriceList
     */
    public function __construct(\traveltainment\SOAP17\StructType\PriceType $originalPrice = null, array $convertedPrice = array(), \traveltainment\SOAP17\StructType\PriceType $totalPrice = null, \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType $convertedTotalPriceList = null, \traveltainment\SOAP17\StructType\TravellerPriceListType $travellerPriceList = null, \traveltainment\SOAP17\StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList = null, \traveltainment\SOAP17\StructType\ComponentPriceListType $componentPriceList = null)
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
     * @return \traveltainment\SOAP17\StructType\PriceType|null
     */
    public function getOriginalPrice()
    {
        return $this->OriginalPrice;
    }
    /**
     * Set OriginalPrice value
     * @param \traveltainment\SOAP17\StructType\PriceType $originalPrice
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setOriginalPrice(\traveltainment\SOAP17\StructType\PriceType $originalPrice = null)
    {
        $this->OriginalPrice = $originalPrice;
        return $this;
    }
    /**
     * Get ConvertedPrice value
     * @return \traveltainment\SOAP17\StructType\ConvertedPriceType[]|null
     */
    public function getConvertedPrice()
    {
        return $this->ConvertedPrice;
    }
    /**
     * Set ConvertedPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedPriceType[] $convertedPrice
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setConvertedPrice(array $convertedPrice = array())
    {
        foreach ($convertedPrice as $priceInformationTypeConvertedPriceItem) {
            // validation for constraint: itemType
            if (!$priceInformationTypeConvertedPriceItem instanceof \traveltainment\SOAP17\StructType\ConvertedPriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedPriceType, "%s" given', is_object($priceInformationTypeConvertedPriceItem) ? get_class($priceInformationTypeConvertedPriceItem) : gettype($priceInformationTypeConvertedPriceItem)), __LINE__);
            }
        }
        $this->ConvertedPrice = $convertedPrice;
        return $this;
    }
    /**
     * Add item to ConvertedPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedPriceType $item
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function addToConvertedPrice(\traveltainment\SOAP17\StructType\ConvertedPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedPriceType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedPrice[] = $item;
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return \traveltainment\SOAP17\StructType\PriceType|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \traveltainment\SOAP17\StructType\PriceType $totalPrice
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setTotalPrice(\traveltainment\SOAP17\StructType\PriceType $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get ConvertedTotalPriceList value
     * @return \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType|null
     */
    public function getConvertedTotalPriceList()
    {
        return $this->ConvertedTotalPriceList;
    }
    /**
     * Set ConvertedTotalPriceList value
     * @param \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType $convertedTotalPriceList
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setConvertedTotalPriceList(\traveltainment\SOAP17\StructType\ConvertedTotalPriceListType $convertedTotalPriceList = null)
    {
        $this->ConvertedTotalPriceList = $convertedTotalPriceList;
        return $this;
    }
    /**
     * Get TravellerPriceList value
     * @return \traveltainment\SOAP17\StructType\TravellerPriceListType|null
     */
    public function getTravellerPriceList()
    {
        return $this->TravellerPriceList;
    }
    /**
     * Set TravellerPriceList value
     * @param \traveltainment\SOAP17\StructType\TravellerPriceListType $travellerPriceList
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setTravellerPriceList(\traveltainment\SOAP17\StructType\TravellerPriceListType $travellerPriceList = null)
    {
        $this->TravellerPriceList = $travellerPriceList;
        return $this;
    }
    /**
     * Get ConvertedTravellerPriceList value
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceListType|null
     */
    public function getConvertedTravellerPriceList()
    {
        return $this->ConvertedTravellerPriceList;
    }
    /**
     * Set ConvertedTravellerPriceList value
     * @param \traveltainment\SOAP17\StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setConvertedTravellerPriceList(\traveltainment\SOAP17\StructType\ConvertedTravellerPriceListType $convertedTravellerPriceList = null)
    {
        $this->ConvertedTravellerPriceList = $convertedTravellerPriceList;
        return $this;
    }
    /**
     * Get ComponentPriceList value
     * @return \traveltainment\SOAP17\StructType\ComponentPriceListType|null
     */
    public function getComponentPriceList()
    {
        return $this->ComponentPriceList;
    }
    /**
     * Set ComponentPriceList value
     * @param \traveltainment\SOAP17\StructType\ComponentPriceListType $componentPriceList
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public function setComponentPriceList(\traveltainment\SOAP17\StructType\ComponentPriceListType $componentPriceList = null)
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
     * @return \traveltainment\SOAP17\StructType\PriceInformationType
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
