<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChosenAlternativesInformation StructType
 * @subpackage Structs
 */
class ChosenAlternativesInformation extends AbstractStructBase
{
    /**
     * The Flight
     * @var string
     */
    public $Flight;
    /**
     * Constructor method for ChosenAlternativesInformation
     * @uses ChosenAlternativesInformation::setFlight()
     * @param string $flight
     */
    public function __construct($flight = null)
    {
        $this
            ->setFlight($flight);
    }
    /**
     * Get Flight value
     * @return string|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param string $flight
     * @return \traveltainment\SOAP17\StructType\ChosenAlternativesInformation
     */
    public function setFlight($flight = null)
    {
        // validation for constraint: string
        if (!is_null($flight) && !is_string($flight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flight)), __LINE__);
        }
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ChosenAlternativesInformation
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
