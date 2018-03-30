<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityIdentType StructType
 * @subpackage Structs
 */
class CityIdentType extends AbstractStructBase
{
    /**
     * The CityName
     * @var string
     */
    public $CityName;
    /**
     * The CityID
     * @var int
     */
    public $CityID;
    /**
     * Constructor method for CityIdentType
     * @uses CityIdentType::setCityName()
     * @uses CityIdentType::setCityID()
     * @param string $cityName
     * @param int $cityID
     */
    public function __construct($cityName = null, $cityID = null)
    {
        $this
            ->setCityName($cityName)
            ->setCityID($cityID);
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \traveltainment\SOAP17\StructType\CityIdentType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
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
     * @return \traveltainment\SOAP17\StructType\CityIdentType
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
     * @return \traveltainment\SOAP17\StructType\CityIdentType
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
