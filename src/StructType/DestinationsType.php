<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationsType StructType
 * @subpackage Structs
 */
class DestinationsType extends AbstractStructBase
{
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \StructType\DestinationType[]
     */
    public $Destination;
    /**
     * Constructor method for DestinationsType
     * @uses DestinationsType::setDestination()
     * @param \StructType\DestinationType[] $destination
     */
    public function __construct(array $destination = array())
    {
        $this
            ->setDestination($destination);
    }
    /**
     * Get Destination value
     * @return \StructType\DestinationType[]|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @throws \InvalidArgumentException
     * @param \StructType\DestinationType[] $destination
     * @return \StructType\DestinationsType
     */
    public function setDestination(array $destination = array())
    {
        foreach ($destination as $destinationsTypeDestinationItem) {
            // validation for constraint: itemType
            if (!$destinationsTypeDestinationItem instanceof \StructType\DestinationType) {
                throw new \InvalidArgumentException(sprintf('The Destination property can only contain items of \StructType\DestinationType, "%s" given', is_object($destinationsTypeDestinationItem) ? get_class($destinationsTypeDestinationItem) : gettype($destinationsTypeDestinationItem)), __LINE__);
            }
        }
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Add item to Destination value
     * @throws \InvalidArgumentException
     * @param \StructType\DestinationType $item
     * @return \StructType\DestinationsType
     */
    public function addToDestination(\StructType\DestinationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DestinationType) {
            throw new \InvalidArgumentException(sprintf('The Destination property can only contain items of \StructType\DestinationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Destination[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DestinationsType
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
