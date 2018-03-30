<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedPersonPricesType StructType
 * @subpackage Structs
 */
class ConvertedPersonPricesType extends AbstractStructBase
{
    /**
     * The ConvertedPersonPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\ConvertedPersonPriceType[]
     */
    public $ConvertedPersonPrice;
    /**
     * Constructor method for ConvertedPersonPricesType
     * @uses ConvertedPersonPricesType::setConvertedPersonPrice()
     * @param \traveltainment\SOAP17\StructType\ConvertedPersonPriceType[] $convertedPersonPrice
     */
    public function __construct(array $convertedPersonPrice = array())
    {
        $this
            ->setConvertedPersonPrice($convertedPersonPrice);
    }
    /**
     * Get ConvertedPersonPrice value
     * @return \traveltainment\SOAP17\StructType\ConvertedPersonPriceType[]|null
     */
    public function getConvertedPersonPrice()
    {
        return $this->ConvertedPersonPrice;
    }
    /**
     * Set ConvertedPersonPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedPersonPriceType[] $convertedPersonPrice
     * @return \traveltainment\SOAP17\StructType\ConvertedPersonPricesType
     */
    public function setConvertedPersonPrice(array $convertedPersonPrice = array())
    {
        foreach ($convertedPersonPrice as $convertedPersonPricesTypeConvertedPersonPriceItem) {
            // validation for constraint: itemType
            if (!$convertedPersonPricesTypeConvertedPersonPriceItem instanceof \traveltainment\SOAP17\StructType\ConvertedPersonPriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedPersonPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedPersonPriceType, "%s" given', is_object($convertedPersonPricesTypeConvertedPersonPriceItem) ? get_class($convertedPersonPricesTypeConvertedPersonPriceItem) : gettype($convertedPersonPricesTypeConvertedPersonPriceItem)), __LINE__);
            }
        }
        $this->ConvertedPersonPrice = $convertedPersonPrice;
        return $this;
    }
    /**
     * Add item to ConvertedPersonPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedPersonPriceType $item
     * @return \traveltainment\SOAP17\StructType\ConvertedPersonPricesType
     */
    public function addToConvertedPersonPrice(\traveltainment\SOAP17\StructType\ConvertedPersonPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedPersonPriceType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedPersonPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedPersonPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedPersonPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ConvertedPersonPricesType
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
