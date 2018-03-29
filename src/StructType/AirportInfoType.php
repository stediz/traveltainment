<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportInfoType StructType
 * @subpackage Structs
 */
class AirportInfoType extends AbstractStructBase
{
    /**
     * The ArrivalCode
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $ArrivalCode;
    /**
     * The DepartureCode
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $DepartureCode;
    /**
     * Constructor method for AirportInfoType
     * @uses AirportInfoType::setArrivalCode()
     * @uses AirportInfoType::setDepartureCode()
     * @param string $arrivalCode
     * @param string $departureCode
     */
    public function __construct($arrivalCode = null, $departureCode = null)
    {
        $this
            ->setArrivalCode($arrivalCode)
            ->setDepartureCode($departureCode);
    }
    /**
     * Get ArrivalCode value
     * @return string|null
     */
    public function getArrivalCode()
    {
        return $this->ArrivalCode;
    }
    /**
     * Set ArrivalCode value
     * @param string $arrivalCode
     * @return \StructType\AirportInfoType
     */
    public function setArrivalCode($arrivalCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($arrivalCode) && !preg_match('/[A-Z]{3}/', $arrivalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($arrivalCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($arrivalCode) && !is_string($arrivalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalCode)), __LINE__);
        }
        $this->ArrivalCode = $arrivalCode;
        return $this;
    }
    /**
     * Get DepartureCode value
     * @return string|null
     */
    public function getDepartureCode()
    {
        return $this->DepartureCode;
    }
    /**
     * Set DepartureCode value
     * @param string $departureCode
     * @return \StructType\AirportInfoType
     */
    public function setDepartureCode($departureCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($departureCode) && !preg_match('/[A-Z]{3}/', $departureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($departureCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureCode)), __LINE__);
        }
        $this->DepartureCode = $departureCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AirportInfoType
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
