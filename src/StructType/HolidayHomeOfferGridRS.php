<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferGridRS StructType
 * @subpackage Structs
 */
class HolidayHomeOfferGridRS extends XmlInterfaceRS
{
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionType
     */
    public $Region;
    /**
     * The HolidayHome
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeType
     */
    public $HolidayHome;
    /**
     * The OfferGridSummary
     * @var \StructType\HolidayHomeOffersSummaryType
     */
    public $OfferGridSummary;
    /**
     * The OfferGrid
     * @var \StructType\HolidayHomeOfferGridType
     */
    public $OfferGrid;
    /**
     * Constructor method for HolidayHomeOfferGridRS
     * @uses HolidayHomeOfferGridRS::setRegion()
     * @uses HolidayHomeOfferGridRS::setHolidayHome()
     * @uses HolidayHomeOfferGridRS::setOfferGridSummary()
     * @uses HolidayHomeOfferGridRS::setOfferGrid()
     * @param \StructType\RegionType $region
     * @param \StructType\HolidayHomeType $holidayHome
     * @param \StructType\HolidayHomeOffersSummaryType $offerGridSummary
     * @param \StructType\HolidayHomeOfferGridType $offerGrid
     */
    public function __construct(\StructType\RegionType $region = null, \StructType\HolidayHomeType $holidayHome = null, \StructType\HolidayHomeOffersSummaryType $offerGridSummary = null, \StructType\HolidayHomeOfferGridType $offerGrid = null)
    {
        $this
            ->setRegion($region)
            ->setHolidayHome($holidayHome)
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
     * @return \StructType\HolidayHomeOfferGridRS
     */
    public function setRegion(\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get HolidayHome value
     * @return \StructType\HolidayHomeType|null
     */
    public function getHolidayHome()
    {
        return $this->HolidayHome;
    }
    /**
     * Set HolidayHome value
     * @param \StructType\HolidayHomeType $holidayHome
     * @return \StructType\HolidayHomeOfferGridRS
     */
    public function setHolidayHome(\StructType\HolidayHomeType $holidayHome = null)
    {
        $this->HolidayHome = $holidayHome;
        return $this;
    }
    /**
     * Get OfferGridSummary value
     * @return \StructType\HolidayHomeOffersSummaryType|null
     */
    public function getOfferGridSummary()
    {
        return $this->OfferGridSummary;
    }
    /**
     * Set OfferGridSummary value
     * @param \StructType\HolidayHomeOffersSummaryType $offerGridSummary
     * @return \StructType\HolidayHomeOfferGridRS
     */
    public function setOfferGridSummary(\StructType\HolidayHomeOffersSummaryType $offerGridSummary = null)
    {
        $this->OfferGridSummary = $offerGridSummary;
        return $this;
    }
    /**
     * Get OfferGrid value
     * @return \StructType\HolidayHomeOfferGridType|null
     */
    public function getOfferGrid()
    {
        return $this->OfferGrid;
    }
    /**
     * Set OfferGrid value
     * @param \StructType\HolidayHomeOfferGridType $offerGrid
     * @return \StructType\HolidayHomeOfferGridRS
     */
    public function setOfferGrid(\StructType\HolidayHomeOfferGridType $offerGrid = null)
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
     * @return \StructType\HolidayHomeOfferGridRS
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
