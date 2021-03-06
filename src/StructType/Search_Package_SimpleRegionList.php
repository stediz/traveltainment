<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_SimpleRegionList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_SimpleRegionList
 * @subpackage Structs
 */
class Search_Package_SimpleRegionList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineSimpleRegionListRQ
     */
    public $request;
    /**
     * Constructor method for Search_Package_SimpleRegionList
     * @uses Search_Package_SimpleRegionList::setRequest()
     * @param \StructType\SearchEngineSimpleRegionListRQ $request
     */
    public function __construct(\StructType\SearchEngineSimpleRegionListRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineSimpleRegionListRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineSimpleRegionListRQ $request
     * @return \StructType\Search_Package_SimpleRegionList
     */
    public function setRequest(\StructType\SearchEngineSimpleRegionListRQ $request = null)
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
     * @return \StructType\Search_Package_SimpleRegionList
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
