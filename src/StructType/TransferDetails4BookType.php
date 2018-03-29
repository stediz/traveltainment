<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferDetails4BookType StructType
 * @subpackage Structs
 */
class TransferDetails4BookType extends AbstractStructBase
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The TravellerContacts
     * @var \StructType\ContactsType
     */
    public $TravellerContacts;
    /**
     * The TransferCost
     * Meta informations extracted from the WSDL
     * - documentation: Der Gesamtpreis des Transfers.
     * @var \StructType\SimplePriceType
     */
    public $TransferCost;
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
     * @var \StructType\VehiclesType
     */
    public $Vehicles;
    /**
     * The Transfers
     * @var \StructType\Transfers4BookType
     */
    public $Transfers;
    /**
     * Constructor method for TransferDetails4BookType
     * @uses TransferDetails4BookType::setProviderID()
     * @uses TransferDetails4BookType::setTravellerContacts()
     * @uses TransferDetails4BookType::setTransferCost()
     * @uses TransferDetails4BookType::setTransferType()
     * @uses TransferDetails4BookType::setServiceType()
     * @uses TransferDetails4BookType::setDisabilityVehicleIndicator()
     * @uses TransferDetails4BookType::setVehicles()
     * @uses TransferDetails4BookType::setTransfers()
     * @param string $providerID
     * @param \StructType\ContactsType $travellerContacts
     * @param \StructType\SimplePriceType $transferCost
     * @param string $transferType
     * @param string $serviceType
     * @param bool $disabilityVehicleIndicator
     * @param \StructType\VehiclesType $vehicles
     * @param \StructType\Transfers4BookType $transfers
     */
    public function __construct($providerID = null, \StructType\ContactsType $travellerContacts = null, \StructType\SimplePriceType $transferCost = null, $transferType = null, $serviceType = null, $disabilityVehicleIndicator = null, \StructType\VehiclesType $vehicles = null, \StructType\Transfers4BookType $transfers = null)
    {
        $this
            ->setProviderID($providerID)
            ->setTravellerContacts($travellerContacts)
            ->setTransferCost($transferCost)
            ->setTransferType($transferType)
            ->setServiceType($serviceType)
            ->setDisabilityVehicleIndicator($disabilityVehicleIndicator)
            ->setVehicles($vehicles)
            ->setTransfers($transfers);
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
     * @return \StructType\TransferDetails4BookType
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
     * Get TravellerContacts value
     * @return \StructType\ContactsType|null
     */
    public function getTravellerContacts()
    {
        return $this->TravellerContacts;
    }
    /**
     * Set TravellerContacts value
     * @param \StructType\ContactsType $travellerContacts
     * @return \StructType\TransferDetails4BookType
     */
    public function setTravellerContacts(\StructType\ContactsType $travellerContacts = null)
    {
        $this->TravellerContacts = $travellerContacts;
        return $this;
    }
    /**
     * Get TransferCost value
     * @return \StructType\SimplePriceType|null
     */
    public function getTransferCost()
    {
        return $this->TransferCost;
    }
    /**
     * Set TransferCost value
     * @param \StructType\SimplePriceType $transferCost
     * @return \StructType\TransferDetails4BookType
     */
    public function setTransferCost(\StructType\SimplePriceType $transferCost = null)
    {
        $this->TransferCost = $transferCost;
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
     * @uses \EnumType\TransferTypeEnum::valueIsValid()
     * @uses \EnumType\TransferTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transferType
     * @return \StructType\TransferDetails4BookType
     */
    public function setTransferType($transferType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransferTypeEnum::valueIsValid($transferType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transferType, implode(', ', \EnumType\TransferTypeEnum::getValidValues())), __LINE__);
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
     * @return \StructType\TransferDetails4BookType
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
     * @return \StructType\TransferDetails4BookType
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
     * @return \StructType\VehiclesType|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \StructType\VehiclesType $vehicles
     * @return \StructType\TransferDetails4BookType
     */
    public function setVehicles(\StructType\VehiclesType $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Transfers value
     * @return \StructType\Transfers4BookType|null
     */
    public function getTransfers()
    {
        return $this->Transfers;
    }
    /**
     * Set Transfers value
     * @param \StructType\Transfers4BookType $transfers
     * @return \StructType\TransferDetails4BookType
     */
    public function setTransfers(\StructType\Transfers4BookType $transfers = null)
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
     * @return \StructType\TransferDetails4BookType
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
