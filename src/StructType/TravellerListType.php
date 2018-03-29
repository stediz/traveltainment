<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerListType StructType
 * @subpackage Structs
 */
class TravellerListType extends AbstractStructBase
{
    /**
     * The Traveller
     * Meta informations extracted from the WSDL
     * - documentation: maxOccurs for PACKAGE/FLIGHT/HOTELONLY/HOLIDAYHOME 8 | Der Knoten Traveller bildet einen Reiseteilnehmer ab. Der noetige Detailierungsgrad des Travallers haengt vom Buchungsschritt ab. Der AvailabilityAndPriceCheck benoetigt neben
     * BirthDate und Type zwar einen Vor- und Nachnamen. Diese koennen aber Fakedaten enthalten. Spaetestens bei der Buchung muessen bis auf den Knoten Total alle Echtdaten eingetragen werden. Der Knoten Total ist den Responses vorbehalten. Er enthaelt
     * Preisdaten. Der Knoten
     * - maxOccurs: unbounded
     * @var \StructType\TravellerType[]
     */
    public $Traveller;
    /**
     * Constructor method for TravellerListType
     * @uses TravellerListType::setTraveller()
     * @param \StructType\TravellerType[] $traveller
     */
    public function __construct(array $traveller = array())
    {
        $this
            ->setTraveller($traveller);
    }
    /**
     * Get Traveller value
     * @return \StructType\TravellerType[]|null
     */
    public function getTraveller()
    {
        return $this->Traveller;
    }
    /**
     * Set Traveller value
     * @throws \InvalidArgumentException
     * @param \StructType\TravellerType[] $traveller
     * @return \StructType\TravellerListType
     */
    public function setTraveller(array $traveller = array())
    {
        foreach ($traveller as $travellerListTypeTravellerItem) {
            // validation for constraint: itemType
            if (!$travellerListTypeTravellerItem instanceof \StructType\TravellerType) {
                throw new \InvalidArgumentException(sprintf('The Traveller property can only contain items of \StructType\TravellerType, "%s" given', is_object($travellerListTypeTravellerItem) ? get_class($travellerListTypeTravellerItem) : gettype($travellerListTypeTravellerItem)), __LINE__);
            }
        }
        $this->Traveller = $traveller;
        return $this;
    }
    /**
     * Add item to Traveller value
     * @throws \InvalidArgumentException
     * @param \StructType\TravellerType $item
     * @return \StructType\TravellerListType
     */
    public function addToTraveller(\StructType\TravellerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TravellerType) {
            throw new \InvalidArgumentException(sprintf('The Traveller property can only contain items of \StructType\TravellerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\TravellerListType
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
