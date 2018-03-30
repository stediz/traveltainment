<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineRegionTreeRS StructType
 * @subpackage Structs
 */
class SearchEngineRegionTreeRS extends XmlInterfaceRS
{
    /**
     * The Regions
     * @var \traveltainment\SOAP17\StructType\RegionNodeList
     */
    public $Regions;
    /**
     * Constructor method for SearchEngineRegionTreeRS
     * @uses SearchEngineRegionTreeRS::setRegions()
     * @param \traveltainment\SOAP17\StructType\RegionNodeList $regions
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionNodeList $regions = null)
    {
        $this
            ->setRegions($regions);
    }
    /**
     * Get Regions value
     * @return \traveltainment\SOAP17\StructType\RegionNodeList|null
     */
    public function getRegions()
    {
        return $this->Regions;
    }
    /**
     * Set Regions value
     * @param \traveltainment\SOAP17\StructType\RegionNodeList $regions
     * @return \traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS
     */
    public function setRegions(\traveltainment\SOAP17\StructType\RegionNodeList $regions = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS
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
