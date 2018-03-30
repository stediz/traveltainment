<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleConfigurationType StructType
 * @subpackage Structs
 */
class VehicleConfigurationType extends AbstractStructBase
{
    /**
     * The AirConditionAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AirConditionAvailable;
    /**
     * Constructor method for VehicleConfigurationType
     * @uses VehicleConfigurationType::setAirConditionAvailable()
     * @param bool $airConditionAvailable
     */
    public function __construct($airConditionAvailable = null)
    {
        $this
            ->setAirConditionAvailable($airConditionAvailable);
    }
    /**
     * Get AirConditionAvailable value
     * @return bool|null
     */
    public function getAirConditionAvailable()
    {
        return $this->AirConditionAvailable;
    }
    /**
     * Set AirConditionAvailable value
     * @param bool $airConditionAvailable
     * @return \traveltainment\SOAP17\StructType\VehicleConfigurationType
     */
    public function setAirConditionAvailable($airConditionAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($airConditionAvailable) && !is_bool($airConditionAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($airConditionAvailable)), __LINE__);
        }
        $this->AirConditionAvailable = $airConditionAvailable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\VehicleConfigurationType
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
