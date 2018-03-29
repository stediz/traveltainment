<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListSearchType StructType
 * @subpackage Structs
 */
class OfferListSearchType extends SearchType
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferListOptionsType
     */
    public $Options;
    /**
     * Constructor method for OfferListSearchType
     * @uses OfferListSearchType::setOptions()
     * @param \StructType\OfferListOptionsType $options
     */
    public function __construct(\StructType\OfferListOptionsType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \StructType\OfferListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\OfferListOptionsType $options
     * @return \StructType\OfferListSearchType
     */
    public function setOptions(\StructType\OfferListOptionsType $options = null)
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
     * @return \StructType\OfferListSearchType
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
