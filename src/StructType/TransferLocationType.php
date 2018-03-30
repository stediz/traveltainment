<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferLocationType StructType
 * @subpackage Structs
 */
class TransferLocationType extends AbstractStructBase
{
    /**
     * The AirportInfo
     * @var \traveltainment\SOAP17\StructType\AirportInfoType
     */
    public $AirportInfo;
    /**
     * The AccomCode
     * @var string
     */
    public $AccomCode;
    /**
     * The AccomLocator
     * @var \traveltainment\SOAP17\StructType\AccomLocatorType
     */
    public $AccomLocator;
    /**
     * Constructor method for TransferLocationType
     * @uses TransferLocationType::setAirportInfo()
     * @uses TransferLocationType::setAccomCode()
     * @uses TransferLocationType::setAccomLocator()
     * @param \traveltainment\SOAP17\StructType\AirportInfoType $airportInfo
     * @param string $accomCode
     * @param \traveltainment\SOAP17\StructType\AccomLocatorType $accomLocator
     */
    public function __construct(\traveltainment\SOAP17\StructType\AirportInfoType $airportInfo = null, $accomCode = null, \traveltainment\SOAP17\StructType\AccomLocatorType $accomLocator = null)
    {
        $this
            ->setAirportInfo($airportInfo)
            ->setAccomCode($accomCode)
            ->setAccomLocator($accomLocator);
    }
    /**
     * Get AirportInfo value
     * @return \traveltainment\SOAP17\StructType\AirportInfoType|null
     */
    public function getAirportInfo()
    {
        return $this->AirportInfo;
    }
    /**
     * Set AirportInfo value
     * @param \traveltainment\SOAP17\StructType\AirportInfoType $airportInfo
     * @return \traveltainment\SOAP17\StructType\TransferLocationType
     */
    public function setAirportInfo(\traveltainment\SOAP17\StructType\AirportInfoType $airportInfo = null)
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
     * @return \traveltainment\SOAP17\StructType\TransferLocationType
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
     * @return \traveltainment\SOAP17\StructType\AccomLocatorType|null
     */
    public function getAccomLocator()
    {
        return $this->AccomLocator;
    }
    /**
     * Set AccomLocator value
     * @param \traveltainment\SOAP17\StructType\AccomLocatorType $accomLocator
     * @return \traveltainment\SOAP17\StructType\TransferLocationType
     */
    public function setAccomLocator(\traveltainment\SOAP17\StructType\AccomLocatorType $accomLocator = null)
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
     * @return \traveltainment\SOAP17\StructType\TransferLocationType
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
