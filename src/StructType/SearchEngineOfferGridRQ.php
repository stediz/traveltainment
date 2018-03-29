<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineOfferGridRQ StructType
 * @subpackage Structs
 */
class SearchEngineOfferGridRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\OfferGridSearchType
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
     * The GridGroupList
     * @var OfferGridGroupTypeEnum
     */
    public $GridGroupList;
    /**
     * Constructor method for SearchEngineOfferGridRQ
     * @uses SearchEngineOfferGridRQ::setSearch()
     * @uses SearchEngineOfferGridRQ::setSelection()
     * @uses SearchEngineOfferGridRQ::setFilter()
     * @uses SearchEngineOfferGridRQ::setGridGroupList()
     * @param \StructType\OfferGridSearchType $search
     * @param \StructType\OfferListSelectionType $selection
     * @param \StructType\OfferListFilterType $filter
     * @param OfferGridGroupTypeEnum $gridGroupList
     */
    public function __construct(\StructType\OfferGridSearchType $search = null, \StructType\OfferListSelectionType $selection = null, \StructType\OfferListFilterType $filter = null, OfferGridGroupTypeEnum $gridGroupList = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter)
            ->setGridGroupList($gridGroupList);
    }
    /**
     * Get Search value
     * @return \StructType\OfferGridSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\OfferGridSearchType $search
     * @return \StructType\SearchEngineOfferGridRQ
     */
    public function setSearch(\StructType\OfferGridSearchType $search = null)
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
     * @return \StructType\SearchEngineOfferGridRQ
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
     * @return \StructType\SearchEngineOfferGridRQ
     */
    public function setFilter(\StructType\OfferListFilterType $filter = null)
    {
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Get GridGroupList value
     * @return OfferGridGroupTypeEnum|null
     */
    public function getGridGroupList()
    {
        return $this->GridGroupList;
    }
    /**
     * Set GridGroupList value
     * @param OfferGridGroupTypeEnum $gridGroupList
     * @return \StructType\SearchEngineOfferGridRQ
     */
    public function setGridGroupList(OfferGridGroupTypeEnum $gridGroupList = null)
    {
        $this->GridGroupList = $gridGroupList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchEngineOfferGridRQ
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
