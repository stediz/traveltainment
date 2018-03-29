<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetailsType StructType
 * @subpackage Structs
 */
class FlightDetailsType extends AbstractStructBase
{
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\OptionalTimeDateType
     */
    public $DepartureDateTime;
    /**
     * The Airline
     * @var \StructType\AirlineType
     */
    public $Airline;
    /**
     * The OperatingAirline
     * @var \StructType\AirlineType
     */
    public $OperatingAirline;
    /**
     * The DepartureAirport
     * @var \StructType\AirportType
     */
    public $DepartureAirport;
    /**
     * The DestinationAirport
     * @var \StructType\AirportType
     */
    public $DestinationAirport;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OptionalTimeDateType
     */
    public $ArrivalDateTime;
    /**
     * Constructor method for FlightDetailsType
     * @uses FlightDetailsType::setDepartureDateTime()
     * @uses FlightDetailsType::setAirline()
     * @uses FlightDetailsType::setOperatingAirline()
     * @uses FlightDetailsType::setDepartureAirport()
     * @uses FlightDetailsType::setDestinationAirport()
     * @uses FlightDetailsType::setArrivalDateTime()
     * @param \StructType\OptionalTimeDateType $departureDateTime
     * @param \StructType\AirlineType $airline
     * @param \StructType\AirlineType $operatingAirline
     * @param \StructType\AirportType $departureAirport
     * @param \StructType\AirportType $destinationAirport
     * @param \StructType\OptionalTimeDateType $arrivalDateTime
     */
    public function __construct(\StructType\OptionalTimeDateType $departureDateTime = null, \StructType\AirlineType $airline = null, \StructType\AirlineType $operatingAirline = null, \StructType\AirportType $departureAirport = null, \StructType\AirportType $destinationAirport = null, \StructType\OptionalTimeDateType $arrivalDateTime = null)
    {
        $this
            ->setDepartureDateTime($departureDateTime)
            ->setAirline($airline)
            ->setOperatingAirline($operatingAirline)
            ->setDepartureAirport($departureAirport)
            ->setDestinationAirport($destinationAirport)
            ->setArrivalDateTime($arrivalDateTime);
    }
    /**
     * Get DepartureDateTime value
     * @return \StructType\OptionalTimeDateType
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param \StructType\OptionalTimeDateType $departureDateTime
     * @return \StructType\FlightDetailsType
     */
    public function setDepartureDateTime(\StructType\OptionalTimeDateType $departureDateTime = null)
    {
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get Airline value
     * @return \StructType\AirlineType|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param \StructType\AirlineType $airline
     * @return \StructType\FlightDetailsType
     */
    public function setAirline(\StructType\AirlineType $airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get OperatingAirline value
     * @return \StructType\AirlineType|null
     */
    public function getOperatingAirline()
    {
        return $this->OperatingAirline;
    }
    /**
     * Set OperatingAirline value
     * @param \StructType\AirlineType $operatingAirline
     * @return \StructType\FlightDetailsType
     */
    public function setOperatingAirline(\StructType\AirlineType $operatingAirline = null)
    {
        $this->OperatingAirline = $operatingAirline;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return \StructType\AirportType|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \StructType\AirportType $departureAirport
     * @return \StructType\FlightDetailsType
     */
    public function setDepartureAirport(\StructType\AirportType $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get DestinationAirport value
     * @return \StructType\AirportType|null
     */
    public function getDestinationAirport()
    {
        return $this->DestinationAirport;
    }
    /**
     * Set DestinationAirport value
     * @param \StructType\AirportType $destinationAirport
     * @return \StructType\FlightDetailsType
     */
    public function setDestinationAirport(\StructType\AirportType $destinationAirport = null)
    {
        $this->DestinationAirport = $destinationAirport;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return \StructType\OptionalTimeDateType|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param \StructType\OptionalTimeDateType $arrivalDateTime
     * @return \StructType\FlightDetailsType
     */
    public function setArrivalDateTime(\StructType\OptionalTimeDateType $arrivalDateTime = null)
    {
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FlightDetailsType
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
