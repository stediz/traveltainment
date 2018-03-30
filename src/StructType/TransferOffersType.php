<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferOffersType StructType
 * @subpackage Structs
 */
class TransferOffersType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TransferOfferType[]
     */
    public $Offer;
    /**
     * Constructor method for TransferOffersType
     * @uses TransferOffersType::setOffer()
     * @param \traveltainment\SOAP17\StructType\TransferOfferType[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\TransferOfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TransferOfferType[] $offer
     * @return \traveltainment\SOAP17\StructType\TransferOffersType
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $transferOffersTypeOfferItem) {
            // validation for constraint: itemType
            if (!$transferOffersTypeOfferItem instanceof \traveltainment\SOAP17\StructType\TransferOfferType) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\TransferOfferType, "%s" given', is_object($transferOffersTypeOfferItem) ? get_class($transferOffersTypeOfferItem) : gettype($transferOffersTypeOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TransferOfferType $item
     * @return \traveltainment\SOAP17\StructType\TransferOffersType
     */
    public function addToOffer(\traveltainment\SOAP17\StructType\TransferOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\TransferOfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\TransferOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\TransferOffersType
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
