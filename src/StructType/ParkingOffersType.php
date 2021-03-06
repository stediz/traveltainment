<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingOffersType StructType
 * @subpackage Structs
 */
class ParkingOffersType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ParkingOfferType[]
     */
    public $Offer;
    /**
     * Constructor method for ParkingOffersType
     * @uses ParkingOffersType::setOffer()
     * @param \StructType\ParkingOfferType[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \StructType\ParkingOfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \StructType\ParkingOfferType[] $offer
     * @return \StructType\ParkingOffersType
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $parkingOffersTypeOfferItem) {
            // validation for constraint: itemType
            if (!$parkingOffersTypeOfferItem instanceof \StructType\ParkingOfferType) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \StructType\ParkingOfferType, "%s" given', is_object($parkingOffersTypeOfferItem) ? get_class($parkingOffersTypeOfferItem) : gettype($parkingOffersTypeOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \StructType\ParkingOfferType $item
     * @return \StructType\ParkingOffersType
     */
    public function addToOffer(\StructType\ParkingOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ParkingOfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \StructType\ParkingOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Offer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParkingOffersType
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
