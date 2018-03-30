<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateTimeType StructType
 * @subpackage Structs
 */
class DateTimeType extends AbstractStructBase
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Date;
    /**
     * The Time
     * @var string
     */
    public $Time;
    /**
     * Constructor method for DateTimeType
     * @uses DateTimeType::setDate()
     * @uses DateTimeType::setTime()
     * @param string $date
     * @param string $time
     */
    public function __construct($date = null, $time = null)
    {
        $this
            ->setDate($date)
            ->setTime($time);
    }
    /**
     * Get Date value
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \traveltainment\SOAP17\StructType\DateTimeType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \traveltainment\SOAP17\StructType\DateTimeType
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\DateTimeType
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
