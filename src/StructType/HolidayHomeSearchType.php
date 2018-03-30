<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeSearchType StructType
 * @subpackage Structs
 */
class HolidayHomeSearchType extends AbstractStructBase
{
    /**
     * The Trip
     * @var \traveltainment\SOAP17\StructType\HolidayHomeTripType
     */
    public $Trip;
    /**
     * Constructor method for HolidayHomeSearchType
     * @uses HolidayHomeSearchType::setTrip()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeTripType $trip
     */
    public function __construct(\traveltainment\SOAP17\StructType\HolidayHomeTripType $trip = null)
    {
        $this
            ->setTrip($trip);
    }
    /**
     * Get Trip value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTripType|null
     */
    public function getTrip()
    {
        return $this->Trip;
    }
    /**
     * Set Trip value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeTripType $trip
     * @return \traveltainment\SOAP17\StructType\HolidayHomeSearchType
     */
    public function setTrip(\traveltainment\SOAP17\StructType\HolidayHomeTripType $trip = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeSearchType
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
