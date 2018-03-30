<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalLocationType StructType
 * @subpackage Structs
 */
class CarRentalLocationType extends AbstractStructBase
{
    /**
     * The IsAtAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAtAirport;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $LocationCode;
    /**
     * The LocationName
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * - minLength: 1
     * @var string
     */
    public $LocationName;
    /**
     * The OperatingProviderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperatingProviderName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AddressShortType
     */
    public $Address;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 32
     * - minLength: 1
     * @var string
     */
    public $PhoneNumber;
    /**
     * Constructor method for CarRentalLocationType
     * @uses CarRentalLocationType::setIsAtAirport()
     * @uses CarRentalLocationType::setLocationCode()
     * @uses CarRentalLocationType::setLocationName()
     * @uses CarRentalLocationType::setOperatingProviderName()
     * @uses CarRentalLocationType::setAddress()
     * @uses CarRentalLocationType::setPhoneNumber()
     * @param bool $isAtAirport
     * @param string $locationCode
     * @param string $locationName
     * @param string $operatingProviderName
     * @param \traveltainment\SOAP17\StructType\AddressShortType $address
     * @param string $phoneNumber
     */
    public function __construct($isAtAirport = null, $locationCode = null, $locationName = null, $operatingProviderName = null, \traveltainment\SOAP17\StructType\AddressShortType $address = null, $phoneNumber = null)
    {
        $this
            ->setIsAtAirport($isAtAirport)
            ->setLocationCode($locationCode)
            ->setLocationName($locationName)
            ->setOperatingProviderName($operatingProviderName)
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get IsAtAirport value
     * @return bool|null
     */
    public function getIsAtAirport()
    {
        return $this->IsAtAirport;
    }
    /**
     * Set IsAtAirport value
     * @param bool $isAtAirport
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
     */
    public function setIsAtAirport($isAtAirport = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAtAirport) && !is_bool($isAtAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAtAirport)), __LINE__);
        }
        $this->IsAtAirport = $isAtAirport;
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($locationCode) && strlen($locationCode) > 16) || (is_array($locationCode) && count($locationCode) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($locationCode) ? strlen($locationCode) : count($locationCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($locationCode) && strlen($locationCode) < 1) || (is_array($locationCode) && count($locationCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Get LocationName value
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }
    /**
     * Set LocationName value
     * @param string $locationName
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
     */
    public function setLocationName($locationName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($locationName) && strlen($locationName) > 64) || (is_array($locationName) && count($locationName) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($locationName) ? strlen($locationName) : count($locationName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($locationName) && strlen($locationName) < 1) || (is_array($locationName) && count($locationName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationName)), __LINE__);
        }
        $this->LocationName = $locationName;
        return $this;
    }
    /**
     * Get OperatingProviderName value
     * @return string|null
     */
    public function getOperatingProviderName()
    {
        return $this->OperatingProviderName;
    }
    /**
     * Set OperatingProviderName value
     * @param string $operatingProviderName
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
     */
    public function setOperatingProviderName($operatingProviderName = null)
    {
        // validation for constraint: string
        if (!is_null($operatingProviderName) && !is_string($operatingProviderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingProviderName)), __LINE__);
        }
        $this->OperatingProviderName = $operatingProviderName;
        return $this;
    }
    /**
     * Get Address value
     * @return \traveltainment\SOAP17\StructType\AddressShortType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \traveltainment\SOAP17\StructType\AddressShortType $address
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
     */
    public function setAddress(\traveltainment\SOAP17\StructType\AddressShortType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($phoneNumber) && strlen($phoneNumber) > 32) || (is_array($phoneNumber) && count($phoneNumber) > 32)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 32 element(s) or a scalar of 32 character(s) at most, "%d" length given', is_scalar($phoneNumber) ? strlen($phoneNumber) : count($phoneNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($phoneNumber) && strlen($phoneNumber) < 1) || (is_array($phoneNumber) && count($phoneNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType
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
