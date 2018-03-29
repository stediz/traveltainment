<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferEventType StructType
 * @subpackage Structs
 */
class TransferEventType extends AbstractStructBase
{
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
    /**
     * The Location
     * @var \StructType\TransferLocationType
     */
    public $Location;
    /**
     * The FlightInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TransferFlightInfoType
     */
    public $FlightInfo;
    /**
     * Constructor method for TransferEventType
     * @uses TransferEventType::setDateTime()
     * @uses TransferEventType::setLocation()
     * @uses TransferEventType::setFlightInfo()
     * @param string $dateTime
     * @param \StructType\TransferLocationType $location
     * @param \StructType\TransferFlightInfoType $flightInfo
     */
    public function __construct($dateTime = null, \StructType\TransferLocationType $location = null, \StructType\TransferFlightInfoType $flightInfo = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setLocation($location)
            ->setFlightInfo($flightInfo);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \StructType\TransferEventType
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get Location value
     * @return \StructType\TransferLocationType|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \StructType\TransferLocationType $location
     * @return \StructType\TransferEventType
     */
    public function setLocation(\StructType\TransferLocationType $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get FlightInfo value
     * @return \StructType\TransferFlightInfoType|null
     */
    public function getFlightInfo()
    {
        return $this->FlightInfo;
    }
    /**
     * Set FlightInfo value
     * @param \StructType\TransferFlightInfoType $flightInfo
     * @return \StructType\TransferEventType
     */
    public function setFlightInfo(\StructType\TransferFlightInfoType $flightInfo = null)
    {
        $this->FlightInfo = $flightInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransferEventType
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
