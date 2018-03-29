<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedPersonPriceType StructType
 * @subpackage Structs
 */
class ConvertedPersonPriceType extends ConvertedSimplePriceType
{
    /**
     * The TravellerRef
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $TravellerRef;
    /**
     * The _
     * @var \StructType\ConvertedSimplePriceType
     */
    public $_;
    /**
     * Constructor method for ConvertedPersonPriceType
     * @uses ConvertedPersonPriceType::setTravellerRef()
     * @uses ConvertedPersonPriceType::set_()
     * @param string $travellerRef
     * @param \StructType\ConvertedSimplePriceType $_
     */
    public function __construct($travellerRef = null, \StructType\ConvertedSimplePriceType $_ = null)
    {
        $this
            ->setTravellerRef($travellerRef)
            ->set_($_);
    }
    /**
     * Get TravellerRef value
     * @return string
     */
    public function getTravellerRef()
    {
        return $this->TravellerRef;
    }
    /**
     * Set TravellerRef value
     * @param string $travellerRef
     * @return \StructType\ConvertedPersonPriceType
     */
    public function setTravellerRef($travellerRef = null)
    {
        // validation for constraint: string
        if (!is_null($travellerRef) && !is_string($travellerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerRef)), __LINE__);
        }
        $this->TravellerRef = $travellerRef;
        return $this;
    }
    /**
     * Get _ value
     * @return \StructType\ConvertedSimplePriceType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \StructType\ConvertedSimplePriceType $_
     * @return \StructType\ConvertedPersonPriceType
     */
    public function set_(\StructType\ConvertedSimplePriceType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConvertedPersonPriceType
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
