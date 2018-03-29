<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingDateTimesType StructType
 * @subpackage Structs
 */
class ParkingDateTimesType extends AbstractStructBase
{
    /**
     * The StartDateTime
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $EndDateTime;
    /**
     * Constructor method for ParkingDateTimesType
     * @uses ParkingDateTimesType::setStartDateTime()
     * @uses ParkingDateTimesType::setEndDateTime()
     * @param string $startDateTime
     * @param string $endDateTime
     */
    public function __construct($startDateTime = null, $endDateTime = null)
    {
        $this
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime);
    }
    /**
     * Get StartDateTime value
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \StructType\ParkingDateTimesType
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \StructType\ParkingDateTimesType
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTime)), __LINE__);
        }
        $this->EndDateTime = $endDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParkingDateTimesType
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
