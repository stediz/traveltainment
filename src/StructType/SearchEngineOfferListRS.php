<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineOfferListRS StructType
 * @subpackage Structs
 */
class SearchEngineOfferListRS extends XmlInterfaceSearchRS
{
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferListRSHeader
     */
    public $Header;
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelType
     */
    public $Hotel;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionType
     */
    public $Region;
    /**
     * Constructor method for SearchEngineOfferListRS
     * @uses SearchEngineOfferListRS::setHeader()
     * @uses SearchEngineOfferListRS::setHotel()
     * @uses SearchEngineOfferListRS::setRegion()
     * @param \StructType\OfferListRSHeader $header
     * @param \StructType\HotelType $hotel
     * @param \StructType\RegionType $region
     */
    public function __construct(\StructType\OfferListRSHeader $header = null, \StructType\HotelType $hotel = null, \StructType\RegionType $region = null)
    {
        $this
            ->setHeader($header)
            ->setHotel($hotel)
            ->setRegion($region);
    }
    /**
     * Get Header value
     * @return \StructType\OfferListRSHeader|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param \StructType\OfferListRSHeader $header
     * @return \StructType\SearchEngineOfferListRS
     */
    public function setHeader(\StructType\OfferListRSHeader $header = null)
    {
        $this->Header = $header;
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
     * @return \StructType\SearchEngineOfferListRS
     */
    public function setHotel(\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
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
     * @return \StructType\SearchEngineOfferListRS
     */
    public function setRegion(\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchEngineOfferListRS
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
