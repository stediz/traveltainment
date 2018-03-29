<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalEventType StructType
 * @subpackage Structs
 */
class CarRentalEventType extends AbstractStructBase
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
     * Constructor method for CarRentalEventType
     * @uses CarRentalEventType::setDateTime()
     * @uses CarRentalEventType::setLocationCode()
     * @param string $dateTime
     * @param string $locationCode
     */
    public function __construct($dateTime = null, $locationCode = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setLocationCode($locationCode);
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
     * @return \StructType\CarRentalEventType
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
     * @return \StructType\CarRentalEventType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CarRentalEventType
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
