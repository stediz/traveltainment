<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDurationFilterType StructType
 * @subpackage Structs
 */
class FlightDurationFilterType extends \EnumType\FlightDurationEnum
{
    /**
     * The _
     * @var string
     */
    public $_;
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
     * Constructor method for FlightDurationFilterType
     * @uses FlightDurationFilterType::set_()
     * @uses FlightDurationFilterType::setWeightage()
     * @param string $_
     * @param int $weightage
     */
    public function __construct($_ = null, $weightage = '0')
    {
        $this
            ->set_($_)
            ->setWeightage($weightage);
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
     * @uses \EnumType\FlightDurationEnum::valueIsValid()
     * @uses \EnumType\FlightDurationEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \StructType\FlightDurationFilterType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FlightDurationEnum::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \EnumType\FlightDurationEnum::getValidValues())), __LINE__);
        }
        $this->_ = $_;
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
     * @return \StructType\FlightDurationFilterType
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
     * @return \StructType\FlightDurationFilterType
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
