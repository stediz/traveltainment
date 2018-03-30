<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternativeFlightDetailsType StructType
 * @subpackage Structs
 */
class AlternativeFlightDetailsType extends AbstractStructBase
{
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public $Details;
    /**
     * Constructor method for AlternativeFlightDetailsType
     * @uses AlternativeFlightDetailsType::setDetails()
     * @param \traveltainment\SOAP17\StructType\FlightDetailsType $details
     */
    public function __construct(\traveltainment\SOAP17\StructType\FlightDetailsType $details = null)
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get Details value
     * @return \traveltainment\SOAP17\StructType\FlightDetailsType
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param \traveltainment\SOAP17\StructType\FlightDetailsType $details
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType
     */
    public function setDetails(\traveltainment\SOAP17\StructType\FlightDetailsType $details = null)
    {
        $this->Details = $details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType
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
