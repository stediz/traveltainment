<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalDataType StructType
 * @subpackage Structs
 */
class CarRentalDataType extends AbstractStructBase
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The ProductName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductName;
    /**
     * The VehicleCode
     * Meta informations extracted from the WSDL
     * - maxLength: 18
     * - minLength: 1
     * @var string
     */
    public $VehicleCode;
    /**
     * The VehicleClass
     * @var string
     */
    public $VehicleClass;
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
     * The ReplacementDriver
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CarRentalDriverType
     */
    public $ReplacementDriver;
    /**
     * The CarRentalCost
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $CarRentalCost;
    /**
     * Constructor method for CarRentalDataType
     * @uses CarRentalDataType::setProviderID()
     * @uses CarRentalDataType::setProductName()
     * @uses CarRentalDataType::setVehicleCode()
     * @uses CarRentalDataType::setVehicleClass()
     * @uses CarRentalDataType::setPickup()
     * @uses CarRentalDataType::setReturn()
     * @uses CarRentalDataType::setReplacementDriver()
     * @uses CarRentalDataType::setCarRentalCost()
     * @param string $providerID
     * @param string $productName
     * @param string $vehicleCode
     * @param string $vehicleClass
     * @param \traveltainment\SOAP17\StructType\CarRentalEventType $pickup
     * @param \traveltainment\SOAP17\StructType\CarRentalEventType $return
     * @param \traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $carRentalCost
     */
    public function __construct($providerID = null, $productName = null, $vehicleCode = null, $vehicleClass = null, \traveltainment\SOAP17\StructType\CarRentalEventType $pickup = null, \traveltainment\SOAP17\StructType\CarRentalEventType $return = null, \traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver = null, \traveltainment\SOAP17\StructType\SimplePriceType $carRentalCost = null)
    {
        $this
            ->setProviderID($providerID)
            ->setProductName($productName)
            ->setVehicleCode($vehicleCode)
            ->setVehicleClass($vehicleClass)
            ->setPickup($pickup)
            ->setReturn($return)
            ->setReplacementDriver($replacementDriver)
            ->setCarRentalCost($carRentalCost);
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
     */
    public function setReturn(\traveltainment\SOAP17\StructType\CarRentalEventType $return = null)
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
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
     */
    public function setReplacementDriver(\traveltainment\SOAP17\StructType\CarRentalDriverType $replacementDriver = null)
    {
        $this->ReplacementDriver = $replacementDriver;
        return $this;
    }
    /**
     * Get CarRentalCost value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getCarRentalCost()
    {
        return $this->CarRentalCost;
    }
    /**
     * Set CarRentalCost value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $carRentalCost
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
     */
    public function setCarRentalCost(\traveltainment\SOAP17\StructType\SimplePriceType $carRentalCost = null)
    {
        $this->CarRentalCost = $carRentalCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType
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
