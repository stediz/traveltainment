<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeRegionListRQ StructType
 * @subpackage Structs
 */
class HolidayHomeRegionListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\HolidayHomeRegionListSearchType
     */
    public $Search;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeRegionListFilterType
     */
    public $Filter;
    /**
     * Constructor method for HolidayHomeRegionListRQ
     * @uses HolidayHomeRegionListRQ::setSearch()
     * @uses HolidayHomeRegionListRQ::setFilter()
     * @param \StructType\HolidayHomeRegionListSearchType $search
     * @param \StructType\HolidayHomeRegionListFilterType $filter
     */
    public function __construct(\StructType\HolidayHomeRegionListSearchType $search = null, \StructType\HolidayHomeRegionListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \StructType\HolidayHomeRegionListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\HolidayHomeRegionListSearchType $search
     * @return \StructType\HolidayHomeRegionListRQ
     */
    public function setSearch(\StructType\HolidayHomeRegionListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Filter value
     * @return \StructType\HolidayHomeRegionListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\HolidayHomeRegionListFilterType $filter
     * @return \StructType\HolidayHomeRegionListRQ
     */
    public function setFilter(\StructType\HolidayHomeRegionListFilterType $filter = null)
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
     * @return \StructType\HolidayHomeRegionListRQ
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
