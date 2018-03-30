<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\StatusType
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
     * @var \traveltainment\SOAP17\StructType\PaymentTypesType
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
     * @var \traveltainment\SOAP17\StructType\TravellerBirthdatesType
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
     * @var \traveltainment\SOAP17\StructType\OfferPriceInformationType
     */
    public $PriceInformation;
    /**
     * The OfferDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\StartEndType
     */
    public $OfferDateSpan;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperatorType
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
     * @var \traveltainment\SOAP17\StructType\IncludedServicesType
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
     * @var \traveltainment\SOAP17\StructType\CautionsType
     */
    public $Cautions;
    /**
     * The Package
     * @var \traveltainment\SOAP17\StructType\PackageType
     */
    public $Package;
    /**
     * The Accommodation
     * @var \traveltainment\SOAP17\StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Flight
     * @var \traveltainment\SOAP17\StructType\FlightType
     */
    public $Flight;
    /**
     * The OfferAddInfo
     * @var \traveltainment\SOAP17\StructType\OfferAddInfoType
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
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @param BookingTypeEnum $availableBookingTypes
     * @param \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments
     * @param int $travelDuration
     * @param \traveltainment\SOAP17\StructType\TravellerBirthdatesType $travellers
     * @param int $travellerCount
     * @param \traveltainment\SOAP17\StructType\OfferPriceInformationType $priceInformation
     * @param \traveltainment\SOAP17\StructType\StartEndType $offerDateSpan
     * @param \traveltainment\SOAP17\StructType\TourOperatorType $tourOperator
     * @param string $programType
     * @param string $travelType
     * @param \traveltainment\SOAP17\StructType\IncludedServicesType $includedServices
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \traveltainment\SOAP17\StructType\CautionsType $cautions
     * @param \traveltainment\SOAP17\StructType\PackageType $package
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     * @param \traveltainment\SOAP17\StructType\OfferAddInfoType $offerAddInfo
     */
    public function __construct($offerID = null, \traveltainment\SOAP17\StructType\StatusType $status = null, BookingTypeEnum $availableBookingTypes = null, \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments = null, $travelDuration = null, \traveltainment\SOAP17\StructType\TravellerBirthdatesType $travellers = null, $travellerCount = null, \traveltainment\SOAP17\StructType\OfferPriceInformationType $priceInformation = null, \traveltainment\SOAP17\StructType\StartEndType $offerDateSpan = null, \traveltainment\SOAP17\StructType\TourOperatorType $tourOperator = null, $programType = null, $travelType = null, \traveltainment\SOAP17\StructType\IncludedServicesType $includedServices = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \traveltainment\SOAP17\StructType\CautionsType $cautions = null, \traveltainment\SOAP17\StructType\PackageType $package = null, \traveltainment\SOAP17\StructType\AccommodationType $accommodation = null, \traveltainment\SOAP17\StructType\FlightType $flight = null, \traveltainment\SOAP17\StructType\OfferAddInfoType $offerAddInfo = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
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
     * @return \traveltainment\SOAP17\StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setStatus(\traveltainment\SOAP17\StructType\StatusType $status = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setAvailableBookingTypes(BookingTypeEnum $availableBookingTypes = null)
    {
        $this->AvailableBookingTypes = $availableBookingTypes;
        return $this;
    }
    /**
     * Get AvailablePayments value
     * @return \traveltainment\SOAP17\StructType\PaymentTypesType|null
     */
    public function getAvailablePayments()
    {
        return $this->AvailablePayments;
    }
    /**
     * Set AvailablePayments value
     * @param \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setAvailablePayments(\traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
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
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdatesType|null
     */
    public function getTravellers()
    {
        return $this->Travellers;
    }
    /**
     * Set Travellers value
     * @param \traveltainment\SOAP17\StructType\TravellerBirthdatesType $travellers
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setTravellers(\traveltainment\SOAP17\StructType\TravellerBirthdatesType $travellers = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
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
     * @return \traveltainment\SOAP17\StructType\OfferPriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \traveltainment\SOAP17\StructType\OfferPriceInformationType $priceInformation
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setPriceInformation(\traveltainment\SOAP17\StructType\OfferPriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get OfferDateSpan value
     * @return \traveltainment\SOAP17\StructType\StartEndType|null
     */
    public function getOfferDateSpan()
    {
        return $this->OfferDateSpan;
    }
    /**
     * Set OfferDateSpan value
     * @param \traveltainment\SOAP17\StructType\StartEndType $offerDateSpan
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setOfferDateSpan(\traveltainment\SOAP17\StructType\StartEndType $offerDateSpan = null)
    {
        $this->OfferDateSpan = $offerDateSpan;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\TourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\TourOperatorType $tourOperator
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\TourOperatorType $tourOperator = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
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
     * @return \traveltainment\SOAP17\StructType\IncludedServicesType|null
     */
    public function getIncludedServices()
    {
        return $this->IncludedServices;
    }
    /**
     * Set IncludedServices value
     * @param \traveltainment\SOAP17\StructType\IncludedServicesType $includedServices
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setIncludedServices(\traveltainment\SOAP17\StructType\IncludedServicesType $includedServices = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setSpecialJourneyAttributes(SpecialJourneyAttribute $specialJourneyAttributes = null)
    {
        $this->SpecialJourneyAttributes = $specialJourneyAttributes;
        return $this;
    }
    /**
     * Get Cautions value
     * @return \traveltainment\SOAP17\StructType\CautionsType|null
     */
    public function getCautions()
    {
        return $this->Cautions;
    }
    /**
     * Set Cautions value
     * @param \traveltainment\SOAP17\StructType\CautionsType $cautions
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setCautions(\traveltainment\SOAP17\StructType\CautionsType $cautions = null)
    {
        $this->Cautions = $cautions;
        return $this;
    }
    /**
     * Get Package value
     * @return \traveltainment\SOAP17\StructType\PackageType|null
     */
    public function getPackage()
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \traveltainment\SOAP17\StructType\PackageType $package
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setPackage(\traveltainment\SOAP17\StructType\PackageType $package = null)
    {
        $this->Package = $package;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \traveltainment\SOAP17\StructType\AccommodationType|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setAccommodation(\traveltainment\SOAP17\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return \traveltainment\SOAP17\StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setFlight(\traveltainment\SOAP17\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Get OfferAddInfo value
     * @return \traveltainment\SOAP17\StructType\OfferAddInfoType|null
     */
    public function getOfferAddInfo()
    {
        return $this->OfferAddInfo;
    }
    /**
     * Set OfferAddInfo value
     * @param \traveltainment\SOAP17\StructType\OfferAddInfoType $offerAddInfo
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
     */
    public function setOfferAddInfo(\traveltainment\SOAP17\StructType\OfferAddInfoType $offerAddInfo = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailableOfferType
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
