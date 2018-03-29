<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeTripType StructType
 * @subpackage Structs
 */
class HolidayHomeTripType extends AbstractStructBase
{
    /**
     * The Journey
     * @var \StructType\HolidayHomeJourneyType
     */
    public $Journey;
    /**
     * The HolidayHomeSearchCriteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeSearchCriteriaType
     */
    public $HolidayHomeSearchCriteria;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeTourOperatorRequest
     */
    public $TourOperator;
    /**
     * Constructor method for HolidayHomeTripType
     * @uses HolidayHomeTripType::setJourney()
     * @uses HolidayHomeTripType::setHolidayHomeSearchCriteria()
     * @uses HolidayHomeTripType::setTourOperator()
     * @param \StructType\HolidayHomeJourneyType $journey
     * @param \StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria
     * @param \StructType\HolidayHomeTourOperatorRequest $tourOperator
     */
    public function __construct(\StructType\HolidayHomeJourneyType $journey = null, \StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria = null, \StructType\HolidayHomeTourOperatorRequest $tourOperator = null)
    {
        $this
            ->setJourney($journey)
            ->setHolidayHomeSearchCriteria($holidayHomeSearchCriteria)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get Journey value
     * @return \StructType\HolidayHomeJourneyType|null
     */
    public function getJourney()
    {
        return $this->Journey;
    }
    /**
     * Set Journey value
     * @param \StructType\HolidayHomeJourneyType $journey
     * @return \StructType\HolidayHomeTripType
     */
    public function setJourney(\StructType\HolidayHomeJourneyType $journey = null)
    {
        $this->Journey = $journey;
        return $this;
    }
    /**
     * Get HolidayHomeSearchCriteria value
     * @return \StructType\HolidayHomeSearchCriteriaType|null
     */
    public function getHolidayHomeSearchCriteria()
    {
        return $this->HolidayHomeSearchCriteria;
    }
    /**
     * Set HolidayHomeSearchCriteria value
     * @param \StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria
     * @return \StructType\HolidayHomeTripType
     */
    public function setHolidayHomeSearchCriteria(\StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria = null)
    {
        $this->HolidayHomeSearchCriteria = $holidayHomeSearchCriteria;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \StructType\HolidayHomeTourOperatorRequest|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \StructType\HolidayHomeTourOperatorRequest $tourOperator
     * @return \StructType\HolidayHomeTripType
     */
    public function setTourOperator(\StructType\HolidayHomeTourOperatorRequest $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeTripType
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
