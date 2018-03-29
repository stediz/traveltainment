<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomePriceInformationType StructType
 * @subpackage Structs
 */
class HolidayHomePriceInformationType extends AbstractStructBase
{
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
     * Constructor method for HolidayHomePriceInformationType
     * @uses HolidayHomePriceInformationType::setTotalPrice()
     * @uses HolidayHomePriceInformationType::setConvertedTotalPriceList()
     * @param \StructType\PriceType $totalPrice
     * @param \StructType\ConvertedTotalPriceListType $convertedTotalPriceList
     */
    public function __construct(\StructType\PriceType $totalPrice = null, \StructType\ConvertedTotalPriceListType $convertedTotalPriceList = null)
    {
        $this
            ->setTotalPrice($totalPrice)
            ->setConvertedTotalPriceList($convertedTotalPriceList);
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
     * @return \StructType\HolidayHomePriceInformationType
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
     * @return \StructType\HolidayHomePriceInformationType
     */
    public function setConvertedTotalPriceList(\StructType\ConvertedTotalPriceListType $convertedTotalPriceList = null)
    {
        $this->ConvertedTotalPriceList = $convertedTotalPriceList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomePriceInformationType
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
