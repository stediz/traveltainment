<?php

namespace StructType;

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
     * @var \StructType\FlightDetailsType
     */
    public $Details;
    /**
     * Constructor method for AlternativeFlightDetailsType
     * @uses AlternativeFlightDetailsType::setDetails()
     * @param \StructType\FlightDetailsType $details
     */
    public function __construct(\StructType\FlightDetailsType $details = null)
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get Details value
     * @return \StructType\FlightDetailsType
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param \StructType\FlightDetailsType $details
     * @return \StructType\AlternativeFlightDetailsType
     */
    public function setDetails(\StructType\FlightDetailsType $details = null)
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
     * @return \StructType\AlternativeFlightDetailsType
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
