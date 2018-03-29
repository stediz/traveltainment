<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityType StructType
 * @subpackage Structs
 */
class CityType extends AbstractStructBase
{
    /**
     * The City
     * @var string
     */
    public $City;
    /**
     * The CityID
     * @var int
     */
    public $CityID;
    /**
     * Constructor method for CityType
     * @uses CityType::setCity()
     * @uses CityType::setCityID()
     * @param string $city
     * @param int $cityID
     */
    public function __construct($city = null, $cityID = null)
    {
        $this
            ->setCity($city)
            ->setCityID($cityID);
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \StructType\CityType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get CityID value
     * @return int|null
     */
    public function getCityID()
    {
        return $this->CityID;
    }
    /**
     * Set CityID value
     * @param int $cityID
     * @return \StructType\CityType
     */
    public function setCityID($cityID = null)
    {
        // validation for constraint: int
        if (!is_null($cityID) && !is_numeric($cityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cityID)), __LINE__);
        }
        $this->CityID = $cityID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CityType
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
