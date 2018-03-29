<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalLocationsRQType StructType
 * @subpackage Structs
 */
class GetCarRentalLocationsRQType extends RequestType
{
    /**
     * The SessionID
     * @var string
     */
    public $SessionID;
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CarRentalLocationCodeType
     */
    public $Location;
    /**
     * Constructor method for GetCarRentalLocationsRQType
     * @uses GetCarRentalLocationsRQType::setSessionID()
     * @uses GetCarRentalLocationsRQType::setProviderID()
     * @uses GetCarRentalLocationsRQType::setLocation()
     * @param string $sessionID
     * @param string $providerID
     * @param \StructType\CarRentalLocationCodeType $location
     */
    public function __construct($sessionID = null, $providerID = null, \StructType\CarRentalLocationCodeType $location = null)
    {
        $this
            ->setSessionID($sessionID)
            ->setProviderID($providerID)
            ->setLocation($location);
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \StructType\GetCarRentalLocationsRQType
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
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
     * @return \StructType\GetCarRentalLocationsRQType
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
     * Get Location value
     * @return \StructType\CarRentalLocationCodeType|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \StructType\CarRentalLocationCodeType $location
     * @return \StructType\GetCarRentalLocationsRQType
     */
    public function setLocation(\StructType\CarRentalLocationCodeType $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCarRentalLocationsRQType
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
