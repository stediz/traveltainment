<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyType StructType
 * @subpackage Structs
 */
class JourneyType extends AbstractStructBase
{
    /**
     * The DepartureAirportCountry
     * @var string
     */
    public $DepartureAirportCountry;
    /**
     * The TravellerList
     * @var \StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The DepartureAirportList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AirportListType
     */
    public $DepartureAirportList;
    /**
     * The TravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravelDateSpanType
     */
    public $TravelDateSpan;
    /**
     * The TravelDurationSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravelDurationSpanType
     */
    public $TravelDurationSpan;
    /**
     * The ExactTravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravelDateSpanType
     */
    public $ExactTravelDateSpan;
    /**
     * The PriceSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceSpanType
     */
    public $PriceSpan;
    /**
     * The SpecialJourneyAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var SpecialJourneyAttribute
     */
    public $SpecialJourneyAttributes;
    /**
     * The SpanishMarketScoped
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SpanishMarketScopedType
     */
    public $SpanishMarketScoped;
    /**
     * Constructor method for JourneyType
     * @uses JourneyType::setDepartureAirportCountry()
     * @uses JourneyType::setTravellerList()
     * @uses JourneyType::setDepartureAirportList()
     * @uses JourneyType::setTravelDateSpan()
     * @uses JourneyType::setTravelDurationSpan()
     * @uses JourneyType::setExactTravelDateSpan()
     * @uses JourneyType::setPriceSpan()
     * @uses JourneyType::setSpecialJourneyAttributes()
     * @uses JourneyType::setSpanishMarketScoped()
     * @param string $departureAirportCountry
     * @param \StructType\TravellerListType $travellerList
     * @param \StructType\AirportListType $departureAirportList
     * @param \StructType\TravelDateSpanType $travelDateSpan
     * @param \StructType\TravelDurationSpanType $travelDurationSpan
     * @param \StructType\TravelDateSpanType $exactTravelDateSpan
     * @param \StructType\PriceSpanType $priceSpan
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \StructType\SpanishMarketScopedType $spanishMarketScoped
     */
    public function __construct($departureAirportCountry = null, \StructType\TravellerListType $travellerList = null, \StructType\AirportListType $departureAirportList = null, \StructType\TravelDateSpanType $travelDateSpan = null, \StructType\TravelDurationSpanType $travelDurationSpan = null, \StructType\TravelDateSpanType $exactTravelDateSpan = null, \StructType\PriceSpanType $priceSpan = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \StructType\SpanishMarketScopedType $spanishMarketScoped = null)
    {
        $this
            ->setDepartureAirportCountry($departureAirportCountry)
            ->setTravellerList($travellerList)
            ->setDepartureAirportList($departureAirportList)
            ->setTravelDateSpan($travelDateSpan)
            ->setTravelDurationSpan($travelDurationSpan)
            ->setExactTravelDateSpan($exactTravelDateSpan)
            ->setPriceSpan($priceSpan)
            ->setSpecialJourneyAttributes($specialJourneyAttributes)
            ->setSpanishMarketScoped($spanishMarketScoped);
    }
    /**
     * Get DepartureAirportCountry value
     * @return string|null
     */
    public function getDepartureAirportCountry()
    {
        return $this->DepartureAirportCountry;
    }
    /**
     * Set DepartureAirportCountry value
     * @uses \EnumType\CountryCodeType::valueIsValid()
     * @uses \EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departureAirportCountry
     * @return \StructType\JourneyType
     */
    public function setDepartureAirportCountry($departureAirportCountry = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CountryCodeType::valueIsValid($departureAirportCountry)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departureAirportCountry, implode(', ', \EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->DepartureAirportCountry = $departureAirportCountry;
        return $this;
    }
    /**
     * Get TravellerList value
     * @return \StructType\TravellerListType|null
     */
    public function getTravellerList()
    {
        return $this->TravellerList;
    }
    /**
     * Set TravellerList value
     * @param \StructType\TravellerListType $travellerList
     * @return \StructType\JourneyType
     */
    public function setTravellerList(\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get DepartureAirportList value
     * @return \StructType\AirportListType|null
     */
    public function getDepartureAirportList()
    {
        return $this->DepartureAirportList;
    }
    /**
     * Set DepartureAirportList value
     * @param \StructType\AirportListType $departureAirportList
     * @return \StructType\JourneyType
     */
    public function setDepartureAirportList(\StructType\AirportListType $departureAirportList = null)
    {
        $this->DepartureAirportList = $departureAirportList;
        return $this;
    }
    /**
     * Get TravelDateSpan value
     * @return \StructType\TravelDateSpanType|null
     */
    public function getTravelDateSpan()
    {
        return $this->TravelDateSpan;
    }
    /**
     * Set TravelDateSpan value
     * @param \StructType\TravelDateSpanType $travelDateSpan
     * @return \StructType\JourneyType
     */
    public function setTravelDateSpan(\StructType\TravelDateSpanType $travelDateSpan = null)
    {
        $this->TravelDateSpan = $travelDateSpan;
        return $this;
    }
    /**
     * Get TravelDurationSpan value
     * @return \StructType\TravelDurationSpanType|null
     */
    public function getTravelDurationSpan()
    {
        return $this->TravelDurationSpan;
    }
    /**
     * Set TravelDurationSpan value
     * @param \StructType\TravelDurationSpanType $travelDurationSpan
     * @return \StructType\JourneyType
     */
    public function setTravelDurationSpan(\StructType\TravelDurationSpanType $travelDurationSpan = null)
    {
        $this->TravelDurationSpan = $travelDurationSpan;
        return $this;
    }
    /**
     * Get ExactTravelDateSpan value
     * @return \StructType\TravelDateSpanType|null
     */
    public function getExactTravelDateSpan()
    {
        return $this->ExactTravelDateSpan;
    }
    /**
     * Set ExactTravelDateSpan value
     * @param \StructType\TravelDateSpanType $exactTravelDateSpan
     * @return \StructType\JourneyType
     */
    public function setExactTravelDateSpan(\StructType\TravelDateSpanType $exactTravelDateSpan = null)
    {
        $this->ExactTravelDateSpan = $exactTravelDateSpan;
        return $this;
    }
    /**
     * Get PriceSpan value
     * @return \StructType\PriceSpanType|null
     */
    public function getPriceSpan()
    {
        return $this->PriceSpan;
    }
    /**
     * Set PriceSpan value
     * @param \StructType\PriceSpanType $priceSpan
     * @return \StructType\JourneyType
     */
    public function setPriceSpan(\StructType\PriceSpanType $priceSpan = null)
    {
        $this->PriceSpan = $priceSpan;
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
     * @return \StructType\JourneyType
     */
    public function setSpecialJourneyAttributes(SpecialJourneyAttribute $specialJourneyAttributes = null)
    {
        $this->SpecialJourneyAttributes = $specialJourneyAttributes;
        return $this;
    }
    /**
     * Get SpanishMarketScoped value
     * @return \StructType\SpanishMarketScopedType|null
     */
    public function getSpanishMarketScoped()
    {
        return $this->SpanishMarketScoped;
    }
    /**
     * Set SpanishMarketScoped value
     * @param \StructType\SpanishMarketScopedType $spanishMarketScoped
     * @return \StructType\JourneyType
     */
    public function setSpanishMarketScoped(\StructType\SpanishMarketScopedType $spanishMarketScoped = null)
    {
        $this->SpanishMarketScoped = $spanishMarketScoped;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\JourneyType
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
