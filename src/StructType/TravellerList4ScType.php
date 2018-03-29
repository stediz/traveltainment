<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerList4ScType StructType
 * @subpackage Structs
 */
class TravellerList4ScType extends AbstractStructBase
{
    /**
     * The Traveller
     * Meta informations extracted from the WSDL
     * - documentation: Typ beschreibt eine Traveller-Liste, deren Elemente eine um ein TravelDocumentToken erweiterte Beschreibung eines Reisenden sind. Das Token wird für RussianMarket benoetigt.
     * - maxOccurs: unbounded
     * @var \StructType\Traveller4ScType[]
     */
    public $Traveller;
    /**
     * Constructor method for TravellerList4ScType
     * @uses TravellerList4ScType::setTraveller()
     * @param \StructType\Traveller4ScType[] $traveller
     */
    public function __construct(array $traveller = array())
    {
        $this
            ->setTraveller($traveller);
    }
    /**
     * Get Traveller value
     * @return \StructType\Traveller4ScType[]|null
     */
    public function getTraveller()
    {
        return $this->Traveller;
    }
    /**
     * Set Traveller value
     * @throws \InvalidArgumentException
     * @param \StructType\Traveller4ScType[] $traveller
     * @return \StructType\TravellerList4ScType
     */
    public function setTraveller(array $traveller = array())
    {
        foreach ($traveller as $travellerList4ScTypeTravellerItem) {
            // validation for constraint: itemType
            if (!$travellerList4ScTypeTravellerItem instanceof \StructType\Traveller4ScType) {
                throw new \InvalidArgumentException(sprintf('The Traveller property can only contain items of \StructType\Traveller4ScType, "%s" given', is_object($travellerList4ScTypeTravellerItem) ? get_class($travellerList4ScTypeTravellerItem) : gettype($travellerList4ScTypeTravellerItem)), __LINE__);
            }
        }
        $this->Traveller = $traveller;
        return $this;
    }
    /**
     * Add item to Traveller value
     * @throws \InvalidArgumentException
     * @param \StructType\Traveller4ScType $item
     * @return \StructType\TravellerList4ScType
     */
    public function addToTraveller(\StructType\Traveller4ScType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Traveller4ScType) {
            throw new \InvalidArgumentException(sprintf('The Traveller property can only contain items of \StructType\Traveller4ScType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Traveller[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TravellerList4ScType
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
