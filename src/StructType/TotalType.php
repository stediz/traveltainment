<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalType StructType
 * @subpackage Structs
 */
class TotalType extends AbstractStructBase
{
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten bildet einen Preis samt Waehrung (sofern vorhanden) ab.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PriceType[]
     */
    public $Price;
    /**
     * The ConvertedTotalPriceList
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType[]
     */
    public $ConvertedTotalPriceList;
    /**
     * Constructor method for TotalType
     * @uses TotalType::setPrice()
     * @uses TotalType::setConvertedTotalPriceList()
     * @param \traveltainment\SOAP17\StructType\PriceType[] $price
     * @param \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType[] $convertedTotalPriceList
     */
    public function __construct(array $price = array(), array $convertedTotalPriceList = array())
    {
        $this
            ->setPrice($price)
            ->setConvertedTotalPriceList($convertedTotalPriceList);
    }
    /**
     * Get Price value
     * @return \traveltainment\SOAP17\StructType\PriceType[]|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\PriceType[] $price
     * @return \traveltainment\SOAP17\StructType\TotalType
     */
    public function setPrice(array $price = array())
    {
        foreach ($price as $totalTypePriceItem) {
            // validation for constraint: itemType
            if (!$totalTypePriceItem instanceof \traveltainment\SOAP17\StructType\PriceType) {
                throw new \InvalidArgumentException(sprintf('The Price property can only contain items of \traveltainment\SOAP17\StructType\PriceType, "%s" given', is_object($totalTypePriceItem) ? get_class($totalTypePriceItem) : gettype($totalTypePriceItem)), __LINE__);
            }
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Add item to Price value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\PriceType $item
     * @return \traveltainment\SOAP17\StructType\TotalType
     */
    public function addToPrice(\traveltainment\SOAP17\StructType\PriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\PriceType) {
            throw new \InvalidArgumentException(sprintf('The Price property can only contain items of \traveltainment\SOAP17\StructType\PriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Price[] = $item;
        return $this;
    }
    /**
     * Get ConvertedTotalPriceList value
     * @return \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType[]|null
     */
    public function getConvertedTotalPriceList()
    {
        return $this->ConvertedTotalPriceList;
    }
    /**
     * Set ConvertedTotalPriceList value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType[] $convertedTotalPriceList
     * @return \traveltainment\SOAP17\StructType\TotalType
     */
    public function setConvertedTotalPriceList(array $convertedTotalPriceList = array())
    {
        foreach ($convertedTotalPriceList as $totalTypeConvertedTotalPriceListItem) {
            // validation for constraint: itemType
            if (!$totalTypeConvertedTotalPriceListItem instanceof \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedTotalPriceList property can only contain items of \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType, "%s" given', is_object($totalTypeConvertedTotalPriceListItem) ? get_class($totalTypeConvertedTotalPriceListItem) : gettype($totalTypeConvertedTotalPriceListItem)), __LINE__);
            }
        }
        $this->ConvertedTotalPriceList = $convertedTotalPriceList;
        return $this;
    }
    /**
     * Add item to ConvertedTotalPriceList value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType $item
     * @return \traveltainment\SOAP17\StructType\TotalType
     */
    public function addToConvertedTotalPriceList(\traveltainment\SOAP17\StructType\ConvertedTotalPriceListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedTotalPriceList property can only contain items of \traveltainment\SOAP17\StructType\ConvertedTotalPriceListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedTotalPriceList[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TotalType
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
