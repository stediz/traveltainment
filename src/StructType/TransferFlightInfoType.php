<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferFlightInfoType StructType
 * @subpackage Structs
 */
class TransferFlightInfoType extends AbstractStructBase
{
    /**
     * The Airline
     * @var string
     */
    public $Airline;
    /**
     * The FlightNumber
     * @var string
     */
    public $FlightNumber;
    /**
     * The FlightTime
     * @var string
     */
    public $FlightTime;
    /**
     * Constructor method for TransferFlightInfoType
     * @uses TransferFlightInfoType::setAirline()
     * @uses TransferFlightInfoType::setFlightNumber()
     * @uses TransferFlightInfoType::setFlightTime()
     * @param string $airline
     * @param string $flightNumber
     * @param string $flightTime
     */
    public function __construct($airline = null, $flightNumber = null, $flightTime = null)
    {
        $this
            ->setAirline($airline)
            ->setFlightNumber($flightNumber)
            ->setFlightTime($flightTime);
    }
    /**
     * Get Airline value
     * @return string|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param string $airline
     * @return \StructType\TransferFlightInfoType
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airline)), __LINE__);
        }
        $this->Airline = $airline;
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
     * @return \StructType\TransferFlightInfoType
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
     * Get FlightTime value
     * @return string|null
     */
    public function getFlightTime()
    {
        return $this->FlightTime;
    }
    /**
     * Set FlightTime value
     * @param string $flightTime
     * @return \StructType\TransferFlightInfoType
     */
    public function setFlightTime($flightTime = null)
    {
        // validation for constraint: string
        if (!is_null($flightTime) && !is_string($flightTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightTime)), __LINE__);
        }
        $this->FlightTime = $flightTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransferFlightInfoType
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
