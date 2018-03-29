<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferLocationType StructType
 * @subpackage Structs
 */
class TransferLocationType extends AbstractStructBase
{
    /**
     * The AirportInfo
     * @var \StructType\AirportInfoType
     */
    public $AirportInfo;
    /**
     * The AccomCode
     * @var string
     */
    public $AccomCode;
    /**
     * The AccomLocator
     * @var \StructType\AccomLocatorType
     */
    public $AccomLocator;
    /**
     * Constructor method for TransferLocationType
     * @uses TransferLocationType::setAirportInfo()
     * @uses TransferLocationType::setAccomCode()
     * @uses TransferLocationType::setAccomLocator()
     * @param \StructType\AirportInfoType $airportInfo
     * @param string $accomCode
     * @param \StructType\AccomLocatorType $accomLocator
     */
    public function __construct(\StructType\AirportInfoType $airportInfo = null, $accomCode = null, \StructType\AccomLocatorType $accomLocator = null)
    {
        $this
            ->setAirportInfo($airportInfo)
            ->setAccomCode($accomCode)
            ->setAccomLocator($accomLocator);
    }
    /**
     * Get AirportInfo value
     * @return \StructType\AirportInfoType|null
     */
    public function getAirportInfo()
    {
        return $this->AirportInfo;
    }
    /**
     * Set AirportInfo value
     * @param \StructType\AirportInfoType $airportInfo
     * @return \StructType\TransferLocationType
     */
    public function setAirportInfo(\StructType\AirportInfoType $airportInfo = null)
    {
        $this->AirportInfo = $airportInfo;
        return $this;
    }
    /**
     * Get AccomCode value
     * @return string|null
     */
    public function getAccomCode()
    {
        return $this->AccomCode;
    }
    /**
     * Set AccomCode value
     * @param string $accomCode
     * @return \StructType\TransferLocationType
     */
    public function setAccomCode($accomCode = null)
    {
        // validation for constraint: string
        if (!is_null($accomCode) && !is_string($accomCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accomCode)), __LINE__);
        }
        $this->AccomCode = $accomCode;
        return $this;
    }
    /**
     * Get AccomLocator value
     * @return \StructType\AccomLocatorType|null
     */
    public function getAccomLocator()
    {
        return $this->AccomLocator;
    }
    /**
     * Set AccomLocator value
     * @param \StructType\AccomLocatorType $accomLocator
     * @return \StructType\TransferLocationType
     */
    public function setAccomLocator(\StructType\AccomLocatorType $accomLocator = null)
    {
        $this->AccomLocator = $accomLocator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransferLocationType
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
