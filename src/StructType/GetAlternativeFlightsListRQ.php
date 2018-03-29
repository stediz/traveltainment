<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAlternativeFlightsListRQ StructType
 * @subpackage Structs
 */
class GetAlternativeFlightsListRQ extends XmlInterfaceRQ
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AlternativeFlightsOptionsType
     */
    public $Options;
    /**
     * Constructor method for GetAlternativeFlightsListRQ
     * @uses GetAlternativeFlightsListRQ::setOptions()
     * @param \StructType\AlternativeFlightsOptionsType $options
     */
    public function __construct(\StructType\AlternativeFlightsOptionsType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \StructType\AlternativeFlightsOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\AlternativeFlightsOptionsType $options
     * @return \StructType\GetAlternativeFlightsListRQ
     */
    public function setOptions(\StructType\AlternativeFlightsOptionsType $options = null)
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
     * @return \StructType\GetAlternativeFlightsListRQ
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
