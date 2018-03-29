<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_RegionListResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_RegionListResponse
 * @subpackage Structs
 */
class Search_Package_RegionListResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineRegionListRS
     */
    public $return;
    /**
     * Constructor method for Search_Package_RegionListResponse
     * @uses Search_Package_RegionListResponse::setReturn()
     * @param \StructType\SearchEngineRegionListRS $return
     */
    public function __construct(\StructType\SearchEngineRegionListRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineRegionListRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineRegionListRS $return
     * @return \StructType\Search_Package_RegionListResponse
     */
    public function setReturn(\StructType\SearchEngineRegionListRS $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Search_Package_RegionListResponse
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
