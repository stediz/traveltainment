<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalStationDetailsRSType StructType
 * @subpackage Structs
 */
class GetCarRentalStationDetailsRSType extends ResponseType
{
    /**
     * The Errors
     * @var \traveltainment\SOAP17\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The NoDetailsReason
     * @var string
     */
    public $NoDetailsReason;
    /**
     * The StationCode
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $StationCode;
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
     * The Details
     * @var \traveltainment\SOAP17\StructType\CarRentalStationDetailsType
     */
    public $Details;
    /**
     * Constructor method for GetCarRentalStationDetailsRSType
     * @uses GetCarRentalStationDetailsRSType::setErrors()
     * @uses GetCarRentalStationDetailsRSType::setNoDetailsReason()
     * @uses GetCarRentalStationDetailsRSType::setStationCode()
     * @uses GetCarRentalStationDetailsRSType::setLocationName()
     * @uses GetCarRentalStationDetailsRSType::setOperatingProviderName()
     * @uses GetCarRentalStationDetailsRSType::setDetails()
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @param string $noDetailsReason
     * @param string $stationCode
     * @param string $locationName
     * @param string $operatingProviderName
     * @param \traveltainment\SOAP17\StructType\CarRentalStationDetailsType $details
     */
    public function __construct(\traveltainment\SOAP17\StructType\ErrorsType $errors = null, $noDetailsReason = null, $stationCode = null, $locationName = null, $operatingProviderName = null, \traveltainment\SOAP17\StructType\CarRentalStationDetailsType $details = null)
    {
        $this
            ->setErrors($errors)
            ->setNoDetailsReason($noDetailsReason)
            ->setStationCode($stationCode)
            ->setLocationName($locationName)
            ->setOperatingProviderName($operatingProviderName)
            ->setDetails($details);
    }
    /**
     * Get Errors value
     * @return \traveltainment\SOAP17\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
     */
    public function setErrors(\traveltainment\SOAP17\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get NoDetailsReason value
     * @return string|null
     */
    public function getNoDetailsReason()
    {
        return $this->NoDetailsReason;
    }
    /**
     * Set NoDetailsReason value
     * @param string $noDetailsReason
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
     */
    public function setNoDetailsReason($noDetailsReason = null)
    {
        // validation for constraint: string
        if (!is_null($noDetailsReason) && !is_string($noDetailsReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noDetailsReason)), __LINE__);
        }
        $this->NoDetailsReason = $noDetailsReason;
        return $this;
    }
    /**
     * Get StationCode value
     * @return string|null
     */
    public function getStationCode()
    {
        return $this->StationCode;
    }
    /**
     * Set StationCode value
     * @param string $stationCode
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
     */
    public function setStationCode($stationCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($stationCode) && strlen($stationCode) > 16) || (is_array($stationCode) && count($stationCode) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($stationCode) ? strlen($stationCode) : count($stationCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($stationCode) && strlen($stationCode) < 1) || (is_array($stationCode) && count($stationCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($stationCode) && !is_string($stationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stationCode)), __LINE__);
        }
        $this->StationCode = $stationCode;
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
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
     * Get Details value
     * @return \traveltainment\SOAP17\StructType\CarRentalStationDetailsType|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param \traveltainment\SOAP17\StructType\CarRentalStationDetailsType $details
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
     */
    public function setDetails(\traveltainment\SOAP17\StructType\CarRentalStationDetailsType $details = null)
    {
        $this->Details = $details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRSType
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
