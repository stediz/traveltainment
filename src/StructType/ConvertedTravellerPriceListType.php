<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedTravellerPriceListType StructType
 * @subpackage Structs
 */
class ConvertedTravellerPriceListType extends AbstractStructBase
{
    /**
     * The ConvertedTravellerPriceBlock
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConvertedTravellerPriceBlockType[]
     */
    public $ConvertedTravellerPriceBlock;
    /**
     * Constructor method for ConvertedTravellerPriceListType
     * @uses ConvertedTravellerPriceListType::setConvertedTravellerPriceBlock()
     * @param \StructType\ConvertedTravellerPriceBlockType[] $convertedTravellerPriceBlock
     */
    public function __construct(array $convertedTravellerPriceBlock = array())
    {
        $this
            ->setConvertedTravellerPriceBlock($convertedTravellerPriceBlock);
    }
    /**
     * Get ConvertedTravellerPriceBlock value
     * @return \StructType\ConvertedTravellerPriceBlockType[]|null
     */
    public function getConvertedTravellerPriceBlock()
    {
        return $this->ConvertedTravellerPriceBlock;
    }
    /**
     * Set ConvertedTravellerPriceBlock value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedTravellerPriceBlockType[] $convertedTravellerPriceBlock
     * @return \StructType\ConvertedTravellerPriceListType
     */
    public function setConvertedTravellerPriceBlock(array $convertedTravellerPriceBlock = array())
    {
        foreach ($convertedTravellerPriceBlock as $convertedTravellerPriceListTypeConvertedTravellerPriceBlockItem) {
            // validation for constraint: itemType
            if (!$convertedTravellerPriceListTypeConvertedTravellerPriceBlockItem instanceof \StructType\ConvertedTravellerPriceBlockType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedTravellerPriceBlock property can only contain items of \StructType\ConvertedTravellerPriceBlockType, "%s" given', is_object($convertedTravellerPriceListTypeConvertedTravellerPriceBlockItem) ? get_class($convertedTravellerPriceListTypeConvertedTravellerPriceBlockItem) : gettype($convertedTravellerPriceListTypeConvertedTravellerPriceBlockItem)), __LINE__);
            }
        }
        $this->ConvertedTravellerPriceBlock = $convertedTravellerPriceBlock;
        return $this;
    }
    /**
     * Add item to ConvertedTravellerPriceBlock value
     * @throws \InvalidArgumentException
     * @param \StructType\ConvertedTravellerPriceBlockType $item
     * @return \StructType\ConvertedTravellerPriceListType
     */
    public function addToConvertedTravellerPriceBlock(\StructType\ConvertedTravellerPriceBlockType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConvertedTravellerPriceBlockType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedTravellerPriceBlock property can only contain items of \StructType\ConvertedTravellerPriceBlockType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedTravellerPriceBlock[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConvertedTravellerPriceListType
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
