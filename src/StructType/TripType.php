<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TripType StructType
 * @subpackage Structs
 */
class TripType extends AbstractStructBase
{
    /**
     * The Journey
     * @var \StructType\JourneyType
     */
    public $Journey;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelType
     */
    public $Hotel;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TourOperatorRequest
     */
    public $TourOperator;
    /**
     * Constructor method for TripType
     * @uses TripType::setJourney()
     * @uses TripType::setHotel()
     * @uses TripType::setTourOperator()
     * @param \StructType\JourneyType $journey
     * @param \StructType\HotelType $hotel
     * @param \StructType\TourOperatorRequest $tourOperator
     */
    public function __construct(\StructType\JourneyType $journey = null, \StructType\HotelType $hotel = null, \StructType\TourOperatorRequest $tourOperator = null)
    {
        $this
            ->setJourney($journey)
            ->setHotel($hotel)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get Journey value
     * @return \StructType\JourneyType|null
     */
    public function getJourney()
    {
        return $this->Journey;
    }
    /**
     * Set Journey value
     * @param \StructType\JourneyType $journey
     * @return \StructType\TripType
     */
    public function setJourney(\StructType\JourneyType $journey = null)
    {
        $this->Journey = $journey;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \StructType\HotelType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \StructType\HotelType $hotel
     * @return \StructType\TripType
     */
    public function setHotel(\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \StructType\TourOperatorRequest|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \StructType\TourOperatorRequest $tourOperator
     * @return \StructType\TripType
     */
    public function setTourOperator(\StructType\TourOperatorRequest $tourOperator = null)
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
     * @return \StructType\TripType
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
