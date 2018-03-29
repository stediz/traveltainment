<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Flight_RegionList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Flight_RegionList
 * @subpackage Structs
 */
class Search_Flight_RegionList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineRegionListRQ
     */
    public $request;
    /**
     * Constructor method for Search_Flight_RegionList
     * @uses Search_Flight_RegionList::setRequest()
     * @param \StructType\SearchEngineRegionListRQ $request
     */
    public function __construct(\StructType\SearchEngineRegionListRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineRegionListRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineRegionListRQ $request
     * @return \StructType\Search_Flight_RegionList
     */
    public function setRequest(\StructType\SearchEngineRegionListRQ $request = null)
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
     * @return \StructType\Search_Flight_RegionList
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
