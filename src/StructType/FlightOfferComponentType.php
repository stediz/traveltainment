<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightOfferComponentType StructType
 * @subpackage Structs
 */
class FlightOfferComponentType extends OfferComponentType
{
    /**
     * The Flight
     * @var \StructType\FlightType
     */
    public $Flight;
    /**
     * Constructor method for FlightOfferComponentType
     * @uses FlightOfferComponentType::setFlight()
     * @param \StructType\FlightType $flight
     */
    public function __construct(\StructType\FlightType $flight = null)
    {
        $this
            ->setFlight($flight);
    }
    /**
     * Get Flight value
     * @return \StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \StructType\FlightType $flight
     * @return \StructType\FlightOfferComponentType
     */
    public function setFlight(\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FlightOfferComponentType
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
