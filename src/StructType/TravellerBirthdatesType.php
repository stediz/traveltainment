<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerBirthdatesType StructType
 * @subpackage Structs
 */
class TravellerBirthdatesType extends AbstractStructBase
{
    /**
     * The Traveller
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\TravellerBirthdateType[]
     */
    public $Traveller;
    /**
     * Constructor method for TravellerBirthdatesType
     * @uses TravellerBirthdatesType::setTraveller()
     * @param \traveltainment\SOAP17\StructType\TravellerBirthdateType[] $traveller
     */
    public function __construct(array $traveller = array())
    {
        $this
            ->setTraveller($traveller);
    }
    /**
     * Get Traveller value
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdateType[]|null
     */
    public function getTraveller()
    {
        return $this->Traveller;
    }
    /**
     * Set Traveller value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TravellerBirthdateType[] $traveller
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdatesType
     */
    public function setTraveller(array $traveller = array())
    {
        foreach ($traveller as $travellerBirthdatesTypeTravellerItem) {
            // validation for constraint: itemType
            if (!$travellerBirthdatesTypeTravellerItem instanceof \traveltainment\SOAP17\StructType\TravellerBirthdateType) {
                throw new \InvalidArgumentException(sprintf('The Traveller property can only contain items of \traveltainment\SOAP17\StructType\TravellerBirthdateType, "%s" given', is_object($travellerBirthdatesTypeTravellerItem) ? get_class($travellerBirthdatesTypeTravellerItem) : gettype($travellerBirthdatesTypeTravellerItem)), __LINE__);
            }
        }
        $this->Traveller = $traveller;
        return $this;
    }
    /**
     * Add item to Traveller value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TravellerBirthdateType $item
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdatesType
     */
    public function addToTraveller(\traveltainment\SOAP17\StructType\TravellerBirthdateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\TravellerBirthdateType) {
            throw new \InvalidArgumentException(sprintf('The Traveller property can only contain items of \traveltainment\SOAP17\StructType\TravellerBirthdateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdatesType
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
