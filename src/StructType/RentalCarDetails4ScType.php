<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalCarDetails4ScType StructType
 * @subpackage Structs
 */
class RentalCarDetails4ScType extends AbstractStructBase
{
    /**
     * The ProductName
     * @var string
     */
    public $ProductName;
    /**
     * The VehicleClass
     * @var string
     */
    public $VehicleClass;
    /**
     * The ProviderInfoMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ProviderInfoMessagesType
     */
    public $ProviderInfoMessages;
    /**
     * The Pickup
     * @var \StructType\CarRentalEventInfoType
     */
    public $Pickup;
    /**
     * The Return
     * @var \StructType\CarRentalEventInfoType
     */
    public $Return;
    /**
     * The ReplacementDriver
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CarRentalDriverType
     */
    public $ReplacementDriver;
    /**
     * Constructor method for RentalCarDetails4ScType
     * @uses RentalCarDetails4ScType::setProductName()
     * @uses RentalCarDetails4ScType::setVehicleClass()
     * @uses RentalCarDetails4ScType::setProviderInfoMessages()
     * @uses RentalCarDetails4ScType::setPickup()
     * @uses RentalCarDetails4ScType::setReturn()
     * @uses RentalCarDetails4ScType::setReplacementDriver()
     * @param string $productName
     * @param string $vehicleClass
     * @param \StructType\ProviderInfoMessagesType $providerInfoMessages
     * @param \StructType\CarRentalEventInfoType $pickup
     * @param \StructType\CarRentalEventInfoType $return
     * @param \StructType\CarRentalDriverType $replacementDriver
     */
    public function __construct($productName = null, $vehicleClass = null, \StructType\ProviderInfoMessagesType $providerInfoMessages = null, \StructType\CarRentalEventInfoType $pickup = null, \StructType\CarRentalEventInfoType $return = null, \StructType\CarRentalDriverType $replacementDriver = null)
    {
        $this
            ->setProductName($productName)
            ->setVehicleClass($vehicleClass)
            ->setProviderInfoMessages($providerInfoMessages)
            ->setPickup($pickup)
            ->setReturn($return)
            ->setReplacementDriver($replacementDriver);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \StructType\RentalCarDetails4ScType
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
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
     * @return \StructType\RentalCarDetails4ScType
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
     * Get ProviderInfoMessages value
     * @return \StructType\ProviderInfoMessagesType|null
     */
    public function getProviderInfoMessages()
    {
        return $this->ProviderInfoMessages;
    }
    /**
     * Set ProviderInfoMessages value
     * @param \StructType\ProviderInfoMessagesType $providerInfoMessages
     * @return \StructType\RentalCarDetails4ScType
     */
    public function setProviderInfoMessages(\StructType\ProviderInfoMessagesType $providerInfoMessages = null)
    {
        $this->ProviderInfoMessages = $providerInfoMessages;
        return $this;
    }
    /**
     * Get Pickup value
     * @return \StructType\CarRentalEventInfoType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \StructType\CarRentalEventInfoType $pickup
     * @return \StructType\RentalCarDetails4ScType
     */
    public function setPickup(\StructType\CarRentalEventInfoType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Return value
     * @return \StructType\CarRentalEventInfoType|null
     */
    public function getReturn()
    {
        return $this->Return;
    }
    /**
     * Set Return value
     * @param \StructType\CarRentalEventInfoType $return
     * @return \StructType\RentalCarDetails4ScType
     */
    public function setReturn(\StructType\CarRentalEventInfoType $return = null)
    {
        $this->Return = $return;
        return $this;
    }
    /**
     * Get ReplacementDriver value
     * @return \StructType\CarRentalDriverType|null
     */
    public function getReplacementDriver()
    {
        return $this->ReplacementDriver;
    }
    /**
     * Set ReplacementDriver value
     * @param \StructType\CarRentalDriverType $replacementDriver
     * @return \StructType\RentalCarDetails4ScType
     */
    public function setReplacementDriver(\StructType\CarRentalDriverType $replacementDriver = null)
    {
        $this->ReplacementDriver = $replacementDriver;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RentalCarDetails4ScType
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
