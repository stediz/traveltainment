<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The DepartureAirportList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirportListType
     */
    public $DepartureAirportList;
    /**
     * The TravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravelDateSpanType
     */
    public $TravelDateSpan;
    /**
     * The TravelDurationSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravelDurationSpanType
     */
    public $TravelDurationSpan;
    /**
     * The ExactTravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravelDateSpanType
     */
    public $ExactTravelDateSpan;
    /**
     * The PriceSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PriceSpanType
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
     * @var \traveltainment\SOAP17\StructType\SpanishMarketScopedType
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
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @param \traveltainment\SOAP17\StructType\AirportListType $departureAirportList
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan
     * @param \traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan
     * @param \traveltainment\SOAP17\StructType\PriceSpanType $priceSpan
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \traveltainment\SOAP17\StructType\SpanishMarketScopedType $spanishMarketScoped
     */
    public function __construct($departureAirportCountry = null, \traveltainment\SOAP17\StructType\TravellerListType $travellerList = null, \traveltainment\SOAP17\StructType\AirportListType $departureAirportList = null, \traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan = null, \traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan = null, \traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan = null, \traveltainment\SOAP17\StructType\PriceSpanType $priceSpan = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \traveltainment\SOAP17\StructType\SpanishMarketScopedType $spanishMarketScoped = null)
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
     * @uses \traveltainment\SOAP17\EnumType\CountryCodeType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departureAirportCountry
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setDepartureAirportCountry($departureAirportCountry = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CountryCodeType::valueIsValid($departureAirportCountry)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departureAirportCountry, implode(', ', \traveltainment\SOAP17\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->DepartureAirportCountry = $departureAirportCountry;
        return $this;
    }
    /**
     * Get TravellerList value
     * @return \traveltainment\SOAP17\StructType\TravellerListType|null
     */
    public function getTravellerList()
    {
        return $this->TravellerList;
    }
    /**
     * Set TravellerList value
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setTravellerList(\traveltainment\SOAP17\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get DepartureAirportList value
     * @return \traveltainment\SOAP17\StructType\AirportListType|null
     */
    public function getDepartureAirportList()
    {
        return $this->DepartureAirportList;
    }
    /**
     * Set DepartureAirportList value
     * @param \traveltainment\SOAP17\StructType\AirportListType $departureAirportList
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setDepartureAirportList(\traveltainment\SOAP17\StructType\AirportListType $departureAirportList = null)
    {
        $this->DepartureAirportList = $departureAirportList;
        return $this;
    }
    /**
     * Get TravelDateSpan value
     * @return \traveltainment\SOAP17\StructType\TravelDateSpanType|null
     */
    public function getTravelDateSpan()
    {
        return $this->TravelDateSpan;
    }
    /**
     * Set TravelDateSpan value
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setTravelDateSpan(\traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan = null)
    {
        $this->TravelDateSpan = $travelDateSpan;
        return $this;
    }
    /**
     * Get TravelDurationSpan value
     * @return \traveltainment\SOAP17\StructType\TravelDurationSpanType|null
     */
    public function getTravelDurationSpan()
    {
        return $this->TravelDurationSpan;
    }
    /**
     * Set TravelDurationSpan value
     * @param \traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setTravelDurationSpan(\traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan = null)
    {
        $this->TravelDurationSpan = $travelDurationSpan;
        return $this;
    }
    /**
     * Get ExactTravelDateSpan value
     * @return \traveltainment\SOAP17\StructType\TravelDateSpanType|null
     */
    public function getExactTravelDateSpan()
    {
        return $this->ExactTravelDateSpan;
    }
    /**
     * Set ExactTravelDateSpan value
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setExactTravelDateSpan(\traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan = null)
    {
        $this->ExactTravelDateSpan = $exactTravelDateSpan;
        return $this;
    }
    /**
     * Get PriceSpan value
     * @return \traveltainment\SOAP17\StructType\PriceSpanType|null
     */
    public function getPriceSpan()
    {
        return $this->PriceSpan;
    }
    /**
     * Set PriceSpan value
     * @param \traveltainment\SOAP17\StructType\PriceSpanType $priceSpan
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setPriceSpan(\traveltainment\SOAP17\StructType\PriceSpanType $priceSpan = null)
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
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setSpecialJourneyAttributes(SpecialJourneyAttribute $specialJourneyAttributes = null)
    {
        $this->SpecialJourneyAttributes = $specialJourneyAttributes;
        return $this;
    }
    /**
     * Get SpanishMarketScoped value
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType|null
     */
    public function getSpanishMarketScoped()
    {
        return $this->SpanishMarketScoped;
    }
    /**
     * Set SpanishMarketScoped value
     * @param \traveltainment\SOAP17\StructType\SpanishMarketScopedType $spanishMarketScoped
     * @return \traveltainment\SOAP17\StructType\JourneyType
     */
    public function setSpanishMarketScoped(\traveltainment\SOAP17\StructType\SpanishMarketScopedType $spanishMarketScoped = null)
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
     * @return \traveltainment\SOAP17\StructType\JourneyType
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
