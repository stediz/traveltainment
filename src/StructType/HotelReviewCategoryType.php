<?php

namespace StructType;

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
     * @var \StructType\HotelReviewHotelAttributesType
     */
    public $Hotel;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewLocationAttributesType
     */
    public $Location;
    /**
     * The Beach
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewBeachAttributesType
     */
    public $Beach;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewRoomAttributesType
     */
    public $Room;
    /**
     * The Food
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewFoodAttributeType
     */
    public $Food;
    /**
     * The Pool
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewPoolAttributesType
     */
    public $Pool;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewServiceAttributesType
     */
    public $Service;
    /**
     * The Sport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewSportAttributesType
     */
    public $Sport;
    /**
     * The Family
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewFamilyAttributesType
     */
    public $Family;
    /**
     * The Culture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewCultureAttributesType
     */
    public $Culture;
    /**
     * The Infrastructure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewInfrastructureAttributesType
     */
    public $Infrastructure;
    /**
     * The Activities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewActivitiesAttributesType
     */
    public $Activities;
    /**
     * The SkiingArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewSkiingAreaAttributesType
     */
    public $SkiingArea;
    /**
     * The SkiOpportunities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewSkiOpportunitiesAttributesType
     */
    public $SkiOpportunities;
    /**
     * The Wellness
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewWellnessAttributesType
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
     * @param \StructType\HotelReviewHotelAttributesType $hotel
     * @param \StructType\HotelReviewLocationAttributesType $location
     * @param \StructType\HotelReviewBeachAttributesType $beach
     * @param \StructType\HotelReviewRoomAttributesType $room
     * @param \StructType\HotelReviewFoodAttributeType $food
     * @param \StructType\HotelReviewPoolAttributesType $pool
     * @param \StructType\HotelReviewServiceAttributesType $service
     * @param \StructType\HotelReviewSportAttributesType $sport
     * @param \StructType\HotelReviewFamilyAttributesType $family
     * @param \StructType\HotelReviewCultureAttributesType $culture
     * @param \StructType\HotelReviewInfrastructureAttributesType $infrastructure
     * @param \StructType\HotelReviewActivitiesAttributesType $activities
     * @param \StructType\HotelReviewSkiingAreaAttributesType $skiingArea
     * @param \StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities
     * @param \StructType\HotelReviewWellnessAttributesType $wellness
     */
    public function __construct(\StructType\HotelReviewHotelAttributesType $hotel = null, \StructType\HotelReviewLocationAttributesType $location = null, \StructType\HotelReviewBeachAttributesType $beach = null, \StructType\HotelReviewRoomAttributesType $room = null, \StructType\HotelReviewFoodAttributeType $food = null, \StructType\HotelReviewPoolAttributesType $pool = null, \StructType\HotelReviewServiceAttributesType $service = null, \StructType\HotelReviewSportAttributesType $sport = null, \StructType\HotelReviewFamilyAttributesType $family = null, \StructType\HotelReviewCultureAttributesType $culture = null, \StructType\HotelReviewInfrastructureAttributesType $infrastructure = null, \StructType\HotelReviewActivitiesAttributesType $activities = null, \StructType\HotelReviewSkiingAreaAttributesType $skiingArea = null, \StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities = null, \StructType\HotelReviewWellnessAttributesType $wellness = null)
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
     * @return \StructType\HotelReviewHotelAttributesType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \StructType\HotelReviewHotelAttributesType $hotel
     * @return \StructType\HotelReviewCategoryType
     */
    public function setHotel(\StructType\HotelReviewHotelAttributesType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get Location value
     * @return \StructType\HotelReviewLocationAttributesType|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \StructType\HotelReviewLocationAttributesType $location
     * @return \StructType\HotelReviewCategoryType
     */
    public function setLocation(\StructType\HotelReviewLocationAttributesType $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Beach value
     * @return \StructType\HotelReviewBeachAttributesType|null
     */
    public function getBeach()
    {
        return $this->Beach;
    }
    /**
     * Set Beach value
     * @param \StructType\HotelReviewBeachAttributesType $beach
     * @return \StructType\HotelReviewCategoryType
     */
    public function setBeach(\StructType\HotelReviewBeachAttributesType $beach = null)
    {
        $this->Beach = $beach;
        return $this;
    }
    /**
     * Get Room value
     * @return \StructType\HotelReviewRoomAttributesType|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \StructType\HotelReviewRoomAttributesType $room
     * @return \StructType\HotelReviewCategoryType
     */
    public function setRoom(\StructType\HotelReviewRoomAttributesType $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Food value
     * @return \StructType\HotelReviewFoodAttributeType|null
     */
    public function getFood()
    {
        return $this->Food;
    }
    /**
     * Set Food value
     * @param \StructType\HotelReviewFoodAttributeType $food
     * @return \StructType\HotelReviewCategoryType
     */
    public function setFood(\StructType\HotelReviewFoodAttributeType $food = null)
    {
        $this->Food = $food;
        return $this;
    }
    /**
     * Get Pool value
     * @return \StructType\HotelReviewPoolAttributesType|null
     */
    public function getPool()
    {
        return $this->Pool;
    }
    /**
     * Set Pool value
     * @param \StructType\HotelReviewPoolAttributesType $pool
     * @return \StructType\HotelReviewCategoryType
     */
    public function setPool(\StructType\HotelReviewPoolAttributesType $pool = null)
    {
        $this->Pool = $pool;
        return $this;
    }
    /**
     * Get Service value
     * @return \StructType\HotelReviewServiceAttributesType|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \StructType\HotelReviewServiceAttributesType $service
     * @return \StructType\HotelReviewCategoryType
     */
    public function setService(\StructType\HotelReviewServiceAttributesType $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Get Sport value
     * @return \StructType\HotelReviewSportAttributesType|null
     */
    public function getSport()
    {
        return $this->Sport;
    }
    /**
     * Set Sport value
     * @param \StructType\HotelReviewSportAttributesType $sport
     * @return \StructType\HotelReviewCategoryType
     */
    public function setSport(\StructType\HotelReviewSportAttributesType $sport = null)
    {
        $this->Sport = $sport;
        return $this;
    }
    /**
     * Get Family value
     * @return \StructType\HotelReviewFamilyAttributesType|null
     */
    public function getFamily()
    {
        return $this->Family;
    }
    /**
     * Set Family value
     * @param \StructType\HotelReviewFamilyAttributesType $family
     * @return \StructType\HotelReviewCategoryType
     */
    public function setFamily(\StructType\HotelReviewFamilyAttributesType $family = null)
    {
        $this->Family = $family;
        return $this;
    }
    /**
     * Get Culture value
     * @return \StructType\HotelReviewCultureAttributesType|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param \StructType\HotelReviewCultureAttributesType $culture
     * @return \StructType\HotelReviewCategoryType
     */
    public function setCulture(\StructType\HotelReviewCultureAttributesType $culture = null)
    {
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get Infrastructure value
     * @return \StructType\HotelReviewInfrastructureAttributesType|null
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }
    /**
     * Set Infrastructure value
     * @param \StructType\HotelReviewInfrastructureAttributesType $infrastructure
     * @return \StructType\HotelReviewCategoryType
     */
    public function setInfrastructure(\StructType\HotelReviewInfrastructureAttributesType $infrastructure = null)
    {
        $this->Infrastructure = $infrastructure;
        return $this;
    }
    /**
     * Get Activities value
     * @return \StructType\HotelReviewActivitiesAttributesType|null
     */
    public function getActivities()
    {
        return $this->Activities;
    }
    /**
     * Set Activities value
     * @param \StructType\HotelReviewActivitiesAttributesType $activities
     * @return \StructType\HotelReviewCategoryType
     */
    public function setActivities(\StructType\HotelReviewActivitiesAttributesType $activities = null)
    {
        $this->Activities = $activities;
        return $this;
    }
    /**
     * Get SkiingArea value
     * @return \StructType\HotelReviewSkiingAreaAttributesType|null
     */
    public function getSkiingArea()
    {
        return $this->SkiingArea;
    }
    /**
     * Set SkiingArea value
     * @param \StructType\HotelReviewSkiingAreaAttributesType $skiingArea
     * @return \StructType\HotelReviewCategoryType
     */
    public function setSkiingArea(\StructType\HotelReviewSkiingAreaAttributesType $skiingArea = null)
    {
        $this->SkiingArea = $skiingArea;
        return $this;
    }
    /**
     * Get SkiOpportunities value
     * @return \StructType\HotelReviewSkiOpportunitiesAttributesType|null
     */
    public function getSkiOpportunities()
    {
        return $this->SkiOpportunities;
    }
    /**
     * Set SkiOpportunities value
     * @param \StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities
     * @return \StructType\HotelReviewCategoryType
     */
    public function setSkiOpportunities(\StructType\HotelReviewSkiOpportunitiesAttributesType $skiOpportunities = null)
    {
        $this->SkiOpportunities = $skiOpportunities;
        return $this;
    }
    /**
     * Get Wellness value
     * @return \StructType\HotelReviewWellnessAttributesType|null
     */
    public function getWellness()
    {
        return $this->Wellness;
    }
    /**
     * Set Wellness value
     * @param \StructType\HotelReviewWellnessAttributesType $wellness
     * @return \StructType\HotelReviewCategoryType
     */
    public function setWellness(\StructType\HotelReviewWellnessAttributesType $wellness = null)
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
     * @return \StructType\HotelReviewCategoryType
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
