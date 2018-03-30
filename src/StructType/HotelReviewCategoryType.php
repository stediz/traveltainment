<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewCategoryType StructType
 * @subpackage Structs
 */
class HotelReviewCategoryType extends AbstractStructBase
{
    /**
     * The Hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewHotelAttributesType
     */
    public $Hotel;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewLocationAttributesType
     */
    public $Location;
    /**
     * The Beach
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType
     */
    public $Beach;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType
     */
    public $Room;
    /**
     * The Food
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType
     */
    public $Food;
    /**
     * The Pool
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType
     */
    public $Pool;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType
     */
    public $Service;
    /**
     * The Sport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewSportAttributesType
     */
    public $Sport;
    /**
     * The Family
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType
     */
    public $Family;
    /**
     * The Culture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewCultureAttributesType
     */
    public $Culture;
    /**
     * The Infrastructure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType
     */
    public $Infrastructure;
    /**
     * The Activities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewActivitiesAttributesType
     */
    public $Activities;
    /**
     * The SkiingArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType
     */
    public $SkiingArea;
    /**
     * The SkiOpportunities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType
     */
    public $SkiOpportunities;
    /**
     * The Wellness
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HotelReviewWellnessAttributesType
     */
    public $Wellness;
    /**
     * Constructor method for HotelReviewCategoryType
     * @uses HotelReviewCategoryType::setHotel()
     * @uses HotelReviewCategoryType::setLocation()
     * @uses HotelReviewCategoryType::setBeach()
     * @uses HotelReviewCategoryType::setRoom()
     * @uses HotelReviewCategoryType::setFood()
     * @uses HotelReviewCategoryType::setPool()
     * @uses HotelReviewCategoryType::setService()
     * @uses HotelReviewCategoryType::setSport()
     * @uses HotelReviewCategoryType::setFamily()
     * @uses HotelReviewCategoryType::setCulture()
     * @uses HotelReviewCategoryType::setInfrastructure()
     * @uses HotelReviewCategoryType::setActivities()
     * @uses HotelReviewCategoryType::setSkiingArea()
     * @uses HotelReviewCategoryType::setSkiOpportunities()
     * @uses HotelReviewCategoryType::setWellness()
     * @param \traveltainment\SOAP17\StructType\HotelReviewHotelAttributesType $hotel
     * @param \traveltainment\SOAP17\StructType\HotelReviewLocationAttributesType $location
     * @param \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType $beach
     * @param \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType $room
     * @param \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType $food
     * @param \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType $pool
     * @param \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType $service
     * @param \traveltainment\SOAP17\StructType\HotelReviewSportAttributesType $sport
     * @param \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType $family
     * @param \traveltainment\SOAP17\StructType\HotelReviewCultureAttributesType $culture
     * @param \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType $infrastructure
     * @param \traveltainment\SOAP17\StructType\HotelReviewActivitiesAttributesType $activities
     * @param \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType $skiingArea
     * @param \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities
     * @param \traveltainment\SOAP17\StructType\HotelReviewWellnessAttributesType $wellness
     */
    public function __construct(\traveltainment\SOAP17\StructType\HotelReviewHotelAttributesType $hotel = null, \traveltainment\SOAP17\StructType\HotelReviewLocationAttributesType $location = null, \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType $beach = null, \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType $room = null, \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType $food = null, \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType $pool = null, \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType $service = null, \traveltainment\SOAP17\StructType\HotelReviewSportAttributesType $sport = null, \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType $family = null, \traveltainment\SOAP17\StructType\HotelReviewCultureAttributesType $culture = null, \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType $infrastructure = null, \traveltainment\SOAP17\StructType\HotelReviewActivitiesAttributesType $activities = null, \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType $skiingArea = null, \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities = null, \traveltainment\SOAP17\StructType\HotelReviewWellnessAttributesType $wellness = null)
    {
        $this
            ->setHotel($hotel)
            ->setLocation($location)
            ->setBeach($beach)
            ->setRoom($room)
            ->setFood($food)
            ->setPool($pool)
            ->setService($service)
            ->setSport($sport)
            ->setFamily($family)
            ->setCulture($culture)
            ->setInfrastructure($infrastructure)
            ->setActivities($activities)
            ->setSkiingArea($skiingArea)
            ->setSkiOpportunities($skiOpportunities)
            ->setWellness($wellness);
    }
    /**
     * Get Hotel value
     * @return \traveltainment\SOAP17\StructType\HotelReviewHotelAttributesType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \traveltainment\SOAP17\StructType\HotelReviewHotelAttributesType $hotel
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setHotel(\traveltainment\SOAP17\StructType\HotelReviewHotelAttributesType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get Location value
     * @return \traveltainment\SOAP17\StructType\HotelReviewLocationAttributesType|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \traveltainment\SOAP17\StructType\HotelReviewLocationAttributesType $location
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setLocation(\traveltainment\SOAP17\StructType\HotelReviewLocationAttributesType $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Beach value
     * @return \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType|null
     */
    public function getBeach()
    {
        return $this->Beach;
    }
    /**
     * Set Beach value
     * @param \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType $beach
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setBeach(\traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType $beach = null)
    {
        $this->Beach = $beach;
        return $this;
    }
    /**
     * Get Room value
     * @return \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType $room
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setRoom(\traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Food value
     * @return \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType|null
     */
    public function getFood()
    {
        return $this->Food;
    }
    /**
     * Set Food value
     * @param \traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType $food
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setFood(\traveltainment\SOAP17\StructType\HotelReviewFoodAttributeType $food = null)
    {
        $this->Food = $food;
        return $this;
    }
    /**
     * Get Pool value
     * @return \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType|null
     */
    public function getPool()
    {
        return $this->Pool;
    }
    /**
     * Set Pool value
     * @param \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType $pool
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setPool(\traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType $pool = null)
    {
        $this->Pool = $pool;
        return $this;
    }
    /**
     * Get Service value
     * @return \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType $service
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setService(\traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Get Sport value
     * @return \traveltainment\SOAP17\StructType\HotelReviewSportAttributesType|null
     */
    public function getSport()
    {
        return $this->Sport;
    }
    /**
     * Set Sport value
     * @param \traveltainment\SOAP17\StructType\HotelReviewSportAttributesType $sport
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setSport(\traveltainment\SOAP17\StructType\HotelReviewSportAttributesType $sport = null)
    {
        $this->Sport = $sport;
        return $this;
    }
    /**
     * Get Family value
     * @return \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType|null
     */
    public function getFamily()
    {
        return $this->Family;
    }
    /**
     * Set Family value
     * @param \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType $family
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setFamily(\traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType $family = null)
    {
        $this->Family = $family;
        return $this;
    }
    /**
     * Get Culture value
     * @return \traveltainment\SOAP17\StructType\HotelReviewCultureAttributesType|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param \traveltainment\SOAP17\StructType\HotelReviewCultureAttributesType $culture
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setCulture(\traveltainment\SOAP17\StructType\HotelReviewCultureAttributesType $culture = null)
    {
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get Infrastructure value
     * @return \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType|null
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }
    /**
     * Set Infrastructure value
     * @param \traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType $infrastructure
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setInfrastructure(\traveltainment\SOAP17\StructType\HotelReviewInfrastructureAttributesType $infrastructure = null)
    {
        $this->Infrastructure = $infrastructure;
        return $this;
    }
    /**
     * Get Activities value
     * @return \traveltainment\SOAP17\StructType\HotelReviewActivitiesAttributesType|null
     */
    public function getActivities()
    {
        return $this->Activities;
    }
    /**
     * Set Activities value
     * @param \traveltainment\SOAP17\StructType\HotelReviewActivitiesAttributesType $activities
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setActivities(\traveltainment\SOAP17\StructType\HotelReviewActivitiesAttributesType $activities = null)
    {
        $this->Activities = $activities;
        return $this;
    }
    /**
     * Get SkiingArea value
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType|null
     */
    public function getSkiingArea()
    {
        return $this->SkiingArea;
    }
    /**
     * Set SkiingArea value
     * @param \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType $skiingArea
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setSkiingArea(\traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType $skiingArea = null)
    {
        $this->SkiingArea = $skiingArea;
        return $this;
    }
    /**
     * Get SkiOpportunities value
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType|null
     */
    public function getSkiOpportunities()
    {
        return $this->SkiOpportunities;
    }
    /**
     * Set SkiOpportunities value
     * @param \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setSkiOpportunities(\traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities = null)
    {
        $this->SkiOpportunities = $skiOpportunities;
        return $this;
    }
    /**
     * Get Wellness value
     * @return \traveltainment\SOAP17\StructType\HotelReviewWellnessAttributesType|null
     */
    public function getWellness()
    {
        return $this->Wellness;
    }
    /**
     * Set Wellness value
     * @param \traveltainment\SOAP17\StructType\HotelReviewWellnessAttributesType $wellness
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
     */
    public function setWellness(\traveltainment\SOAP17\StructType\HotelReviewWellnessAttributesType $wellness = null)
    {
        $this->Wellness = $wellness;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewCategoryType
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
