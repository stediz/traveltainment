<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalOffersType StructType
 * @subpackage Structs
 */
class CarRentalOffersType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CarRentalOfferType[]
     */
    public $Offer;
    /**
     * Constructor method for CarRentalOffersType
     * @uses CarRentalOffersType::setOffer()
     * @param \traveltainment\SOAP17\StructType\CarRentalOfferType[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\CarRentalOfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\CarRentalOfferType[] $offer
     * @return \traveltainment\SOAP17\StructType\CarRentalOffersType
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $carRentalOffersTypeOfferItem) {
            // validation for constraint: itemType
            if (!$carRentalOffersTypeOfferItem instanceof \traveltainment\SOAP17\StructType\CarRentalOfferType) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\CarRentalOfferType, "%s" given', is_object($carRentalOffersTypeOfferItem) ? get_class($carRentalOffersTypeOfferItem) : gettype($carRentalOffersTypeOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\CarRentalOfferType $item
     * @return \traveltainment\SOAP17\StructType\CarRentalOffersType
     */
    public function addToOffer(\traveltainment\SOAP17\StructType\CarRentalOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\CarRentalOfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\CarRentalOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\CarRentalOffersType
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
