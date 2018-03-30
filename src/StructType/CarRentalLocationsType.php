<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalLocationsType StructType
 * @subpackage Structs
 */
class CarRentalLocationsType extends AbstractStructBase
{
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CarRentalLocationType[]
     */
    public $Location;
    /**
     * Constructor method for CarRentalLocationsType
     * @uses CarRentalLocationsType::setLocation()
     * @param \traveltainment\SOAP17\StructType\CarRentalLocationType[] $location
     */
    public function __construct(array $location = array())
    {
        $this
            ->setLocation($location);
    }
    /**
     * Get Location value
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationType[]|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\CarRentalLocationType[] $location
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationsType
     */
    public function setLocation(array $location = array())
    {
        foreach ($location as $carRentalLocationsTypeLocationItem) {
            // validation for constraint: itemType
            if (!$carRentalLocationsTypeLocationItem instanceof \traveltainment\SOAP17\StructType\CarRentalLocationType) {
                throw new \InvalidArgumentException(sprintf('The Location property can only contain items of \traveltainment\SOAP17\StructType\CarRentalLocationType, "%s" given', is_object($carRentalLocationsTypeLocationItem) ? get_class($carRentalLocationsTypeLocationItem) : gettype($carRentalLocationsTypeLocationItem)), __LINE__);
            }
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Add item to Location value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\CarRentalLocationType $item
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationsType
     */
    public function addToLocation(\traveltainment\SOAP17\StructType\CarRentalLocationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\CarRentalLocationType) {
            throw new \InvalidArgumentException(sprintf('The Location property can only contain items of \traveltainment\SOAP17\StructType\CarRentalLocationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Location[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalLocationsType
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
