<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOffersSummaryType StructType
 * @subpackage Structs
 */
class HolidayHomeOffersSummaryType extends AbstractStructBase
{
    /**
     * The StartDates
     * @var \traveltainment\SOAP17\StructType\StartDatesType
     */
    public $StartDates;
    /**
     * The StayDurations
     * @var \traveltainment\SOAP17\StructType\DurationListType
     */
    public $StayDurations;
    /**
     * The TourOperators
     * @var \traveltainment\SOAP17\StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * Constructor method for HolidayHomeOffersSummaryType
     * @uses HolidayHomeOffersSummaryType::setStartDates()
     * @uses HolidayHomeOffersSummaryType::setStayDurations()
     * @uses HolidayHomeOffersSummaryType::setTourOperators()
     * @param \traveltainment\SOAP17\StructType\StartDatesType $startDates
     * @param \traveltainment\SOAP17\StructType\DurationListType $stayDurations
     * @param \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators
     */
    public function __construct(\traveltainment\SOAP17\StructType\StartDatesType $startDates = null, \traveltainment\SOAP17\StructType\DurationListType $stayDurations = null, \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null)
    {
        $this
            ->setStartDates($startDates)
            ->setStayDurations($stayDurations)
            ->setTourOperators($tourOperators);
    }
    /**
     * Get StartDates value
     * @return \traveltainment\SOAP17\StructType\StartDatesType|null
     */
    public function getStartDates()
    {
        return $this->StartDates;
    }
    /**
     * Set StartDates value
     * @param \traveltainment\SOAP17\StructType\StartDatesType $startDates
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType
     */
    public function setStartDates(\traveltainment\SOAP17\StructType\StartDatesType $startDates = null)
    {
        $this->StartDates = $startDates;
        return $this;
    }
    /**
     * Get StayDurations value
     * @return \traveltainment\SOAP17\StructType\DurationListType|null
     */
    public function getStayDurations()
    {
        return $this->StayDurations;
    }
    /**
     * Set StayDurations value
     * @param \traveltainment\SOAP17\StructType\DurationListType $stayDurations
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType
     */
    public function setStayDurations(\traveltainment\SOAP17\StructType\DurationListType $stayDurations = null)
    {
        $this->StayDurations = $stayDurations;
        return $this;
    }
    /**
     * Get TourOperators value
     * @return \traveltainment\SOAP17\StructType\TourOperatorListType|null
     */
    public function getTourOperators()
    {
        return $this->TourOperators;
    }
    /**
     * Set TourOperators value
     * @param \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType
     */
    public function setTourOperators(\traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType
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
