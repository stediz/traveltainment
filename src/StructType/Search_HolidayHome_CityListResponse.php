<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_CityListResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_CityListResponse
 * @subpackage Structs
 */
class Search_HolidayHome_CityListResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SearchEngineCityListRS
     */
    public $return;
    /**
     * Constructor method for Search_HolidayHome_CityListResponse
     * @uses Search_HolidayHome_CityListResponse::setReturn()
     * @param \traveltainment\SOAP17\StructType\SearchEngineCityListRS $return
     */
    public function __construct(\traveltainment\SOAP17\StructType\SearchEngineCityListRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \traveltainment\SOAP17\StructType\SearchEngineCityListRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \traveltainment\SOAP17\StructType\SearchEngineCityListRS $return
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_CityListResponse
     */
    public function setReturn(\traveltainment\SOAP17\StructType\SearchEngineCityListRS $return = null)
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
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_CityListResponse
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
