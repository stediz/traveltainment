<?php

namespace traveltainment\SOAP17\StructType;

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
     * The OfferGridSummary
     * @var \traveltainment\SOAP17\StructType\OffersSummaryType
     */
    public $OfferGridSummary;
    /**
     * The OfferGrid
     * @var \traveltainment\SOAP17\StructType\OfferGridType
     */
    public $OfferGrid;
    /**
     * Constructor method for SearchEngineOfferGridRS
     * @uses SearchEngineOfferGridRS::setRegion()
     * @uses SearchEngineOfferGridRS::setHotel()
     * @uses SearchEngineOfferGridRS::setOfferGridSummary()
     * @uses SearchEngineOfferGridRS::setOfferGrid()
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @param \traveltainment\SOAP17\StructType\HotelType $hotel
     * @param \traveltainment\SOAP17\StructType\OffersSummaryType $offerGridSummary
     * @param \traveltainment\SOAP17\StructType\OfferGridType $offerGrid
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionType $region = null, \traveltainment\SOAP17\StructType\HotelType $hotel = null, \traveltainment\SOAP17\StructType\OffersSummaryType $offerGridSummary = null, \traveltainment\SOAP17\StructType\OfferGridType $offerGrid = null)
    {
        $this
            ->setRegion($region)
            ->setHotel($hotel)
            ->setOfferGridSummary($offerGridSummary)
            ->setOfferGrid($offerGrid);
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRS
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRS
     */
    public function setHotel(\traveltainment\SOAP17\StructType\HotelType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get OfferGridSummary value
     * @return \traveltainment\SOAP17\StructType\OffersSummaryType|null
     */
    public function getOfferGridSummary()
    {
        return $this->OfferGridSummary;
    }
    /**
     * Set OfferGridSummary value
     * @param \traveltainment\SOAP17\StructType\OffersSummaryType $offerGridSummary
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRS
     */
    public function setOfferGridSummary(\traveltainment\SOAP17\StructType\OffersSummaryType $offerGridSummary = null)
    {
        $this->OfferGridSummary = $offerGridSummary;
        return $this;
    }
    /**
     * Get OfferGrid value
     * @return \traveltainment\SOAP17\StructType\OfferGridType|null
     */
    public function getOfferGrid()
    {
        return $this->OfferGrid;
    }
    /**
     * Set OfferGrid value
     * @param \traveltainment\SOAP17\StructType\OfferGridType $offerGrid
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRS
     */
    public function setOfferGrid(\traveltainment\SOAP17\StructType\OfferGridType $offerGrid = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRS
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
