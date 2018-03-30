<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferGridBestPriceDateSpanType StructType
 * @subpackage Structs
 */
class OfferGridBestPriceDateSpanType extends AbstractStructBase
{
    /**
     * The WeekdayStart
     * @var string
     */
    public $WeekdayStart;
    /**
     * The NumberOfDays
     * @var int
     */
    public $NumberOfDays;
    /**
     * Constructor method for OfferGridBestPriceDateSpanType
     * @uses OfferGridBestPriceDateSpanType::setWeekdayStart()
     * @uses OfferGridBestPriceDateSpanType::setNumberOfDays()
     * @param string $weekdayStart
     * @param int $numberOfDays
     */
    public function __construct($weekdayStart = null, $numberOfDays = null)
    {
        $this
            ->setWeekdayStart($weekdayStart)
            ->setNumberOfDays($numberOfDays);
    }
    /**
     * Get WeekdayStart value
     * @return string|null
     */
    public function getWeekdayStart()
    {
        return $this->WeekdayStart;
    }
    /**
     * Set WeekdayStart value
     * @uses \traveltainment\SOAP17\EnumType\WeekdayEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\WeekdayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $weekdayStart
     * @return \traveltainment\SOAP17\StructType\OfferGridBestPriceDateSpanType
     */
    public function setWeekdayStart($weekdayStart = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\WeekdayEnum::valueIsValid($weekdayStart)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $weekdayStart, implode(', ', \traveltainment\SOAP17\EnumType\WeekdayEnum::getValidValues())), __LINE__);
        }
        $this->WeekdayStart = $weekdayStart;
        return $this;
    }
    /**
     * Get NumberOfDays value
     * @return int|null
     */
    public function getNumberOfDays()
    {
        return $this->NumberOfDays;
    }
    /**
     * Set NumberOfDays value
     * @param int $numberOfDays
     * @return \traveltainment\SOAP17\StructType\OfferGridBestPriceDateSpanType
     */
    public function setNumberOfDays($numberOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfDays) && !is_numeric($numberOfDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfDays)), __LINE__);
        }
        $this->NumberOfDays = $numberOfDays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\OfferGridBestPriceDateSpanType
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
