<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineCityListRQ StructType
 * @subpackage Structs
 */
class SearchEngineCityListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\CityListSearchType
     */
    public $Search;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CityListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineCityListRQ
     * @uses SearchEngineCityListRQ::setSearch()
     * @uses SearchEngineCityListRQ::setFilter()
     * @param \StructType\CityListSearchType $search
     * @param \StructType\CityListFilterType $filter
     */
    public function __construct(\StructType\CityListSearchType $search = null, \StructType\CityListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \StructType\CityListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\CityListSearchType $search
     * @return \StructType\SearchEngineCityListRQ
     */
    public function setSearch(\StructType\CityListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Filter value
     * @return \StructType\CityListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\CityListFilterType $filter
     * @return \StructType\SearchEngineCityListRQ
     */
    public function setFilter(\StructType\CityListFilterType $filter = null)
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
     * @return \StructType\SearchEngineCityListRQ
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
