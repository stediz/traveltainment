<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProgramType StructType
 * @subpackage Structs
 */
class ProgramType extends AbstractStructBase
{
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The Airline
     * @var string
     */
    public $Airline;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * Constructor method for ProgramType
     * @uses ProgramType::setCode()
     * @uses ProgramType::setAirline()
     * @uses ProgramType::setName()
     * @param string $code
     * @param string $airline
     * @param string $name
     */
    public function __construct($code = null, $airline = null, $name = null)
    {
        $this
            ->setCode($code)
            ->setAirline($airline)
            ->setName($name);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @uses \traveltainment\SOAP17\EnumType\FrequentFlierCode::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\FrequentFlierCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $code
     * @return \traveltainment\SOAP17\StructType\ProgramType
     */
    public function setCode($code = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\FrequentFlierCode::valueIsValid($code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $code, implode(', ', \traveltainment\SOAP17\EnumType\FrequentFlierCode::getValidValues())), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Airline value
     * @return string|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @uses \traveltainment\SOAP17\EnumType\FrequentFlierAirline::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\FrequentFlierAirline::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $airline
     * @return \traveltainment\SOAP17\StructType\ProgramType
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\FrequentFlierAirline::valueIsValid($airline)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $airline, implode(', ', \traveltainment\SOAP17\EnumType\FrequentFlierAirline::getValidValues())), __LINE__);
        }
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \traveltainment\SOAP17\EnumType\FrequentFlierProgram::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\FrequentFlierProgram::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \traveltainment\SOAP17\StructType\ProgramType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\FrequentFlierProgram::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \traveltainment\SOAP17\EnumType\FrequentFlierProgram::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ProgramType
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
