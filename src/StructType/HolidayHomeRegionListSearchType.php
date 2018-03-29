<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeRegionListSearchType StructType
 * @subpackage Structs
 */
class HolidayHomeRegionListSearchType extends HolidayHomeSearchType
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeRegionListOptionsType
     */
    public $Options;
    /**
     * Constructor method for HolidayHomeRegionListSearchType
     * @uses HolidayHomeRegionListSearchType::setOptions()
     * @param \StructType\HolidayHomeRegionListOptionsType $options
     */
    public function __construct(\StructType\HolidayHomeRegionListOptionsType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \StructType\HolidayHomeRegionListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\HolidayHomeRegionListOptionsType $options
     * @return \StructType\HolidayHomeRegionListSearchType
     */
    public function setOptions(\StructType\HolidayHomeRegionListOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeRegionListSearchType
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
