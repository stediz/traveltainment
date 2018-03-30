<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferDetails4SearchType StructType
 * @subpackage Structs
 */
class TransferDetails4SearchType extends AbstractStructBase
{
    /**
     * The ServiceType
     * @var string
     */
    public $ServiceType;
    /**
     * The PassengerRestriction
     * @var \traveltainment\SOAP17\StructType\PosIntIntervalType
     */
    public $PassengerRestriction;
    /**
     * The DisabilityVehicleIndicator
     * @var bool
     */
    public $DisabilityVehicleIndicator;
    /**
     * The Vehicles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\VehiclesType
     */
    public $Vehicles;
    /**
     * The Transfers
     * @var \traveltainment\SOAP17\StructType\Transfers4SearchType
     */
    public $Transfers;
    /**
     * The TransferPriceDetails
     * @var \traveltainment\SOAP17\StructType\TransferPriceDetailsType
     */
    public $TransferPriceDetails;
    /**
     * Constructor method for TransferDetails4SearchType
     * @uses TransferDetails4SearchType::setServiceType()
     * @uses TransferDetails4SearchType::setPassengerRestriction()
     * @uses TransferDetails4SearchType::setDisabilityVehicleIndicator()
     * @uses TransferDetails4SearchType::setVehicles()
     * @uses TransferDetails4SearchType::setTransfers()
     * @uses TransferDetails4SearchType::setTransferPriceDetails()
     * @param string $serviceType
     * @param \traveltainment\SOAP17\StructType\PosIntIntervalType $passengerRestriction
     * @param bool $disabilityVehicleIndicator
     * @param \traveltainment\SOAP17\StructType\VehiclesType $vehicles
     * @param \traveltainment\SOAP17\StructType\Transfers4SearchType $transfers
     * @param \traveltainment\SOAP17\StructType\TransferPriceDetailsType $transferPriceDetails
     */
    public function __construct($serviceType = null, \traveltainment\SOAP17\StructType\PosIntIntervalType $passengerRestriction = null, $disabilityVehicleIndicator = null, \traveltainment\SOAP17\StructType\VehiclesType $vehicles = null, \traveltainment\SOAP17\StructType\Transfers4SearchType $transfers = null, \traveltainment\SOAP17\StructType\TransferPriceDetailsType $transferPriceDetails = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setPassengerRestriction($passengerRestriction)
            ->setDisabilityVehicleIndicator($disabilityVehicleIndicator)
            ->setVehicles($vehicles)
            ->setTransfers($transfers)
            ->setTransferPriceDetails($transferPriceDetails);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get PassengerRestriction value
     * @return \traveltainment\SOAP17\StructType\PosIntIntervalType|null
     */
    public function getPassengerRestriction()
    {
        return $this->PassengerRestriction;
    }
    /**
     * Set PassengerRestriction value
     * @param \traveltainment\SOAP17\StructType\PosIntIntervalType $passengerRestriction
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public function setPassengerRestriction(\traveltainment\SOAP17\StructType\PosIntIntervalType $passengerRestriction = null)
    {
        $this->PassengerRestriction = $passengerRestriction;
        return $this;
    }
    /**
     * Get DisabilityVehicleIndicator value
     * @return bool|null
     */
    public function getDisabilityVehicleIndicator()
    {
        return $this->DisabilityVehicleIndicator;
    }
    /**
     * Set DisabilityVehicleIndicator value
     * @param bool $disabilityVehicleIndicator
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public function setDisabilityVehicleIndicator($disabilityVehicleIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($disabilityVehicleIndicator) && !is_bool($disabilityVehicleIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disabilityVehicleIndicator)), __LINE__);
        }
        $this->DisabilityVehicleIndicator = $disabilityVehicleIndicator;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \traveltainment\SOAP17\StructType\VehiclesType|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \traveltainment\SOAP17\StructType\VehiclesType $vehicles
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public function setVehicles(\traveltainment\SOAP17\StructType\VehiclesType $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Transfers value
     * @return \traveltainment\SOAP17\StructType\Transfers4SearchType|null
     */
    public function getTransfers()
    {
        return $this->Transfers;
    }
    /**
     * Set Transfers value
     * @param \traveltainment\SOAP17\StructType\Transfers4SearchType $transfers
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public function setTransfers(\traveltainment\SOAP17\StructType\Transfers4SearchType $transfers = null)
    {
        $this->Transfers = $transfers;
        return $this;
    }
    /**
     * Get TransferPriceDetails value
     * @return \traveltainment\SOAP17\StructType\TransferPriceDetailsType|null
     */
    public function getTransferPriceDetails()
    {
        return $this->TransferPriceDetails;
    }
    /**
     * Set TransferPriceDetails value
     * @param \traveltainment\SOAP17\StructType\TransferPriceDetailsType $transferPriceDetails
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public function setTransferPriceDetails(\traveltainment\SOAP17\StructType\TransferPriceDetailsType $transferPriceDetails = null)
    {
        $this->TransferPriceDetails = $transferPriceDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType
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
