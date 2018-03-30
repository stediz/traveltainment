<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeTripType StructType
 * @subpackage Structs
 */
class HolidayHomeTripType extends AbstractStructBase
{
    /**
     * The Journey
     * @var \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
     */
    public $Journey;
    /**
     * The HolidayHomeSearchCriteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeSearchCriteriaType
     */
    public $HolidayHomeSearchCriteria;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
     */
    public $TourOperator;
    /**
     * Constructor method for HolidayHomeTripType
     * @uses HolidayHomeTripType::setJourney()
     * @uses HolidayHomeTripType::setHolidayHomeSearchCriteria()
     * @uses HolidayHomeTripType::setTourOperator()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeJourneyType $journey
     * @param \traveltainment\SOAP17\StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria
     * @param \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest $tourOperator
     */
    public function __construct(\traveltainment\SOAP17\StructType\HolidayHomeJourneyType $journey = null, \traveltainment\SOAP17\StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria = null, \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest $tourOperator = null)
    {
        $this
            ->setJourney($journey)
            ->setHolidayHomeSearchCriteria($holidayHomeSearchCriteria)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get Journey value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType|null
     */
    public function getJourney()
    {
        return $this->Journey;
    }
    /**
     * Set Journey value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeJourneyType $journey
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTripType
     */
    public function setJourney(\traveltainment\SOAP17\StructType\HolidayHomeJourneyType $journey = null)
    {
        $this->Journey = $journey;
        return $this;
    }
    /**
     * Get HolidayHomeSearchCriteria value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeSearchCriteriaType|null
     */
    public function getHolidayHomeSearchCriteria()
    {
        return $this->HolidayHomeSearchCriteria;
    }
    /**
     * Set HolidayHomeSearchCriteria value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTripType
     */
    public function setHolidayHomeSearchCriteria(\traveltainment\SOAP17\StructType\HolidayHomeSearchCriteriaType $holidayHomeSearchCriteria = null)
    {
        $this->HolidayHomeSearchCriteria = $holidayHomeSearchCriteria;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest $tourOperator
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTripType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest $tourOperator = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTripType
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
