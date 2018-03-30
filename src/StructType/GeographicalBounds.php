<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeographicalBounds StructType
 * @subpackage Structs
 */
class GeographicalBounds extends AbstractStructBase
{
    /**
     * The MinCoordinates
     * @var \traveltainment\SOAP17\StructType\Coordinates
     */
    public $MinCoordinates;
    /**
     * The MaxCoordinates
     * @var \traveltainment\SOAP17\StructType\Coordinates
     */
    public $MaxCoordinates;
    /**
     * Constructor method for GeographicalBounds
     * @uses GeographicalBounds::setMinCoordinates()
     * @uses GeographicalBounds::setMaxCoordinates()
     * @param \traveltainment\SOAP17\StructType\Coordinates $minCoordinates
     * @param \traveltainment\SOAP17\StructType\Coordinates $maxCoordinates
     */
    public function __construct(\traveltainment\SOAP17\StructType\Coordinates $minCoordinates = null, \traveltainment\SOAP17\StructType\Coordinates $maxCoordinates = null)
    {
        $this
            ->setMinCoordinates($minCoordinates)
            ->setMaxCoordinates($maxCoordinates);
    }
    /**
     * Get MinCoordinates value
     * @return \traveltainment\SOAP17\StructType\Coordinates|null
     */
    public function getMinCoordinates()
    {
        return $this->MinCoordinates;
    }
    /**
     * Set MinCoordinates value
     * @param \traveltainment\SOAP17\StructType\Coordinates $minCoordinates
     * @return \traveltainment\SOAP17\StructType\GeographicalBounds
     */
    public function setMinCoordinates(\traveltainment\SOAP17\StructType\Coordinates $minCoordinates = null)
    {
        $this->MinCoordinates = $minCoordinates;
        return $this;
    }
    /**
     * Get MaxCoordinates value
     * @return \traveltainment\SOAP17\StructType\Coordinates|null
     */
    public function getMaxCoordinates()
    {
        return $this->MaxCoordinates;
    }
    /**
     * Set MaxCoordinates value
     * @param \traveltainment\SOAP17\StructType\Coordinates $maxCoordinates
     * @return \traveltainment\SOAP17\StructType\GeographicalBounds
     */
    public function setMaxCoordinates(\traveltainment\SOAP17\StructType\Coordinates $maxCoordinates = null)
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
     * @return \traveltainment\SOAP17\StructType\GeographicalBounds
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
