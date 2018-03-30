<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportType StructType
 * @subpackage Structs
 */
class AirportType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The IataCode
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $IataCode;
    /**
     * The Country
     * @var string
     */
    public $Country;
    /**
     * The CityName
     * @var string
     */
    public $CityName;
    /**
     * Constructor method for AirportType
     * @uses AirportType::set_()
     * @uses AirportType::setIataCode()
     * @uses AirportType::setCountry()
     * @uses AirportType::setCityName()
     * @param string $_
     * @param string $iataCode
     * @param string $country
     * @param string $cityName
     */
    public function __construct($_ = null, $iataCode = null, $country = null, $cityName = null)
    {
        $this
            ->set_($_)
            ->setIataCode($iataCode)
            ->setCountry($country)
            ->setCityName($cityName);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \traveltainment\SOAP17\StructType\AirportType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get IataCode value
     * @return string|null
     */
    public function getIataCode()
    {
        return $this->IataCode;
    }
    /**
     * Set IataCode value
     * @param string $iataCode
     * @return \traveltainment\SOAP17\StructType\AirportType
     */
    public function setIataCode($iataCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($iataCode) && !preg_match('/[A-Z]{3}/', $iataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($iataCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($iataCode) && !is_string($iataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iataCode)), __LINE__);
        }
        $this->IataCode = $iataCode;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \traveltainment\SOAP17\StructType\AirportType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \traveltainment\SOAP17\StructType\AirportType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AirportType
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
