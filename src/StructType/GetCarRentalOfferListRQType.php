<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalOfferListRQType StructType
 * @subpackage Structs
 */
class GetCarRentalOfferListRQType extends RequestType
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The VehicleClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var VehicleClassEnum
     */
    public $VehicleClasses;
    /**
     * The AvailabilityStatus
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The Pickup
     * @var \traveltainment\SOAP17\StructType\CarRentalEventType
     */
    public $Pickup;
    /**
     * The Return
     * @var \traveltainment\SOAP17\StructType\CarRentalEventType
     */
    public $Return;
    /**
     * The MaxOffers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxOffers;
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * Constructor method for GetCarRentalOfferListRQType
     * @uses GetCarRentalOfferListRQType::setProviderID()
     * @uses GetCarRentalOfferListRQType::setVehicleClasses()
     * @uses GetCarRentalOfferListRQType::setAvailabilityStatus()
     * @uses GetCarRentalOfferListRQType::setPickup()
     * @uses GetCarRentalOfferListRQType::setReturn()
     * @uses GetCarRentalOfferListRQType::setMaxOffers()
     * @uses GetCarRentalOfferListRQType::setAdditionalCurrencies()
     * @param string $providerID
     * @param VehicleClassEnum $vehicleClasses
     * @param string $availabilityStatus
     * @param \traveltainment\SOAP17\StructType\CarRentalEventType $pickup
     * @param \traveltainment\SOAP17\StructType\CarRentalEventType $return
     * @param int $maxOffers
     * @param string $additionalCurrencies
     */
    public function __construct($providerID = null, VehicleClassEnum $vehicleClasses = null, $availabilityStatus = null, \traveltainment\SOAP17\StructType\CarRentalEventType $pickup = null, \traveltainment\SOAP17\StructType\CarRentalEventType $return = null, $maxOffers = null, $additionalCurrencies = null)
    {
        $this
            ->setProviderID($providerID)
            ->setVehicleClasses($vehicleClasses)
            ->setAvailabilityStatus($availabilityStatus)
            ->setPickup($pickup)
            ->setReturn($return)
            ->setMaxOffers($maxOffers)
            ->setAdditionalCurrencies($additionalCurrencies);
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
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
     * Get VehicleClasses value
     * @return VehicleClassEnum|null
     */
    public function getVehicleClasses()
    {
        return $this->VehicleClasses;
    }
    /**
     * Set VehicleClasses value
     * @param VehicleClassEnum $vehicleClasses
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
     */
    public function setVehicleClasses(VehicleClassEnum $vehicleClasses = null)
    {
        $this->VehicleClasses = $vehicleClasses;
        return $this;
    }
    /**
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @uses \traveltainment\SOAP17\EnumType\OTA_InventoryStatusEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OTA_InventoryStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availabilityStatus
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\OTA_InventoryStatusEnum::valueIsValid($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availabilityStatus, implode(', ', \traveltainment\SOAP17\EnumType\OTA_InventoryStatusEnum::getValidValues())), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get Pickup value
     * @return \traveltainment\SOAP17\StructType\CarRentalEventType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \traveltainment\SOAP17\StructType\CarRentalEventType $pickup
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
     */
    public function setPickup(\traveltainment\SOAP17\StructType\CarRentalEventType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Return value
     * @return \traveltainment\SOAP17\StructType\CarRentalEventType|null
     */
    public function getReturn()
    {
        return $this->Return;
    }
    /**
     * Set Return value
     * @param \traveltainment\SOAP17\StructType\CarRentalEventType $return
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
     */
    public function setReturn(\traveltainment\SOAP17\StructType\CarRentalEventType $return = null)
    {
        $this->Return = $return;
        return $this;
    }
    /**
     * Get MaxOffers value
     * @return int|null
     */
    public function getMaxOffers()
    {
        return $this->MaxOffers;
    }
    /**
     * Set MaxOffers value
     * @param int $maxOffers
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
     */
    public function setMaxOffers($maxOffers = null)
    {
        // validation for constraint: int
        if (!is_null($maxOffers) && !is_numeric($maxOffers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOffers)), __LINE__);
        }
        $this->MaxOffers = $maxOffers;
        return $this;
    }
    /**
     * Get AdditionalCurrencies value
     * @return string|null
     */
    public function getAdditionalCurrencies()
    {
        return $this->AdditionalCurrencies;
    }
    /**
     * Set AdditionalCurrencies value
     * @param string $additionalCurrencies
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
     */
    public function setAdditionalCurrencies($additionalCurrencies = null)
    {
        // validation for constraint: string
        if (!is_null($additionalCurrencies) && !is_string($additionalCurrencies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalCurrencies)), __LINE__);
        }
        $this->AdditionalCurrencies = $additionalCurrencies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferListRQType
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
