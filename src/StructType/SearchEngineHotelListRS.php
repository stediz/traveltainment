<?php

namespace StructType;

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
     * @var \StructType\HotelResultSummaryType
     */
    public $ResultSummary;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionType
     */
    public $Region;
    /**
     * Constructor method for SearchEngineHotelListRS
     * @uses SearchEngineHotelListRS::setResultSummary()
     * @uses SearchEngineHotelListRS::setRegion()
     * @param \StructType\HotelResultSummaryType $resultSummary
     * @param \StructType\RegionType $region
     */
    public function __construct(\StructType\HotelResultSummaryType $resultSummary = null, \StructType\RegionType $region = null)
    {
        $this
            ->setResultSummary($resultSummary)
            ->setRegion($region);
    }
    /**
     * Get ResultSummary value
     * @return \StructType\HotelResultSummaryType|null
     */
    public function getResultSummary()
    {
        return $this->ResultSummary;
    }
    /**
     * Set ResultSummary value
     * @param \StructType\HotelResultSummaryType $resultSummary
     * @return \StructType\SearchEngineHotelListRS
     */
    public function setResultSummary(\StructType\HotelResultSummaryType $resultSummary = null)
    {
        $this->ResultSummary = $resultSummary;
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
     * @return \StructType\SearchEngineHotelListRS
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
     * @return \StructType\SearchEngineHotelListRS
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
