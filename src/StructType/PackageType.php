<?php

namespace StructType;

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
     * @var \StructType\FlightType
     */
    public $Flight;
    /**
     * The Accommodation
     * @var \StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * Constructor method for PackageType
     * @uses PackageType::setFlight()
     * @uses PackageType::setAccommodation()
     * @param \StructType\FlightType $flight
     * @param \StructType\AccommodationType $accommodation
     */
    public function __construct(\StructType\FlightType $flight = null, \StructType\AccommodationType $accommodation = null)
    {
        $this
            ->setFlight($flight)
            ->setAccommodation($accommodation);
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
     * @return \StructType\PackageType
     */
    public function setFlight(\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
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
     * @return \StructType\PackageType
     */
    public function setAccommodation(\StructType\AccommodationType $accommodation = null)
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
     * @return \StructType\PackageType
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
