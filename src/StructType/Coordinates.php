<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coordinates StructType
 * @subpackage Structs
 */
class Coordinates extends AbstractStructBase
{
    /**
     * The Longitude
     * @var float
     */
    public $Longitude;
    /**
     * The Latitude
     * @var float
     */
    public $Latitude;
    /**
     * Constructor method for Coordinates
     * @uses Coordinates::setLongitude()
     * @uses Coordinates::setLatitude()
     * @param float $longitude
     * @param float $latitude
     */
    public function __construct($longitude = null, $latitude = null)
    {
        $this
            ->setLongitude($longitude)
            ->setLatitude($latitude);
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $longitude
     * @return \StructType\Coordinates
     */
    public function setLongitude($longitude = null)
    {
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $latitude
     * @return \StructType\Coordinates
     */
    public function setLatitude($latitude = null)
    {
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Coordinates
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
