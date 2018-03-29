<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableOfferType StructType
 * @subpackage Structs
 */
class AvailableOfferType extends AbstractStructBase
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The Status
     * @var \StructType\StatusType
     */
    public $Status;
    /**
     * The AvailableBookingTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var BookingTypeEnum
     */
    public $AvailableBookingTypes;
    /**
     * The AvailablePayments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PaymentTypesType
     */
    public $AvailablePayments;
    /**
     * The TravelDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TravelDuration;
    /**
     * The Travellers
     * @var \StructType\TravellerBirthdatesType
     */
    public $Travellers;
    /**
     * The TravellerCount
     * Meta informations extracted from the WSDL
     * - maxInclusive: 8
     * - minInclusive: 1
     * @var int
     */
    public $TravellerCount;
    /**
     * The PriceInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferPriceInformationType
     */
    public $PriceInformation;
    /**
     * The OfferDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\StartEndType
     */
    public $OfferDateSpan;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TourOperatorType
     */
    public $TourOperator;
    /**
     * The ProgramType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProgramType;
    /**
     * The TravelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelType;
    /**
     * The IncludedServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\IncludedServicesType
     */
    public $IncludedServices;
    /**
     * The SpecialJourneyAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var SpecialJourneyAttribute
     */
    public $SpecialJourneyAttributes;
    /**
     * The Cautions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CautionsType
     */
    public $Cautions;
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
     * The OfferAddInfo
     * @var \StructType\OfferAddInfoType
     */
    public $OfferAddInfo;
    /**
     * Constructor method for AvailableOfferType
     * @uses AvailableOfferType::setOfferID()
     * @uses AvailableOfferType::setStatus()
     * @uses AvailableOfferType::setAvailableBookingTypes()
     * @uses AvailableOfferType::setAvailablePayments()
     * @uses AvailableOfferType::setTravelDuration()
     * @uses AvailableOfferType::setTravellers()
     * @uses AvailableOfferType::setTravellerCount()
     * @uses AvailableOfferType::setPriceInformation()
     * @uses AvailableOfferType::setOfferDateSpan()
     * @uses AvailableOfferType::setTourOperator()
     * @uses AvailableOfferType::setProgramType()
     * @uses AvailableOfferType::setTravelType()
     * @uses AvailableOfferType::setIncludedServices()
     * @uses AvailableOfferType::setSpecialJourneyAttributes()
     * @uses AvailableOfferType::setCautions()
     * @uses AvailableOfferType::setPackage()
     * @uses AvailableOfferType::setAccommodation()
     * @uses AvailableOfferType::setFlight()
     * @uses AvailableOfferType::setOfferAddInfo()
     * @param string $offerID
     * @param \StructType\StatusType $status
     * @param BookingTypeEnum $availableBookingTypes
     * @param \StructType\PaymentTypesType $availablePayments
     * @param int $travelDuration
     * @param \StructType\TravellerBirthdatesType $travellers
     * @param int $travellerCount
     * @param \StructType\OfferPriceInformationType $priceInformation
     * @param \StructType\StartEndType $offerDateSpan
     * @param \StructType\TourOperatorType $tourOperator
     * @param string $programType
     * @param string $travelType
     * @param \StructType\IncludedServicesType $includedServices
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \StructType\CautionsType $cautions
     * @param \StructType\PackageType $package
     * @param \StructType\AccommodationType $accommodation
     * @param \StructType\FlightType $flight
     * @param \StructType\OfferAddInfoType $offerAddInfo
     */
    public function __construct($offerID = null, \StructType\StatusType $status = null, BookingTypeEnum $availableBookingTypes = null, \StructType\PaymentTypesType $availablePayments = null, $travelDuration = null, \StructType\TravellerBirthdatesType $travellers = null, $travellerCount = null, \StructType\OfferPriceInformationType $priceInformation = null, \StructType\StartEndType $offerDateSpan = null, \StructType\TourOperatorType $tourOperator = null, $programType = null, $travelType = null, \StructType\IncludedServicesType $includedServices = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \StructType\CautionsType $cautions = null, \StructType\PackageType $package = null, \StructType\AccommodationType $accommodation = null, \StructType\FlightType $flight = null, \StructType\OfferAddInfoType $offerAddInfo = null)
    {
        $this
            ->setOfferID($offerID)
            ->setStatus($status)
            ->setAvailableBookingTypes($availableBookingTypes)
            ->setAvailablePayments($availablePayments)
            ->setTravelDuration($travelDuration)
            ->setTravellers($travellers)
            ->setTravellerCount($travellerCount)
            ->setPriceInformation($priceInformation)
            ->setOfferDateSpan($offerDateSpan)
            ->setTourOperator($tourOperator)
            ->setProgramType($programType)
            ->setTravelType($travelType)
            ->setIncludedServices($includedServices)
            ->setSpecialJourneyAttributes($specialJourneyAttributes)
            ->setCautions($cautions)
            ->setPackage($package)
            ->setAccommodation($accommodation)
            ->setFlight($flight)
            ->setOfferAddInfo($offerAddInfo);
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
     * @return \StructType\AvailableOfferType
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
     * Get Status value
     * @return \StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \StructType\StatusType $status
     * @return \StructType\AvailableOfferType
     */
    public function setStatus(\StructType\StatusType $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get AvailableBookingTypes value
     * @return BookingTypeEnum|null
     */
    public function getAvailableBookingTypes()
    {
        return $this->AvailableBookingTypes;
    }
    /**
     * Set AvailableBookingTypes value
     * @param BookingTypeEnum $availableBookingTypes
     * @return \StructType\AvailableOfferType
     */
    public function setAvailableBookingTypes(BookingTypeEnum $availableBookingTypes = null)
    {
        $this->AvailableBookingTypes = $availableBookingTypes;
        return $this;
    }
    /**
     * Get AvailablePayments value
     * @return \StructType\PaymentTypesType|null
     */
    public function getAvailablePayments()
    {
        return $this->AvailablePayments;
    }
    /**
     * Set AvailablePayments value
     * @param \StructType\PaymentTypesType $availablePayments
     * @return \StructType\AvailableOfferType
     */
    public function setAvailablePayments(\StructType\PaymentTypesType $availablePayments = null)
    {
        $this->AvailablePayments = $availablePayments;
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
     * @return \StructType\AvailableOfferType
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
     * Get Travellers value
     * @return \StructType\TravellerBirthdatesType|null
     */
    public function getTravellers()
    {
        return $this->Travellers;
    }
    /**
     * Set Travellers value
     * @param \StructType\TravellerBirthdatesType $travellers
     * @return \StructType\AvailableOfferType
     */
    public function setTravellers(\StructType\TravellerBirthdatesType $travellers = null)
    {
        $this->Travellers = $travellers;
        return $this;
    }
    /**
     * Get TravellerCount value
     * @return int|null
     */
    public function getTravellerCount()
    {
        return $this->TravellerCount;
    }
    /**
     * Set TravellerCount value
     * @param int $travellerCount
     * @return \StructType\AvailableOfferType
     */
    public function setTravellerCount($travellerCount = null)
    {
        // validation for constraint: maxInclusive
        if ($travellerCount > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 8, "%s" given', $travellerCount), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($travellerCount < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $travellerCount), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($travellerCount) && !is_numeric($travellerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($travellerCount)), __LINE__);
        }
        $this->TravellerCount = $travellerCount;
        return $this;
    }
    /**
     * Get PriceInformation value
     * @return \StructType\OfferPriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \StructType\OfferPriceInformationType $priceInformation
     * @return \StructType\AvailableOfferType
     */
    public function setPriceInformation(\StructType\OfferPriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get OfferDateSpan value
     * @return \StructType\StartEndType|null
     */
    public function getOfferDateSpan()
    {
        return $this->OfferDateSpan;
    }
    /**
     * Set OfferDateSpan value
     * @param \StructType\StartEndType $offerDateSpan
     * @return \StructType\AvailableOfferType
     */
    public function setOfferDateSpan(\StructType\StartEndType $offerDateSpan = null)
    {
        $this->OfferDateSpan = $offerDateSpan;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \StructType\TourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \StructType\TourOperatorType $tourOperator
     * @return \StructType\AvailableOfferType
     */
    public function setTourOperator(\StructType\TourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
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
     * @return \StructType\AvailableOfferType
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
     * @return \StructType\AvailableOfferType
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
     * Get IncludedServices value
     * @return \StructType\IncludedServicesType|null
     */
    public function getIncludedServices()
    {
        return $this->IncludedServices;
    }
    /**
     * Set IncludedServices value
     * @param \StructType\IncludedServicesType $includedServices
     * @return \StructType\AvailableOfferType
     */
    public function setIncludedServices(\StructType\IncludedServicesType $includedServices = null)
    {
        $this->IncludedServices = $includedServices;
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
     * @return \StructType\AvailableOfferType
     */
    public function setSpecialJourneyAttributes(SpecialJourneyAttribute $specialJourneyAttributes = null)
    {
        $this->SpecialJourneyAttributes = $specialJourneyAttributes;
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
     * @return \StructType\AvailableOfferType
     */
    public function setCautions(\StructType\CautionsType $cautions = null)
    {
        $this->Cautions = $cautions;
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
     * @return \StructType\AvailableOfferType
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
     * @return \StructType\AvailableOfferType
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
     * @return \StructType\AvailableOfferType
     */
    public function setFlight(\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Get OfferAddInfo value
     * @return \StructType\OfferAddInfoType|null
     */
    public function getOfferAddInfo()
    {
        return $this->OfferAddInfo;
    }
    /**
     * Set OfferAddInfo value
     * @param \StructType\OfferAddInfoType $offerAddInfo
     * @return \StructType\AvailableOfferType
     */
    public function setOfferAddInfo(\StructType\OfferAddInfoType $offerAddInfo = null)
    {
        $this->OfferAddInfo = $offerAddInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AvailableOfferType
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
