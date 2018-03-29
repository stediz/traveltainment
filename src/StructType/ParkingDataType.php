<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingDataType StructType
 * @subpackage Structs
 */
class ParkingDataType extends AbstractStructBase
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The ParkingDateTimes
     * @var \StructType\ParkingDateTimesType
     */
    public $ParkingDateTimes;
    /**
     * The PassengerCount
     * @var int
     */
    public $PassengerCount;
    /**
     * The ParkingCost
     * @var \StructType\SimplePriceType
     */
    public $ParkingCost;
    /**
     * Constructor method for ParkingDataType
     * @uses ParkingDataType::setProviderID()
     * @uses ParkingDataType::setParkingDateTimes()
     * @uses ParkingDataType::setPassengerCount()
     * @uses ParkingDataType::setParkingCost()
     * @param string $providerID
     * @param \StructType\ParkingDateTimesType $parkingDateTimes
     * @param int $passengerCount
     * @param \StructType\SimplePriceType $parkingCost
     */
    public function __construct($providerID = null, \StructType\ParkingDateTimesType $parkingDateTimes = null, $passengerCount = null, \StructType\SimplePriceType $parkingCost = null)
    {
        $this
            ->setProviderID($providerID)
            ->setParkingDateTimes($parkingDateTimes)
            ->setPassengerCount($passengerCount)
            ->setParkingCost($parkingCost);
    }
    /**
     * Get ProviderID value
     * @return string|null
     */
    public function getProviderID()
    {
        return $this->ProviderID;
    }
    /**
     * Set ProviderID value
     * @param string $providerID
     * @return \StructType\ParkingDataType
     */
    public function setProviderID($providerID = null)
    {
        // validation for constraint: string
        if (!is_null($providerID) && !is_string($providerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerID)), __LINE__);
        }
        $this->ProviderID = $providerID;
        return $this;
    }
    /**
     * Get ParkingDateTimes value
     * @return \StructType\ParkingDateTimesType|null
     */
    public function getParkingDateTimes()
    {
        return $this->ParkingDateTimes;
    }
    /**
     * Set ParkingDateTimes value
     * @param \StructType\ParkingDateTimesType $parkingDateTimes
     * @return \StructType\ParkingDataType
     */
    public function setParkingDateTimes(\StructType\ParkingDateTimesType $parkingDateTimes = null)
    {
        $this->ParkingDateTimes = $parkingDateTimes;
        return $this;
    }
    /**
     * Get PassengerCount value
     * @return int|null
     */
    public function getPassengerCount()
    {
        return $this->PassengerCount;
    }
    /**
     * Set PassengerCount value
     * @param int $passengerCount
     * @return \StructType\ParkingDataType
     */
    public function setPassengerCount($passengerCount = null)
    {
        // validation for constraint: int
        if (!is_null($passengerCount) && !is_numeric($passengerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerCount)), __LINE__);
        }
        $this->PassengerCount = $passengerCount;
        return $this;
    }
    /**
     * Get ParkingCost value
     * @return \StructType\SimplePriceType|null
     */
    public function getParkingCost()
    {
        return $this->ParkingCost;
    }
    /**
     * Set ParkingCost value
     * @param \StructType\SimplePriceType $parkingCost
     * @return \StructType\ParkingDataType
     */
    public function setParkingCost(\StructType\SimplePriceType $parkingCost = null)
    {
        $this->ParkingCost = $parkingCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParkingDataType
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
