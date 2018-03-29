<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccomLocatorType StructType
 * @subpackage Structs
 */
class AccomLocatorType extends AbstractStructBase
{
    /**
     * The AccomName
     * @var string
     */
    public $AccomName;
    /**
     * The CityName
     * @var string
     */
    public $CityName;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{2}
     * @var string
     */
    public $CountryCode;
    /**
     * Constructor method for AccomLocatorType
     * @uses AccomLocatorType::setAccomName()
     * @uses AccomLocatorType::setCityName()
     * @uses AccomLocatorType::setCountryCode()
     * @param string $accomName
     * @param string $cityName
     * @param string $countryCode
     */
    public function __construct($accomName = null, $cityName = null, $countryCode = null)
    {
        $this
            ->setAccomName($accomName)
            ->setCityName($cityName)
            ->setCountryCode($countryCode);
    }
    /**
     * Get AccomName value
     * @return string|null
     */
    public function getAccomName()
    {
        return $this->AccomName;
    }
    /**
     * Set AccomName value
     * @param string $accomName
     * @return \StructType\AccomLocatorType
     */
    public function setAccomName($accomName = null)
    {
        // validation for constraint: string
        if (!is_null($accomName) && !is_string($accomName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accomName)), __LINE__);
        }
        $this->AccomName = $accomName;
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
     * @return \StructType\AccomLocatorType
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
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \StructType\AccomLocatorType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($countryCode) && !preg_match('/[A-Z]{2}/', $countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{2}", "%s" given', var_export($countryCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AccomLocatorType
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
