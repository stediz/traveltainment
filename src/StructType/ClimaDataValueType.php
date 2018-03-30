<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClimaDataValueType StructType
 * @subpackage Structs
 */
class ClimaDataValueType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Month
     * Meta informations extracted from the WSDL
     * - maxInclusive: 12
     * - minInclusive: 1
     * @var int
     */
    public $Month;
    /**
     * Constructor method for ClimaDataValueType
     * @uses ClimaDataValueType::set_()
     * @uses ClimaDataValueType::setMonth()
     * @param string $_
     * @param int $month
     */
    public function __construct($_ = null, $month = null)
    {
        $this
            ->set_($_)
            ->setMonth($month);
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
     * @return \traveltainment\SOAP17\StructType\ClimaDataValueType
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
     * Get Month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \traveltainment\SOAP17\StructType\ClimaDataValueType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: maxInclusive
        if ($month > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 12, "%s" given', $month), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($month < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $month), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ClimaDataValueType
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
