<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * @subpackage Structs
 */
class VehicleType extends AbstractStructBase
{
    /**
     * The VehicleType
     * @var string
     */
    public $VehicleType;
    /**
     * The VehicleCount
     * @var int
     */
    public $VehicleCount;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setVehicleType()
     * @uses VehicleType::setVehicleCount()
     * @param string $vehicleType
     * @param int $vehicleCount
     */
    public function __construct($vehicleType = null, $vehicleCount = null)
    {
        $this
            ->setVehicleType($vehicleType)
            ->setVehicleCount($vehicleCount);
    }
    /**
     * Get VehicleType value
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @param string $vehicleType
     * @return \StructType\VehicleType
     */
    public function setVehicleType($vehicleType = null)
    {
        // validation for constraint: string
        if (!is_null($vehicleType) && !is_string($vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehicleType)), __LINE__);
        }
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Get VehicleCount value
     * @return int|null
     */
    public function getVehicleCount()
    {
        return $this->VehicleCount;
    }
    /**
     * Set VehicleCount value
     * @param int $vehicleCount
     * @return \StructType\VehicleType
     */
    public function setVehicleCount($vehicleCount = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleCount) && !is_numeric($vehicleCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleCount)), __LINE__);
        }
        $this->VehicleCount = $vehicleCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VehicleType
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
