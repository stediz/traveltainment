<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Flight_CityList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Flight_CityList
 * @subpackage Structs
 */
class Search_Flight_CityList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineCityListRQ
     */
    public $request;
    /**
     * Constructor method for Search_Flight_CityList
     * @uses Search_Flight_CityList::setRequest()
     * @param \StructType\SearchEngineCityListRQ $request
     */
    public function __construct(\StructType\SearchEngineCityListRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineCityListRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineCityListRQ $request
     * @return \StructType\Search_Flight_CityList
     */
    public function setRequest(\StructType\SearchEngineCityListRQ $request = null)
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
     * @return \StructType\Search_Flight_CityList
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
