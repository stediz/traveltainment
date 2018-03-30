<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferListRQ StructType
 * @subpackage Structs
 */
class HolidayHomeOfferListRQ extends XmlInterfaceRQ
{
    /**
     * The Search
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType
     */
    public $Search;
    /**
     * The Selection
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType
     */
    public $Selection;
    /**
     * Constructor method for HolidayHomeOfferListRQ
     * @uses HolidayHomeOfferListRQ::setSearch()
     * @uses HolidayHomeOfferListRQ::setSelection()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType $search
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection
     */
    public function __construct(\traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType $search = null, \traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection = null)
    {
        $this
            ->setSearch($search)
            ->setSelection($selection);
    }
    /**
     * Get Search value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType $search
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRQ
     */
    public function setSearch(\traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType $search = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRQ
     */
    public function setSelection(\traveltainment\SOAP17\StructType\HolidayHomeOfferListSelectionType $selection = null)
    {
        $this->Selection = $selection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRQ
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
