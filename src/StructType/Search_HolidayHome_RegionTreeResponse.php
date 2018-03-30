<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_RegionTreeResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_RegionTreeResponse
 * @subpackage Structs
 */
class Search_HolidayHome_RegionTreeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS
     */
    public $return;
    /**
     * Constructor method for Search_HolidayHome_RegionTreeResponse
     * @uses Search_HolidayHome_RegionTreeResponse::setReturn()
     * @param \traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS $return
     */
    public function __construct(\traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS $return
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTreeResponse
     */
    public function setReturn(\traveltainment\SOAP17\StructType\SearchEngineRegionTreeRS $return = null)
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
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTreeResponse
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
