<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeWithCoordinatesType StructType
 * @subpackage Structs
 */
class HolidayHomeWithCoordinatesType extends HolidayHomeType
{
    /**
     * The Coordinates
     * @var \StructType\Coordinates
     */
    public $Coordinates;
    /**
     * Constructor method for HolidayHomeWithCoordinatesType
     * @uses HolidayHomeWithCoordinatesType::setCoordinates()
     * @param \StructType\Coordinates $coordinates
     */
    public function __construct(\StructType\Coordinates $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
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
     * @return \StructType\HolidayHomeWithCoordinatesType
     */
    public function setCoordinates(\StructType\Coordinates $coordinates = null)
    {
        $this->Coordinates = $coordinates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeWithCoordinatesType
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
