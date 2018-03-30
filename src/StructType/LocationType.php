<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationType StructType
 * Meta informations extracted from the WSDL
 * - maxLength: 255
 * @subpackage Structs
 */
class LocationType extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - maxLength: 255
     * @var string
     */
    public $_;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $LocationCode;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{2}
     * @var string
     */
    public $Country;
    /**
     * Constructor method for LocationType
     * @uses LocationType::set_()
     * @uses LocationType::setLocationCode()
     * @uses LocationType::setCountry()
     * @param string $_
     * @param string $locationCode
     * @param string $country
     */
    public function __construct($_ = null, $locationCode = null, $country = null)
    {
        $this
            ->set_($_)
            ->setLocationCode($locationCode)
            ->setCountry($country);
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
     * @return \traveltainment\SOAP17\StructType\LocationType
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($_) && strlen($_) > 255) || (is_array($_) && count($_) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($_) ? strlen($_) : count($_)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
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
     * @return \traveltainment\SOAP17\StructType\LocationType
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($locationCode) && strlen($locationCode) > 64) || (is_array($locationCode) && count($locationCode) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($locationCode) ? strlen($locationCode) : count($locationCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
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
     * @return \traveltainment\SOAP17\StructType\LocationType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: pattern
        if (is_scalar($country) && !preg_match('/[A-Z]{2}/', $country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{2}", "%s" given', var_export($country, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\LocationType
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
