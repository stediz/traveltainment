<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelOfferType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ein Offer enthaelt ein Package-, ein Accomodation- oder einen Flightknoten
 * @subpackage Structs
 */
class TravelOfferType extends OfferType
{
    /**
     * The Package
     * @var \StructType\PackageType
     */
    public $Package;
    /**
     * The Accommodation
     * @var \StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Flight
     * @var \StructType\FlightType
     */
    public $Flight;
    /**
     * Constructor method for TravelOfferType
     * @uses TravelOfferType::setPackage()
     * @uses TravelOfferType::setAccommodation()
     * @uses TravelOfferType::setFlight()
     * @param \StructType\PackageType $package
     * @param \StructType\AccommodationType $accommodation
     * @param \StructType\FlightType $flight
     */
    public function __construct(\StructType\PackageType $package = null, \StructType\AccommodationType $accommodation = null, \StructType\FlightType $flight = null)
    {
        $this
            ->setPackage($package)
            ->setAccommodation($accommodation)
            ->setFlight($flight);
    }
    /**
     * Get Package value
     * @return \StructType\PackageType|null
     */
    public function getPackage()
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \StructType\PackageType $package
     * @return \StructType\TravelOfferType
     */
    public function setPackage(\StructType\PackageType $package = null)
    {
        $this->Package = $package;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \StructType\AccommodationType|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \StructType\AccommodationType $accommodation
     * @return \StructType\TravelOfferType
     */
    public function setAccommodation(\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return \StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \StructType\FlightType $flight
     * @return \StructType\TravelOfferType
     */
    public function setFlight(\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TravelOfferType
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
