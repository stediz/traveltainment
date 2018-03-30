<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParkingTeaserRQType StructType
 * @subpackage Structs
 */
class GetParkingTeaserRQType extends RequestType
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
     * @var \traveltainment\SOAP17\StructType\ParkingDateTimesType
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
     * The WithDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WithDetails;
    /**
     * Constructor method for GetParkingTeaserRQType
     * @uses GetParkingTeaserRQType::setSessionID()
     * @uses GetParkingTeaserRQType::setProviderID()
     * @uses GetParkingTeaserRQType::setParkingDateTimes()
     * @uses GetParkingTeaserRQType::setAdditionalCurrencies()
     * @uses GetParkingTeaserRQType::setWithDetails()
     * @param string $sessionID
     * @param string $providerID
     * @param \traveltainment\SOAP17\StructType\ParkingDateTimesType $parkingDateTimes
     * @param string $additionalCurrencies
     * @param bool $withDetails
     */
    public function __construct($sessionID = null, $providerID = null, \traveltainment\SOAP17\StructType\ParkingDateTimesType $parkingDateTimes = null, $additionalCurrencies = null, $withDetails = null)
    {
        $this
            ->setSessionID($sessionID)
            ->setProviderID($providerID)
            ->setParkingDateTimes($parkingDateTimes)
            ->setAdditionalCurrencies($additionalCurrencies)
            ->setWithDetails($withDetails);
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
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRQType
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
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRQType
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
     * @return \traveltainment\SOAP17\StructType\ParkingDateTimesType|null
     */
    public function getParkingDateTimes()
    {
        return $this->ParkingDateTimes;
    }
    /**
     * Set ParkingDateTimes value
     * @param \traveltainment\SOAP17\StructType\ParkingDateTimesType $parkingDateTimes
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRQType
     */
    public function setParkingDateTimes(\traveltainment\SOAP17\StructType\ParkingDateTimesType $parkingDateTimes = null)
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
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRQType
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
     * Get WithDetails value
     * @return bool|null
     */
    public function getWithDetails()
    {
        return $this->WithDetails;
    }
    /**
     * Set WithDetails value
     * @param bool $withDetails
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRQType
     */
    public function setWithDetails($withDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($withDetails) && !is_bool($withDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($withDetails)), __LINE__);
        }
        $this->WithDetails = $withDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRQType
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
