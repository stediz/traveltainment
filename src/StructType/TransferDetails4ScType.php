<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferDetails4ScType StructType
 * @subpackage Structs
 */
class TransferDetails4ScType extends AbstractStructBase
{
    /**
     * The TravellerContacts
     * @var \traveltainment\SOAP17\StructType\ContactsType
     */
    public $TravellerContacts;
    /**
     * The TransferType
     * @var string
     */
    public $TransferType;
    /**
     * The ServiceType
     * @var string
     */
    public $ServiceType;
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
     * @var \traveltainment\SOAP17\StructType\Transfers4BookType
     */
    public $Transfers;
    /**
     * Constructor method for TransferDetails4ScType
     * @uses TransferDetails4ScType::setTravellerContacts()
     * @uses TransferDetails4ScType::setTransferType()
     * @uses TransferDetails4ScType::setServiceType()
     * @uses TransferDetails4ScType::setDisabilityVehicleIndicator()
     * @uses TransferDetails4ScType::setVehicles()
     * @uses TransferDetails4ScType::setTransfers()
     * @param \traveltainment\SOAP17\StructType\ContactsType $travellerContacts
     * @param string $transferType
     * @param string $serviceType
     * @param bool $disabilityVehicleIndicator
     * @param \traveltainment\SOAP17\StructType\VehiclesType $vehicles
     * @param \traveltainment\SOAP17\StructType\Transfers4BookType $transfers
     */
    public function __construct(\traveltainment\SOAP17\StructType\ContactsType $travellerContacts = null, $transferType = null, $serviceType = null, $disabilityVehicleIndicator = null, \traveltainment\SOAP17\StructType\VehiclesType $vehicles = null, \traveltainment\SOAP17\StructType\Transfers4BookType $transfers = null)
    {
        $this
            ->setTravellerContacts($travellerContacts)
            ->setTransferType($transferType)
            ->setServiceType($serviceType)
            ->setDisabilityVehicleIndicator($disabilityVehicleIndicator)
            ->setVehicles($vehicles)
            ->setTransfers($transfers);
    }
    /**
     * Get TravellerContacts value
     * @return \traveltainment\SOAP17\StructType\ContactsType|null
     */
    public function getTravellerContacts()
    {
        return $this->TravellerContacts;
    }
    /**
     * Set TravellerContacts value
     * @param \traveltainment\SOAP17\StructType\ContactsType $travellerContacts
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
     */
    public function setTravellerContacts(\traveltainment\SOAP17\StructType\ContactsType $travellerContacts = null)
    {
        $this->TravellerContacts = $travellerContacts;
        return $this;
    }
    /**
     * Get TransferType value
     * @return string|null
     */
    public function getTransferType()
    {
        return $this->TransferType;
    }
    /**
     * Set TransferType value
     * @uses \traveltainment\SOAP17\EnumType\TransferTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\TransferTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transferType
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
     */
    public function setTransferType($transferType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\TransferTypeEnum::valueIsValid($transferType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transferType, implode(', ', \traveltainment\SOAP17\EnumType\TransferTypeEnum::getValidValues())), __LINE__);
        }
        $this->TransferType = $transferType;
        return $this;
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
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
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
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
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
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
     */
    public function setVehicles(\traveltainment\SOAP17\StructType\VehiclesType $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Transfers value
     * @return \traveltainment\SOAP17\StructType\Transfers4BookType|null
     */
    public function getTransfers()
    {
        return $this->Transfers;
    }
    /**
     * Set Transfers value
     * @param \traveltainment\SOAP17\StructType\Transfers4BookType $transfers
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
     */
    public function setTransfers(\traveltainment\SOAP17\StructType\Transfers4BookType $transfers = null)
    {
        $this->Transfers = $transfers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType
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
