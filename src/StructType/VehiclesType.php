<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclesType StructType
 * @subpackage Structs
 */
class VehiclesType extends AbstractStructBase
{
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \StructType\VehicleType[]
     */
    public $Vehicle;
    /**
     * Constructor method for VehiclesType
     * @uses VehiclesType::setVehicle()
     * @param \StructType\VehicleType[] $vehicle
     */
    public function __construct(array $vehicle = array())
    {
        $this
            ->setVehicle($vehicle);
    }
    /**
     * Get Vehicle value
     * @return \StructType\VehicleType[]|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @throws \InvalidArgumentException
     * @param \StructType\VehicleType[] $vehicle
     * @return \StructType\VehiclesType
     */
    public function setVehicle(array $vehicle = array())
    {
        foreach ($vehicle as $vehiclesTypeVehicleItem) {
            // validation for constraint: itemType
            if (!$vehiclesTypeVehicleItem instanceof \StructType\VehicleType) {
                throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \StructType\VehicleType, "%s" given', is_object($vehiclesTypeVehicleItem) ? get_class($vehiclesTypeVehicleItem) : gettype($vehiclesTypeVehicleItem)), __LINE__);
            }
        }
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Add item to Vehicle value
     * @throws \InvalidArgumentException
     * @param \StructType\VehicleType $item
     * @return \StructType\VehiclesType
     */
    public function addToVehicle(\StructType\VehicleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VehicleType) {
            throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \StructType\VehicleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Vehicle[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VehiclesType
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
