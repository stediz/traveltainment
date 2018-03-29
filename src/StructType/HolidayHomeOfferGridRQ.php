<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferGridRQ StructType
 * @subpackage Structs
 */
class HolidayHomeOfferGridRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \StructType\HolidayHomeOfferGridSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \StructType\HolidayHomeOfferListSelectionType
     */
    public $Selection;
    /**
     * The GridGroupList
     * @var HolidayHomeOfferGridGroupTypeEnum
     */
    public $GridGroupList;
    /**
     * Constructor method for HolidayHomeOfferGridRQ
     * @uses HolidayHomeOfferGridRQ::setSearch()
     * @uses HolidayHomeOfferGridRQ::setSelection()
     * @uses HolidayHomeOfferGridRQ::setGridGroupList()
     * @param \StructType\HolidayHomeOfferGridSearchType $search
     * @param \StructType\HolidayHomeOfferListSelectionType $selection
     * @param HolidayHomeOfferGridGroupTypeEnum $gridGroupList
     */
    public function __construct(\StructType\HolidayHomeOfferGridSearchType $search = null, \StructType\HolidayHomeOfferListSelectionType $selection = null, HolidayHomeOfferGridGroupTypeEnum $gridGroupList = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setGridGroupList($gridGroupList);
    }
    /**
     * Get Search value
     * @return \StructType\HolidayHomeOfferGridSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\HolidayHomeOfferGridSearchType $search
     * @return \StructType\HolidayHomeOfferGridRQ
     */
    public function setSearch(\StructType\HolidayHomeOfferGridSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \StructType\HolidayHomeOfferListSelectionType|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \StructType\HolidayHomeOfferListSelectionType $selection
     * @return \StructType\HolidayHomeOfferGridRQ
     */
    public function setSelection(\StructType\HolidayHomeOfferListSelectionType $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Get GridGroupList value
     * @return HolidayHomeOfferGridGroupTypeEnum|null
     */
    public function getGridGroupList()
    {
        return $this->GridGroupList;
    }
    /**
     * Set GridGroupList value
     * @param HolidayHomeOfferGridGroupTypeEnum $gridGroupList
     * @return \StructType\HolidayHomeOfferGridRQ
     */
    public function setGridGroupList(HolidayHomeOfferGridGroupTypeEnum $gridGroupList = null)
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
     * @return \StructType\HolidayHomeOfferGridRQ
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
