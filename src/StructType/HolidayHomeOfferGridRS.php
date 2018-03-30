<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\RegionType
     */
    public $Region;
    /**
     * The HolidayHome
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public $HolidayHome;
    /**
     * The OfferGridSummary
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType
     */
    public $OfferGridSummary;
    /**
     * The OfferGrid
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferGridType
     */
    public $OfferGrid;
    /**
     * Constructor method for HolidayHomeOfferGridRS
     * @uses HolidayHomeOfferGridRS::setRegion()
     * @uses HolidayHomeOfferGridRS::setHolidayHome()
     * @uses HolidayHomeOfferGridRS::setOfferGridSummary()
     * @uses HolidayHomeOfferGridRS::setOfferGrid()
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @param \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offerGridSummary
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridType $offerGrid
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionType $region = null, \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome = null, \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offerGridSummary = null, \traveltainment\SOAP17\StructType\HolidayHomeOfferGridType $offerGrid = null)
    {
        $this
            ->setRegion($region)
            ->setHolidayHome($holidayHome)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRS
     */
    public function setRegion(\traveltainment\SOAP17\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get HolidayHome value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType|null
     */
    public function getHolidayHome()
    {
        return $this->HolidayHome;
    }
    /**
     * Set HolidayHome value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRS
     */
    public function setHolidayHome(\traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome = null)
    {
        $this->HolidayHome = $holidayHome;
        return $this;
    }
    /**
     * Get OfferGridSummary value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType|null
     */
    public function getOfferGridSummary()
    {
        return $this->OfferGridSummary;
    }
    /**
     * Set OfferGridSummary value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offerGridSummary
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRS
     */
    public function setOfferGridSummary(\traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offerGridSummary = null)
    {
        $this->OfferGridSummary = $offerGridSummary;
        return $this;
    }
    /**
     * Get OfferGrid value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridType|null
     */
    public function getOfferGrid()
    {
        return $this->OfferGrid;
    }
    /**
     * Set OfferGrid value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridType $offerGrid
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRS
     */
    public function setOfferGrid(\traveltainment\SOAP17\StructType\HolidayHomeOfferGridType $offerGrid = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridRS
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
