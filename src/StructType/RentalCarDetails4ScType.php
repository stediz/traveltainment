<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\ProviderInfoMessagesType
     */
    public $ProviderInfoMessages;
    /**
     * The Pickup
     * @var \traveltainment\SOAP17\StructType\CarRentalEventInfoType
     */
    public $Pickup;
    /**
     * The Return
     * @var \traveltainment\SOAP17\StructType\CarRentalEventInfoType
     */
    public $Return;
    /**
     * The ReplacementDriver
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CarRentalDriverType
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
     * @param \traveltainment\SOAP17\StructType\ProviderInfoMessagesType $providerInfoMessages
     * @param \traveltainment\SOAP17\StructType\CarRentalEventInfoType $pickup
     * @param \traveltainment\SOAP17\StructType\CarRentalEventInfoType $return
     * @param \traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver
     */
    public function __construct($productName = null, $vehicleClass = null, \traveltainment\SOAP17\StructType\ProviderInfoMessagesType $providerInfoMessages = null, \traveltainment\SOAP17\StructType\CarRentalEventInfoType $pickup = null, \traveltainment\SOAP17\StructType\CarRentalEventInfoType $return = null, \traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver = null)
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
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
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
     * @uses \traveltainment\SOAP17\EnumType\VehicleClassEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\VehicleClassEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleClass
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
     */
    public function setVehicleClass($vehicleClass = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\VehicleClassEnum::valueIsValid($vehicleClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleClass, implode(', ', \traveltainment\SOAP17\EnumType\VehicleClassEnum::getValidValues())), __LINE__);
        }
        $this->VehicleClass = $vehicleClass;
        return $this;
    }
    /**
     * Get ProviderInfoMessages value
     * @return \traveltainment\SOAP17\StructType\ProviderInfoMessagesType|null
     */
    public function getProviderInfoMessages()
    {
        return $this->ProviderInfoMessages;
    }
    /**
     * Set ProviderInfoMessages value
     * @param \traveltainment\SOAP17\StructType\ProviderInfoMessagesType $providerInfoMessages
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
     */
    public function setProviderInfoMessages(\traveltainment\SOAP17\StructType\ProviderInfoMessagesType $providerInfoMessages = null)
    {
        $this->ProviderInfoMessages = $providerInfoMessages;
        return $this;
    }
    /**
     * Get Pickup value
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \traveltainment\SOAP17\StructType\CarRentalEventInfoType $pickup
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
     */
    public function setPickup(\traveltainment\SOAP17\StructType\CarRentalEventInfoType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Return value
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType|null
     */
    public function getReturn()
    {
        return $this->Return;
    }
    /**
     * Set Return value
     * @param \traveltainment\SOAP17\StructType\CarRentalEventInfoType $return
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
     */
    public function setReturn(\traveltainment\SOAP17\StructType\CarRentalEventInfoType $return = null)
    {
        $this->Return = $return;
        return $this;
    }
    /**
     * Get ReplacementDriver value
     * @return \traveltainment\SOAP17\StructType\CarRentalDriverType|null
     */
    public function getReplacementDriver()
    {
        return $this->ReplacementDriver;
    }
    /**
     * Set ReplacementDriver value
     * @param \traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
     */
    public function setReplacementDriver(\traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver = null)
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
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
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
