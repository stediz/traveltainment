<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\VehicleType[]
     */
    public $Vehicle;
    /**
     * Constructor method for VehiclesType
     * @uses VehiclesType::setVehicle()
     * @param \traveltainment\SOAP17\StructType\VehicleType[] $vehicle
     */
    public function __construct(array $vehicle = array())
    {
        $this
            ->setVehicle($vehicle);
    }
    /**
     * Get Vehicle value
     * @return \traveltainment\SOAP17\StructType\VehicleType[]|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\VehicleType[] $vehicle
     * @return \traveltainment\SOAP17\StructType\VehiclesType
     */
    public function setVehicle(array $vehicle = array())
    {
        foreach ($vehicle as $vehiclesTypeVehicleItem) {
            // validation for constraint: itemType
            if (!$vehiclesTypeVehicleItem instanceof \traveltainment\SOAP17\StructType\VehicleType) {
                throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \traveltainment\SOAP17\StructType\VehicleType, "%s" given', is_object($vehiclesTypeVehicleItem) ? get_class($vehiclesTypeVehicleItem) : gettype($vehiclesTypeVehicleItem)), __LINE__);
            }
        }
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Add item to Vehicle value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\VehicleType $item
     * @return \traveltainment\SOAP17\StructType\VehiclesType
     */
    public function addToVehicle(\traveltainment\SOAP17\StructType\VehicleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\VehicleType) {
            throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \traveltainment\SOAP17\StructType\VehicleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\VehiclesType
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
