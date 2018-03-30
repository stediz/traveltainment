<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TeaserOptionsType StructType
 * @subpackage Structs
 */
class TeaserOptionsType extends AbstractStructBase
{
    /**
     * The AllowAlternativeTourOperator
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AllowAlternativeTourOperator;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperator
     */
    public $TourOperator;
    /**
     * Constructor method for TeaserOptionsType
     * @uses TeaserOptionsType::setAllowAlternativeTourOperator()
     * @uses TeaserOptionsType::setTourOperator()
     * @param bool $allowAlternativeTourOperator
     * @param \traveltainment\SOAP17\StructType\TourOperator $tourOperator
     */
    public function __construct($allowAlternativeTourOperator = null, \traveltainment\SOAP17\StructType\TourOperator $tourOperator = null)
    {
        $this
            ->setAllowAlternativeTourOperator($allowAlternativeTourOperator)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get AllowAlternativeTourOperator value
     * @return bool
     */
    public function getAllowAlternativeTourOperator()
    {
        return $this->AllowAlternativeTourOperator;
    }
    /**
     * Set AllowAlternativeTourOperator value
     * @param bool $allowAlternativeTourOperator
     * @return \traveltainment\SOAP17\StructType\TeaserOptionsType
     */
    public function setAllowAlternativeTourOperator($allowAlternativeTourOperator = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowAlternativeTourOperator) && !is_bool($allowAlternativeTourOperator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowAlternativeTourOperator)), __LINE__);
        }
        $this->AllowAlternativeTourOperator = $allowAlternativeTourOperator;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\TourOperator|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\TourOperator $tourOperator
     * @return \traveltainment\SOAP17\StructType\TeaserOptionsType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\TourOperator $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TeaserOptionsType
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
