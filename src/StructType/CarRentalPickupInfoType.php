<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalPickupInfoType StructType
 * @subpackage Structs
 */
class CarRentalPickupInfoType extends AbstractStructBase
{
    /**
     * The PickupStationCode
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $PickupStationCode;
    /**
     * The PickupDateTime
     * @var string
     */
    public $PickupDateTime;
    /**
     * Constructor method for CarRentalPickupInfoType
     * @uses CarRentalPickupInfoType::setPickupStationCode()
     * @uses CarRentalPickupInfoType::setPickupDateTime()
     * @param string $pickupStationCode
     * @param string $pickupDateTime
     */
    public function __construct($pickupStationCode = null, $pickupDateTime = null)
    {
        $this
            ->setPickupStationCode($pickupStationCode)
            ->setPickupDateTime($pickupDateTime);
    }
    /**
     * Get PickupStationCode value
     * @return string|null
     */
    public function getPickupStationCode()
    {
        return $this->PickupStationCode;
    }
    /**
     * Set PickupStationCode value
     * @param string $pickupStationCode
     * @return \traveltainment\SOAP17\StructType\CarRentalPickupInfoType
     */
    public function setPickupStationCode($pickupStationCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($pickupStationCode) && strlen($pickupStationCode) > 16) || (is_array($pickupStationCode) && count($pickupStationCode) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($pickupStationCode) ? strlen($pickupStationCode) : count($pickupStationCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($pickupStationCode) && strlen($pickupStationCode) < 1) || (is_array($pickupStationCode) && count($pickupStationCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($pickupStationCode) && !is_string($pickupStationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupStationCode)), __LINE__);
        }
        $this->PickupStationCode = $pickupStationCode;
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
     * @return \traveltainment\SOAP17\StructType\CarRentalPickupInfoType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalPickupInfoType
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
