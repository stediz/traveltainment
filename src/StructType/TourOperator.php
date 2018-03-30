<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourOperator StructType
 * @subpackage Structs
 */
class TourOperator extends AbstractStructBase
{
    /**
     * The UseNormalSearchAsFallback
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseNormalSearchAsFallback;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $TourOperator;
    /**
     * Constructor method for TourOperator
     * @uses TourOperator::setUseNormalSearchAsFallback()
     * @uses TourOperator::set_()
     * @uses TourOperator::setTourOperator()
     * @param bool $useNormalSearchAsFallback
     * @param string $_
     * @param string[] $tourOperator
     */
    public function __construct($useNormalSearchAsFallback = null, $_ = null, array $tourOperator = array())
    {
        $this
            ->setUseNormalSearchAsFallback($useNormalSearchAsFallback)
            ->set_($_)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get UseNormalSearchAsFallback value
     * @return bool
     */
    public function getUseNormalSearchAsFallback()
    {
        return $this->UseNormalSearchAsFallback;
    }
    /**
     * Set UseNormalSearchAsFallback value
     * @param bool $useNormalSearchAsFallback
     * @return \traveltainment\SOAP17\StructType\TourOperator
     */
    public function setUseNormalSearchAsFallback($useNormalSearchAsFallback = null)
    {
        // validation for constraint: boolean
        if (!is_null($useNormalSearchAsFallback) && !is_bool($useNormalSearchAsFallback)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useNormalSearchAsFallback)), __LINE__);
        }
        $this->UseNormalSearchAsFallback = $useNormalSearchAsFallback;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \traveltainment\SOAP17\StructType\TourOperator
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return string[]|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @throws \InvalidArgumentException
     * @param string[] $tourOperator
     * @return \traveltainment\SOAP17\StructType\TourOperator
     */
    public function setTourOperator(array $tourOperator = array())
    {
        foreach ($tourOperator as $tourOperatorTourOperatorItem) {
            // validation for constraint: itemType
            if (!is_string($tourOperatorTourOperatorItem)) {
                throw new \InvalidArgumentException(sprintf('The TourOperator property can only contain items of string, "%s" given', is_object($tourOperatorTourOperatorItem) ? get_class($tourOperatorTourOperatorItem) : gettype($tourOperatorTourOperatorItem)), __LINE__);
            }
        }
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Add item to TourOperator value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\TourOperator
     */
    public function addToTourOperator($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TourOperator property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TourOperator[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TourOperator
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
