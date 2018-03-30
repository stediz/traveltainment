<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceOffersType StructType
 * @subpackage Structs
 */
class InsuranceOffersType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\InsuranceOfferType[]
     */
    public $Offer;
    /**
     * Constructor method for InsuranceOffersType
     * @uses InsuranceOffersType::setOffer()
     * @param \traveltainment\SOAP17\StructType\InsuranceOfferType[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\InsuranceOfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\InsuranceOfferType[] $offer
     * @return \traveltainment\SOAP17\StructType\InsuranceOffersType
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $insuranceOffersTypeOfferItem) {
            // validation for constraint: itemType
            if (!$insuranceOffersTypeOfferItem instanceof \traveltainment\SOAP17\StructType\InsuranceOfferType) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\InsuranceOfferType, "%s" given', is_object($insuranceOffersTypeOfferItem) ? get_class($insuranceOffersTypeOfferItem) : gettype($insuranceOffersTypeOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\InsuranceOfferType $item
     * @return \traveltainment\SOAP17\StructType\InsuranceOffersType
     */
    public function addToOffer(\traveltainment\SOAP17\StructType\InsuranceOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\InsuranceOfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\InsuranceOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\InsuranceOffersType
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
