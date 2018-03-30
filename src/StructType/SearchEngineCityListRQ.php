<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineCityListRQ StructType
 * @subpackage Structs
 */
class SearchEngineCityListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\CityListSearchType
     */
    public $Search;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CityListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineCityListRQ
     * @uses SearchEngineCityListRQ::setSearch()
     * @uses SearchEngineCityListRQ::setFilter()
     * @param \traveltainment\SOAP17\StructType\CityListSearchType $search
     * @param \traveltainment\SOAP17\StructType\CityListFilterType $filter
     */
    public function __construct(\traveltainment\SOAP17\StructType\CityListSearchType $search = null, \traveltainment\SOAP17\StructType\CityListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\CityListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\CityListSearchType $search
     * @return \traveltainment\SOAP17\StructType\SearchEngineCityListRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\CityListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Filter value
     * @return \traveltainment\SOAP17\StructType\CityListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \traveltainment\SOAP17\StructType\CityListFilterType $filter
     * @return \traveltainment\SOAP17\StructType\SearchEngineCityListRQ
     */
    public function setFilter(\traveltainment\SOAP17\StructType\CityListFilterType $filter = null)
    {
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SearchEngineCityListRQ
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
