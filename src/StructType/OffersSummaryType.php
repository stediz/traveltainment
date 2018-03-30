<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffersSummaryType StructType
 * @subpackage Structs
 */
class OffersSummaryType extends AbstractStructBase
{
    /**
     * The DepartureDays
     * @var \traveltainment\SOAP17\StructType\DepartureListType
     */
    public $DepartureDays;
    /**
     * The TourOperators
     * @var \traveltainment\SOAP17\StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * The TravelDurations
     * @var \traveltainment\SOAP17\StructType\DurationListType
     */
    public $TravelDurations;
    /**
     * The Boards
     * @var \traveltainment\SOAP17\StructType\BoardListType
     */
    public $Boards;
    /**
     * The Rooms
     * @var \traveltainment\SOAP17\StructType\SimpleRoomInformationListType
     */
    public $Rooms;
    /**
     * The DepartureAirports
     * @var \traveltainment\SOAP17\StructType\DepartureAirportListType
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
     * @param \traveltainment\SOAP17\StructType\DepartureListType $departureDays
     * @param \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators
     * @param \traveltainment\SOAP17\StructType\DurationListType $travelDurations
     * @param \traveltainment\SOAP17\StructType\BoardListType $boards
     * @param \traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms
     * @param \traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports
     */
    public function __construct(\traveltainment\SOAP17\StructType\DepartureListType $departureDays = null, \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null, \traveltainment\SOAP17\StructType\DurationListType $travelDurations = null, \traveltainment\SOAP17\StructType\BoardListType $boards = null, \traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms = null, \traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports = null)
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
     * @return \traveltainment\SOAP17\StructType\DepartureListType|null
     */
    public function getDepartureDays()
    {
        return $this->DepartureDays;
    }
    /**
     * Set DepartureDays value
     * @param \traveltainment\SOAP17\StructType\DepartureListType $departureDays
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public function setDepartureDays(\traveltainment\SOAP17\StructType\DepartureListType $departureDays = null)
    {
        $this->DepartureDays = $departureDays;
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
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public function setTourOperators(\traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null)
    {
        $this->TourOperators = $tourOperators;
        return $this;
    }
    /**
     * Get TravelDurations value
     * @return \traveltainment\SOAP17\StructType\DurationListType|null
     */
    public function getTravelDurations()
    {
        return $this->TravelDurations;
    }
    /**
     * Set TravelDurations value
     * @param \traveltainment\SOAP17\StructType\DurationListType $travelDurations
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public function setTravelDurations(\traveltainment\SOAP17\StructType\DurationListType $travelDurations = null)
    {
        $this->TravelDurations = $travelDurations;
        return $this;
    }
    /**
     * Get Boards value
     * @return \traveltainment\SOAP17\StructType\BoardListType|null
     */
    public function getBoards()
    {
        return $this->Boards;
    }
    /**
     * Set Boards value
     * @param \traveltainment\SOAP17\StructType\BoardListType $boards
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public function setBoards(\traveltainment\SOAP17\StructType\BoardListType $boards = null)
    {
        $this->Boards = $boards;
        return $this;
    }
    /**
     * Get Rooms value
     * @return \traveltainment\SOAP17\StructType\SimpleRoomInformationListType|null
     */
    public function getRooms()
    {
        return $this->Rooms;
    }
    /**
     * Set Rooms value
     * @param \traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public function setRooms(\traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms = null)
    {
        $this->Rooms = $rooms;
        return $this;
    }
    /**
     * Get DepartureAirports value
     * @return \traveltainment\SOAP17\StructType\DepartureAirportListType|null
     */
    public function getDepartureAirports()
    {
        return $this->DepartureAirports;
    }
    /**
     * Set DepartureAirports value
     * @param \traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public function setDepartureAirports(\traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports = null)
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
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType
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
