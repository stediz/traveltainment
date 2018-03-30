<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\PackageType
     */
    public $Package;
    /**
     * The Accommodation
     * @var \traveltainment\SOAP17\StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Flight
     * @var \traveltainment\SOAP17\StructType\FlightType
     */
    public $Flight;
    /**
     * Constructor method for TravelOfferType
     * @uses TravelOfferType::setPackage()
     * @uses TravelOfferType::setAccommodation()
     * @uses TravelOfferType::setFlight()
     * @param \traveltainment\SOAP17\StructType\PackageType $package
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     */
    public function __construct(\traveltainment\SOAP17\StructType\PackageType $package = null, \traveltainment\SOAP17\StructType\AccommodationType $accommodation = null, \traveltainment\SOAP17\StructType\FlightType $flight = null)
    {
        $this
            ->setPackage($package)
            ->setAccommodation($accommodation)
            ->setFlight($flight);
    }
    /**
     * Get Package value
     * @return \traveltainment\SOAP17\StructType\PackageType|null
     */
    public function getPackage()
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \traveltainment\SOAP17\StructType\PackageType $package
     * @return \traveltainment\SOAP17\StructType\TravelOfferType
     */
    public function setPackage(\traveltainment\SOAP17\StructType\PackageType $package = null)
    {
        $this->Package = $package;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \traveltainment\SOAP17\StructType\AccommodationType|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     * @return \traveltainment\SOAP17\StructType\TravelOfferType
     */
    public function setAccommodation(\traveltainment\SOAP17\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return \traveltainment\SOAP17\StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     * @return \traveltainment\SOAP17\StructType\TravelOfferType
     */
    public function setFlight(\traveltainment\SOAP17\StructType\FlightType $flight = null)
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
     * @return \traveltainment\SOAP17\StructType\TravelOfferType
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
