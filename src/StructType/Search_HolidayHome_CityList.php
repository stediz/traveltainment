<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_CityList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_CityList
 * @subpackage Structs
 */
class Search_HolidayHome_CityList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SearchEngineCityListRQ
     */
    public $request;
    /**
     * Constructor method for Search_HolidayHome_CityList
     * @uses Search_HolidayHome_CityList::setRequest()
     * @param \traveltainment\SOAP17\StructType\SearchEngineCityListRQ $request
     */
    public function __construct(\traveltainment\SOAP17\StructType\SearchEngineCityListRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \traveltainment\SOAP17\StructType\SearchEngineCityListRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \traveltainment\SOAP17\StructType\SearchEngineCityListRQ $request
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_CityList
     */
    public function setRequest(\traveltainment\SOAP17\StructType\SearchEngineCityListRQ $request = null)
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
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_CityList
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
