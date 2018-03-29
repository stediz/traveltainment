<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeRegionListRS StructType
 * @subpackage Structs
 */
class HolidayHomeRegionListRS extends HolidayHomeSearchRS
{
    /**
     * The GeographicalBounds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GeographicalBounds
     */
    public $GeographicalBounds;
    /**
     * Constructor method for HolidayHomeRegionListRS
     * @uses HolidayHomeRegionListRS::setGeographicalBounds()
     * @param \StructType\GeographicalBounds $geographicalBounds
     */
    public function __construct(\StructType\GeographicalBounds $geographicalBounds = null)
    {
        $this
            ->setGeographicalBounds($geographicalBounds);
    }
    /**
     * Get GeographicalBounds value
     * @return \StructType\GeographicalBounds|null
     */
    public function getGeographicalBounds()
    {
        return $this->GeographicalBounds;
    }
    /**
     * Set GeographicalBounds value
     * @param \StructType\GeographicalBounds $geographicalBounds
     * @return \StructType\HolidayHomeRegionListRS
     */
    public function setGeographicalBounds(\StructType\GeographicalBounds $geographicalBounds = null)
    {
        $this->GeographicalBounds = $geographicalBounds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeRegionListRS
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
