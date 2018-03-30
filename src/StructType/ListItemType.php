<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\RegionType
     */
    public $Region;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelType
     */
    public $Hotel;
    /**
     * The Offer
     * @var \traveltainment\SOAP17\StructType\OfferType
     */
    public $Offer;
    /**
     * Constructor method for ListItemType
     * @uses ListItemType::setRegion()
     * @uses ListItemType::setHotel()
     * @uses ListItemType::setOffer()
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @param \traveltainment\SOAP17\StructType\HotelType $hotel
     * @param \traveltainment\SOAP17\StructType\OfferType $offer
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionType $region = null, \traveltainment\SOAP17\StructType\HotelType $hotel = null, \traveltainment\SOAP17\StructType\OfferType $offer = null)
    {
        $this
            ->setRegion($region)
            ->setHotel($hotel)
            ->setOffer($offer);
    }
    /**
     * Get Region value
     * @return \traveltainment\SOAP17\StructType\RegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @return \traveltainment\SOAP17\StructType\ListItemType
     */
    public function setRegion(\traveltainment\SOAP17\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \traveltainment\SOAP17\StructType\HotelType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \traveltainment\SOAP17\StructType\HotelType $hotel
     * @return \traveltainment\SOAP17\StructType\ListItemType
     */
    public function setHotel(\traveltainment\SOAP17\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\OfferType $offer
     * @return \traveltainment\SOAP17\StructType\ListItemType
     */
    public function setOffer(\traveltainment\SOAP17\StructType\OfferType $offer = null)
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
     * @return \traveltainment\SOAP17\StructType\ListItemType
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
