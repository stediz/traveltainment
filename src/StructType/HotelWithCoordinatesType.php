<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelWithCoordinatesType StructType
 * @subpackage Structs
 */
class HotelWithCoordinatesType extends HotelType
{
    /**
     * The Coordinates
     * @var \StructType\Coordinates
     */
    public $Coordinates;
    /**
     * The Distance
     * @var float
     */
    public $Distance;
    /**
     * Constructor method for HotelWithCoordinatesType
     * @uses HotelWithCoordinatesType::setCoordinates()
     * @uses HotelWithCoordinatesType::setDistance()
     * @param \StructType\Coordinates $coordinates
     * @param float $distance
     */
    public function __construct(\StructType\Coordinates $coordinates = null, $distance = null)
    {
        $this
            ->setCoordinates($coordinates)
            ->setDistance($distance);
    }
    /**
     * Get Coordinates value
     * @return \StructType\Coordinates|null
     */
    public function getCoordinates()
    {
        return $this->Coordinates;
    }
    /**
     * Set Coordinates value
     * @param \StructType\Coordinates $coordinates
     * @return \StructType\HotelWithCoordinatesType
     */
    public function setCoordinates(\StructType\Coordinates $coordinates = null)
    {
        $this->Coordinates = $coordinates;
        return $this;
    }
    /**
     * Get Distance value
     * @return float|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param float $distance
     * @return \StructType\HotelWithCoordinatesType
     */
    public function setDistance($distance = null)
    {
        $this->Distance = $distance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelWithCoordinatesType
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
