<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedTravellerPriceType StructType
 * @subpackage Structs
 */
class ConvertedTravellerPriceType extends ConvertedPriceType
{
    /**
     * The Fare
     * @var float
     */
    public $Fare;
    /**
     * Constructor method for ConvertedTravellerPriceType
     * @uses ConvertedTravellerPriceType::setFare()
     * @param float $fare
     */
    public function __construct($fare = null)
    {
        $this
            ->setFare($fare);
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
     * @return \StructType\ConvertedTravellerPriceType
     */
    public function setFare($fare = null)
    {
        $this->Fare = $fare;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConvertedTravellerPriceType
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
