<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineTourOperatorsRS StructType
 * @subpackage Structs
 */
class SearchEngineTourOperatorsRS extends XmlInterfaceRS
{
    /**
     * The TravelDatePeriod
     * @var \StructType\TimePeriod
     */
    public $TravelDatePeriod;
    /**
     * The TourOperators
     * @var \StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * Constructor method for SearchEngineTourOperatorsRS
     * @uses SearchEngineTourOperatorsRS::setTravelDatePeriod()
     * @uses SearchEngineTourOperatorsRS::setTourOperators()
     * @param \StructType\TimePeriod $travelDatePeriod
     * @param \StructType\TourOperatorListType $tourOperators
     */
    public function __construct(\StructType\TimePeriod $travelDatePeriod = null, \StructType\TourOperatorListType $tourOperators = null)
    {
        $this
            ->setTravelDatePeriod($travelDatePeriod)
            ->setTourOperators($tourOperators);
    }
    /**
     * Get TravelDatePeriod value
     * @return \StructType\TimePeriod|null
     */
    public function getTravelDatePeriod()
    {
        return $this->TravelDatePeriod;
    }
    /**
     * Set TravelDatePeriod value
     * @param \StructType\TimePeriod $travelDatePeriod
     * @return \StructType\SearchEngineTourOperatorsRS
     */
    public function setTravelDatePeriod(\StructType\TimePeriod $travelDatePeriod = null)
    {
        $this->TravelDatePeriod = $travelDatePeriod;
        return $this;
    }
    /**
     * Get TourOperators value
     * @return \StructType\TourOperatorListType|null
     */
    public function getTourOperators()
    {
        return $this->TourOperators;
    }
    /**
     * Set TourOperators value
     * @param \StructType\TourOperatorListType $tourOperators
     * @return \StructType\SearchEngineTourOperatorsRS
     */
    public function setTourOperators(\StructType\TourOperatorListType $tourOperators = null)
    {
        $this->TourOperators = $tourOperators;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchEngineTourOperatorsRS
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
