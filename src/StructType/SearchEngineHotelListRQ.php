<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineHotelListRQ StructType
 * @subpackage Structs
 */
class SearchEngineHotelListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\HotelListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \StructType\Selection
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineHotelListRQ
     * @uses SearchEngineHotelListRQ::setSearch()
     * @uses SearchEngineHotelListRQ::setSelection()
     * @uses SearchEngineHotelListRQ::setFilter()
     * @param \StructType\HotelListSearchType $search
     * @param \StructType\Selection $selection
     * @param \StructType\HotelListFilterType $filter
     */
    public function __construct(\StructType\HotelListSearchType $search = null, \StructType\Selection $selection = null, \StructType\HotelListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \StructType\HotelListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\HotelListSearchType $search
     * @return \StructType\SearchEngineHotelListRQ
     */
    public function setSearch(\StructType\HotelListSearchType $search = null)
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
     * @return \StructType\SearchEngineHotelListRQ
     */
    public function setSelection(\StructType\Selection $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \StructType\HotelListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\HotelListFilterType $filter
     * @return \StructType\SearchEngineHotelListRQ
     */
    public function setFilter(\StructType\HotelListFilterType $filter = null)
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
     * @return \StructType\SearchEngineHotelListRQ
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
