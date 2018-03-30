<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UDFRegionsType StructType
 * @subpackage Structs
 */
class UDFRegionsType extends AbstractStructBase
{
    /**
     * The RegionGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\RegionGroupType[]
     */
    public $RegionGroup;
    /**
     * Constructor method for UDFRegionsType
     * @uses UDFRegionsType::setRegionGroup()
     * @param \traveltainment\SOAP17\StructType\RegionGroupType[] $regionGroup
     */
    public function __construct(array $regionGroup = array())
    {
        $this
            ->setRegionGroup($regionGroup);
    }
    /**
     * Get RegionGroup value
     * @return \traveltainment\SOAP17\StructType\RegionGroupType[]|null
     */
    public function getRegionGroup()
    {
        return $this->RegionGroup;
    }
    /**
     * Set RegionGroup value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\RegionGroupType[] $regionGroup
     * @return \traveltainment\SOAP17\StructType\UDFRegionsType
     */
    public function setRegionGroup(array $regionGroup = array())
    {
        foreach ($regionGroup as $uDFRegionsTypeRegionGroupItem) {
            // validation for constraint: itemType
            if (!$uDFRegionsTypeRegionGroupItem instanceof \traveltainment\SOAP17\StructType\RegionGroupType) {
                throw new \InvalidArgumentException(sprintf('The RegionGroup property can only contain items of \traveltainment\SOAP17\StructType\RegionGroupType, "%s" given', is_object($uDFRegionsTypeRegionGroupItem) ? get_class($uDFRegionsTypeRegionGroupItem) : gettype($uDFRegionsTypeRegionGroupItem)), __LINE__);
            }
        }
        $this->RegionGroup = $regionGroup;
        return $this;
    }
    /**
     * Add item to RegionGroup value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\RegionGroupType $item
     * @return \traveltainment\SOAP17\StructType\UDFRegionsType
     */
    public function addToRegionGroup(\traveltainment\SOAP17\StructType\RegionGroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\RegionGroupType) {
            throw new \InvalidArgumentException(sprintf('The RegionGroup property can only contain items of \traveltainment\SOAP17\StructType\RegionGroupType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RegionGroup[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\UDFRegionsType
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
