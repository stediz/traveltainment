<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineRegionTreeRS StructType
 * @subpackage Structs
 */
class SearchEngineRegionTreeRS extends XmlInterfaceRS
{
    /**
     * The Regions
     * @var \StructType\RegionNodeList
     */
    public $Regions;
    /**
     * Constructor method for SearchEngineRegionTreeRS
     * @uses SearchEngineRegionTreeRS::setRegions()
     * @param \StructType\RegionNodeList $regions
     */
    public function __construct(\StructType\RegionNodeList $regions = null)
    {
        $this
            ->setRegions($regions);
    }
    /**
     * Get Regions value
     * @return \StructType\RegionNodeList|null
     */
    public function getRegions()
    {
        return $this->Regions;
    }
    /**
     * Set Regions value
     * @param \StructType\RegionNodeList $regions
     * @return \StructType\SearchEngineRegionTreeRS
     */
    public function setRegions(\StructType\RegionNodeList $regions = null)
    {
        $this->Regions = $regions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchEngineRegionTreeRS
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
