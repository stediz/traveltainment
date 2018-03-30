<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TripType StructType
 * @subpackage Structs
 */
class TripType extends AbstractStructBase
{
    /**
     * The Journey
     * @var \traveltainment\SOAP17\StructType\JourneyType
     */
    public $Journey;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelType
     */
    public $Hotel;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperatorRequest
     */
    public $TourOperator;
    /**
     * Constructor method for TripType
     * @uses TripType::setJourney()
     * @uses TripType::setHotel()
     * @uses TripType::setTourOperator()
     * @param \traveltainment\SOAP17\StructType\JourneyType $journey
     * @param \traveltainment\SOAP17\StructType\HotelType $hotel
     * @param \traveltainment\SOAP17\StructType\TourOperatorRequest $tourOperator
     */
    public function __construct(\traveltainment\SOAP17\StructType\JourneyType $journey = null, \traveltainment\SOAP17\StructType\HotelType $hotel = null, \traveltainment\SOAP17\StructType\TourOperatorRequest $tourOperator = null)
    {
        $this
            ->setJourney($journey)
            ->setHotel($hotel)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get Journey value
     * @return \traveltainment\SOAP17\StructType\JourneyType|null
     */
    public function getJourney()
    {
        return $this->Journey;
    }
    /**
     * Set Journey value
     * @param \traveltainment\SOAP17\StructType\JourneyType $journey
     * @return \traveltainment\SOAP17\StructType\TripType
     */
    public function setJourney(\traveltainment\SOAP17\StructType\JourneyType $journey = null)
    {
        $this->Journey = $journey;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \traveltainment\SOAP17\StructType\HotelType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \traveltainment\SOAP17\StructType\HotelType $hotel
     * @return \traveltainment\SOAP17\StructType\TripType
     */
    public function setHotel(\traveltainment\SOAP17\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\TourOperatorRequest|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\TourOperatorRequest $tourOperator
     * @return \traveltainment\SOAP17\StructType\TripType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\TourOperatorRequest $tourOperator = null)
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
     * @return \traveltainment\SOAP17\StructType\TripType
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
