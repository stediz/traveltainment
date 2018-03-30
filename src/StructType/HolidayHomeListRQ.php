<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeListRQ StructType
 * @subpackage Structs
 */
class HolidayHomeListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\HolidayHomeListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \traveltainment\SOAP17\StructType\HolidayHomeSelectionType
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeListFilterType
     */
    public $Filter;
    /**
     * Constructor method for HolidayHomeListRQ
     * @uses HolidayHomeListRQ::setSearch()
     * @uses HolidayHomeListRQ::setSelection()
     * @uses HolidayHomeListRQ::setFilter()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListSearchType $search
     * @param \traveltainment\SOAP17\StructType\HolidayHomeSelectionType $selection
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListFilterType $filter
     */
    public function __construct(\traveltainment\SOAP17\StructType\HolidayHomeListSearchType $search = null, \traveltainment\SOAP17\StructType\HolidayHomeSelectionType $selection = null, \traveltainment\SOAP17\StructType\HolidayHomeListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListSearchType $search
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\HolidayHomeListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeSelectionType|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeSelectionType $selection
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListRQ
     */
    public function setSelection(\traveltainment\SOAP17\StructType\HolidayHomeSelectionType $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListFilterType $filter
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListRQ
     */
    public function setFilter(\traveltainment\SOAP17\StructType\HolidayHomeListFilterType $filter = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListRQ
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
