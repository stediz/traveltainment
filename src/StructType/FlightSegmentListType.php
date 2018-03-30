<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentListType StructType
 * @subpackage Structs
 */
class FlightSegmentListType extends AbstractStructBase
{
    /**
     * The ProgramType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProgramType;
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
     * The FlightDateTimeSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\DateTimeSpanType
     */
    public $FlightDateTimeSpan;
    /**
     * The BoardingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BoardingCode;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The FlightCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightCode;
    /**
     * The LegCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegCode;
    /**
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\FlightSegmentType[]
     */
    public $FlightSegment;
    /**
     * Constructor method for FlightSegmentListType
     * @uses FlightSegmentListType::setProgramType()
     * @uses FlightSegmentListType::setDepartureAirport()
     * @uses FlightSegmentListType::setDestinationAirport()
     * @uses FlightSegmentListType::setFlightDateTimeSpan()
     * @uses FlightSegmentListType::setBoardingCode()
     * @uses FlightSegmentListType::setCarrierCode()
     * @uses FlightSegmentListType::setFlightCode()
     * @uses FlightSegmentListType::setLegCode()
     * @uses FlightSegmentListType::setFlightSegment()
     * @param string $programType
     * @param \traveltainment\SOAP17\StructType\AirportType $departureAirport
     * @param \traveltainment\SOAP17\StructType\AirportType $destinationAirport
     * @param \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan
     * @param string $boardingCode
     * @param string $carrierCode
     * @param string $flightCode
     * @param string $legCode
     * @param \traveltainment\SOAP17\StructType\FlightSegmentType[] $flightSegment
     */
    public function __construct($programType = null, \traveltainment\SOAP17\StructType\AirportType $departureAirport = null, \traveltainment\SOAP17\StructType\AirportType $destinationAirport = null, \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan = null, $boardingCode = null, $carrierCode = null, $flightCode = null, $legCode = null, array $flightSegment = array())
    {
        $this
            ->setProgramType($programType)
            ->setDepartureAirport($departureAirport)
            ->setDestinationAirport($destinationAirport)
            ->setFlightDateTimeSpan($flightDateTimeSpan)
            ->setBoardingCode($boardingCode)
            ->setCarrierCode($carrierCode)
            ->setFlightCode($flightCode)
            ->setLegCode($legCode)
            ->setFlightSegment($flightSegment);
    }
    /**
     * Get ProgramType value
     * @return string|null
     */
    public function getProgramType()
    {
        return $this->ProgramType;
    }
    /**
     * Set ProgramType value
     * @param string $programType
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setProgramType($programType = null)
    {
        // validation for constraint: string
        if (!is_null($programType) && !is_string($programType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programType)), __LINE__);
        }
        $this->ProgramType = $programType;
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setDestinationAirport(\traveltainment\SOAP17\StructType\AirportType $destinationAirport = null)
    {
        $this->DestinationAirport = $destinationAirport;
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setFlightDateTimeSpan(\traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan = null)
    {
        $this->FlightDateTimeSpan = $flightDateTimeSpan;
        return $this;
    }
    /**
     * Get BoardingCode value
     * @return string|null
     */
    public function getBoardingCode()
    {
        return $this->BoardingCode;
    }
    /**
     * Set BoardingCode value
     * @param string $boardingCode
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setBoardingCode($boardingCode = null)
    {
        // validation for constraint: string
        if (!is_null($boardingCode) && !is_string($boardingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardingCode)), __LINE__);
        }
        $this->BoardingCode = $boardingCode;
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
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
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
     * Get FlightCode value
     * @return string|null
     */
    public function getFlightCode()
    {
        return $this->FlightCode;
    }
    /**
     * Set FlightCode value
     * @param string $flightCode
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setFlightCode($flightCode = null)
    {
        // validation for constraint: string
        if (!is_null($flightCode) && !is_string($flightCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightCode)), __LINE__);
        }
        $this->FlightCode = $flightCode;
        return $this;
    }
    /**
     * Get LegCode value
     * @return string|null
     */
    public function getLegCode()
    {
        return $this->LegCode;
    }
    /**
     * Set LegCode value
     * @param string $legCode
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setLegCode($legCode = null)
    {
        // validation for constraint: string
        if (!is_null($legCode) && !is_string($legCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legCode)), __LINE__);
        }
        $this->LegCode = $legCode;
        return $this;
    }
    /**
     * Get FlightSegment value
     * @return \traveltainment\SOAP17\StructType\FlightSegmentType[]|null
     */
    public function getFlightSegment()
    {
        return $this->FlightSegment;
    }
    /**
     * Set FlightSegment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\FlightSegmentType[] $flightSegment
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function setFlightSegment(array $flightSegment = array())
    {
        foreach ($flightSegment as $flightSegmentListTypeFlightSegmentItem) {
            // validation for constraint: itemType
            if (!$flightSegmentListTypeFlightSegmentItem instanceof \traveltainment\SOAP17\StructType\FlightSegmentType) {
                throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of \traveltainment\SOAP17\StructType\FlightSegmentType, "%s" given', is_object($flightSegmentListTypeFlightSegmentItem) ? get_class($flightSegmentListTypeFlightSegmentItem) : gettype($flightSegmentListTypeFlightSegmentItem)), __LINE__);
            }
        }
        $this->FlightSegment = $flightSegment;
        return $this;
    }
    /**
     * Add item to FlightSegment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\FlightSegmentType $item
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public function addToFlightSegment(\traveltainment\SOAP17\StructType\FlightSegmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\FlightSegmentType) {
            throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of \traveltainment\SOAP17\StructType\FlightSegmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType
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
