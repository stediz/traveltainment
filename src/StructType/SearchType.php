<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchType StructType
 * @subpackage Structs
 */
class SearchType extends AbstractStructBase
{
    /**
     * The Trip
     * @var \StructType\TripType
     */
    public $Trip;
    /**
     * Constructor method for SearchType
     * @uses SearchType::setTrip()
     * @param \StructType\TripType $trip
     */
    public function __construct(\StructType\TripType $trip = null)
    {
        $this
            ->setTrip($trip);
    }
    /**
     * Get Trip value
     * @return \StructType\TripType|null
     */
    public function getTrip()
    {
        return $this->Trip;
    }
    /**
     * Set Trip value
     * @param \StructType\TripType $trip
     * @return \StructType\SearchType
     */
    public function setTrip(\StructType\TripType $trip = null)
    {
        $this->Trip = $trip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchType
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
