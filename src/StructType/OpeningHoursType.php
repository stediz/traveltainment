<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpeningHoursType StructType
 * Meta informations extracted from the WSDL
 * - pattern: [OC]{96}
 * @subpackage Structs
 */
class OpeningHoursType extends AbstractStructBase
{
    /**
     * The Weekday
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Weekday;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - pattern: [OC]{96}
     * @var string
     */
    public $_;
    /**
     * Constructor method for OpeningHoursType
     * @uses OpeningHoursType::setWeekday()
     * @uses OpeningHoursType::set_()
     * @param string $weekday
     * @param string $_
     */
    public function __construct($weekday = null, $_ = null)
    {
        $this
            ->setWeekday($weekday)
            ->set_($_);
    }
    /**
     * Get Weekday value
     * @return string
     */
    public function getWeekday()
    {
        return $this->Weekday;
    }
    /**
     * Set Weekday value
     * @uses \traveltainment\SOAP17\EnumType\WeekdayEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\WeekdayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $weekday
     * @return \traveltainment\SOAP17\StructType\OpeningHoursType
     */
    public function setWeekday($weekday = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\WeekdayEnum::valueIsValid($weekday)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $weekday, implode(', ', \traveltainment\SOAP17\EnumType\WeekdayEnum::getValidValues())), __LINE__);
        }
        $this->Weekday = $weekday;
        return $this;
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
     * @return \traveltainment\SOAP17\StructType\OpeningHoursType
     */
    public function set_($_ = null)
    {
        // validation for constraint: pattern
        if (is_scalar($_) && !preg_match('/[OC]{96}/', $_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[OC]{96}", "%s" given', var_export($_, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\OpeningHoursType
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
