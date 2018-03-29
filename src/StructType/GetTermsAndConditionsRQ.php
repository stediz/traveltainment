<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTermsAndConditionsRQ StructType
 * @subpackage Structs
 */
class GetTermsAndConditionsRQ extends XmlInterfaceRQ
{
    /**
     * The TourOperator
     * @var string
     */
    public $TourOperator;
    /**
     * The TravelBeginDate
     * @var string
     */
    public $TravelBeginDate;
    /**
     * Constructor method for GetTermsAndConditionsRQ
     * @uses GetTermsAndConditionsRQ::setTourOperator()
     * @uses GetTermsAndConditionsRQ::setTravelBeginDate()
     * @param string $tourOperator
     * @param string $travelBeginDate
     */
    public function __construct($tourOperator = null, $travelBeginDate = null)
    {
        $this
            ->setTourOperator($tourOperator)
            ->setTravelBeginDate($travelBeginDate);
    }
    /**
     * Get TourOperator value
     * @return string|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param string $tourOperator
     * @return \StructType\GetTermsAndConditionsRQ
     */
    public function setTourOperator($tourOperator = null)
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourOperator)), __LINE__);
        }
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get TravelBeginDate value
     * @return string|null
     */
    public function getTravelBeginDate()
    {
        return $this->TravelBeginDate;
    }
    /**
     * Set TravelBeginDate value
     * @param string $travelBeginDate
     * @return \StructType\GetTermsAndConditionsRQ
     */
    public function setTravelBeginDate($travelBeginDate = null)
    {
        // validation for constraint: string
        if (!is_null($travelBeginDate) && !is_string($travelBeginDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelBeginDate)), __LINE__);
        }
        $this->TravelBeginDate = $travelBeginDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTermsAndConditionsRQ
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
