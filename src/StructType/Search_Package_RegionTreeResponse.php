<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_RegionTreeResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_RegionTreeResponse
 * @subpackage Structs
 */
class Search_Package_RegionTreeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineRegionTreeRS
     */
    public $return;
    /**
     * Constructor method for Search_Package_RegionTreeResponse
     * @uses Search_Package_RegionTreeResponse::setReturn()
     * @param \StructType\SearchEngineRegionTreeRS $return
     */
    public function __construct(\StructType\SearchEngineRegionTreeRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineRegionTreeRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineRegionTreeRS $return
     * @return \StructType\Search_Package_RegionTreeResponse
     */
    public function setReturn(\StructType\SearchEngineRegionTreeRS $return = null)
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
     * @return \StructType\Search_Package_RegionTreeResponse
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
