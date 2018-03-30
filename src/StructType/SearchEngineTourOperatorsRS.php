<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineTourOperatorsRS StructType
 * @subpackage Structs
 */
class SearchEngineTourOperatorsRS extends XmlInterfaceRS
{
    /**
     * The TravelDatePeriod
     * @var \traveltainment\SOAP17\StructType\TimePeriod
     */
    public $TravelDatePeriod;
    /**
     * The TourOperators
     * @var \traveltainment\SOAP17\StructType\TourOperatorListType
     */
    public $TourOperators;
    /**
     * Constructor method for SearchEngineTourOperatorsRS
     * @uses SearchEngineTourOperatorsRS::setTravelDatePeriod()
     * @uses SearchEngineTourOperatorsRS::setTourOperators()
     * @param \traveltainment\SOAP17\StructType\TimePeriod $travelDatePeriod
     * @param \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators
     */
    public function __construct(\traveltainment\SOAP17\StructType\TimePeriod $travelDatePeriod = null, \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null)
    {
        $this
            ->setTravelDatePeriod($travelDatePeriod)
            ->setTourOperators($tourOperators);
    }
    /**
     * Get TravelDatePeriod value
     * @return \traveltainment\SOAP17\StructType\TimePeriod|null
     */
    public function getTravelDatePeriod()
    {
        return $this->TravelDatePeriod;
    }
    /**
     * Set TravelDatePeriod value
     * @param \traveltainment\SOAP17\StructType\TimePeriod $travelDatePeriod
     * @return \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRS
     */
    public function setTravelDatePeriod(\traveltainment\SOAP17\StructType\TimePeriod $travelDatePeriod = null)
    {
        $this->TravelDatePeriod = $travelDatePeriod;
        return $this;
    }
    /**
     * Get TourOperators value
     * @return \traveltainment\SOAP17\StructType\TourOperatorListType|null
     */
    public function getTourOperators()
    {
        return $this->TourOperators;
    }
    /**
     * Set TourOperators value
     * @param \traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators
     * @return \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRS
     */
    public function setTourOperators(\traveltainment\SOAP17\StructType\TourOperatorListType $tourOperators = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRS
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
