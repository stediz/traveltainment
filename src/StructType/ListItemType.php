<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListItemType StructType
 * @subpackage Structs
 */
class ListItemType extends AbstractStructBase
{
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionType
     */
    public $Region;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelType
     */
    public $Hotel;
    /**
     * The Offer
     * @var \StructType\OfferType
     */
    public $Offer;
    /**
     * Constructor method for ListItemType
     * @uses ListItemType::setRegion()
     * @uses ListItemType::setHotel()
     * @uses ListItemType::setOffer()
     * @param \StructType\RegionType $region
     * @param \StructType\HotelType $hotel
     * @param \StructType\OfferType $offer
     */
    public function __construct(\StructType\RegionType $region = null, \StructType\HotelType $hotel = null, \StructType\OfferType $offer = null)
    {
        $this
            ->setRegion($region)
            ->setHotel($hotel)
            ->setOffer($offer);
    }
    /**
     * Get Region value
     * @return \StructType\RegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \StructType\RegionType $region
     * @return \StructType\ListItemType
     */
    public function setRegion(\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \StructType\HotelType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \StructType\HotelType $hotel
     * @return \StructType\ListItemType
     */
    public function setHotel(\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\OfferType $offer
     * @return \StructType\ListItemType
     */
    public function setOffer(\StructType\OfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ListItemType
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
