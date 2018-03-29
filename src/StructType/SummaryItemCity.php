<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SummaryItemCity StructType
 * @subpackage Structs
 */
class SummaryItemCity extends AbstractStructBase
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
     * The HotelNumber
     * @var int
     */
    public $HotelNumber;
    /**
     * The MinPrice
     * @var int
     */
    public $MinPrice;
    /**
     * Constructor method for SummaryItemCity
     * @uses SummaryItemCity::setCity()
     * @uses SummaryItemCity::setCityID()
     * @uses SummaryItemCity::setHotelNumber()
     * @uses SummaryItemCity::setMinPrice()
     * @param string $city
     * @param int $cityID
     * @param int $hotelNumber
     * @param int $minPrice
     */
    public function __construct($city = null, $cityID = null, $hotelNumber = null, $minPrice = null)
    {
        $this
            ->setCity($city)
            ->setCityID($cityID)
            ->setHotelNumber($hotelNumber)
            ->setMinPrice($minPrice);
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
     * @return \StructType\SummaryItemCity
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
     * @return \StructType\SummaryItemCity
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
     * Get HotelNumber value
     * @return int|null
     */
    public function getHotelNumber()
    {
        return $this->HotelNumber;
    }
    /**
     * Set HotelNumber value
     * @param int $hotelNumber
     * @return \StructType\SummaryItemCity
     */
    public function setHotelNumber($hotelNumber = null)
    {
        // validation for constraint: int
        if (!is_null($hotelNumber) && !is_numeric($hotelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hotelNumber)), __LINE__);
        }
        $this->HotelNumber = $hotelNumber;
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
     * @return \StructType\SummaryItemCity
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
     * @return \StructType\SummaryItemCity
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
