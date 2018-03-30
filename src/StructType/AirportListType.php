<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportListType StructType
 * @subpackage Structs
 */
class AirportListType extends AbstractStructBase
{
    /**
     * The Airport
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [A-Z]{3}
     * @var string[]
     */
    public $Airport;
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
     * Constructor method for AirportListType
     * @uses AirportListType::setAirport()
     * @uses AirportListType::setWeightage()
     * @param string[] $airport
     * @param int $weightage
     */
    public function __construct(array $airport = array(), $weightage = '0')
    {
        $this
            ->setAirport($airport)
            ->setWeightage($weightage);
    }
    /**
     * Get Airport value
     * @return string[]|null
     */
    public function getAirport()
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @throws \InvalidArgumentException
     * @param string[] $airport
     * @return \traveltainment\SOAP17\StructType\AirportListType
     */
    public function setAirport(array $airport = array())
    {
        // validation for constraint: pattern
        if (is_scalar($airport) && !preg_match('/[A-Z]{3}/', $airport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($airport, true)), __LINE__);
        }
        foreach ($airport as $airportListTypeAirportItem) {
            // validation for constraint: itemType
            if (!is_string($airportListTypeAirportItem)) {
                throw new \InvalidArgumentException(sprintf('The Airport property can only contain items of string, "%s" given', is_object($airportListTypeAirportItem) ? get_class($airportListTypeAirportItem) : gettype($airportListTypeAirportItem)), __LINE__);
            }
        }
        $this->Airport = $airport;
        return $this;
    }
    /**
     * Add item to Airport value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\AirportListType
     */
    public function addToAirport($item)
    {
        // validation for constraint: pattern
        if (is_scalar($item) && !preg_match('/[A-Z]{3}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($item, true)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Airport property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Airport[] = $item;
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
     * @return \traveltainment\SOAP17\StructType\AirportListType
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
     * @return \traveltainment\SOAP17\StructType\AirportListType
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
