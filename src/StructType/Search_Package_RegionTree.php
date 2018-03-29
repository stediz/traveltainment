<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_RegionTree StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_RegionTree
 * @subpackage Structs
 */
class Search_Package_RegionTree extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineRegionTreeRQ
     */
    public $request;
    /**
     * Constructor method for Search_Package_RegionTree
     * @uses Search_Package_RegionTree::setRequest()
     * @param \StructType\SearchEngineRegionTreeRQ $request
     */
    public function __construct(\StructType\SearchEngineRegionTreeRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineRegionTreeRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineRegionTreeRQ $request
     * @return \StructType\Search_Package_RegionTree
     */
    public function setRequest(\StructType\SearchEngineRegionTreeRQ $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Search_Package_RegionTree
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
