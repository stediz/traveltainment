<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalStationDetailsRQType StructType
 * @subpackage Structs
 */
class GetCarRentalStationDetailsRQType extends RequestType
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The StationCode
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $StationCode;
    /**
     * The PickupDateTime
     * @var string
     */
    public $PickupDateTime;
    /**
     * The ReturnDateTime
     * @var string
     */
    public $ReturnDateTime;
    /**
     * The DetailType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DetailType;
    /**
     * Constructor method for GetCarRentalStationDetailsRQType
     * @uses GetCarRentalStationDetailsRQType::setProviderID()
     * @uses GetCarRentalStationDetailsRQType::setStationCode()
     * @uses GetCarRentalStationDetailsRQType::setPickupDateTime()
     * @uses GetCarRentalStationDetailsRQType::setReturnDateTime()
     * @uses GetCarRentalStationDetailsRQType::setDetailType()
     * @param string $providerID
     * @param string $stationCode
     * @param string $pickupDateTime
     * @param string $returnDateTime
     * @param string $detailType
     */
    public function __construct($providerID = null, $stationCode = null, $pickupDateTime = null, $returnDateTime = null, $detailType = null)
    {
        $this
            ->setProviderID($providerID)
            ->setStationCode($stationCode)
            ->setPickupDateTime($pickupDateTime)
            ->setReturnDateTime($returnDateTime)
            ->setDetailType($detailType);
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
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
     * Get PickupDateTime value
     * @return string|null
     */
    public function getPickupDateTime()
    {
        return $this->PickupDateTime;
    }
    /**
     * Set PickupDateTime value
     * @param string $pickupDateTime
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
     */
    public function setPickupDateTime($pickupDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDateTime) && !is_string($pickupDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDateTime)), __LINE__);
        }
        $this->PickupDateTime = $pickupDateTime;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Get DetailType value
     * @return string|null
     */
    public function getDetailType()
    {
        return $this->DetailType;
    }
    /**
     * Set DetailType value
     * @uses \traveltainment\SOAP17\EnumType\CarRentalStationDetailTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CarRentalStationDetailTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $detailType
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
     */
    public function setDetailType($detailType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CarRentalStationDetailTypeEnum::valueIsValid($detailType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $detailType, implode(', ', \traveltainment\SOAP17\EnumType\CarRentalStationDetailTypeEnum::getValidValues())), __LINE__);
        }
        $this->DetailType = $detailType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
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
