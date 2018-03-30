<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReducedOfferType StructType
 * @subpackage Structs
 */
class ReducedOfferType extends AbstractStructBase
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The Alternative
     * @var bool
     */
    public $Alternative;
    /**
     * The PriceInformation
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The TravelDuration
     * @var int
     */
    public $TravelDuration;
    /**
     * The TourOperator
     * @var \traveltainment\SOAP17\StructType\ReducedTourOperatorType
     */
    public $TourOperator;
    /**
     * The SpecialJourneyAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var SpecialJourneyAttribute
     */
    public $SpecialJourneyAttributes;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SimpleRoomType
     */
    public $Room;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Meal;
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirportType
     */
    public $DepartureAirport;
    /**
     * The TravelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelType;
    /**
     * Constructor method for ReducedOfferType
     * @uses ReducedOfferType::setOfferID()
     * @uses ReducedOfferType::setAlternative()
     * @uses ReducedOfferType::setPriceInformation()
     * @uses ReducedOfferType::setTravelDuration()
     * @uses ReducedOfferType::setTourOperator()
     * @uses ReducedOfferType::setSpecialJourneyAttributes()
     * @uses ReducedOfferType::setRoom()
     * @uses ReducedOfferType::setMeal()
     * @uses ReducedOfferType::setDepartureAirport()
     * @uses ReducedOfferType::setTravelType()
     * @param string $offerID
     * @param bool $alternative
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @param int $travelDuration
     * @param \traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \traveltainment\SOAP17\StructType\SimpleRoomType $room
     * @param string $meal
     * @param \traveltainment\SOAP17\StructType\AirportType $departureAirport
     * @param string $travelType
     */
    public function __construct($offerID = null, $alternative = null, \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null, $travelDuration = null, \traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \traveltainment\SOAP17\StructType\SimpleRoomType $room = null, $meal = null, \traveltainment\SOAP17\StructType\AirportType $departureAirport = null, $travelType = null)
    {
        $this
            ->setOfferID($offerID)
            ->setAlternative($alternative)
            ->setPriceInformation($priceInformation)
            ->setTravelDuration($travelDuration)
            ->setTourOperator($tourOperator)
            ->setSpecialJourneyAttributes($specialJourneyAttributes)
            ->setRoom($room)
            ->setMeal($meal)
            ->setDepartureAirport($departureAirport)
            ->setTravelType($travelType);
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get Alternative value
     * @return bool|null
     */
    public function getAlternative()
    {
        return $this->Alternative;
    }
    /**
     * Set Alternative value
     * @param bool $alternative
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setAlternative($alternative = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternative) && !is_bool($alternative)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alternative)), __LINE__);
        }
        $this->Alternative = $alternative;
        return $this;
    }
    /**
     * Get PriceInformation value
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setPriceInformation(\traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
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
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
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
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get SpecialJourneyAttributes value
     * @return SpecialJourneyAttribute|null
     */
    public function getSpecialJourneyAttributes()
    {
        return $this->SpecialJourneyAttributes;
    }
    /**
     * Set SpecialJourneyAttributes value
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setSpecialJourneyAttributes(SpecialJourneyAttribute $specialJourneyAttributes = null)
    {
        $this->SpecialJourneyAttributes = $specialJourneyAttributes;
        return $this;
    }
    /**
     * Get Room value
     * @return \traveltainment\SOAP17\StructType\SimpleRoomType|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \traveltainment\SOAP17\StructType\SimpleRoomType $room
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setRoom(\traveltainment\SOAP17\StructType\SimpleRoomType $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Meal value
     * @return string|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @uses \traveltainment\SOAP17\EnumType\Meal::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Meal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $meal
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setMeal($meal = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Meal::valueIsValid($meal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $meal, implode(', ', \traveltainment\SOAP17\EnumType\Meal::getValidValues())), __LINE__);
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return \traveltainment\SOAP17\StructType\AirportType|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \traveltainment\SOAP17\StructType\AirportType $departureAirport
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setDepartureAirport(\traveltainment\SOAP17\StructType\AirportType $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get TravelType value
     * @return string|null
     */
    public function getTravelType()
    {
        return $this->TravelType;
    }
    /**
     * Set TravelType value
     * @param string $travelType
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
     */
    public function setTravelType($travelType = null)
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelType)), __LINE__);
        }
        $this->TravelType = $travelType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ReducedOfferType
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
