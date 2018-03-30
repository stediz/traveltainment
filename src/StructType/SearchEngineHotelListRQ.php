<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineHotelListRQ StructType
 * @subpackage Structs
 */
class SearchEngineHotelListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\HotelListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \traveltainment\SOAP17\StructType\Selection
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineHotelListRQ
     * @uses SearchEngineHotelListRQ::setSearch()
     * @uses SearchEngineHotelListRQ::setSelection()
     * @uses SearchEngineHotelListRQ::setFilter()
     * @param \traveltainment\SOAP17\StructType\HotelListSearchType $search
     * @param \traveltainment\SOAP17\StructType\Selection $selection
     * @param \traveltainment\SOAP17\StructType\HotelListFilterType $filter
     */
    public function __construct(\traveltainment\SOAP17\StructType\HotelListSearchType $search = null, \traveltainment\SOAP17\StructType\Selection $selection = null, \traveltainment\SOAP17\StructType\HotelListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\HotelListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\HotelListSearchType $search
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\HotelListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \traveltainment\SOAP17\StructType\Selection|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \traveltainment\SOAP17\StructType\Selection $selection
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRQ
     */
    public function setSelection(\traveltainment\SOAP17\StructType\Selection $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \traveltainment\SOAP17\StructType\HotelListFilterType $filter
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRQ
     */
    public function setFilter(\traveltainment\SOAP17\StructType\HotelListFilterType $filter = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRQ
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
