<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeListRQ StructType
 * @subpackage Structs
 */
class HolidayHomeListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\HolidayHomeListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \StructType\HolidayHomeSelectionType
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeListFilterType
     */
    public $Filter;
    /**
     * Constructor method for HolidayHomeListRQ
     * @uses HolidayHomeListRQ::setSearch()
     * @uses HolidayHomeListRQ::setSelection()
     * @uses HolidayHomeListRQ::setFilter()
     * @param \StructType\HolidayHomeListSearchType $search
     * @param \StructType\HolidayHomeSelectionType $selection
     * @param \StructType\HolidayHomeListFilterType $filter
     */
    public function __construct(\StructType\HolidayHomeListSearchType $search = null, \StructType\HolidayHomeSelectionType $selection = null, \StructType\HolidayHomeListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \StructType\HolidayHomeListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\HolidayHomeListSearchType $search
     * @return \StructType\HolidayHomeListRQ
     */
    public function setSearch(\StructType\HolidayHomeListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \StructType\HolidayHomeSelectionType|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \StructType\HolidayHomeSelectionType $selection
     * @return \StructType\HolidayHomeListRQ
     */
    public function setSelection(\StructType\HolidayHomeSelectionType $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \StructType\HolidayHomeListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\HolidayHomeListFilterType $filter
     * @return \StructType\HolidayHomeListRQ
     */
    public function setFilter(\StructType\HolidayHomeListFilterType $filter = null)
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
     * @return \StructType\HolidayHomeListRQ
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
