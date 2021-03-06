<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SummaryRegion StructType
 * @subpackage Structs
 */
class SummaryRegion extends AbstractStructBase
{
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Region[]
     */
    public $Region;
    /**
     * Constructor method for SummaryRegion
     * @uses SummaryRegion::setRegion()
     * @param \StructType\Region[] $region
     */
    public function __construct(array $region = array())
    {
        $this
            ->setRegion($region);
    }
    /**
     * Get Region value
     * @return \StructType\Region[]|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @throws \InvalidArgumentException
     * @param \StructType\Region[] $region
     * @return \StructType\SummaryRegion
     */
    public function setRegion(array $region = array())
    {
        foreach ($region as $summaryRegionRegionItem) {
            // validation for constraint: itemType
            if (!$summaryRegionRegionItem instanceof \StructType\Region) {
                throw new \InvalidArgumentException(sprintf('The Region property can only contain items of \StructType\Region, "%s" given', is_object($summaryRegionRegionItem) ? get_class($summaryRegionRegionItem) : gettype($summaryRegionRegionItem)), __LINE__);
            }
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Add item to Region value
     * @throws \InvalidArgumentException
     * @param \StructType\Region $item
     * @return \StructType\SummaryRegion
     */
    public function addToRegion(\StructType\Region $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Region) {
            throw new \InvalidArgumentException(sprintf('The Region property can only contain items of \StructType\Region, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Region[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SummaryRegion
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
