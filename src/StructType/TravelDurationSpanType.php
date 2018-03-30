<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDurationSpanType StructType
 * @subpackage Structs
 */
class TravelDurationSpanType extends AbstractStructBase
{
    /**
     * The MinDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var int
     */
    public $MinDays;
    /**
     * The MaxDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var int
     */
    public $MaxDays;
    /**
     * The Weightage
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxInclusive: 100
     * - minInclusive: 0
     * @var int
     */
    public $Weightage;
    /**
     * Constructor method for TravelDurationSpanType
     * @uses TravelDurationSpanType::setMinDays()
     * @uses TravelDurationSpanType::setMaxDays()
     * @uses TravelDurationSpanType::setWeightage()
     * @param int $minDays
     * @param int $maxDays
     * @param int $weightage
     */
    public function __construct($minDays = null, $maxDays = null, $weightage = '0')
    {
        $this
            ->setMinDays($minDays)
            ->setMaxDays($maxDays)
            ->setWeightage($weightage);
    }
    /**
     * Get MinDays value
     * @return int|null
     */
    public function getMinDays()
    {
        return $this->MinDays;
    }
    /**
     * Set MinDays value
     * @param int $minDays
     * @return \traveltainment\SOAP17\StructType\TravelDurationSpanType
     */
    public function setMinDays($minDays = null)
    {
        // validation for constraint: minInclusive
        if ($minDays < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $minDays), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($minDays) && !is_numeric($minDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minDays)), __LINE__);
        }
        $this->MinDays = $minDays;
        return $this;
    }
    /**
     * Get MaxDays value
     * @return int|null
     */
    public function getMaxDays()
    {
        return $this->MaxDays;
    }
    /**
     * Set MaxDays value
     * @param int $maxDays
     * @return \traveltainment\SOAP17\StructType\TravelDurationSpanType
     */
    public function setMaxDays($maxDays = null)
    {
        // validation for constraint: minInclusive
        if ($maxDays < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $maxDays), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($maxDays) && !is_numeric($maxDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxDays)), __LINE__);
        }
        $this->MaxDays = $maxDays;
        return $this;
    }
    /**
     * Get Weightage value
     * @return int|null
     */
    public function getWeightage()
    {
        return $this->Weightage;
    }
    /**
     * Set Weightage value
     * @param int $weightage
     * @return \traveltainment\SOAP17\StructType\TravelDurationSpanType
     */
    public function setWeightage($weightage = '0')
    {
        // validation for constraint: maxInclusive
        if ($weightage > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 100, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($weightage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($weightage) && !is_numeric($weightage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weightage)), __LINE__);
        }
        $this->Weightage = $weightage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TravelDurationSpanType
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
