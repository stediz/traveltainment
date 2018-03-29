<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComponentPriceListType StructType
 * @subpackage Structs
 */
class ComponentPriceListType extends AbstractStructBase
{
    /**
     * The ComponentPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\ComponentPriceType[]
     */
    public $ComponentPrice;
    /**
     * Constructor method for ComponentPriceListType
     * @uses ComponentPriceListType::setComponentPrice()
     * @param \StructType\ComponentPriceType[] $componentPrice
     */
    public function __construct(array $componentPrice = array())
    {
        $this
            ->setComponentPrice($componentPrice);
    }
    /**
     * Get ComponentPrice value
     * @return \StructType\ComponentPriceType[]
     */
    public function getComponentPrice()
    {
        return $this->ComponentPrice;
    }
    /**
     * Set ComponentPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ComponentPriceType[] $componentPrice
     * @return \StructType\ComponentPriceListType
     */
    public function setComponentPrice(array $componentPrice = array())
    {
        foreach ($componentPrice as $componentPriceListTypeComponentPriceItem) {
            // validation for constraint: itemType
            if (!$componentPriceListTypeComponentPriceItem instanceof \StructType\ComponentPriceType) {
                throw new \InvalidArgumentException(sprintf('The ComponentPrice property can only contain items of \StructType\ComponentPriceType, "%s" given', is_object($componentPriceListTypeComponentPriceItem) ? get_class($componentPriceListTypeComponentPriceItem) : gettype($componentPriceListTypeComponentPriceItem)), __LINE__);
            }
        }
        $this->ComponentPrice = $componentPrice;
        return $this;
    }
    /**
     * Add item to ComponentPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\ComponentPriceType $item
     * @return \StructType\ComponentPriceListType
     */
    public function addToComponentPrice(\StructType\ComponentPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ComponentPriceType) {
            throw new \InvalidArgumentException(sprintf('The ComponentPrice property can only contain items of \StructType\ComponentPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ComponentPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ComponentPriceListType
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
