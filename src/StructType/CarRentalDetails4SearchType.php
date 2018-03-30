<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalDetails4SearchType StructType
 * @subpackage Structs
 */
class CarRentalDetails4SearchType extends AbstractStructBase
{
    /**
     * The Pickup
     * @var \traveltainment\SOAP17\StructType\CarRentalPickupInfoType
     */
    public $Pickup;
    /**
     * The Return
     * @var \traveltainment\SOAP17\StructType\CarRentalReturnInfoType
     */
    public $Return;
    /**
     * The AvailabilityStatus
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The DayRate
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $DayRate;
    /**
     * The ExtendedDayRate
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $ExtendedDayRate;
    /**
     * The VehicleDetails
     * @var \traveltainment\SOAP17\StructType\VehicleDetailsType
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
     * @param \traveltainment\SOAP17\StructType\CarRentalPickupInfoType $pickup
     * @param \traveltainment\SOAP17\StructType\CarRentalReturnInfoType $return
     * @param string $availabilityStatus
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $dayRate
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $extendedDayRate
     * @param \traveltainment\SOAP17\StructType\VehicleDetailsType $vehicleDetails
     */
    public function __construct(\traveltainment\SOAP17\StructType\CarRentalPickupInfoType $pickup = null, \traveltainment\SOAP17\StructType\CarRentalReturnInfoType $return = null, $availabilityStatus = null, \traveltainment\SOAP17\StructType\SimplePriceType $dayRate = null, \traveltainment\SOAP17\StructType\PriceInformationType $extendedDayRate = null, \traveltainment\SOAP17\StructType\VehicleDetailsType $vehicleDetails = null)
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
     * @return \traveltainment\SOAP17\StructType\CarRentalPickupInfoType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \traveltainment\SOAP17\StructType\CarRentalPickupInfoType $pickup
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
     */
    public function setPickup(\traveltainment\SOAP17\StructType\CarRentalPickupInfoType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Return value
     * @return \traveltainment\SOAP17\StructType\CarRentalReturnInfoType|null
     */
    public function getReturn()
    {
        return $this->Return;
    }
    /**
     * Set Return value
     * @param \traveltainment\SOAP17\StructType\CarRentalReturnInfoType $return
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
     */
    public function setReturn(\traveltainment\SOAP17\StructType\CarRentalReturnInfoType $return = null)
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
     * @uses \traveltainment\SOAP17\EnumType\OTA_InventoryStatusEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OTA_InventoryStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availabilityStatus
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
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
     * Get DayRate value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getDayRate()
    {
        return $this->DayRate;
    }
    /**
     * Set DayRate value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $dayRate
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
     */
    public function setDayRate(\traveltainment\SOAP17\StructType\SimplePriceType $dayRate = null)
    {
        $this->DayRate = $dayRate;
        return $this;
    }
    /**
     * Get ExtendedDayRate value
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getExtendedDayRate()
    {
        return $this->ExtendedDayRate;
    }
    /**
     * Set ExtendedDayRate value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $extendedDayRate
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
     */
    public function setExtendedDayRate(\traveltainment\SOAP17\StructType\PriceInformationType $extendedDayRate = null)
    {
        $this->ExtendedDayRate = $extendedDayRate;
        return $this;
    }
    /**
     * Get VehicleDetails value
     * @return \traveltainment\SOAP17\StructType\VehicleDetailsType|null
     */
    public function getVehicleDetails()
    {
        return $this->VehicleDetails;
    }
    /**
     * Set VehicleDetails value
     * @param \traveltainment\SOAP17\StructType\VehicleDetailsType $vehicleDetails
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
     */
    public function setVehicleDetails(\traveltainment\SOAP17\StructType\VehicleDetailsType $vehicleDetails = null)
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDetails4SearchType
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
