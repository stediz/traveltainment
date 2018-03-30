<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchType StructType
 * @subpackage Structs
 */
class SearchType extends AbstractStructBase
{
    /**
     * The Trip
     * @var \traveltainment\SOAP17\StructType\TripType
     */
    public $Trip;
    /**
     * Constructor method for SearchType
     * @uses SearchType::setTrip()
     * @param \traveltainment\SOAP17\StructType\TripType $trip
     */
    public function __construct(\traveltainment\SOAP17\StructType\TripType $trip = null)
    {
        $this
            ->setTrip($trip);
    }
    /**
     * Get Trip value
     * @return \traveltainment\SOAP17\StructType\TripType|null
     */
    public function getTrip()
    {
        return $this->Trip;
    }
    /**
     * Set Trip value
     * @param \traveltainment\SOAP17\StructType\TripType $trip
     * @return \traveltainment\SOAP17\StructType\SearchType
     */
    public function setTrip(\traveltainment\SOAP17\StructType\TripType $trip = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchType
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
