<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreetNumberType StructType
 * @subpackage Structs
 */
class StreetNumberType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Number
     * @var string
     */
    public $Number;
    /**
     * The Appendix
     * @var string
     */
    public $Appendix;
    /**
     * Constructor method for StreetNumberType
     * @uses StreetNumberType::set_()
     * @uses StreetNumberType::setNumber()
     * @uses StreetNumberType::setAppendix()
     * @param string $_
     * @param string $number
     * @param string $appendix
     */
    public function __construct($_ = null, $number = null, $appendix = null)
    {
        $this
            ->set_($_)
            ->setNumber($number)
            ->setAppendix($appendix);
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
     * @return \traveltainment\SOAP17\StructType\StreetNumberType
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
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \traveltainment\SOAP17\StructType\StreetNumberType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Appendix value
     * @return string|null
     */
    public function getAppendix()
    {
        return $this->Appendix;
    }
    /**
     * Set Appendix value
     * @param string $appendix
     * @return \traveltainment\SOAP17\StructType\StreetNumberType
     */
    public function setAppendix($appendix = null)
    {
        // validation for constraint: string
        if (!is_null($appendix) && !is_string($appendix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appendix)), __LINE__);
        }
        $this->Appendix = $appendix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\StreetNumberType
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
