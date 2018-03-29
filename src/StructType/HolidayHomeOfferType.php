<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Alle Angebotsspezifische Daten finden sich innerhalb dieses Knotens wieder.
 * @subpackage Structs
 */
class HolidayHomeOfferType extends AbstractStructBase
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
     * The StartDate
     * @var string
     */
    public $StartDate;
    /**
     * The StayDuration
     * @var int
     */
    public $StayDuration;
    /**
     * The Alternative
     * @var bool
     */
    public $Alternative;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Category;
    /**
     * The ObjectType
     * @var string
     */
    public $ObjectType;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten beinhaltet den Veranstalter des Angebots
     * @var \StructType\ExtendedTourOperatorType
     */
    public $TourOperator;
    /**
     * The AccomCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccomCode;
    /**
     * The TravelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelType;
    /**
     * The ProgramType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProgramType;
    /**
     * The ProcessNumber
     * Meta informations extracted from the WSDL
     * - documentation: Sofern vorhanden kann man diesem Feld die Vorgangsnummer des Veranstalters entnehmen.
     * - minOccurs: 0
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
     * The Accommodation
     * @var \StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for HolidayHomeOfferType
     * @uses HolidayHomeOfferType::setOfferID()
     * @uses HolidayHomeOfferType::setPriceInformation()
     * @uses HolidayHomeOfferType::setStartDate()
     * @uses HolidayHomeOfferType::setStayDuration()
     * @uses HolidayHomeOfferType::setAlternative()
     * @uses HolidayHomeOfferType::setCategory()
     * @uses HolidayHomeOfferType::setObjectType()
     * @uses HolidayHomeOfferType::setTourOperator()
     * @uses HolidayHomeOfferType::setAccomCode()
     * @uses HolidayHomeOfferType::setTravelType()
     * @uses HolidayHomeOfferType::setProgramType()
     * @uses HolidayHomeOfferType::setProcessNumber()
     * @uses HolidayHomeOfferType::setOfferDateSpan()
     * @uses HolidayHomeOfferType::setCacheTotalPrice()
     * @uses HolidayHomeOfferType::setCautions()
     * @uses HolidayHomeOfferType::setAccommodation()
     * @uses HolidayHomeOfferType::setStatus()
     * @param string $offerID
     * @param \StructType\PriceInformationType $priceInformation
     * @param string $startDate
     * @param int $stayDuration
     * @param bool $alternative
     * @param float $category
     * @param string $objectType
     * @param \StructType\ExtendedTourOperatorType $tourOperator
     * @param string $accomCode
     * @param string $travelType
     * @param string $programType
     * @param string $processNumber
     * @param \StructType\DateTimeSpanType $offerDateSpan
     * @param \StructType\PriceType $cacheTotalPrice
     * @param \StructType\CautionsType $cautions
     * @param \StructType\AccommodationType $accommodation
     * @param string $status
     */
    public function __construct($offerID = null, \StructType\PriceInformationType $priceInformation = null, $startDate = null, $stayDuration = null, $alternative = null, $category = null, $objectType = null, \StructType\ExtendedTourOperatorType $tourOperator = null, $accomCode = null, $travelType = null, $programType = null, $processNumber = null, \StructType\DateTimeSpanType $offerDateSpan = null, \StructType\PriceType $cacheTotalPrice = null, \StructType\CautionsType $cautions = null, \StructType\AccommodationType $accommodation = null, $status = null)
    {
        $this
            ->setOfferID($offerID)
            ->setPriceInformation($priceInformation)
            ->setStartDate($startDate)
            ->setStayDuration($stayDuration)
            ->setAlternative($alternative)
            ->setCategory($category)
            ->setObjectType($objectType)
            ->setTourOperator($tourOperator)
            ->setAccomCode($accomCode)
            ->setTravelType($travelType)
            ->setProgramType($programType)
            ->setProcessNumber($processNumber)
            ->setOfferDateSpan($offerDateSpan)
            ->setCacheTotalPrice($cacheTotalPrice)
            ->setCautions($cautions)
            ->setAccommodation($accommodation)
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
     * @return \StructType\HolidayHomeOfferType
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
     * @return \StructType\HolidayHomeOfferType
     */
    public function setPriceInformation(\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \StructType\HolidayHomeOfferType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get StayDuration value
     * @return int|null
     */
    public function getStayDuration()
    {
        return $this->StayDuration;
    }
    /**
     * Set StayDuration value
     * @param int $stayDuration
     * @return \StructType\HolidayHomeOfferType
     */
    public function setStayDuration($stayDuration = null)
    {
        // validation for constraint: int
        if (!is_null($stayDuration) && !is_numeric($stayDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stayDuration)), __LINE__);
        }
        $this->StayDuration = $stayDuration;
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
     * @return \StructType\HolidayHomeOfferType
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
     * Get Category value
     * @return float|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param float $category
     * @return \StructType\HolidayHomeOfferType
     */
    public function setCategory($category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get ObjectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->ObjectType;
    }
    /**
     * Set ObjectType value
     * @param string $objectType
     * @return \StructType\HolidayHomeOfferType
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectType)), __LINE__);
        }
        $this->ObjectType = $objectType;
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
     * @return \StructType\HolidayHomeOfferType
     */
    public function setTourOperator(\StructType\ExtendedTourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get AccomCode value
     * @return string|null
     */
    public function getAccomCode()
    {
        return $this->AccomCode;
    }
    /**
     * Set AccomCode value
     * @param string $accomCode
     * @return \StructType\HolidayHomeOfferType
     */
    public function setAccomCode($accomCode = null)
    {
        // validation for constraint: string
        if (!is_null($accomCode) && !is_string($accomCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accomCode)), __LINE__);
        }
        $this->AccomCode = $accomCode;
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
     * @return \StructType\HolidayHomeOfferType
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
     * @return \StructType\HolidayHomeOfferType
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
     * @return \StructType\HolidayHomeOfferType
     */
    public function setProcessNumber($processNumber = null)
    {
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
     * @return \StructType\HolidayHomeOfferType
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
     * @return \StructType\HolidayHomeOfferType
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
     * @return \StructType\HolidayHomeOfferType
     */
    public function setCautions(\StructType\CautionsType $cautions = null)
    {
        $this->Cautions = $cautions;
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
     * @return \StructType\HolidayHomeOfferType
     */
    public function setAccommodation(\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
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
     * @return \StructType\HolidayHomeOfferType
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
     * @return \StructType\HolidayHomeOfferType
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
