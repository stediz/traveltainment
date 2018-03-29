<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeographicalBounds StructType
 * @subpackage Structs
 */
class GeographicalBounds extends AbstractStructBase
{
    /**
     * The MinCoordinates
     * @var \StructType\Coordinates
     */
    public $MinCoordinates;
    /**
     * The MaxCoordinates
     * @var \StructType\Coordinates
     */
    public $MaxCoordinates;
    /**
     * Constructor method for GeographicalBounds
     * @uses GeographicalBounds::setMinCoordinates()
     * @uses GeographicalBounds::setMaxCoordinates()
     * @param \StructType\Coordinates $minCoordinates
     * @param \StructType\Coordinates $maxCoordinates
     */
    public function __construct(\StructType\Coordinates $minCoordinates = null, \StructType\Coordinates $maxCoordinates = null)
    {
        $this
            ->setMinCoordinates($minCoordinates)
            ->setMaxCoordinates($maxCoordinates);
    }
    /**
     * Get MinCoordinates value
     * @return \StructType\Coordinates|null
     */
    public function getMinCoordinates()
    {
        return $this->MinCoordinates;
    }
    /**
     * Set MinCoordinates value
     * @param \StructType\Coordinates $minCoordinates
     * @return \StructType\GeographicalBounds
     */
    public function setMinCoordinates(\StructType\Coordinates $minCoordinates = null)
    {
        $this->MinCoordinates = $minCoordinates;
        return $this;
    }
    /**
     * Get MaxCoordinates value
     * @return \StructType\Coordinates|null
     */
    public function getMaxCoordinates()
    {
        return $this->MaxCoordinates;
    }
    /**
     * Set MaxCoordinates value
     * @param \StructType\Coordinates $maxCoordinates
     * @return \StructType\GeographicalBounds
     */
    public function setMaxCoordinates(\StructType\Coordinates $maxCoordinates = null)
    {
        $this->MaxCoordinates = $maxCoordinates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GeographicalBounds
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
