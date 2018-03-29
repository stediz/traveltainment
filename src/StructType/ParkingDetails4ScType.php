<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingDetails4ScType StructType
 * @subpackage Structs
 */
class ParkingDetails4ScType extends AbstractStructBase
{
    /**
     * The ParkingDateTimes
     * @var \StructType\ParkingDateTimesType
     */
    public $ParkingDateTimes;
    /**
     * The TermsAndConditionsURL
     * @var string
     */
    public $TermsAndConditionsURL;
    /**
     * The ParkingDetails
     * @var \StructType\ParkingDetailsType
     */
    public $ParkingDetails;
    /**
     * Constructor method for ParkingDetails4ScType
     * @uses ParkingDetails4ScType::setParkingDateTimes()
     * @uses ParkingDetails4ScType::setTermsAndConditionsURL()
     * @uses ParkingDetails4ScType::setParkingDetails()
     * @param \StructType\ParkingDateTimesType $parkingDateTimes
     * @param string $termsAndConditionsURL
     * @param \StructType\ParkingDetailsType $parkingDetails
     */
    public function __construct(\StructType\ParkingDateTimesType $parkingDateTimes = null, $termsAndConditionsURL = null, \StructType\ParkingDetailsType $parkingDetails = null)
    {
        $this
            ->setParkingDateTimes($parkingDateTimes)
            ->setTermsAndConditionsURL($termsAndConditionsURL)
            ->setParkingDetails($parkingDetails);
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
     * @return \StructType\ParkingDetails4ScType
     */
    public function setParkingDateTimes(\StructType\ParkingDateTimesType $parkingDateTimes = null)
    {
        $this->ParkingDateTimes = $parkingDateTimes;
        return $this;
    }
    /**
     * Get TermsAndConditionsURL value
     * @return string|null
     */
    public function getTermsAndConditionsURL()
    {
        return $this->TermsAndConditionsURL;
    }
    /**
     * Set TermsAndConditionsURL value
     * @param string $termsAndConditionsURL
     * @return \StructType\ParkingDetails4ScType
     */
    public function setTermsAndConditionsURL($termsAndConditionsURL = null)
    {
        // validation for constraint: string
        if (!is_null($termsAndConditionsURL) && !is_string($termsAndConditionsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($termsAndConditionsURL)), __LINE__);
        }
        $this->TermsAndConditionsURL = $termsAndConditionsURL;
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
     * @return \StructType\ParkingDetails4ScType
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
     * @return \StructType\ParkingDetails4ScType
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
