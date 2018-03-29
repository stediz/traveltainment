<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeSearchType StructType
 * @subpackage Structs
 */
class HolidayHomeSearchType extends AbstractStructBase
{
    /**
     * The Trip
     * @var \StructType\HolidayHomeTripType
     */
    public $Trip;
    /**
     * Constructor method for HolidayHomeSearchType
     * @uses HolidayHomeSearchType::setTrip()
     * @param \StructType\HolidayHomeTripType $trip
     */
    public function __construct(\StructType\HolidayHomeTripType $trip = null)
    {
        $this
            ->setTrip($trip);
    }
    /**
     * Get Trip value
     * @return \StructType\HolidayHomeTripType|null
     */
    public function getTrip()
    {
        return $this->Trip;
    }
    /**
     * Set Trip value
     * @param \StructType\HolidayHomeTripType $trip
     * @return \StructType\HolidayHomeSearchType
     */
    public function setTrip(\StructType\HolidayHomeTripType $trip = null)
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
     * @return \StructType\HolidayHomeSearchType
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
