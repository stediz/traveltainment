<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDuration StructType
 * @subpackage Structs
 */
class TravelDuration extends AbstractStructBase
{
    /**
     * The Duration
     * @var int
     */
    public $Duration;
    /**
     * The Overnight
     * @var bool
     */
    public $Overnight;
    /**
     * Constructor method for TravelDuration
     * @uses TravelDuration::setDuration()
     * @uses TravelDuration::setOvernight()
     * @param int $duration
     * @param bool $overnight
     */
    public function __construct($duration = null, $overnight = null)
    {
        $this
            ->setDuration($duration)
            ->setOvernight($overnight);
    }
    /**
     * Get Duration value
     * @return int|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param int $duration
     * @return \StructType\TravelDuration
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: int
        if (!is_null($duration) && !is_numeric($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get Overnight value
     * @return bool|null
     */
    public function getOvernight()
    {
        return $this->Overnight;
    }
    /**
     * Set Overnight value
     * @param bool $overnight
     * @return \StructType\TravelDuration
     */
    public function setOvernight($overnight = null)
    {
        // validation for constraint: boolean
        if (!is_null($overnight) && !is_bool($overnight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overnight)), __LINE__);
        }
        $this->Overnight = $overnight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TravelDuration
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
