<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParkingDetailsRSType StructType
 * @subpackage Structs
 */
class GetParkingDetailsRSType extends ResponseType
{
    /**
     * The Errors
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The ParkingDetails
     * @var \StructType\ParkingDetailsType
     */
    public $ParkingDetails;
    /**
     * Constructor method for GetParkingDetailsRSType
     * @uses GetParkingDetailsRSType::setErrors()
     * @uses GetParkingDetailsRSType::setOfferID()
     * @uses GetParkingDetailsRSType::setParkingDetails()
     * @param \StructType\ErrorsType $errors
     * @param string $offerID
     * @param \StructType\ParkingDetailsType $parkingDetails
     */
    public function __construct(\StructType\ErrorsType $errors = null, $offerID = null, \StructType\ParkingDetailsType $parkingDetails = null)
    {
        $this
            ->setErrors($errors)
            ->setOfferID($offerID)
            ->setParkingDetails($parkingDetails);
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \StructType\ErrorsType $errors
     * @return \StructType\GetParkingDetailsRSType
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \StructType\GetParkingDetailsRSType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get ParkingDetails value
     * @return \StructType\ParkingDetailsType|null
     */
    public function getParkingDetails()
    {
        return $this->ParkingDetails;
    }
    /**
     * Set ParkingDetails value
     * @param \StructType\ParkingDetailsType $parkingDetails
     * @return \StructType\GetParkingDetailsRSType
     */
    public function setParkingDetails(\StructType\ParkingDetailsType $parkingDetails = null)
    {
        $this->ParkingDetails = $parkingDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetParkingDetailsRSType
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
