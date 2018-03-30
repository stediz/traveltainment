<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosIntIntervalType StructType
 * @subpackage Structs
 */
class PosIntIntervalType extends AbstractStructBase
{
    /**
     * The Min
     * @var int
     */
    public $Min;
    /**
     * The Max
     * @var int
     */
    public $Max;
    /**
     * Constructor method for PosIntIntervalType
     * @uses PosIntIntervalType::setMin()
     * @uses PosIntIntervalType::setMax()
     * @param int $min
     * @param int $max
     */
    public function __construct($min = null, $max = null)
    {
        $this
            ->setMin($min)
            ->setMax($max);
    }
    /**
     * Get Min value
     * @return int|null
     */
    public function getMin()
    {
        return $this->Min;
    }
    /**
     * Set Min value
     * @param int $min
     * @return \traveltainment\SOAP17\StructType\PosIntIntervalType
     */
    public function setMin($min = null)
    {
        // validation for constraint: int
        if (!is_null($min) && !is_numeric($min)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($min)), __LINE__);
        }
        $this->Min = $min;
        return $this;
    }
    /**
     * Get Max value
     * @return int|null
     */
    public function getMax()
    {
        return $this->Max;
    }
    /**
     * Set Max value
     * @param int $max
     * @return \traveltainment\SOAP17\StructType\PosIntIntervalType
     */
    public function setMax($max = null)
    {
        // validation for constraint: int
        if (!is_null($max) && !is_numeric($max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($max)), __LINE__);
        }
        $this->Max = $max;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\PosIntIntervalType
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
