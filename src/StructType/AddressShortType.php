<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressShortType StructType
 * @subpackage Structs
 */
class AddressShortType extends AbstractStructBase
{
    /**
     * The AdressLine
     * @var string
     */
    public $AdressLine;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * - minLength: 1
     * @var string
     */
    public $City;
    /**
     * Constructor method for AddressShortType
     * @uses AddressShortType::setAdressLine()
     * @uses AddressShortType::setCity()
     * @param string $adressLine
     * @param string $city
     */
    public function __construct($adressLine = null, $city = null)
    {
        $this
            ->setAdressLine($adressLine)
            ->setCity($city);
    }
    /**
     * Get AdressLine value
     * @return string|null
     */
    public function getAdressLine()
    {
        return $this->AdressLine;
    }
    /**
     * Set AdressLine value
     * @param string $adressLine
     * @return \traveltainment\SOAP17\StructType\AddressShortType
     */
    public function setAdressLine($adressLine = null)
    {
        // validation for constraint: string
        if (!is_null($adressLine) && !is_string($adressLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adressLine)), __LINE__);
        }
        $this->AdressLine = $adressLine;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \traveltainment\SOAP17\StructType\AddressShortType
     */
    public function setCity($city = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($city) && strlen($city) > 64) || (is_array($city) && count($city) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($city) ? strlen($city) : count($city)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($city) && strlen($city) < 1) || (is_array($city) && count($city) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddressShortType
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
