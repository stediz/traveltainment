<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartureAirportListType StructType
 * @subpackage Structs
 */
class DepartureAirportListType extends AbstractStructBase
{
    /**
     * The Airport
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\AirportType[]
     */
    public $Airport;
    /**
     * Constructor method for DepartureAirportListType
     * @uses DepartureAirportListType::setAirport()
     * @param \StructType\AirportType[] $airport
     */
    public function __construct(array $airport = array())
    {
        $this
            ->setAirport($airport);
    }
    /**
     * Get Airport value
     * @return \StructType\AirportType[]|null
     */
    public function getAirport()
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @throws \InvalidArgumentException
     * @param \StructType\AirportType[] $airport
     * @return \StructType\DepartureAirportListType
     */
    public function setAirport(array $airport = array())
    {
        foreach ($airport as $departureAirportListTypeAirportItem) {
            // validation for constraint: itemType
            if (!$departureAirportListTypeAirportItem instanceof \StructType\AirportType) {
                throw new \InvalidArgumentException(sprintf('The Airport property can only contain items of \StructType\AirportType, "%s" given', is_object($departureAirportListTypeAirportItem) ? get_class($departureAirportListTypeAirportItem) : gettype($departureAirportListTypeAirportItem)), __LINE__);
            }
        }
        $this->Airport = $airport;
        return $this;
    }
    /**
     * Add item to Airport value
     * @throws \InvalidArgumentException
     * @param \StructType\AirportType $item
     * @return \StructType\DepartureAirportListType
     */
    public function addToAirport(\StructType\AirportType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AirportType) {
            throw new \InvalidArgumentException(sprintf('The Airport property can only contain items of \StructType\AirportType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Airport[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DepartureAirportListType
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
