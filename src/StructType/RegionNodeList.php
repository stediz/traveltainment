<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionNodeList StructType
 * @subpackage Structs
 */
class RegionNodeList extends AbstractStructBase
{
    /**
     * The SubRegion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RegionNode[]
     */
    public $SubRegion;
    /**
     * Constructor method for RegionNodeList
     * @uses RegionNodeList::setSubRegion()
     * @param \StructType\RegionNode[] $subRegion
     */
    public function __construct(array $subRegion = array())
    {
        $this
            ->setSubRegion($subRegion);
    }
    /**
     * Get SubRegion value
     * @return \StructType\RegionNode[]|null
     */
    public function getSubRegion()
    {
        return $this->SubRegion;
    }
    /**
     * Set SubRegion value
     * @throws \InvalidArgumentException
     * @param \StructType\RegionNode[] $subRegion
     * @return \StructType\RegionNodeList
     */
    public function setSubRegion(array $subRegion = array())
    {
        foreach ($subRegion as $regionNodeListSubRegionItem) {
            // validation for constraint: itemType
            if (!$regionNodeListSubRegionItem instanceof \StructType\RegionNode) {
                throw new \InvalidArgumentException(sprintf('The SubRegion property can only contain items of \StructType\RegionNode, "%s" given', is_object($regionNodeListSubRegionItem) ? get_class($regionNodeListSubRegionItem) : gettype($regionNodeListSubRegionItem)), __LINE__);
            }
        }
        $this->SubRegion = $subRegion;
        return $this;
    }
    /**
     * Add item to SubRegion value
     * @throws \InvalidArgumentException
     * @param \StructType\RegionNode $item
     * @return \StructType\RegionNodeList
     */
    public function addToSubRegion(\StructType\RegionNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RegionNode) {
            throw new \InvalidArgumentException(sprintf('The SubRegion property can only contain items of \StructType\RegionNode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubRegion[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RegionNodeList
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
