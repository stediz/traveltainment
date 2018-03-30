<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReducedTourOperatorType StructType
 * @subpackage Structs
 */
class ReducedTourOperatorType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The LogoURL
     * @var string
     */
    public $LogoURL;
    /**
     * The HotelProvider
     * @var string
     */
    public $HotelProvider;
    /**
     * The FlightProvider
     * @var string
     */
    public $FlightProvider;
    /**
     * Constructor method for ReducedTourOperatorType
     * @uses ReducedTourOperatorType::set_()
     * @uses ReducedTourOperatorType::setName()
     * @uses ReducedTourOperatorType::setLogoURL()
     * @uses ReducedTourOperatorType::setHotelProvider()
     * @uses ReducedTourOperatorType::setFlightProvider()
     * @param string $_
     * @param string $name
     * @param string $logoURL
     * @param string $hotelProvider
     * @param string $flightProvider
     */
    public function __construct($_ = null, $name = null, $logoURL = null, $hotelProvider = null, $flightProvider = null)
    {
        $this
            ->set_($_)
            ->setName($name)
            ->setLogoURL($logoURL)
            ->setHotelProvider($hotelProvider)
            ->setFlightProvider($flightProvider);
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
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        return $this;
    }
    /**
     * Get HotelProvider value
     * @return string|null
     */
    public function getHotelProvider()
    {
        return $this->HotelProvider;
    }
    /**
     * Set HotelProvider value
     * @param string $hotelProvider
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType
     */
    public function setHotelProvider($hotelProvider = null)
    {
        // validation for constraint: string
        if (!is_null($hotelProvider) && !is_string($hotelProvider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelProvider)), __LINE__);
        }
        $this->HotelProvider = $hotelProvider;
        return $this;
    }
    /**
     * Get FlightProvider value
     * @return string|null
     */
    public function getFlightProvider()
    {
        return $this->FlightProvider;
    }
    /**
     * Set FlightProvider value
     * @param string $flightProvider
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType
     */
    public function setFlightProvider($flightProvider = null)
    {
        // validation for constraint: string
        if (!is_null($flightProvider) && !is_string($flightProvider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightProvider)), __LINE__);
        }
        $this->FlightProvider = $flightProvider;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType
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
