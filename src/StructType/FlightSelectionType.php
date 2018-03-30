<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSelectionType StructType
 * @subpackage Structs
 */
class FlightSelectionType extends AbstractStructBase
{
    /**
     * The RegionID
     * @var int
     */
    public $RegionID;
    /**
     * The AirportOfRegion
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $AirportOfRegion;
    /**
     * Constructor method for FlightSelectionType
     * @uses FlightSelectionType::setRegionID()
     * @uses FlightSelectionType::setAirportOfRegion()
     * @param int $regionID
     * @param string $airportOfRegion
     */
    public function __construct($regionID = null, $airportOfRegion = null)
    {
        $this
            ->setRegionID($regionID)
            ->setAirportOfRegion($airportOfRegion);
    }
    /**
     * Get RegionID value
     * @return int|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param int $regionID
     * @return \traveltainment\SOAP17\StructType\FlightSelectionType
     */
    public function setRegionID($regionID = null)
    {
        // validation for constraint: int
        if (!is_null($regionID) && !is_numeric($regionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regionID)), __LINE__);
        }
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Get AirportOfRegion value
     * @return string|null
     */
    public function getAirportOfRegion()
    {
        return $this->AirportOfRegion;
    }
    /**
     * Set AirportOfRegion value
     * @param string $airportOfRegion
     * @return \traveltainment\SOAP17\StructType\FlightSelectionType
     */
    public function setAirportOfRegion($airportOfRegion = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airportOfRegion) && !preg_match('/[A-Z]{3}/', $airportOfRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($airportOfRegion, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airportOfRegion) && !is_string($airportOfRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportOfRegion)), __LINE__);
        }
        $this->AirportOfRegion = $airportOfRegion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\FlightSelectionType
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
