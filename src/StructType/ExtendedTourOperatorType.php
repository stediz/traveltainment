<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedTourOperatorType StructType
 * @subpackage Structs
 */
class ExtendedTourOperatorType extends TourOperatorType
{
    /**
     * The HotelProvider
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HotelProvider;
    /**
     * The FlightProvider
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightProvider;
    /**
     * Constructor method for ExtendedTourOperatorType
     * @uses ExtendedTourOperatorType::setHotelProvider()
     * @uses ExtendedTourOperatorType::setFlightProvider()
     * @param string $hotelProvider
     * @param string $flightProvider
     */
    public function __construct($hotelProvider = null, $flightProvider = null)
    {
        $this
            ->setHotelProvider($hotelProvider)
            ->setFlightProvider($flightProvider);
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
     * @return \StructType\ExtendedTourOperatorType
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
     * @return \StructType\ExtendedTourOperatorType
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
     * @return \StructType\ExtendedTourOperatorType
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
