<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TermsAndConditions StructType
 * @subpackage Structs
 */
class TermsAndConditions extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TourOperator;
    /**
     * Constructor method for TermsAndConditions
     * @uses TermsAndConditions::set_()
     * @uses TermsAndConditions::setTourOperator()
     * @param string $_
     * @param string $tourOperator
     */
    public function __construct($_ = null, $tourOperator = null)
    {
        $this
            ->set_($_)
            ->setTourOperator($tourOperator);
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
     * @return \StructType\TermsAndConditions
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
     * @return string|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param string $tourOperator
     * @return \StructType\TermsAndConditions
     */
    public function setTourOperator($tourOperator = null)
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourOperator)), __LINE__);
        }
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TermsAndConditions
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
