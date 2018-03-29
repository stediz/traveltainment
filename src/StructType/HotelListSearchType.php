<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelListSearchType StructType
 * @subpackage Structs
 */
class HotelListSearchType extends SearchType
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelListOptionsType
     */
    public $Options;
    /**
     * Constructor method for HotelListSearchType
     * @uses HotelListSearchType::setOptions()
     * @param \StructType\HotelListOptionsType $options
     */
    public function __construct(\StructType\HotelListOptionsType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \StructType\HotelListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\HotelListOptionsType $options
     * @return \StructType\HotelListSearchType
     */
    public function setOptions(\StructType\HotelListOptionsType $options = null)
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
     * @return \StructType\HotelListSearchType
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
