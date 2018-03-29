<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineOfferListRQ StructType
 * @subpackage Structs
 */
class SearchEngineOfferListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\OfferListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \StructType\OfferListSelectionType
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineOfferListRQ
     * @uses SearchEngineOfferListRQ::setSearch()
     * @uses SearchEngineOfferListRQ::setSelection()
     * @uses SearchEngineOfferListRQ::setFilter()
     * @param \StructType\OfferListSearchType $search
     * @param \StructType\OfferListSelectionType $selection
     * @param \StructType\OfferListFilterType $filter
     */
    public function __construct(\StructType\OfferListSearchType $search = null, \StructType\OfferListSelectionType $selection = null, \StructType\OfferListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \StructType\OfferListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\OfferListSearchType $search
     * @return \StructType\SearchEngineOfferListRQ
     */
    public function setSearch(\StructType\OfferListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \StructType\OfferListSelectionType|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \StructType\OfferListSelectionType $selection
     * @return \StructType\SearchEngineOfferListRQ
     */
    public function setSelection(\StructType\OfferListSelectionType $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \StructType\OfferListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\OfferListFilterType $filter
     * @return \StructType\SearchEngineOfferListRQ
     */
    public function setFilter(\StructType\OfferListFilterType $filter = null)
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
     * @return \StructType\SearchEngineOfferListRQ
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
