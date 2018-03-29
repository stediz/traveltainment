<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalOfferConditionsRQType StructType
 * @subpackage Structs
 */
class GetCarRentalOfferConditionsRQType extends RequestType
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The Pickup
     * @var \StructType\CarRentalPickupInfoType
     */
    public $Pickup;
    /**
     * Constructor method for GetCarRentalOfferConditionsRQType
     * @uses GetCarRentalOfferConditionsRQType::setProviderID()
     * @uses GetCarRentalOfferConditionsRQType::setOfferID()
     * @uses GetCarRentalOfferConditionsRQType::setPickup()
     * @param string $providerID
     * @param string $offerID
     * @param \StructType\CarRentalPickupInfoType $pickup
     */
    public function __construct($providerID = null, $offerID = null, \StructType\CarRentalPickupInfoType $pickup = null)
    {
        $this
            ->setProviderID($providerID)
            ->setOfferID($offerID)
            ->setPickup($pickup);
    }
    /**
     * Get ProviderID value
     * @return string|null
     */
    public function getProviderID()
    {
        return $this->ProviderID;
    }
    /**
     * Set ProviderID value
     * @param string $providerID
     * @return \StructType\GetCarRentalOfferConditionsRQType
     */
    public function setProviderID($providerID = null)
    {
        // validation for constraint: string
        if (!is_null($providerID) && !is_string($providerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerID)), __LINE__);
        }
        $this->ProviderID = $providerID;
        return $this;
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \StructType\GetCarRentalOfferConditionsRQType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get Pickup value
     * @return \StructType\CarRentalPickupInfoType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \StructType\CarRentalPickupInfoType $pickup
     * @return \StructType\GetCarRentalOfferConditionsRQType
     */
    public function setPickup(\StructType\CarRentalPickupInfoType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCarRentalOfferConditionsRQType
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
