<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferGridRQ StructType
 * @subpackage Structs
 */
class HolidayHomeOfferGridRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferGridSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType
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
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridSearchType $search
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection
     * @param HolidayHomeOfferGridGroupTypeEnum $gridGroupList
     */
    public function __construct(\traveltainment\SOAP17\StructType\HolidayHomeOfferGridSearchType $search = null, \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection = null, HolidayHomeOfferGridGroupTypeEnum $gridGroupList = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection)
            ->setGridGroupList($gridGroupList);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridSearchType $search
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\HolidayHomeOfferGridSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get Selection value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRQ
     */
    public function setSelection(\traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRQ
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRQ
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
