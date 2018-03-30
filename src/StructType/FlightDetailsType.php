<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\OptionalTimeDateType
     */
    public $DepartureDateTime;
    /**
     * The Airline
     * @var \traveltainment\SOAP17\StructType\AirlineType
     */
    public $Airline;
    /**
     * The OperatingAirline
     * @var \traveltainment\SOAP17\StructType\AirlineType
     */
    public $OperatingAirline;
    /**
     * The DepartureAirport
     * @var \traveltainment\SOAP17\StructType\AirportType
     */
    public $DepartureAirport;
    /**
     * The DestinationAirport
     * @var \traveltainment\SOAP17\StructType\AirportType
     */
    public $DestinationAirport;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OptionalTimeDateType
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
     * @param \traveltainment\SOAP17\StructType\OptionalTimeDateType $departureDateTime
     * @param \traveltainment\SOAP17\StructType\AirlineType $airline
     * @param \traveltainment\SOAP17\StructType\AirlineType $operatingAirline
     * @param \traveltainment\SOAP17\StructType\AirportType $departureAirport
     * @param \traveltainment\SOAP17\StructType\AirportType $destinationAirport
     * @param \traveltainment\SOAP17\StructType\OptionalTimeDateType $arrivalDateTime
     */
    public function __construct(\traveltainment\SOAP17\StructType\OptionalTimeDateType $departureDateTime = null, \traveltainment\SOAP17\StructType\AirlineType $airline = null, \traveltainment\SOAP17\StructType\AirlineType $operatingAirline = null, \traveltainment\SOAP17\StructType\AirportType $departureAirport = null, \traveltainment\SOAP17\StructType\AirportType $destinationAirport = null, \traveltainment\SOAP17\StructType\OptionalTimeDateType $arrivalDateTime = null)
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
     * @return \traveltainment\SOAP17\StructType\OptionalTimeDateType
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param \traveltainment\SOAP17\StructType\OptionalTimeDateType $departureDateTime
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function setDepartureDateTime(\traveltainment\SOAP17\StructType\OptionalTimeDateType $departureDateTime = null)
    {
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get Airline value
     * @return \traveltainment\SOAP17\StructType\AirlineType|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param \traveltainment\SOAP17\StructType\AirlineType $airline
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function setAirline(\traveltainment\SOAP17\StructType\AirlineType $airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get OperatingAirline value
     * @return \traveltainment\SOAP17\StructType\AirlineType|null
     */
    public function getOperatingAirline()
    {
        return $this->OperatingAirline;
    }
    /**
     * Set OperatingAirline value
     * @param \traveltainment\SOAP17\StructType\AirlineType $operatingAirline
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function setOperatingAirline(\traveltainment\SOAP17\StructType\AirlineType $operatingAirline = null)
    {
        $this->OperatingAirline = $operatingAirline;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return \traveltainment\SOAP17\StructType\AirportType|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \traveltainment\SOAP17\StructType\AirportType $departureAirport
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function setDepartureAirport(\traveltainment\SOAP17\StructType\AirportType $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get DestinationAirport value
     * @return \traveltainment\SOAP17\StructType\AirportType|null
     */
    public function getDestinationAirport()
    {
        return $this->DestinationAirport;
    }
    /**
     * Set DestinationAirport value
     * @param \traveltainment\SOAP17\StructType\AirportType $destinationAirport
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function setDestinationAirport(\traveltainment\SOAP17\StructType\AirportType $destinationAirport = null)
    {
        $this->DestinationAirport = $destinationAirport;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return \traveltainment\SOAP17\StructType\OptionalTimeDateType|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param \traveltainment\SOAP17\StructType\OptionalTimeDateType $arrivalDateTime
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function setArrivalDateTime(\traveltainment\SOAP17\StructType\OptionalTimeDateType $arrivalDateTime = null)
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
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
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
