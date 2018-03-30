<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListRSHeader StructType
 * @subpackage Structs
 */
class OfferListRSHeader extends AbstractStructBase
{
    /**
     * The DepartureAirports
     * @var \traveltainment\SOAP17\StructType\DepartureAirportListType
     */
    public $DepartureAirports;
    /**
     * The Departures
     * @var \traveltainment\SOAP17\StructType\DepartureListType
     */
    public $Departures;
    /**
     * The Durations
     * @var \traveltainment\SOAP17\StructType\DurationListType
     */
    public $Durations;
    /**
     * The Rooms
     * @var \traveltainment\SOAP17\StructType\SimpleRoomInformationListType
     */
    public $Rooms;
    /**
     * The Boards
     * @var \traveltainment\SOAP17\StructType\BoardListType
     */
    public $Boards;
    /**
     * The TourOperators
     * @var \traveltainment\SOAP17\StructType\TourOperatorListType
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
     * @param \traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports
     * @param \traveltainment\SOAP17\StructType\DepartureListType $departures
     * @param \traveltainment\SOAP17\StructType\DurationListType $durations
     * @param \traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms
     * @param \traveltainment\SOAP17\StructType\BoardListType $boards
     * @param \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators
     */
    public function __construct(\traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports = null, \traveltainment\SOAP17\StructType\DepartureListType $departures = null, \traveltainment\SOAP17\StructType\DurationListType $durations = null, \traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms = null, \traveltainment\SOAP17\StructType\BoardListType $boards = null, \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null)
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
     * @return \traveltainment\SOAP17\StructType\DepartureAirportListType|null
     */
    public function getDepartureAirports()
    {
        return $this->DepartureAirports;
    }
    /**
     * Set DepartureAirports value
     * @param \traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
     */
    public function setDepartureAirports(\traveltainment\SOAP17\StructType\DepartureAirportListType $departureAirports = null)
    {
        $this->DepartureAirports = $departureAirports;
        return $this;
    }
    /**
     * Get Departures value
     * @return \traveltainment\SOAP17\StructType\DepartureListType|null
     */
    public function getDepartures()
    {
        return $this->Departures;
    }
    /**
     * Set Departures value
     * @param \traveltainment\SOAP17\StructType\DepartureListType $departures
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
     */
    public function setDepartures(\traveltainment\SOAP17\StructType\DepartureListType $departures = null)
    {
        $this->Departures = $departures;
        return $this;
    }
    /**
     * Get Durations value
     * @return \traveltainment\SOAP17\StructType\DurationListType|null
     */
    public function getDurations()
    {
        return $this->Durations;
    }
    /**
     * Set Durations value
     * @param \traveltainment\SOAP17\StructType\DurationListType $durations
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
     */
    public function setDurations(\traveltainment\SOAP17\StructType\DurationListType $durations = null)
    {
        $this->Durations = $durations;
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
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
     */
    public function setRooms(\traveltainment\SOAP17\StructType\SimpleRoomInformationListType $rooms = null)
    {
        $this->Rooms = $rooms;
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
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
     */
    public function setBoards(\traveltainment\SOAP17\StructType\BoardListType $boards = null)
    {
        $this->Boards = $boards;
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
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
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
     * @return \traveltainment\SOAP17\StructType\OfferListRSHeader
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
