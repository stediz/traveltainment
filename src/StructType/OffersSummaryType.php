<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffersSummaryType StructType
 * @subpackage Structs
 */
class OffersSummaryType extends AbstractStructBase
{
    /**
     * The DepartureDays
     * @var \StructType\DepartureListType
     */
    public $DepartureDays;
    /**
     * The TourOperators
     * @var \StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * The TravelDurations
     * @var \StructType\DurationListType
     */
    public $TravelDurations;
    /**
     * The Boards
     * @var \StructType\BoardListType
     */
    public $Boards;
    /**
     * The Rooms
     * @var \StructType\SimpleRoomInformationListType
     */
    public $Rooms;
    /**
     * The DepartureAirports
     * @var \StructType\DepartureAirportListType
     */
    public $DepartureAirports;
    /**
     * Constructor method for OffersSummaryType
     * @uses OffersSummaryType::setDepartureDays()
     * @uses OffersSummaryType::setTourOperators()
     * @uses OffersSummaryType::setTravelDurations()
     * @uses OffersSummaryType::setBoards()
     * @uses OffersSummaryType::setRooms()
     * @uses OffersSummaryType::setDepartureAirports()
     * @param \StructType\DepartureListType $departureDays
     * @param \StructType\TourOperatorListType $tourOperators
     * @param \StructType\DurationListType $travelDurations
     * @param \StructType\BoardListType $boards
     * @param \StructType\SimpleRoomInformationListType $rooms
     * @param \StructType\DepartureAirportListType $departureAirports
     */
    public function __construct(\StructType\DepartureListType $departureDays = null, \StructType\TourOperatorListType $tourOperators = null, \StructType\DurationListType $travelDurations = null, \StructType\BoardListType $boards = null, \StructType\SimpleRoomInformationListType $rooms = null, \StructType\DepartureAirportListType $departureAirports = null)
    {
        $this
            ->setDepartureDays($departureDays)
            ->setTourOperators($tourOperators)
            ->setTravelDurations($travelDurations)
            ->setBoards($boards)
            ->setRooms($rooms)
            ->setDepartureAirports($departureAirports);
    }
    /**
     * Get DepartureDays value
     * @return \StructType\DepartureListType|null
     */
    public function getDepartureDays()
    {
        return $this->DepartureDays;
    }
    /**
     * Set DepartureDays value
     * @param \StructType\DepartureListType $departureDays
     * @return \StructType\OffersSummaryType
     */
    public function setDepartureDays(\StructType\DepartureListType $departureDays = null)
    {
        $this->DepartureDays = $departureDays;
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
     * @return \StructType\OffersSummaryType
     */
    public function setTourOperators(\StructType\TourOperatorListType $tourOperators = null)
    {
        $this->TourOperators = $tourOperators;
        return $this;
    }
    /**
     * Get TravelDurations value
     * @return \StructType\DurationListType|null
     */
    public function getTravelDurations()
    {
        return $this->TravelDurations;
    }
    /**
     * Set TravelDurations value
     * @param \StructType\DurationListType $travelDurations
     * @return \StructType\OffersSummaryType
     */
    public function setTravelDurations(\StructType\DurationListType $travelDurations = null)
    {
        $this->TravelDurations = $travelDurations;
        return $this;
    }
    /**
     * Get Boards value
     * @return \StructType\BoardListType|null
     */
    public function getBoards()
    {
        return $this->Boards;
    }
    /**
     * Set Boards value
     * @param \StructType\BoardListType $boards
     * @return \StructType\OffersSummaryType
     */
    public function setBoards(\StructType\BoardListType $boards = null)
    {
        $this->Boards = $boards;
        return $this;
    }
    /**
     * Get Rooms value
     * @return \StructType\SimpleRoomInformationListType|null
     */
    public function getRooms()
    {
        return $this->Rooms;
    }
    /**
     * Set Rooms value
     * @param \StructType\SimpleRoomInformationListType $rooms
     * @return \StructType\OffersSummaryType
     */
    public function setRooms(\StructType\SimpleRoomInformationListType $rooms = null)
    {
        $this->Rooms = $rooms;
        return $this;
    }
    /**
     * Get DepartureAirports value
     * @return \StructType\DepartureAirportListType|null
     */
    public function getDepartureAirports()
    {
        return $this->DepartureAirports;
    }
    /**
     * Set DepartureAirports value
     * @param \StructType\DepartureAirportListType $departureAirports
     * @return \StructType\OffersSummaryType
     */
    public function setDepartureAirports(\StructType\DepartureAirportListType $departureAirports = null)
    {
        $this->DepartureAirports = $departureAirports;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OffersSummaryType
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
