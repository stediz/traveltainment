<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Der PackageType fasst die Typen Flight und Accomodation zusammen und bildet so eine Pauschalreise ab.
 * @subpackage Structs
 */
class PackageType extends AbstractStructBase
{
    /**
     * The Flight
     * @var \traveltainment\SOAP17\StructType\FlightType
     */
    public $Flight;
    /**
     * The Accommodation
     * @var \traveltainment\SOAP17\StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * Constructor method for PackageType
     * @uses PackageType::setFlight()
     * @uses PackageType::setAccommodation()
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     */
    public function __construct(\traveltainment\SOAP17\StructType\FlightType $flight = null, \traveltainment\SOAP17\StructType\AccommodationType $accommodation = null)
    {
        $this
            ->setFlight($flight)
            ->setAccommodation($accommodation);
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
     * @return \traveltainment\SOAP17\StructType\PackageType
     */
    public function setFlight(\traveltainment\SOAP17\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
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
     * @return \traveltainment\SOAP17\StructType\PackageType
     */
    public function setAccommodation(\traveltainment\SOAP17\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\PackageType
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
