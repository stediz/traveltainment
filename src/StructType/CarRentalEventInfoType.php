<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalEventInfoType StructType
 * @subpackage Structs
 */
class CarRentalEventInfoType extends AbstractStructBase
{
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
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
     * The OpeningHourDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OpeningHourDetailsType
     */
    public $OpeningHourDetails;
    /**
     * Constructor method for CarRentalEventInfoType
     * @uses CarRentalEventInfoType::setDateTime()
     * @uses CarRentalEventInfoType::setLocationCode()
     * @uses CarRentalEventInfoType::setLocationName()
     * @uses CarRentalEventInfoType::setOpeningHourDetails()
     * @param string $dateTime
     * @param string $locationCode
     * @param string $locationName
     * @param \traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails
     */
    public function __construct($dateTime = null, $locationCode = null, $locationName = null, \traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setLocationCode($locationCode)
            ->setLocationName($locationName)
            ->setOpeningHourDetails($openingHourDetails);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
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
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType
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
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType
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
     * Get OpeningHourDetails value
     * @return \traveltainment\SOAP17\StructType\OpeningHourDetailsType|null
     */
    public function getOpeningHourDetails()
    {
        return $this->OpeningHourDetails;
    }
    /**
     * Set OpeningHourDetails value
     * @param \traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType
     */
    public function setOpeningHourDetails(\traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails = null)
    {
        $this->OpeningHourDetails = $openingHourDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalEventInfoType
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
