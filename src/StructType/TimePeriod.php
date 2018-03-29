<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimePeriod StructType
 * @subpackage Structs
 */
class TimePeriod extends AbstractStructBase
{
    /**
     * The FromDate
     * @var string
     */
    public $FromDate;
    /**
     * The ToDate
     * @var string
     */
    public $ToDate;
    /**
     * Constructor method for TimePeriod
     * @uses TimePeriod::setFromDate()
     * @uses TimePeriod::setToDate()
     * @param string $fromDate
     * @param string $toDate
     */
    public function __construct($fromDate = null, $toDate = null)
    {
        $this
            ->setFromDate($fromDate)
            ->setToDate($toDate);
    }
    /**
     * Get FromDate value
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }
    /**
     * Set FromDate value
     * @param string $fromDate
     * @return \StructType\TimePeriod
     */
    public function setFromDate($fromDate = null)
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDate)), __LINE__);
        }
        $this->FromDate = $fromDate;
        return $this;
    }
    /**
     * Get ToDate value
     * @return string|null
     */
    public function getToDate()
    {
        return $this->ToDate;
    }
    /**
     * Set ToDate value
     * @param string $toDate
     * @return \StructType\TimePeriod
     */
    public function setToDate($toDate = null)
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toDate)), __LINE__);
        }
        $this->ToDate = $toDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TimePeriod
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
