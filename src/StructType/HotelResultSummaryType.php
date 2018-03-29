<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResultSummaryType StructType
 * @subpackage Structs
 */
class HotelResultSummaryType extends AbstractStructBase
{
    /**
     * The Cities
     * @var \StructType\SummaryRegion
     */
    public $Cities;
    /**
     * Constructor method for HotelResultSummaryType
     * @uses HotelResultSummaryType::setCities()
     * @param \StructType\SummaryRegion $cities
     */
    public function __construct(\StructType\SummaryRegion $cities = null)
    {
        $this
            ->setCities($cities);
    }
    /**
     * Get Cities value
     * @return \StructType\SummaryRegion|null
     */
    public function getCities()
    {
        return $this->Cities;
    }
    /**
     * Set Cities value
     * @param \StructType\SummaryRegion $cities
     * @return \StructType\HotelResultSummaryType
     */
    public function setCities(\StructType\SummaryRegion $cities = null)
    {
        $this->Cities = $cities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelResultSummaryType
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
