<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalDetails4SearchType StructType
 * @subpackage Structs
 */
class CarRentalDetails4SearchType extends AbstractStructBase
{
    /**
     * The Pickup
     * @var \StructType\CarRentalPickupInfoType
     */
    public $Pickup;
    /**
     * The Return
     * @var \StructType\CarRentalReturnInfoType
     */
    public $Return;
    /**
     * The AvailabilityStatus
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The DayRate
     * @var \StructType\SimplePriceType
     */
    public $DayRate;
    /**
     * The ExtendedDayRate
     * @var \StructType\PriceInformationType
     */
    public $ExtendedDayRate;
    /**
     * The VehicleDetails
     * @var \StructType\VehicleDetailsType
     */
    public $VehicleDetails;
    /**
     * Constructor method for CarRentalDetails4SearchType
     * @uses CarRentalDetails4SearchType::setPickup()
     * @uses CarRentalDetails4SearchType::setReturn()
     * @uses CarRentalDetails4SearchType::setAvailabilityStatus()
     * @uses CarRentalDetails4SearchType::setDayRate()
     * @uses CarRentalDetails4SearchType::setExtendedDayRate()
     * @uses CarRentalDetails4SearchType::setVehicleDetails()
     * @param \StructType\CarRentalPickupInfoType $pickup
     * @param \StructType\CarRentalReturnInfoType $return
     * @param string $availabilityStatus
     * @param \StructType\SimplePriceType $dayRate
     * @param \StructType\PriceInformationType $extendedDayRate
     * @param \StructType\VehicleDetailsType $vehicleDetails
     */
    public function __construct(\StructType\CarRentalPickupInfoType $pickup = null, \StructType\CarRentalReturnInfoType $return = null, $availabilityStatus = null, \StructType\SimplePriceType $dayRate = null, \StructType\PriceInformationType $extendedDayRate = null, \StructType\VehicleDetailsType $vehicleDetails = null)
    {
        $this
            ->setPickup($pickup)
            ->setReturn($return)
            ->setAvailabilityStatus($availabilityStatus)
            ->setDayRate($dayRate)
            ->setExtendedDayRate($extendedDayRate)
            ->setVehicleDetails($vehicleDetails);
    }
    /**
     * Get Pickup value
     * @return \StructType\CarRentalPickupInfoType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \StructType\CarRentalPickupInfoType $pickup
     * @return \StructType\CarRentalDetails4SearchType
     */
    public function setPickup(\StructType\CarRentalPickupInfoType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Return value
     * @return \StructType\CarRentalReturnInfoType|null
     */
    public function getReturn()
    {
        return $this->Return;
    }
    /**
     * Set Return value
     * @param \StructType\CarRentalReturnInfoType $return
     * @return \StructType\CarRentalDetails4SearchType
     */
    public function setReturn(\StructType\CarRentalReturnInfoType $return = null)
    {
        $this->Return = $return;
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
     * @uses \EnumType\OTA_InventoryStatusEnum::valueIsValid()
     * @uses \EnumType\OTA_InventoryStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availabilityStatus
     * @return \StructType\CarRentalDetails4SearchType
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OTA_InventoryStatusEnum::valueIsValid($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availabilityStatus, implode(', ', \EnumType\OTA_InventoryStatusEnum::getValidValues())), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get DayRate value
     * @return \StructType\SimplePriceType|null
     */
    public function getDayRate()
    {
        return $this->DayRate;
    }
    /**
     * Set DayRate value
     * @param \StructType\SimplePriceType $dayRate
     * @return \StructType\CarRentalDetails4SearchType
     */
    public function setDayRate(\StructType\SimplePriceType $dayRate = null)
    {
        $this->DayRate = $dayRate;
        return $this;
    }
    /**
     * Get ExtendedDayRate value
     * @return \StructType\PriceInformationType|null
     */
    public function getExtendedDayRate()
    {
        return $this->ExtendedDayRate;
    }
    /**
     * Set ExtendedDayRate value
     * @param \StructType\PriceInformationType $extendedDayRate
     * @return \StructType\CarRentalDetails4SearchType
     */
    public function setExtendedDayRate(\StructType\PriceInformationType $extendedDayRate = null)
    {
        $this->ExtendedDayRate = $extendedDayRate;
        return $this;
    }
    /**
     * Get VehicleDetails value
     * @return \StructType\VehicleDetailsType|null
     */
    public function getVehicleDetails()
    {
        return $this->VehicleDetails;
    }
    /**
     * Set VehicleDetails value
     * @param \StructType\VehicleDetailsType $vehicleDetails
     * @return \StructType\CarRentalDetails4SearchType
     */
    public function setVehicleDetails(\StructType\VehicleDetailsType $vehicleDetails = null)
    {
        $this->VehicleDetails = $vehicleDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CarRentalDetails4SearchType
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
