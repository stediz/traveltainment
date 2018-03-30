<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fulfilments StructType
 * @subpackage Structs
 */
class Fulfilments extends AbstractStructBase
{
    /**
     * The EntireOffer
     * @var int
     */
    public $EntireOffer;
    /**
     * The DepartureAirport
     * @var int
     */
    public $DepartureAirport;
    /**
     * The TravelDuration
     * @var int
     */
    public $TravelDuration;
    /**
     * The TravelDate
     * @var int
     */
    public $TravelDate;
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RoomType;
    /**
     * The MealsType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MealsType;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Price;
    /**
     * Constructor method for Fulfilments
     * @uses Fulfilments::setEntireOffer()
     * @uses Fulfilments::setDepartureAirport()
     * @uses Fulfilments::setTravelDuration()
     * @uses Fulfilments::setTravelDate()
     * @uses Fulfilments::setRoomType()
     * @uses Fulfilments::setMealsType()
     * @uses Fulfilments::setPrice()
     * @param int $entireOffer
     * @param int $departureAirport
     * @param int $travelDuration
     * @param int $travelDate
     * @param int $roomType
     * @param int $mealsType
     * @param int $price
     */
    public function __construct($entireOffer = null, $departureAirport = null, $travelDuration = null, $travelDate = null, $roomType = null, $mealsType = null, $price = null)
    {
        $this
            ->setEntireOffer($entireOffer)
            ->setDepartureAirport($departureAirport)
            ->setTravelDuration($travelDuration)
            ->setTravelDate($travelDate)
            ->setRoomType($roomType)
            ->setMealsType($mealsType)
            ->setPrice($price);
    }
    /**
     * Get EntireOffer value
     * @return int|null
     */
    public function getEntireOffer()
    {
        return $this->EntireOffer;
    }
    /**
     * Set EntireOffer value
     * @param int $entireOffer
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setEntireOffer($entireOffer = null)
    {
        // validation for constraint: int
        if (!is_null($entireOffer) && !is_numeric($entireOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($entireOffer)), __LINE__);
        }
        $this->EntireOffer = $entireOffer;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return int|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param int $departureAirport
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setDepartureAirport($departureAirport = null)
    {
        // validation for constraint: int
        if (!is_null($departureAirport) && !is_numeric($departureAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($departureAirport)), __LINE__);
        }
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get TravelDuration value
     * @return int|null
     */
    public function getTravelDuration()
    {
        return $this->TravelDuration;
    }
    /**
     * Set TravelDuration value
     * @param int $travelDuration
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setTravelDuration($travelDuration = null)
    {
        // validation for constraint: int
        if (!is_null($travelDuration) && !is_numeric($travelDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($travelDuration)), __LINE__);
        }
        $this->TravelDuration = $travelDuration;
        return $this;
    }
    /**
     * Get TravelDate value
     * @return int|null
     */
    public function getTravelDate()
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param int $travelDate
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setTravelDate($travelDate = null)
    {
        // validation for constraint: int
        if (!is_null($travelDate) && !is_numeric($travelDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($travelDate)), __LINE__);
        }
        $this->TravelDate = $travelDate;
        return $this;
    }
    /**
     * Get RoomType value
     * @return int|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param int $roomType
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setRoomType($roomType = null)
    {
        // validation for constraint: int
        if (!is_null($roomType) && !is_numeric($roomType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($roomType)), __LINE__);
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get MealsType value
     * @return int|null
     */
    public function getMealsType()
    {
        return $this->MealsType;
    }
    /**
     * Set MealsType value
     * @param int $mealsType
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setMealsType($mealsType = null)
    {
        // validation for constraint: int
        if (!is_null($mealsType) && !is_numeric($mealsType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mealsType)), __LINE__);
        }
        $this->MealsType = $mealsType;
        return $this;
    }
    /**
     * Get Price value
     * @return int|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param int $price
     * @return \traveltainment\SOAP17\StructType\Fulfilments
     */
    public function setPrice($price = null)
    {
        // validation for constraint: int
        if (!is_null($price) && !is_numeric($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price)), __LINE__);
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\Fulfilments
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
