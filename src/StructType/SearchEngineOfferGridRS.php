<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineOfferGridRS StructType
 * @subpackage Structs
 */
class SearchEngineOfferGridRS extends XmlInterfaceRS
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
     * The OfferGridSummary
     * @var \StructType\OffersSummaryType
     */
    public $OfferGridSummary;
    /**
     * The OfferGrid
     * @var \StructType\OfferGridType
     */
    public $OfferGrid;
    /**
     * Constructor method for SearchEngineOfferGridRS
     * @uses SearchEngineOfferGridRS::setRegion()
     * @uses SearchEngineOfferGridRS::setHotel()
     * @uses SearchEngineOfferGridRS::setOfferGridSummary()
     * @uses SearchEngineOfferGridRS::setOfferGrid()
     * @param \StructType\RegionType $region
     * @param \StructType\HotelType $hotel
     * @param \StructType\OffersSummaryType $offerGridSummary
     * @param \StructType\OfferGridType $offerGrid
     */
    public function __construct(\StructType\RegionType $region = null, \StructType\HotelType $hotel = null, \StructType\OffersSummaryType $offerGridSummary = null, \StructType\OfferGridType $offerGrid = null)
    {
        $this
            ->setRegion($region)
            ->setHotel($hotel)
            ->setOfferGridSummary($offerGridSummary)
            ->setOfferGrid($offerGrid);
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
     * @return \StructType\SearchEngineOfferGridRS
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
     * @return \StructType\SearchEngineOfferGridRS
     */
    public function setHotel(\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get OfferGridSummary value
     * @return \StructType\OffersSummaryType|null
     */
    public function getOfferGridSummary()
    {
        return $this->OfferGridSummary;
    }
    /**
     * Set OfferGridSummary value
     * @param \StructType\OffersSummaryType $offerGridSummary
     * @return \StructType\SearchEngineOfferGridRS
     */
    public function setOfferGridSummary(\StructType\OffersSummaryType $offerGridSummary = null)
    {
        $this->OfferGridSummary = $offerGridSummary;
        return $this;
    }
    /**
     * Get OfferGrid value
     * @return \StructType\OfferGridType|null
     */
    public function getOfferGrid()
    {
        return $this->OfferGrid;
    }
    /**
     * Set OfferGrid value
     * @param \StructType\OfferGridType $offerGrid
     * @return \StructType\SearchEngineOfferGridRS
     */
    public function setOfferGrid(\StructType\OfferGridType $offerGrid = null)
    {
        $this->OfferGrid = $offerGrid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchEngineOfferGridRS
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
