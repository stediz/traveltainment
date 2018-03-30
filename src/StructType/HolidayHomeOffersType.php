<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOffersType StructType
 * @subpackage Structs
 */
class HolidayHomeOffersType extends AbstractStructBase
{
    /**
     * The OfferCount
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $OfferCount;
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferType[]
     */
    public $Offer;
    /**
     * Constructor method for HolidayHomeOffersType
     * @uses HolidayHomeOffersType::setOfferCount()
     * @uses HolidayHomeOffersType::setOffer()
     * @param int $offerCount
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType[] $offer
     */
    public function __construct($offerCount = null, array $offer = array())
    {
        $this
            ->setOfferCount($offerCount)
            ->setOffer($offer);
    }
    /**
     * Get OfferCount value
     * @return int
     */
    public function getOfferCount()
    {
        return $this->OfferCount;
    }
    /**
     * Set OfferCount value
     * @param int $offerCount
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersType
     */
    public function setOfferCount($offerCount = null)
    {
        // validation for constraint: int
        if (!is_null($offerCount) && !is_numeric($offerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offerCount)), __LINE__);
        }
        $this->OfferCount = $offerCount;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType[] $offer
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersType
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $holidayHomeOffersTypeOfferItem) {
            // validation for constraint: itemType
            if (!$holidayHomeOffersTypeOfferItem instanceof \traveltainment\SOAP17\StructType\HolidayHomeOfferType) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeOfferType, "%s" given', is_object($holidayHomeOffersTypeOfferItem) ? get_class($holidayHomeOffersTypeOfferItem) : gettype($holidayHomeOffersTypeOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersType
     */
    public function addToOffer(\traveltainment\SOAP17\StructType\HolidayHomeOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\HolidayHomeOfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersType
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
