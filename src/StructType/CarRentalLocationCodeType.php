<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalLocationCodeType StructType
 * @subpackage Structs
 */
class CarRentalLocationCodeType extends AbstractStructBase
{
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $AirportCode;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $CityCode;
    /**
     * Constructor method for CarRentalLocationCodeType
     * @uses CarRentalLocationCodeType::setAirportCode()
     * @uses CarRentalLocationCodeType::setCityCode()
     * @param string $airportCode
     * @param string $cityCode
     */
    public function __construct($airportCode = null, $cityCode = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setCityCode($cityCode);
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \StructType\CarRentalLocationCodeType
     */
    public function setAirportCode($airportCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airportCode) && !preg_match('/[A-Z]{3}/', $airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($airportCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportCode)), __LINE__);
        }
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \StructType\CarRentalLocationCodeType
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($cityCode) && !preg_match('/[A-Z]{3}/', $cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($cityCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CarRentalLocationCodeType
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
