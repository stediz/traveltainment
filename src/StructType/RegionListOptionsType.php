<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionListOptionsType StructType
 * @subpackage Structs
 */
class RegionListOptionsType extends RegionOptionsType
{
    /**
     * The ShowSeparateAlternatives
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ShowSeparateAlternatives;
    /**
     * Constructor method for RegionListOptionsType
     * @uses RegionListOptionsType::setShowSeparateAlternatives()
     * @param bool $showSeparateAlternatives
     */
    public function __construct($showSeparateAlternatives = null)
    {
        $this
            ->setShowSeparateAlternatives($showSeparateAlternatives);
    }
    /**
     * Get ShowSeparateAlternatives value
     * @return bool|null
     */
    public function getShowSeparateAlternatives()
    {
        return $this->ShowSeparateAlternatives;
    }
    /**
     * Set ShowSeparateAlternatives value
     * @param bool $showSeparateAlternatives
     * @return \StructType\RegionListOptionsType
     */
    public function setShowSeparateAlternatives($showSeparateAlternatives = null)
    {
        // validation for constraint: boolean
        if (!is_null($showSeparateAlternatives) && !is_bool($showSeparateAlternatives)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showSeparateAlternatives)), __LINE__);
        }
        $this->ShowSeparateAlternatives = $showSeparateAlternatives;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RegionListOptionsType
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
