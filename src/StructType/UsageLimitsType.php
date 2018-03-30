<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsageLimitsType StructType
 * @subpackage Structs
 */
class UsageLimitsType extends AbstractStructBase
{
    /**
     * The MinParkingDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinParkingDays;
    /**
     * The MaxParkingDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxParkingDays;
    /**
     * The MaxCarSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MaxCarSize;
    /**
     * Constructor method for UsageLimitsType
     * @uses UsageLimitsType::setMinParkingDays()
     * @uses UsageLimitsType::setMaxParkingDays()
     * @uses UsageLimitsType::setMaxCarSize()
     * @param int $minParkingDays
     * @param int $maxParkingDays
     * @param string $maxCarSize
     */
    public function __construct($minParkingDays = null, $maxParkingDays = null, $maxCarSize = null)
    {
        $this
            ->setMinParkingDays($minParkingDays)
            ->setMaxParkingDays($maxParkingDays)
            ->setMaxCarSize($maxCarSize);
    }
    /**
     * Get MinParkingDays value
     * @return int|null
     */
    public function getMinParkingDays()
    {
        return $this->MinParkingDays;
    }
    /**
     * Set MinParkingDays value
     * @param int $minParkingDays
     * @return \traveltainment\SOAP17\StructType\UsageLimitsType
     */
    public function setMinParkingDays($minParkingDays = null)
    {
        // validation for constraint: int
        if (!is_null($minParkingDays) && !is_numeric($minParkingDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minParkingDays)), __LINE__);
        }
        $this->MinParkingDays = $minParkingDays;
        return $this;
    }
    /**
     * Get MaxParkingDays value
     * @return int|null
     */
    public function getMaxParkingDays()
    {
        return $this->MaxParkingDays;
    }
    /**
     * Set MaxParkingDays value
     * @param int $maxParkingDays
     * @return \traveltainment\SOAP17\StructType\UsageLimitsType
     */
    public function setMaxParkingDays($maxParkingDays = null)
    {
        // validation for constraint: int
        if (!is_null($maxParkingDays) && !is_numeric($maxParkingDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxParkingDays)), __LINE__);
        }
        $this->MaxParkingDays = $maxParkingDays;
        return $this;
    }
    /**
     * Get MaxCarSize value
     * @return string|null
     */
    public function getMaxCarSize()
    {
        return $this->MaxCarSize;
    }
    /**
     * Set MaxCarSize value
     * @param string $maxCarSize
     * @return \traveltainment\SOAP17\StructType\UsageLimitsType
     */
    public function setMaxCarSize($maxCarSize = null)
    {
        // validation for constraint: string
        if (!is_null($maxCarSize) && !is_string($maxCarSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxCarSize)), __LINE__);
        }
        $this->MaxCarSize = $maxCarSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\UsageLimitsType
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
