<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineOfferListRQ StructType
 * @subpackage Structs
 */
class SearchEngineOfferListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\OfferListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \traveltainment\SOAP17\StructType\OfferListSelectionType
     */
    public $Selection;
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OfferListFilterType
     */
    public $Filter;
    /**
     * Constructor method for SearchEngineOfferListRQ
     * @uses SearchEngineOfferListRQ::setSearch()
     * @uses SearchEngineOfferListRQ::setSelection()
     * @uses SearchEngineOfferListRQ::setFilter()
     * @param \traveltainment\SOAP17\StructType\OfferListSearchType $search
     * @param \traveltainment\SOAP17\StructType\OfferListSelectionType $selection
     * @param \traveltainment\SOAP17\StructType\OfferListFilterType $filter
     */
    public function __construct(\traveltainment\SOAP17\StructType\OfferListSearchType $search = null, \traveltainment\SOAP17\StructType\OfferListSelectionType $selection = null, \traveltainment\SOAP17\StructType\OfferListFilterType $filter = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\OfferListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\OfferListSearchType $search
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferListRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\OfferListSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \traveltainment\SOAP17\StructType\OfferListSelectionType|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \traveltainment\SOAP17\StructType\OfferListSelectionType $selection
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferListRQ
     */
    public function setSelection(\traveltainment\SOAP17\StructType\OfferListSelectionType $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get Filter value
     * @return \traveltainment\SOAP17\StructType\OfferListFilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \traveltainment\SOAP17\StructType\OfferListFilterType $filter
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferListRQ
     */
    public function setFilter(\traveltainment\SOAP17\StructType\OfferListFilterType $filter = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferListRQ
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
