<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineRegionListRQ StructType
 * @subpackage Structs
 */
class SearchEngineRegionListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\RegionListSearchType
     */
    public $Search;
    /**
     * The Selection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Selection
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineRegionListRQ
     * @uses SearchEngineRegionListRQ::setSearch()
     * @uses SearchEngineRegionListRQ::setSelection()
     * @uses SearchEngineRegionListRQ::setFilter()
     * @param \StructType\RegionListSearchType $search
     * @param \StructType\Selection $selection
     * @param \StructType\RegionListFilterType $filter
     */
    public function __construct(\StructType\RegionListSearchType $search = null, \StructType\Selection $selection = null, \StructType\RegionListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \StructType\RegionListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\RegionListSearchType $search
     * @return \StructType\SearchEngineRegionListRQ
     */
    public function setSearch(\StructType\RegionListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \StructType\Selection|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \StructType\Selection $selection
     * @return \StructType\SearchEngineRegionListRQ
     */
    public function setSelection(\StructType\Selection $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \StructType\RegionListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\RegionListFilterType $filter
     * @return \StructType\SearchEngineRegionListRQ
     */
    public function setFilter(\StructType\RegionListFilterType $filter = null)
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
     * @return \StructType\SearchEngineRegionListRQ
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
