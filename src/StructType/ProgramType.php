<?php

namespace StructType;

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
     * @uses \EnumType\FrequentFlierCode::valueIsValid()
     * @uses \EnumType\FrequentFlierCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $code
     * @return \StructType\ProgramType
     */
    public function setCode($code = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FrequentFlierCode::valueIsValid($code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $code, implode(', ', \EnumType\FrequentFlierCode::getValidValues())), __LINE__);
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
     * @uses \EnumType\FrequentFlierAirline::valueIsValid()
     * @uses \EnumType\FrequentFlierAirline::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $airline
     * @return \StructType\ProgramType
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FrequentFlierAirline::valueIsValid($airline)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $airline, implode(', ', \EnumType\FrequentFlierAirline::getValidValues())), __LINE__);
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
     * @uses \EnumType\FrequentFlierProgram::valueIsValid()
     * @uses \EnumType\FrequentFlierProgram::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \StructType\ProgramType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FrequentFlierProgram::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \EnumType\FrequentFlierProgram::getValidValues())), __LINE__);
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
     * @return \StructType\ProgramType
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
