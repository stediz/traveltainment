<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParkingOfferListRQType StructType
 * @subpackage Structs
 */
class GetParkingOfferListRQType extends RequestType
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
     * The ParkingDateTimes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ParkingDateTimesType
     */
    public $ParkingDateTimes;
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * Constructor method for GetParkingOfferListRQType
     * @uses GetParkingOfferListRQType::setSessionID()
     * @uses GetParkingOfferListRQType::setProviderID()
     * @uses GetParkingOfferListRQType::setParkingDateTimes()
     * @uses GetParkingOfferListRQType::setAdditionalCurrencies()
     * @param string $sessionID
     * @param string $providerID
     * @param \StructType\ParkingDateTimesType $parkingDateTimes
     * @param string $additionalCurrencies
     */
    public function __construct($sessionID = null, $providerID = null, \StructType\ParkingDateTimesType $parkingDateTimes = null, $additionalCurrencies = null)
    {
        $this
            ->setSessionID($sessionID)
            ->setProviderID($providerID)
            ->setParkingDateTimes($parkingDateTimes)
            ->setAdditionalCurrencies($additionalCurrencies);
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
     * @return \StructType\GetParkingOfferListRQType
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
     * @return \StructType\GetParkingOfferListRQType
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
     * Get ParkingDateTimes value
     * @return \StructType\ParkingDateTimesType|null
     */
    public function getParkingDateTimes()
    {
        return $this->ParkingDateTimes;
    }
    /**
     * Set ParkingDateTimes value
     * @param \StructType\ParkingDateTimesType $parkingDateTimes
     * @return \StructType\GetParkingOfferListRQType
     */
    public function setParkingDateTimes(\StructType\ParkingDateTimesType $parkingDateTimes = null)
    {
        $this->ParkingDateTimes = $parkingDateTimes;
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
     * @return \StructType\GetParkingOfferListRQType
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
     * @return \StructType\GetParkingOfferListRQType
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
