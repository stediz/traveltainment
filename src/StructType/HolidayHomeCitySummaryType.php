<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeCitySummaryType StructType
 * @subpackage Structs
 */
class HolidayHomeCitySummaryType extends AbstractStructBase
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
     * The ObjectCount
     * @var int
     */
    public $ObjectCount;
    /**
     * The MinPrice
     * @var int
     */
    public $MinPrice;
    /**
     * Constructor method for HolidayHomeCitySummaryType
     * @uses HolidayHomeCitySummaryType::setCityName()
     * @uses HolidayHomeCitySummaryType::setCityID()
     * @uses HolidayHomeCitySummaryType::setObjectCount()
     * @uses HolidayHomeCitySummaryType::setMinPrice()
     * @param string $cityName
     * @param int $cityID
     * @param int $objectCount
     * @param int $minPrice
     */
    public function __construct($cityName = null, $cityID = null, $objectCount = null, $minPrice = null)
    {
        $this
            ->setCityName($cityName)
            ->setCityID($cityID)
            ->setObjectCount($objectCount)
            ->setMinPrice($minPrice);
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
     * @return \StructType\HolidayHomeCitySummaryType
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
     * @return \StructType\HolidayHomeCitySummaryType
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
     * Get ObjectCount value
     * @return int|null
     */
    public function getObjectCount()
    {
        return $this->ObjectCount;
    }
    /**
     * Set ObjectCount value
     * @param int $objectCount
     * @return \StructType\HolidayHomeCitySummaryType
     */
    public function setObjectCount($objectCount = null)
    {
        // validation for constraint: int
        if (!is_null($objectCount) && !is_numeric($objectCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($objectCount)), __LINE__);
        }
        $this->ObjectCount = $objectCount;
        return $this;
    }
    /**
     * Get MinPrice value
     * @return int|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param int $minPrice
     * @return \StructType\HolidayHomeCitySummaryType
     */
    public function setMinPrice($minPrice = null)
    {
        // validation for constraint: int
        if (!is_null($minPrice) && !is_numeric($minPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minPrice)), __LINE__);
        }
        $this->MinPrice = $minPrice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeCitySummaryType
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
