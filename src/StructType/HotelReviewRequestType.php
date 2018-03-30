<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewRequestType StructType
 * @subpackage Structs
 */
class HotelReviewRequestType extends AbstractStructBase
{
    /**
     * The NumberOfRatings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfRatings;
    /**
     * The TotalRecommendation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $TotalRecommendation;
    /**
     * The RatingAllOver
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RatingAllOver;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public $Category;
    /**
     * The TravellerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravellerType;
    /**
     * The HolidayType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HolidayType;
    /**
     * Constructor method for HotelReviewRequestType
     * @uses HotelReviewRequestType::setNumberOfRatings()
     * @uses HotelReviewRequestType::setTotalRecommendation()
     * @uses HotelReviewRequestType::setRatingAllOver()
     * @uses HotelReviewRequestType::setCategory()
     * @uses HotelReviewRequestType::setTravellerType()
     * @uses HotelReviewRequestType::setHolidayType()
     * @param int $numberOfRatings
     * @param float $totalRecommendation
     * @param int $ratingAllOver
     * @param \traveltainment\SOAP17\StructType\HotelReviewCategoryType $category
     * @param string $travellerType
     * @param string $holidayType
     */
    public function __construct($numberOfRatings = null, $totalRecommendation = null, $ratingAllOver = null, \traveltainment\SOAP17\StructType\HotelReviewCategoryType $category = null, $travellerType = null, $holidayType = null)
    {
        $this
            ->setNumberOfRatings($numberOfRatings)
            ->setTotalRecommendation($totalRecommendation)
            ->setRatingAllOver($ratingAllOver)
            ->setCategory($category)
            ->setTravellerType($travellerType)
            ->setHolidayType($holidayType);
    }
    /**
     * Get NumberOfRatings value
     * @return int|null
     */
    public function getNumberOfRatings()
    {
        return $this->NumberOfRatings;
    }
    /**
     * Set NumberOfRatings value
     * @param int $numberOfRatings
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public function setNumberOfRatings($numberOfRatings = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfRatings) && !is_numeric($numberOfRatings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfRatings)), __LINE__);
        }
        $this->NumberOfRatings = $numberOfRatings;
        return $this;
    }
    /**
     * Get TotalRecommendation value
     * @return float|null
     */
    public function getTotalRecommendation()
    {
        return $this->TotalRecommendation;
    }
    /**
     * Set TotalRecommendation value
     * @param float $totalRecommendation
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public function setTotalRecommendation($totalRecommendation = null)
    {
        $this->TotalRecommendation = $totalRecommendation;
        return $this;
    }
    /**
     * Get RatingAllOver value
     * @return int|null
     */
    public function getRatingAllOver()
    {
        return $this->RatingAllOver;
    }
    /**
     * Set RatingAllOver value
     * @param int $ratingAllOver
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public function setRatingAllOver($ratingAllOver = null)
    {
        // validation for constraint: int
        if (!is_null($ratingAllOver) && !is_numeric($ratingAllOver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ratingAllOver)), __LINE__);
        }
        $this->RatingAllOver = $ratingAllOver;
        return $this;
    }
    /**
     * Get Category value
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \traveltainment\SOAP17\StructType\HotelReviewCategoryType $category
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public function setCategory(\traveltainment\SOAP17\StructType\HotelReviewCategoryType $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get TravellerType value
     * @return string|null
     */
    public function getTravellerType()
    {
        return $this->TravellerType;
    }
    /**
     * Set TravellerType value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewTravellerType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewTravellerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $travellerType
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public function setTravellerType($travellerType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewTravellerType::valueIsValid($travellerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $travellerType, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewTravellerType::getValidValues())), __LINE__);
        }
        $this->TravellerType = $travellerType;
        return $this;
    }
    /**
     * Get HolidayType value
     * @return string|null
     */
    public function getHolidayType()
    {
        return $this->HolidayType;
    }
    /**
     * Set HolidayType value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewHolidayType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewHolidayType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $holidayType
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public function setHolidayType($holidayType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewHolidayType::valueIsValid($holidayType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $holidayType, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewHolidayType::getValidValues())), __LINE__);
        }
        $this->HolidayType = $holidayType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType
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
