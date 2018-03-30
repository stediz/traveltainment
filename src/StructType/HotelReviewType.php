<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewType StructType
 * @subpackage Structs
 */
class HotelReviewType extends AbstractStructBase
{
    /**
     * The NumberOfRatings
     * @var int
     */
    public $NumberOfRatings;
    /**
     * The Recommendation
     * @var float
     */
    public $Recommendation;
    /**
     * The RatingOverAll
     * @var float
     */
    public $RatingOverAll;
    /**
     * The RatingEatAndDrink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingEatAndDrink;
    /**
     * The RatingFamily
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingFamily;
    /**
     * The RatingHotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingHotel;
    /**
     * The RatingLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingLocation;
    /**
     * The RatingPool
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingPool;
    /**
     * The RatingService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingService;
    /**
     * The RatingSport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingSport;
    /**
     * The RatingBeach
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingBeach;
    /**
     * The RatingRoom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingRoom;
    /**
     * The RatingCulture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingCulture;
    /**
     * The RatingInfrastructure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingInfrastructure;
    /**
     * The RatingActivities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingActivities;
    /**
     * The RatingSkiArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingSkiArea;
    /**
     * The RatingWinterSportOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingWinterSportOffer;
    /**
     * The RatingWellness
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RatingWellness;
    /**
     * Constructor method for HotelReviewType
     * @uses HotelReviewType::setNumberOfRatings()
     * @uses HotelReviewType::setRecommendation()
     * @uses HotelReviewType::setRatingOverAll()
     * @uses HotelReviewType::setRatingEatAndDrink()
     * @uses HotelReviewType::setRatingFamily()
     * @uses HotelReviewType::setRatingHotel()
     * @uses HotelReviewType::setRatingLocation()
     * @uses HotelReviewType::setRatingPool()
     * @uses HotelReviewType::setRatingService()
     * @uses HotelReviewType::setRatingSport()
     * @uses HotelReviewType::setRatingBeach()
     * @uses HotelReviewType::setRatingRoom()
     * @uses HotelReviewType::setRatingCulture()
     * @uses HotelReviewType::setRatingInfrastructure()
     * @uses HotelReviewType::setRatingActivities()
     * @uses HotelReviewType::setRatingSkiArea()
     * @uses HotelReviewType::setRatingWinterSportOffer()
     * @uses HotelReviewType::setRatingWellness()
     * @param int $numberOfRatings
     * @param float $recommendation
     * @param float $ratingOverAll
     * @param float $ratingEatAndDrink
     * @param float $ratingFamily
     * @param float $ratingHotel
     * @param float $ratingLocation
     * @param float $ratingPool
     * @param float $ratingService
     * @param float $ratingSport
     * @param float $ratingBeach
     * @param float $ratingRoom
     * @param float $ratingCulture
     * @param float $ratingInfrastructure
     * @param float $ratingActivities
     * @param float $ratingSkiArea
     * @param float $ratingWinterSportOffer
     * @param float $ratingWellness
     */
    public function __construct($numberOfRatings = null, $recommendation = null, $ratingOverAll = null, $ratingEatAndDrink = null, $ratingFamily = null, $ratingHotel = null, $ratingLocation = null, $ratingPool = null, $ratingService = null, $ratingSport = null, $ratingBeach = null, $ratingRoom = null, $ratingCulture = null, $ratingInfrastructure = null, $ratingActivities = null, $ratingSkiArea = null, $ratingWinterSportOffer = null, $ratingWellness = null)
    {
        $this
            ->setNumberOfRatings($numberOfRatings)
            ->setRecommendation($recommendation)
            ->setRatingOverAll($ratingOverAll)
            ->setRatingEatAndDrink($ratingEatAndDrink)
            ->setRatingFamily($ratingFamily)
            ->setRatingHotel($ratingHotel)
            ->setRatingLocation($ratingLocation)
            ->setRatingPool($ratingPool)
            ->setRatingService($ratingService)
            ->setRatingSport($ratingSport)
            ->setRatingBeach($ratingBeach)
            ->setRatingRoom($ratingRoom)
            ->setRatingCulture($ratingCulture)
            ->setRatingInfrastructure($ratingInfrastructure)
            ->setRatingActivities($ratingActivities)
            ->setRatingSkiArea($ratingSkiArea)
            ->setRatingWinterSportOffer($ratingWinterSportOffer)
            ->setRatingWellness($ratingWellness);
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
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
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
     * Get Recommendation value
     * @return float|null
     */
    public function getRecommendation()
    {
        return $this->Recommendation;
    }
    /**
     * Set Recommendation value
     * @param float $recommendation
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRecommendation($recommendation = null)
    {
        $this->Recommendation = $recommendation;
        return $this;
    }
    /**
     * Get RatingOverAll value
     * @return float|null
     */
    public function getRatingOverAll()
    {
        return $this->RatingOverAll;
    }
    /**
     * Set RatingOverAll value
     * @param float $ratingOverAll
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingOverAll($ratingOverAll = null)
    {
        $this->RatingOverAll = $ratingOverAll;
        return $this;
    }
    /**
     * Get RatingEatAndDrink value
     * @return float|null
     */
    public function getRatingEatAndDrink()
    {
        return $this->RatingEatAndDrink;
    }
    /**
     * Set RatingEatAndDrink value
     * @param float $ratingEatAndDrink
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingEatAndDrink($ratingEatAndDrink = null)
    {
        $this->RatingEatAndDrink = $ratingEatAndDrink;
        return $this;
    }
    /**
     * Get RatingFamily value
     * @return float|null
     */
    public function getRatingFamily()
    {
        return $this->RatingFamily;
    }
    /**
     * Set RatingFamily value
     * @param float $ratingFamily
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingFamily($ratingFamily = null)
    {
        $this->RatingFamily = $ratingFamily;
        return $this;
    }
    /**
     * Get RatingHotel value
     * @return float|null
     */
    public function getRatingHotel()
    {
        return $this->RatingHotel;
    }
    /**
     * Set RatingHotel value
     * @param float $ratingHotel
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingHotel($ratingHotel = null)
    {
        $this->RatingHotel = $ratingHotel;
        return $this;
    }
    /**
     * Get RatingLocation value
     * @return float|null
     */
    public function getRatingLocation()
    {
        return $this->RatingLocation;
    }
    /**
     * Set RatingLocation value
     * @param float $ratingLocation
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingLocation($ratingLocation = null)
    {
        $this->RatingLocation = $ratingLocation;
        return $this;
    }
    /**
     * Get RatingPool value
     * @return float|null
     */
    public function getRatingPool()
    {
        return $this->RatingPool;
    }
    /**
     * Set RatingPool value
     * @param float $ratingPool
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingPool($ratingPool = null)
    {
        $this->RatingPool = $ratingPool;
        return $this;
    }
    /**
     * Get RatingService value
     * @return float|null
     */
    public function getRatingService()
    {
        return $this->RatingService;
    }
    /**
     * Set RatingService value
     * @param float $ratingService
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingService($ratingService = null)
    {
        $this->RatingService = $ratingService;
        return $this;
    }
    /**
     * Get RatingSport value
     * @return float|null
     */
    public function getRatingSport()
    {
        return $this->RatingSport;
    }
    /**
     * Set RatingSport value
     * @param float $ratingSport
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingSport($ratingSport = null)
    {
        $this->RatingSport = $ratingSport;
        return $this;
    }
    /**
     * Get RatingBeach value
     * @return float|null
     */
    public function getRatingBeach()
    {
        return $this->RatingBeach;
    }
    /**
     * Set RatingBeach value
     * @param float $ratingBeach
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingBeach($ratingBeach = null)
    {
        $this->RatingBeach = $ratingBeach;
        return $this;
    }
    /**
     * Get RatingRoom value
     * @return float|null
     */
    public function getRatingRoom()
    {
        return $this->RatingRoom;
    }
    /**
     * Set RatingRoom value
     * @param float $ratingRoom
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingRoom($ratingRoom = null)
    {
        $this->RatingRoom = $ratingRoom;
        return $this;
    }
    /**
     * Get RatingCulture value
     * @return float|null
     */
    public function getRatingCulture()
    {
        return $this->RatingCulture;
    }
    /**
     * Set RatingCulture value
     * @param float $ratingCulture
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingCulture($ratingCulture = null)
    {
        $this->RatingCulture = $ratingCulture;
        return $this;
    }
    /**
     * Get RatingInfrastructure value
     * @return float|null
     */
    public function getRatingInfrastructure()
    {
        return $this->RatingInfrastructure;
    }
    /**
     * Set RatingInfrastructure value
     * @param float $ratingInfrastructure
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingInfrastructure($ratingInfrastructure = null)
    {
        $this->RatingInfrastructure = $ratingInfrastructure;
        return $this;
    }
    /**
     * Get RatingActivities value
     * @return float|null
     */
    public function getRatingActivities()
    {
        return $this->RatingActivities;
    }
    /**
     * Set RatingActivities value
     * @param float $ratingActivities
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingActivities($ratingActivities = null)
    {
        $this->RatingActivities = $ratingActivities;
        return $this;
    }
    /**
     * Get RatingSkiArea value
     * @return float|null
     */
    public function getRatingSkiArea()
    {
        return $this->RatingSkiArea;
    }
    /**
     * Set RatingSkiArea value
     * @param float $ratingSkiArea
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingSkiArea($ratingSkiArea = null)
    {
        $this->RatingSkiArea = $ratingSkiArea;
        return $this;
    }
    /**
     * Get RatingWinterSportOffer value
     * @return float|null
     */
    public function getRatingWinterSportOffer()
    {
        return $this->RatingWinterSportOffer;
    }
    /**
     * Set RatingWinterSportOffer value
     * @param float $ratingWinterSportOffer
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingWinterSportOffer($ratingWinterSportOffer = null)
    {
        $this->RatingWinterSportOffer = $ratingWinterSportOffer;
        return $this;
    }
    /**
     * Get RatingWellness value
     * @return float|null
     */
    public function getRatingWellness()
    {
        return $this->RatingWellness;
    }
    /**
     * Set RatingWellness value
     * @param float $ratingWellness
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
     */
    public function setRatingWellness($ratingWellness = null)
    {
        $this->RatingWellness = $ratingWellness;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewType
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
