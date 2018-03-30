<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeWithCoordinatesType StructType
 * @subpackage Structs
 */
class HolidayHomeWithCoordinatesType extends HolidayHomeType
{
    /**
     * The Coordinates
     * @var \traveltainment\SOAP17\StructType\Coordinates
     */
    public $Coordinates;
    /**
     * Constructor method for HolidayHomeWithCoordinatesType
     * @uses HolidayHomeWithCoordinatesType::setCoordinates()
     * @param \traveltainment\SOAP17\StructType\Coordinates $coordinates
     */
    public function __construct(\traveltainment\SOAP17\StructType\Coordinates $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get Coordinates value
     * @return \traveltainment\SOAP17\StructType\Coordinates|null
     */
    public function getCoordinates()
    {
        return $this->Coordinates;
    }
    /**
     * Set Coordinates value
     * @param \traveltainment\SOAP17\StructType\Coordinates $coordinates
     * @return \traveltainment\SOAP17\StructType\HolidayHomeWithCoordinatesType
     */
    public function setCoordinates(\traveltainment\SOAP17\StructType\Coordinates $coordinates = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeWithCoordinatesType
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
