<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelListFilterType StructType
 * @subpackage Structs
 */
class HotelListFilterType extends AbstractStructBase
{
    /**
     * The OfferScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferScope;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The CityIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var int
     */
    public $CityIDs;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectName;
    /**
     * The HotelReview
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public $HotelReview;
    /**
     * The FlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\FlightDurationFilterType
     */
    public $FlightDuration;
    /**
     * Constructor method for HotelListFilterType
     * @uses HotelListFilterType::setOfferScope()
     * @uses HotelListFilterType::setCityName()
     * @uses HotelListFilterType::setCityIDs()
     * @uses HotelListFilterType::setObjectName()
     * @uses HotelListFilterType::setHotelReview()
     * @uses HotelListFilterType::setFlightDuration()
     * @param string $offerScope
     * @param string $cityName
     * @param int $cityIDs
     * @param string $objectName
     * @param \traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview
     * @param \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration
     */
    public function __construct($offerScope = null, $cityName = null, $cityIDs = null, $objectName = null, \traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview = null, \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration = null)
    {
        $this
            ->setOfferScope($offerScope)
            ->setCityName($cityName)
            ->setCityIDs($cityIDs)
            ->setObjectName($objectName)
            ->setHotelReview($hotelReview)
            ->setFlightDuration($flightDuration);
    }
    /**
     * Get OfferScope value
     * @return string|null
     */
    public function getOfferScope()
    {
        return $this->OfferScope;
    }
    /**
     * Set OfferScope value
     * @uses \traveltainment\SOAP17\EnumType\OfferScopeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OfferScopeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerScope
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
     */
    public function setOfferScope($offerScope = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\OfferScopeEnum::valueIsValid($offerScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $offerScope, implode(', ', \traveltainment\SOAP17\EnumType\OfferScopeEnum::getValidValues())), __LINE__);
        }
        $this->OfferScope = $offerScope;
        return $this;
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
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
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
     * Get CityIDs value
     * @return int|null
     */
    public function getCityIDs()
    {
        return $this->CityIDs;
    }
    /**
     * Set CityIDs value
     * @param int $cityIDs
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
     */
    public function setCityIDs($cityIDs = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($cityIDs) && strlen($cityIDs) > 100) || (is_array($cityIDs) && count($cityIDs) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($cityIDs) ? strlen($cityIDs) : count($cityIDs)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($cityIDs) && strlen($cityIDs) < 1) || (is_array($cityIDs) && count($cityIDs) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: int
        if (!is_null($cityIDs) && !is_numeric($cityIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cityIDs)), __LINE__);
        }
        $this->CityIDs = $cityIDs;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Get HotelReview value
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType|null
     */
    public function getHotelReview()
    {
        return $this->HotelReview;
    }
    /**
     * Set HotelReview value
     * @param \traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
     */
    public function setHotelReview(\traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview = null)
    {
        $this->HotelReview = $hotelReview;
        return $this;
    }
    /**
     * Get FlightDuration value
     * @return \traveltainment\SOAP17\StructType\FlightDurationFilterType|null
     */
    public function getFlightDuration()
    {
        return $this->FlightDuration;
    }
    /**
     * Set FlightDuration value
     * @param \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
     */
    public function setFlightDuration(\traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration = null)
    {
        $this->FlightDuration = $flightDuration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelListFilterType
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
