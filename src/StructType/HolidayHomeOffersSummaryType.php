<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOffersSummaryType StructType
 * @subpackage Structs
 */
class HolidayHomeOffersSummaryType extends AbstractStructBase
{
    /**
     * The StartDates
     * @var \StructType\StartDatesType
     */
    public $StartDates;
    /**
     * The StayDurations
     * @var \StructType\DurationListType
     */
    public $StayDurations;
    /**
     * The TourOperators
     * @var \StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * Constructor method for HolidayHomeOffersSummaryType
     * @uses HolidayHomeOffersSummaryType::setStartDates()
     * @uses HolidayHomeOffersSummaryType::setStayDurations()
     * @uses HolidayHomeOffersSummaryType::setTourOperators()
     * @param \StructType\StartDatesType $startDates
     * @param \StructType\DurationListType $stayDurations
     * @param \StructType\TourOperatorListType $tourOperators
     */
    public function __construct(\StructType\StartDatesType $startDates = null, \StructType\DurationListType $stayDurations = null, \StructType\TourOperatorListType $tourOperators = null)
    {
        $this
            ->setStartDates($startDates)
            ->setStayDurations($stayDurations)
            ->setTourOperators($tourOperators);
    }
    /**
     * Get StartDates value
     * @return \StructType\StartDatesType|null
     */
    public function getStartDates()
    {
        return $this->StartDates;
    }
    /**
     * Set StartDates value
     * @param \StructType\StartDatesType $startDates
     * @return \StructType\HolidayHomeOffersSummaryType
     */
    public function setStartDates(\StructType\StartDatesType $startDates = null)
    {
        $this->StartDates = $startDates;
        return $this;
    }
    /**
     * Get StayDurations value
     * @return \StructType\DurationListType|null
     */
    public function getStayDurations()
    {
        return $this->StayDurations;
    }
    /**
     * Set StayDurations value
     * @param \StructType\DurationListType $stayDurations
     * @return \StructType\HolidayHomeOffersSummaryType
     */
    public function setStayDurations(\StructType\DurationListType $stayDurations = null)
    {
        $this->StayDurations = $stayDurations;
        return $this;
    }
    /**
     * Get TourOperators value
     * @return \StructType\TourOperatorListType|null
     */
    public function getTourOperators()
    {
        return $this->TourOperators;
    }
    /**
     * Set TourOperators value
     * @param \StructType\TourOperatorListType $tourOperators
     * @return \StructType\HolidayHomeOffersSummaryType
     */
    public function setTourOperators(\StructType\TourOperatorListType $tourOperators = null)
    {
        $this->TourOperators = $tourOperators;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeOffersSummaryType
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
