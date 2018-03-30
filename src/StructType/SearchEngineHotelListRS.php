<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineHotelListRS StructType
 * @subpackage Structs
 */
class SearchEngineHotelListRS extends XmlInterfaceSearchRS
{
    /**
     * The ResultSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelResultSummaryType
     */
    public $ResultSummary;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\RegionType
     */
    public $Region;
    /**
     * Constructor method for SearchEngineHotelListRS
     * @uses SearchEngineHotelListRS::setResultSummary()
     * @uses SearchEngineHotelListRS::setRegion()
     * @param \traveltainment\SOAP17\StructType\HotelResultSummaryType $resultSummary
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     */
    public function __construct(\traveltainment\SOAP17\StructType\HotelResultSummaryType $resultSummary = null, \traveltainment\SOAP17\StructType\RegionType $region = null)
    {
        $this
            ->setResultSummary($resultSummary)
            ->setRegion($region);
    }
    /**
     * Get ResultSummary value
     * @return \traveltainment\SOAP17\StructType\HotelResultSummaryType|null
     */
    public function getResultSummary()
    {
        return $this->ResultSummary;
    }
    /**
     * Set ResultSummary value
     * @param \traveltainment\SOAP17\StructType\HotelResultSummaryType $resultSummary
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRS
     */
    public function setResultSummary(\traveltainment\SOAP17\StructType\HotelResultSummaryType $resultSummary = null)
    {
        $this->ResultSummary = $resultSummary;
        return $this;
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRS
     */
    public function setRegion(\traveltainment\SOAP17\StructType\RegionType $region = null)
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
     * @return \traveltainment\SOAP17\StructType\SearchEngineHotelListRS
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
