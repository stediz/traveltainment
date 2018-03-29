<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Alle Angebotsspezifische Daten finden sich innerhalb dieses Knotens wieder. | Ein Offer enthaelt einen Package-, Accomodation- oder Flightknoten
 * @subpackage Structs
 */
class OfferType extends OfferBaseType
{
    /**
     * The OfferID
     * Meta informations extracted from the WSDL
     * - documentation: Hier steht nochmals die OfferID, die das Angebot repraesentiert.
     * @var string
     */
    public $OfferID;
    /**
     * The PriceInformation
     * @var \StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The Weightage
     * @var int
     */
    public $Weightage;
    /**
     * The TravelDuration
     * @var int
     */
    public $TravelDuration;
    /**
     * The AverageFlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AverageFlightDuration;
    /**
     * The Alternative
     * @var bool
     */
    public $Alternative;
    /**
     * The Exclusive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Exclusive;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten beinhaltet den Veranstalter des Angebots
     * @var \StructType\ExtendedTourOperatorType
     */
    public $TourOperator;
    /**
     * The DepartureDate
     * @var string
     */
    public $DepartureDate;
    /**
     * The SpecialJourneyAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var SpecialJourneyAttribute
     */
    public $SpecialJourneyAttributes;
    /**
     * The Package
     * @var \StructType\PackageType
     */
    public $Package;
    /**
     * The Accommodation
     * @var \StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Flight
     * @var \StructType\FlightType
     */
    public $Flight;
    /**
     * The TravelType
     * Meta informations extracted from the WSDL
     * - documentation: Sofern verfuegbar steht hier die Reiseart.
     * - minOccurs: 0
     * @var string
     */
    public $TravelType;
    /**
     * The ProgramType
     * Meta informations extracted from the WSDL
     * - documentation: Die Programmart kann in diesem Knoten enthalten sein.
     * - minOccurs: 0
     * @var string
     */
    public $ProgramType;
    /**
     * The FlightBookedOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FlightBookedOut;
    /**
     * The AccommodationBookedOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AccommodationBookedOut;
    /**
     * The TourOperatorAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TourOperatorAttributesType
     */
    public $TourOperatorAttributes;
    /**
     * The ProcessNumber
     * Meta informations extracted from the WSDL
     * - documentation: Sofern vorhanden kann man diesem Feld die Vorgangsnummer des Veranstalters entnehmen.
     * - minOccurs: 0
     * - maxLength: 32
     * - minLength: 1
     * @var string
     */
    public $ProcessNumber;
    /**
     * The OfferDateSpan
     * Meta informations extracted from the WSDL
     * - documentation: Der Reisezeitraum des Angebots kann man den Knoten OfferDateSpan entnehmen.
     * - minOccurs: 0
     * @var \StructType\DateTimeSpanType
     */
    public $OfferDateSpan;
    /**
     * The CacheTotalPrice
     * Meta informations extracted from the WSDL
     * - documentation: Erweiterung fuer FamiliyTab
     * - minOccurs: 0
     * @var \StructType\PriceType
     */
    public $CacheTotalPrice;
    /**
     * The Cautions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CautionsType
     */
    public $Cautions;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for OfferType
     * @uses OfferType::setOfferID()
     * @uses OfferType::setPriceInformation()
     * @uses OfferType::setWeightage()
     * @uses OfferType::setTravelDuration()
     * @uses OfferType::setAverageFlightDuration()
     * @uses OfferType::setAlternative()
     * @uses OfferType::setExclusive()
     * @uses OfferType::setTourOperator()
     * @uses OfferType::setDepartureDate()
     * @uses OfferType::setSpecialJourneyAttributes()
     * @uses OfferType::setPackage()
     * @uses OfferType::setAccommodation()
     * @uses OfferType::setFlight()
     * @uses OfferType::setTravelType()
     * @uses OfferType::setProgramType()
     * @uses OfferType::setFlightBookedOut()
     * @uses OfferType::setAccommodationBookedOut()
     * @uses OfferType::setTourOperatorAttributes()
     * @uses OfferType::setProcessNumber()
     * @uses OfferType::setOfferDateSpan()
     * @uses OfferType::setCacheTotalPrice()
     * @uses OfferType::setCautions()
     * @uses OfferType::setStatus()
     * @param string $offerID
     * @param \StructType\PriceInformationType $priceInformation
     * @param int $weightage
     * @param int $travelDuration
     * @param int $averageFlightDuration
     * @param bool $alternative
     * @param bool $exclusive
     * @param \StructType\ExtendedTourOperatorType $tourOperator
     * @param string $departureDate
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \StructType\PackageType $package
     * @param \StructType\AccommodationType $accommodation
     * @param \StructType\FlightType $flight
     * @param string $travelType
     * @param string $programType
     * @param bool $flightBookedOut
     * @param bool $accommodationBookedOut
     * @param \StructType\TourOperatorAttributesType $tourOperatorAttributes
     * @param string $processNumber
     * @param \StructType\DateTimeSpanType $offerDateSpan
     * @param \StructType\PriceType $cacheTotalPrice
     * @param \StructType\CautionsType $cautions
     * @param string $status
     */
    public function __construct($offerID = null, \StructType\PriceInformationType $priceInformation = null, $weightage = null, $travelDuration = null, $averageFlightDuration = null, $alternative = null, $exclusive = null, \StructType\ExtendedTourOperatorType $tourOperator = null, $departureDate = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \StructType\PackageType $package = null, \StructType\AccommodationType $accommodation = null, \StructType\FlightType $flight = null, $travelType = null, $programType = null, $flightBookedOut = null, $accommodationBookedOut = null, \StructType\TourOperatorAttributesType $tourOperatorAttributes = null, $processNumber = null, \StructType\DateTimeSpanType $offerDateSpan = null, \StructType\PriceType $cacheTotalPrice = null, \StructType\CautionsType $cautions = null, $status = null)
    {
        $this
            ->setOfferID($offerID)
            ->setPriceInformation($priceInformation)
            ->setWeightage($weightage)
            ->setTravelDuration($travelDuration)
            ->setAverageFlightDuration($averageFlightDuration)
            ->setAlternative($alternative)
            ->setExclusive($exclusive)
            ->setTourOperator($tourOperator)
            ->setDepartureDate($departureDate)
            ->setSpecialJourneyAttributes($specialJourneyAttributes)
            ->setPackage($package)
            ->setAccommodation($accommodation)
            ->setFlight($flight)
            ->setTravelType($travelType)
            ->setProgramType($programType)
            ->setFlightBookedOut($flightBookedOut)
            ->setAccommodationBookedOut($accommodationBookedOut)
            ->setTourOperatorAttributes($tourOperatorAttributes)
            ->setProcessNumber($processNumber)
            ->setOfferDateSpan($offerDateSpan)
            ->setCacheTotalPrice($cacheTotalPrice)
            ->setCautions($cautions)
            ->setStatus($status);
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
     * @return \StructType\OfferType
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
     * Get PriceInformation value
     * @return \StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \StructType\PriceInformationType $priceInformation
     * @return \StructType\OfferType
     */
    public function setPriceInformation(\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get Weightage value
     * @return int|null
     */
    public function getWeightage()
    {
        return $this->Weightage;
    }
    /**
     * Set Weightage value
     * @param int $weightage
     * @return \StructType\OfferType
     */
    public function setWeightage($weightage = null)
    {
        // validation for constraint: int
        if (!is_null($weightage) && !is_numeric($weightage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weightage)), __LINE__);
        }
        $this->Weightage = $weightage;
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
     * @return \StructType\OfferType
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
     * Get AverageFlightDuration value
     * @return int|null
     */
    public function getAverageFlightDuration()
    {
        return $this->AverageFlightDuration;
    }
    /**
     * Set AverageFlightDuration value
     * @param int $averageFlightDuration
     * @return \StructType\OfferType
     */
    public function setAverageFlightDuration($averageFlightDuration = null)
    {
        // validation for constraint: int
        if (!is_null($averageFlightDuration) && !is_numeric($averageFlightDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($averageFlightDuration)), __LINE__);
        }
        $this->AverageFlightDuration = $averageFlightDuration;
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
     * @return \StructType\OfferType
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
     * Get Exclusive value
     * @return bool|null
     */
    public function getExclusive()
    {
        return $this->Exclusive;
    }
    /**
     * Set Exclusive value
     * @param bool $exclusive
     * @return \StructType\OfferType
     */
    public function setExclusive($exclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclusive) && !is_bool($exclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclusive)), __LINE__);
        }
        $this->Exclusive = $exclusive;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \StructType\ExtendedTourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \StructType\ExtendedTourOperatorType $tourOperator
     * @return \StructType\OfferType
     */
    public function setTourOperator(\StructType\ExtendedTourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \StructType\OfferType
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
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
     * @return \StructType\OfferType
     */
    public function setSpecialJourneyAttributes(SpecialJourneyAttribute $specialJourneyAttributes = null)
    {
        $this->SpecialJourneyAttributes = $specialJourneyAttributes;
        return $this;
    }
    /**
     * Get Package value
     * @return \StructType\PackageType|null
     */
    public function getPackage()
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \StructType\PackageType $package
     * @return \StructType\OfferType
     */
    public function setPackage(\StructType\PackageType $package = null)
    {
        $this->Package = $package;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \StructType\AccommodationType|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \StructType\AccommodationType $accommodation
     * @return \StructType\OfferType
     */
    public function setAccommodation(\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return \StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \StructType\FlightType $flight
     * @return \StructType\OfferType
     */
    public function setFlight(\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
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
     * @return \StructType\OfferType
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
     * Get ProgramType value
     * @return string|null
     */
    public function getProgramType()
    {
        return $this->ProgramType;
    }
    /**
     * Set ProgramType value
     * @param string $programType
     * @return \StructType\OfferType
     */
    public function setProgramType($programType = null)
    {
        // validation for constraint: string
        if (!is_null($programType) && !is_string($programType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programType)), __LINE__);
        }
        $this->ProgramType = $programType;
        return $this;
    }
    /**
     * Get FlightBookedOut value
     * @return bool|null
     */
    public function getFlightBookedOut()
    {
        return $this->FlightBookedOut;
    }
    /**
     * Set FlightBookedOut value
     * @param bool $flightBookedOut
     * @return \StructType\OfferType
     */
    public function setFlightBookedOut($flightBookedOut = null)
    {
        // validation for constraint: boolean
        if (!is_null($flightBookedOut) && !is_bool($flightBookedOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($flightBookedOut)), __LINE__);
        }
        $this->FlightBookedOut = $flightBookedOut;
        return $this;
    }
    /**
     * Get AccommodationBookedOut value
     * @return bool|null
     */
    public function getAccommodationBookedOut()
    {
        return $this->AccommodationBookedOut;
    }
    /**
     * Set AccommodationBookedOut value
     * @param bool $accommodationBookedOut
     * @return \StructType\OfferType
     */
    public function setAccommodationBookedOut($accommodationBookedOut = null)
    {
        // validation for constraint: boolean
        if (!is_null($accommodationBookedOut) && !is_bool($accommodationBookedOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($accommodationBookedOut)), __LINE__);
        }
        $this->AccommodationBookedOut = $accommodationBookedOut;
        return $this;
    }
    /**
     * Get TourOperatorAttributes value
     * @return \StructType\TourOperatorAttributesType|null
     */
    public function getTourOperatorAttributes()
    {
        return $this->TourOperatorAttributes;
    }
    /**
     * Set TourOperatorAttributes value
     * @param \StructType\TourOperatorAttributesType $tourOperatorAttributes
     * @return \StructType\OfferType
     */
    public function setTourOperatorAttributes(\StructType\TourOperatorAttributesType $tourOperatorAttributes = null)
    {
        $this->TourOperatorAttributes = $tourOperatorAttributes;
        return $this;
    }
    /**
     * Get ProcessNumber value
     * @return string|null
     */
    public function getProcessNumber()
    {
        return $this->ProcessNumber;
    }
    /**
     * Set ProcessNumber value
     * @param string $processNumber
     * @return \StructType\OfferType
     */
    public function setProcessNumber($processNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($processNumber) && strlen($processNumber) > 32) || (is_array($processNumber) && count($processNumber) > 32)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 32 element(s) or a scalar of 32 character(s) at most, "%d" length given', is_scalar($processNumber) ? strlen($processNumber) : count($processNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($processNumber) && strlen($processNumber) < 1) || (is_array($processNumber) && count($processNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($processNumber) && !is_string($processNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processNumber)), __LINE__);
        }
        $this->ProcessNumber = $processNumber;
        return $this;
    }
    /**
     * Get OfferDateSpan value
     * @return \StructType\DateTimeSpanType|null
     */
    public function getOfferDateSpan()
    {
        return $this->OfferDateSpan;
    }
    /**
     * Set OfferDateSpan value
     * @param \StructType\DateTimeSpanType $offerDateSpan
     * @return \StructType\OfferType
     */
    public function setOfferDateSpan(\StructType\DateTimeSpanType $offerDateSpan = null)
    {
        $this->OfferDateSpan = $offerDateSpan;
        return $this;
    }
    /**
     * Get CacheTotalPrice value
     * @return \StructType\PriceType|null
     */
    public function getCacheTotalPrice()
    {
        return $this->CacheTotalPrice;
    }
    /**
     * Set CacheTotalPrice value
     * @param \StructType\PriceType $cacheTotalPrice
     * @return \StructType\OfferType
     */
    public function setCacheTotalPrice(\StructType\PriceType $cacheTotalPrice = null)
    {
        $this->CacheTotalPrice = $cacheTotalPrice;
        return $this;
    }
    /**
     * Get Cautions value
     * @return \StructType\CautionsType|null
     */
    public function getCautions()
    {
        return $this->Cautions;
    }
    /**
     * Set Cautions value
     * @param \StructType\CautionsType $cautions
     * @return \StructType\OfferType
     */
    public function setCautions(\StructType\CautionsType $cautions = null)
    {
        $this->Cautions = $cautions;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\StatusEnum::valueIsValid()
     * @uses \EnumType\StatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\OfferType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \EnumType\StatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OfferType
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
