<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalLocationsRSType StructType
 * @subpackage Structs
 */
class GetCarRentalLocationsRSType extends ResponseType
{
    /**
     * The Errors
     * @var \traveltainment\SOAP17\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Locations
     * @var \traveltainment\SOAP17\StructType\CarRentalLocationsType
     */
    public $Locations;
    /**
     * Constructor method for GetCarRentalLocationsRSType
     * @uses GetCarRentalLocationsRSType::setErrors()
     * @uses GetCarRentalLocationsRSType::setLocations()
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @param \traveltainment\SOAP17\StructType\CarRentalLocationsType $locations
     */
    public function __construct(\traveltainment\SOAP17\StructType\ErrorsType $errors = null, \traveltainment\SOAP17\StructType\CarRentalLocationsType $locations = null)
    {
        $this
            ->setErrors($errors)
            ->setLocations($locations);
    }
    /**
     * Get Errors value
     * @return \traveltainment\SOAP17\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @return \traveltainment\SOAP17\StructType\GetCarRentalLocationsRSType
     */
    public function setErrors(\traveltainment\SOAP17\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Locations value
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationsType|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \traveltainment\SOAP17\StructType\CarRentalLocationsType $locations
     * @return \traveltainment\SOAP17\StructType\GetCarRentalLocationsRSType
     */
    public function setLocations(\traveltainment\SOAP17\StructType\CarRentalLocationsType $locations = null)
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalLocationsRSType
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
