<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerPriceType StructType
 * @subpackage Structs
 */
class TravellerPriceType extends PriceType
{
    /**
     * The Fare
     * @var float
     */
    public $Fare;
    /**
     * The travellerRef
     * @var string
     */
    public $travellerRef;
    /**
     * Constructor method for TravellerPriceType
     * @uses TravellerPriceType::setFare()
     * @uses TravellerPriceType::setTravellerRef()
     * @param float $fare
     * @param string $travellerRef
     */
    public function __construct($fare = null, $travellerRef = null)
    {
        $this
            ->setFare($fare)
            ->setTravellerRef($travellerRef);
    }
    /**
     * Get Fare value
     * @return float|null
     */
    public function getFare()
    {
        return $this->Fare;
    }
    /**
     * Set Fare value
     * @param float $fare
     * @return \StructType\TravellerPriceType
     */
    public function setFare($fare = null)
    {
        $this->Fare = $fare;
        return $this;
    }
    /**
     * Get travellerRef value
     * @return string|null
     */
    public function getTravellerRef()
    {
        return $this->travellerRef;
    }
    /**
     * Set travellerRef value
     * @param string $travellerRef
     * @return \StructType\TravellerPriceType
     */
    public function setTravellerRef($travellerRef = null)
    {
        // validation for constraint: string
        if (!is_null($travellerRef) && !is_string($travellerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerRef)), __LINE__);
        }
        $this->travellerRef = $travellerRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TravellerPriceType
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
