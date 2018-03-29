<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalLocationsRSType StructType
 * @subpackage Structs
 */
class GetCarRentalLocationsRSType extends ResponseType
{
    /**
     * The Errors
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Locations
     * @var \StructType\CarRentalLocationsType
     */
    public $Locations;
    /**
     * Constructor method for GetCarRentalLocationsRSType
     * @uses GetCarRentalLocationsRSType::setErrors()
     * @uses GetCarRentalLocationsRSType::setLocations()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\CarRentalLocationsType $locations
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\CarRentalLocationsType $locations = null)
    {
        $this
            ->setErrors($errors)
            ->setLocations($locations);
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \StructType\ErrorsType $errors
     * @return \StructType\GetCarRentalLocationsRSType
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Locations value
     * @return \StructType\CarRentalLocationsType|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \StructType\CarRentalLocationsType $locations
     * @return \StructType\GetCarRentalLocationsRSType
     */
    public function setLocations(\StructType\CarRentalLocationsType $locations = null)
    {
        $this->Locations = $locations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCarRentalLocationsRSType
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
