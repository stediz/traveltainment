<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionListSearchType StructType
 * @subpackage Structs
 */
class RegionListSearchType extends SearchType
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionListOptionsType
     */
    public $Options;
    /**
     * Constructor method for RegionListSearchType
     * @uses RegionListSearchType::setOptions()
     * @param \StructType\RegionListOptionsType $options
     */
    public function __construct(\StructType\RegionListOptionsType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \StructType\RegionListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\RegionListOptionsType $options
     * @return \StructType\RegionListSearchType
     */
    public function setOptions(\StructType\RegionListOptionsType $options = null)
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
     * @return \StructType\RegionListSearchType
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
