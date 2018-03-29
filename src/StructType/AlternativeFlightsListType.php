<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternativeFlightsListType StructType
 * @subpackage Structs
 */
class AlternativeFlightsListType extends AbstractStructBase
{
    /**
     * The AlternativeFlight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \StructType\AlternativeFlightType[]
     */
    public $AlternativeFlight;
    /**
     * Constructor method for AlternativeFlightsListType
     * @uses AlternativeFlightsListType::setAlternativeFlight()
     * @param \StructType\AlternativeFlightType[] $alternativeFlight
     */
    public function __construct(array $alternativeFlight = array())
    {
        $this
            ->setAlternativeFlight($alternativeFlight);
    }
    /**
     * Get AlternativeFlight value
     * @return \StructType\AlternativeFlightType[]|null
     */
    public function getAlternativeFlight()
    {
        return $this->AlternativeFlight;
    }
    /**
     * Set AlternativeFlight value
     * @throws \InvalidArgumentException
     * @param \StructType\AlternativeFlightType[] $alternativeFlight
     * @return \StructType\AlternativeFlightsListType
     */
    public function setAlternativeFlight(array $alternativeFlight = array())
    {
        foreach ($alternativeFlight as $alternativeFlightsListTypeAlternativeFlightItem) {
            // validation for constraint: itemType
            if (!$alternativeFlightsListTypeAlternativeFlightItem instanceof \StructType\AlternativeFlightType) {
                throw new \InvalidArgumentException(sprintf('The AlternativeFlight property can only contain items of \StructType\AlternativeFlightType, "%s" given', is_object($alternativeFlightsListTypeAlternativeFlightItem) ? get_class($alternativeFlightsListTypeAlternativeFlightItem) : gettype($alternativeFlightsListTypeAlternativeFlightItem)), __LINE__);
            }
        }
        $this->AlternativeFlight = $alternativeFlight;
        return $this;
    }
    /**
     * Add item to AlternativeFlight value
     * @throws \InvalidArgumentException
     * @param \StructType\AlternativeFlightType $item
     * @return \StructType\AlternativeFlightsListType
     */
    public function addToAlternativeFlight(\StructType\AlternativeFlightType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AlternativeFlightType) {
            throw new \InvalidArgumentException(sprintf('The AlternativeFlight property can only contain items of \StructType\AlternativeFlightType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AlternativeFlight[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AlternativeFlightsListType
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
