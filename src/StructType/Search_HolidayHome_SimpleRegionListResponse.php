<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_SimpleRegionListResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_SimpleRegionListResponse
 * @subpackage Structs
 */
class Search_HolidayHome_SimpleRegionListResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineSimpleRegionListRS
     */
    public $return;
    /**
     * Constructor method for Search_HolidayHome_SimpleRegionListResponse
     * @uses Search_HolidayHome_SimpleRegionListResponse::setReturn()
     * @param \StructType\SearchEngineSimpleRegionListRS $return
     */
    public function __construct(\StructType\SearchEngineSimpleRegionListRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineSimpleRegionListRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineSimpleRegionListRS $return
     * @return \StructType\Search_HolidayHome_SimpleRegionListResponse
     */
    public function setReturn(\StructType\SearchEngineSimpleRegionListRS $return = null)
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
     * @return \StructType\Search_HolidayHome_SimpleRegionListResponse
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
