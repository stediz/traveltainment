<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineOfferGridRQ StructType
 * @subpackage Structs
 */
class SearchEngineOfferGridRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\OfferGridSearchType
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
     * @param \traveltainment\SOAP17\StructType\OfferGridSearchType $search
     * @param \traveltainment\SOAP17\StructType\OfferListSelectionType $selection
     * @param \traveltainment\SOAP17\StructType\OfferListFilterType $filter
     * @param OfferGridGroupTypeEnum $gridGroupList
     */
    public function __construct(\traveltainment\SOAP17\StructType\OfferGridSearchType $search = null, \traveltainment\SOAP17\StructType\OfferListSelectionType $selection = null, \traveltainment\SOAP17\StructType\OfferListFilterType $filter = null, OfferGridGroupTypeEnum $gridGroupList = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setFilter($filter)
            ->setGridGroupList($gridGroupList);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\OfferGridSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\OfferGridSearchType $search
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\OfferGridSearchType $search = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ
     */
    public function setFilter(\traveltainment\SOAP17\StructType\OfferListFilterType $filter = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ
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
