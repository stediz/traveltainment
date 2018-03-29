<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListRSHeader StructType
 * @subpackage Structs
 */
class OfferListRSHeader extends AbstractStructBase
{
    /**
     * The DepartureAirports
     * @var \StructType\DepartureAirportListType
     */
    public $DepartureAirports;
    /**
     * The Departures
     * @var \StructType\DepartureListType
     */
    public $Departures;
    /**
     * The Durations
     * @var \StructType\DurationListType
     */
    public $Durations;
    /**
     * The Rooms
     * @var \StructType\SimpleRoomInformationListType
     */
    public $Rooms;
    /**
     * The Boards
     * @var \StructType\BoardListType
     */
    public $Boards;
    /**
     * The TourOperators
     * @var \StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * Constructor method for OfferListRSHeader
     * @uses OfferListRSHeader::setDepartureAirports()
     * @uses OfferListRSHeader::setDepartures()
     * @uses OfferListRSHeader::setDurations()
     * @uses OfferListRSHeader::setRooms()
     * @uses OfferListRSHeader::setBoards()
     * @uses OfferListRSHeader::setTourOperators()
     * @param \StructType\DepartureAirportListType $departureAirports
     * @param \StructType\DepartureListType $departures
     * @param \StructType\DurationListType $durations
     * @param \StructType\SimpleRoomInformationListType $rooms
     * @param \StructType\BoardListType $boards
     * @param \StructType\TourOperatorListType $tourOperators
     */
    public function __construct(\StructType\DepartureAirportListType $departureAirports = null, \StructType\DepartureListType $departures = null, \StructType\DurationListType $durations = null, \StructType\SimpleRoomInformationListType $rooms = null, \StructType\BoardListType $boards = null, \StructType\TourOperatorListType $tourOperators = null)
    {
        $this
            ->setDepartureAirports($departureAirports)
            ->setDepartures($departures)
            ->setDurations($durations)
            ->setRooms($rooms)
            ->setBoards($boards)
            ->setTourOperators($tourOperators);
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
     * @return \StructType\OfferListRSHeader
     */
    public function setDepartureAirports(\StructType\DepartureAirportListType $departureAirports = null)
    {
        $this->DepartureAirports = $departureAirports;
        return $this;
    }
    /**
     * Get Departures value
     * @return \StructType\DepartureListType|null
     */
    public function getDepartures()
    {
        return $this->Departures;
    }
    /**
     * Set Departures value
     * @param \StructType\DepartureListType $departures
     * @return \StructType\OfferListRSHeader
     */
    public function setDepartures(\StructType\DepartureListType $departures = null)
    {
        $this->Departures = $departures;
        return $this;
    }
    /**
     * Get Durations value
     * @return \StructType\DurationListType|null
     */
    public function getDurations()
    {
        return $this->Durations;
    }
    /**
     * Set Durations value
     * @param \StructType\DurationListType $durations
     * @return \StructType\OfferListRSHeader
     */
    public function setDurations(\StructType\DurationListType $durations = null)
    {
        $this->Durations = $durations;
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
     * @return \StructType\OfferListRSHeader
     */
    public function setRooms(\StructType\SimpleRoomInformationListType $rooms = null)
    {
        $this->Rooms = $rooms;
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
     * @return \StructType\OfferListRSHeader
     */
    public function setBoards(\StructType\BoardListType $boards = null)
    {
        $this->Boards = $boards;
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
     * @return \StructType\OfferListRSHeader
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
     * @return \StructType\OfferListRSHeader
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
