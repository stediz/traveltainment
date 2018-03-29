<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleDetailsType StructType
 * @subpackage Structs
 */
class VehicleDetailsType extends AbstractStructBase
{
    /**
     * The BaggageCounts
     * @var \StructType\BaggageCountType
     */
    public $BaggageCounts;
    /**
     * The PassengerCounts
     * @var \StructType\PassengerCountsType
     */
    public $PassengerCounts;
    /**
     * The SeatCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SeatCount;
    /**
     * The DoorCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DoorCount;
    /**
     * The VehicleClass
     * @var string
     */
    public $VehicleClass;
    /**
     * The VehicleCode
     * Meta informations extracted from the WSDL
     * - maxLength: 18
     * - minLength: 1
     * @var string
     */
    public $VehicleCode;
    /**
     * The VehicleConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\VehicleConfigurationType
     */
    public $VehicleConfiguration;
    /**
     * Constructor method for VehicleDetailsType
     * @uses VehicleDetailsType::setBaggageCounts()
     * @uses VehicleDetailsType::setPassengerCounts()
     * @uses VehicleDetailsType::setSeatCount()
     * @uses VehicleDetailsType::setDoorCount()
     * @uses VehicleDetailsType::setVehicleClass()
     * @uses VehicleDetailsType::setVehicleCode()
     * @uses VehicleDetailsType::setVehicleConfiguration()
     * @param \StructType\BaggageCountType $baggageCounts
     * @param \StructType\PassengerCountsType $passengerCounts
     * @param int $seatCount
     * @param int $doorCount
     * @param string $vehicleClass
     * @param string $vehicleCode
     * @param \StructType\VehicleConfigurationType $vehicleConfiguration
     */
    public function __construct(\StructType\BaggageCountType $baggageCounts = null, \StructType\PassengerCountsType $passengerCounts = null, $seatCount = null, $doorCount = null, $vehicleClass = null, $vehicleCode = null, \StructType\VehicleConfigurationType $vehicleConfiguration = null)
    {
        $this
            ->setBaggageCounts($baggageCounts)
            ->setPassengerCounts($passengerCounts)
            ->setSeatCount($seatCount)
            ->setDoorCount($doorCount)
            ->setVehicleClass($vehicleClass)
            ->setVehicleCode($vehicleCode)
            ->setVehicleConfiguration($vehicleConfiguration);
    }
    /**
     * Get BaggageCounts value
     * @return \StructType\BaggageCountType|null
     */
    public function getBaggageCounts()
    {
        return $this->BaggageCounts;
    }
    /**
     * Set BaggageCounts value
     * @param \StructType\BaggageCountType $baggageCounts
     * @return \StructType\VehicleDetailsType
     */
    public function setBaggageCounts(\StructType\BaggageCountType $baggageCounts = null)
    {
        $this->BaggageCounts = $baggageCounts;
        return $this;
    }
    /**
     * Get PassengerCounts value
     * @return \StructType\PassengerCountsType|null
     */
    public function getPassengerCounts()
    {
        return $this->PassengerCounts;
    }
    /**
     * Set PassengerCounts value
     * @param \StructType\PassengerCountsType $passengerCounts
     * @return \StructType\VehicleDetailsType
     */
    public function setPassengerCounts(\StructType\PassengerCountsType $passengerCounts = null)
    {
        $this->PassengerCounts = $passengerCounts;
        return $this;
    }
    /**
     * Get SeatCount value
     * @return int|null
     */
    public function getSeatCount()
    {
        return $this->SeatCount;
    }
    /**
     * Set SeatCount value
     * @param int $seatCount
     * @return \StructType\VehicleDetailsType
     */
    public function setSeatCount($seatCount = null)
    {
        // validation for constraint: int
        if (!is_null($seatCount) && !is_numeric($seatCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatCount)), __LINE__);
        }
        $this->SeatCount = $seatCount;
        return $this;
    }
    /**
     * Get DoorCount value
     * @return int|null
     */
    public function getDoorCount()
    {
        return $this->DoorCount;
    }
    /**
     * Set DoorCount value
     * @param int $doorCount
     * @return \StructType\VehicleDetailsType
     */
    public function setDoorCount($doorCount = null)
    {
        // validation for constraint: int
        if (!is_null($doorCount) && !is_numeric($doorCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($doorCount)), __LINE__);
        }
        $this->DoorCount = $doorCount;
        return $this;
    }
    /**
     * Get VehicleClass value
     * @return string|null
     */
    public function getVehicleClass()
    {
        return $this->VehicleClass;
    }
    /**
     * Set VehicleClass value
     * @uses \EnumType\VehicleClassEnum::valueIsValid()
     * @uses \EnumType\VehicleClassEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleClass
     * @return \StructType\VehicleDetailsType
     */
    public function setVehicleClass($vehicleClass = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\VehicleClassEnum::valueIsValid($vehicleClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleClass, implode(', ', \EnumType\VehicleClassEnum::getValidValues())), __LINE__);
        }
        $this->VehicleClass = $vehicleClass;
        return $this;
    }
    /**
     * Get VehicleCode value
     * @return string|null
     */
    public function getVehicleCode()
    {
        return $this->VehicleCode;
    }
    /**
     * Set VehicleCode value
     * @param string $vehicleCode
     * @return \StructType\VehicleDetailsType
     */
    public function setVehicleCode($vehicleCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($vehicleCode) && strlen($vehicleCode) > 18) || (is_array($vehicleCode) && count($vehicleCode) > 18)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 18 element(s) or a scalar of 18 character(s) at most, "%d" length given', is_scalar($vehicleCode) ? strlen($vehicleCode) : count($vehicleCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($vehicleCode) && strlen($vehicleCode) < 1) || (is_array($vehicleCode) && count($vehicleCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($vehicleCode) && !is_string($vehicleCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehicleCode)), __LINE__);
        }
        $this->VehicleCode = $vehicleCode;
        return $this;
    }
    /**
     * Get VehicleConfiguration value
     * @return \StructType\VehicleConfigurationType|null
     */
    public function getVehicleConfiguration()
    {
        return $this->VehicleConfiguration;
    }
    /**
     * Set VehicleConfiguration value
     * @param \StructType\VehicleConfigurationType $vehicleConfiguration
     * @return \StructType\VehicleDetailsType
     */
    public function setVehicleConfiguration(\StructType\VehicleConfigurationType $vehicleConfiguration = null)
    {
        $this->VehicleConfiguration = $vehicleConfiguration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VehicleDetailsType
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
