<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentType StructType
 * @subpackage Structs
 */
class FlightSegmentType extends AbstractStructBase
{
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirportType
     */
    public $DepartureAirport;
    /**
     * The DestinationAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirportType
     */
    public $DestinationAirport;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirlineType
     */
    public $Airline;
    /**
     * The OperatingAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirlineType
     */
    public $OperatingAirline;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The CarrierCodeOperatedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCodeOperatedBy;
    /**
     * The FlightDateTimeSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\DateTimeSpanType
     */
    public $FlightDateTimeSpan;
    /**
     * The NumberOfStops
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfStops;
    /**
     * The FlightClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightClass;
    /**
     * The FlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FlightDuration;
    /**
     * The ServiceClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceClass;
    /**
     * The FlightEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightEquipment;
    /**
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareBase;
    /**
     * The DepartureTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTerminal;
    /**
     * The ArrivalTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalTerminal;
    /**
     * The BaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\BaggageAllowanceType
     */
    public $BaggageAllowance;
    /**
     * The assured
     * Meta informations extracted from the WSDL
     * - default: false
     * @var bool
     */
    public $assured;
    /**
     * Constructor method for FlightSegmentType
     * @uses FlightSegmentType::setDepartureAirport()
     * @uses FlightSegmentType::setDestinationAirport()
     * @uses FlightSegmentType::setFlightNumber()
     * @uses FlightSegmentType::setAirline()
     * @uses FlightSegmentType::setOperatingAirline()
     * @uses FlightSegmentType::setCarrierCode()
     * @uses FlightSegmentType::setCarrierCodeOperatedBy()
     * @uses FlightSegmentType::setFlightDateTimeSpan()
     * @uses FlightSegmentType::setNumberOfStops()
     * @uses FlightSegmentType::setFlightClass()
     * @uses FlightSegmentType::setFlightDuration()
     * @uses FlightSegmentType::setServiceClass()
     * @uses FlightSegmentType::setFlightEquipment()
     * @uses FlightSegmentType::setFareBase()
     * @uses FlightSegmentType::setDepartureTerminal()
     * @uses FlightSegmentType::setArrivalTerminal()
     * @uses FlightSegmentType::setBaggageAllowance()
     * @uses FlightSegmentType::setAssured()
     * @param \traveltainment\SOAP17\StructType\AirportType $departureAirport
     * @param \traveltainment\SOAP17\StructType\AirportType $destinationAirport
     * @param string $flightNumber
     * @param \traveltainment\SOAP17\StructType\AirlineType $airline
     * @param \traveltainment\SOAP17\StructType\AirlineType $operatingAirline
     * @param string $carrierCode
     * @param string $carrierCodeOperatedBy
     * @param \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan
     * @param int $numberOfStops
     * @param string $flightClass
     * @param int $flightDuration
     * @param string $serviceClass
     * @param string $flightEquipment
     * @param string $fareBase
     * @param string $departureTerminal
     * @param string $arrivalTerminal
     * @param \traveltainment\SOAP17\StructType\BaggageAllowanceType $baggageAllowance
     * @param bool $assured
     */
    public function __construct(\traveltainment\SOAP17\StructType\AirportType $departureAirport = null, \traveltainment\SOAP17\StructType\AirportType $destinationAirport = null, $flightNumber = null, \traveltainment\SOAP17\StructType\AirlineType $airline = null, \traveltainment\SOAP17\StructType\AirlineType $operatingAirline = null, $carrierCode = null, $carrierCodeOperatedBy = null, \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan = null, $numberOfStops = null, $flightClass = null, $flightDuration = null, $serviceClass = null, $flightEquipment = null, $fareBase = null, $departureTerminal = null, $arrivalTerminal = null, \traveltainment\SOAP17\StructType\BaggageAllowanceType $baggageAllowance = null, $assured = false)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setDestinationAirport($destinationAirport)
            ->setFlightNumber($flightNumber)
            ->setAirline($airline)
            ->setOperatingAirline($operatingAirline)
            ->setCarrierCode($carrierCode)
            ->setCarrierCodeOperatedBy($carrierCodeOperatedBy)
            ->setFlightDateTimeSpan($flightDateTimeSpan)
            ->setNumberOfStops($numberOfStops)
            ->setFlightClass($flightClass)
            ->setFlightDuration($flightDuration)
            ->setServiceClass($serviceClass)
            ->setFlightEquipment($flightEquipment)
            ->setFareBase($fareBase)
            ->setDepartureTerminal($departureTerminal)
            ->setArrivalTerminal($arrivalTerminal)
            ->setBaggageAllowance($baggageAllowance)
            ->setAssured($assured);
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setDestinationAirport(\traveltainment\SOAP17\StructType\AirportType $destinationAirport = null)
    {
        $this->DestinationAirport = $destinationAirport;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setOperatingAirline(\traveltainment\SOAP17\StructType\AirlineType $operatingAirline = null)
    {
        $this->OperatingAirline = $operatingAirline;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get CarrierCodeOperatedBy value
     * @return string|null
     */
    public function getCarrierCodeOperatedBy()
    {
        return $this->CarrierCodeOperatedBy;
    }
    /**
     * Set CarrierCodeOperatedBy value
     * @param string $carrierCodeOperatedBy
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setCarrierCodeOperatedBy($carrierCodeOperatedBy = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCodeOperatedBy) && !is_string($carrierCodeOperatedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCodeOperatedBy)), __LINE__);
        }
        $this->CarrierCodeOperatedBy = $carrierCodeOperatedBy;
        return $this;
    }
    /**
     * Get FlightDateTimeSpan value
     * @return \traveltainment\SOAP17\StructType\DateTimeSpanType|null
     */
    public function getFlightDateTimeSpan()
    {
        return $this->FlightDateTimeSpan;
    }
    /**
     * Set FlightDateTimeSpan value
     * @param \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setFlightDateTimeSpan(\traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan = null)
    {
        $this->FlightDateTimeSpan = $flightDateTimeSpan;
        return $this;
    }
    /**
     * Get NumberOfStops value
     * @return int|null
     */
    public function getNumberOfStops()
    {
        return $this->NumberOfStops;
    }
    /**
     * Set NumberOfStops value
     * @param int $numberOfStops
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setNumberOfStops($numberOfStops = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfStops) && !is_numeric($numberOfStops)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfStops)), __LINE__);
        }
        $this->NumberOfStops = $numberOfStops;
        return $this;
    }
    /**
     * Get FlightClass value
     * @return string|null
     */
    public function getFlightClass()
    {
        return $this->FlightClass;
    }
    /**
     * Set FlightClass value
     * @param string $flightClass
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setFlightClass($flightClass = null)
    {
        // validation for constraint: string
        if (!is_null($flightClass) && !is_string($flightClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightClass)), __LINE__);
        }
        $this->FlightClass = $flightClass;
        return $this;
    }
    /**
     * Get FlightDuration value
     * @return int|null
     */
    public function getFlightDuration()
    {
        return $this->FlightDuration;
    }
    /**
     * Set FlightDuration value
     * @param int $flightDuration
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setFlightDuration($flightDuration = null)
    {
        // validation for constraint: int
        if (!is_null($flightDuration) && !is_numeric($flightDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($flightDuration)), __LINE__);
        }
        $this->FlightDuration = $flightDuration;
        return $this;
    }
    /**
     * Get ServiceClass value
     * @return string|null
     */
    public function getServiceClass()
    {
        return $this->ServiceClass;
    }
    /**
     * Set ServiceClass value
     * @param string $serviceClass
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setServiceClass($serviceClass = null)
    {
        // validation for constraint: string
        if (!is_null($serviceClass) && !is_string($serviceClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceClass)), __LINE__);
        }
        $this->ServiceClass = $serviceClass;
        return $this;
    }
    /**
     * Get FlightEquipment value
     * @return string|null
     */
    public function getFlightEquipment()
    {
        return $this->FlightEquipment;
    }
    /**
     * Set FlightEquipment value
     * @param string $flightEquipment
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setFlightEquipment($flightEquipment = null)
    {
        // validation for constraint: string
        if (!is_null($flightEquipment) && !is_string($flightEquipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightEquipment)), __LINE__);
        }
        $this->FlightEquipment = $flightEquipment;
        return $this;
    }
    /**
     * Get FareBase value
     * @return string|null
     */
    public function getFareBase()
    {
        return $this->FareBase;
    }
    /**
     * Set FareBase value
     * @param string $fareBase
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setFareBase($fareBase = null)
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBase)), __LINE__);
        }
        $this->FareBase = $fareBase;
        return $this;
    }
    /**
     * Get DepartureTerminal value
     * @return string|null
     */
    public function getDepartureTerminal()
    {
        return $this->DepartureTerminal;
    }
    /**
     * Set DepartureTerminal value
     * @param string $departureTerminal
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setDepartureTerminal($departureTerminal = null)
    {
        // validation for constraint: string
        if (!is_null($departureTerminal) && !is_string($departureTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTerminal)), __LINE__);
        }
        $this->DepartureTerminal = $departureTerminal;
        return $this;
    }
    /**
     * Get ArrivalTerminal value
     * @return string|null
     */
    public function getArrivalTerminal()
    {
        return $this->ArrivalTerminal;
    }
    /**
     * Set ArrivalTerminal value
     * @param string $arrivalTerminal
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setArrivalTerminal($arrivalTerminal = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTerminal) && !is_string($arrivalTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTerminal)), __LINE__);
        }
        $this->ArrivalTerminal = $arrivalTerminal;
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \traveltainment\SOAP17\StructType\BaggageAllowanceType|null
     */
    public function getBaggageAllowance()
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \traveltainment\SOAP17\StructType\BaggageAllowanceType $baggageAllowance
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setBaggageAllowance(\traveltainment\SOAP17\StructType\BaggageAllowanceType $baggageAllowance = null)
    {
        $this->BaggageAllowance = $baggageAllowance;
        return $this;
    }
    /**
     * Get assured value
     * @return bool|null
     */
    public function getAssured()
    {
        return $this->assured;
    }
    /**
     * Set assured value
     * @param bool $assured
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
     */
    public function setAssured($assured = false)
    {
        // validation for constraint: boolean
        if (!is_null($assured) && !is_bool($assured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($assured)), __LINE__);
        }
        $this->assured = $assured;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType
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
