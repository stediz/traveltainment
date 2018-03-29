<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferBaseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Alle Angebotsspezifische Daten finden sich innerhalb dieses Knotens wieder.
 * @subpackage Structs
 */
class OfferBaseType extends AbstractStructBase
{
    /**
     * The OfferID
     * Meta informations extracted from the WSDL
     * - documentation: Hier steht nochmals die OfferID, die das Angebot repraesentiert.
     * @var string
     */
    public $OfferID;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten beinhaltet den Veranstalter des Angebots
     * @var \StructType\TourOperatorType
     */
    public $TourOperator;
    /**
     * The ProcessNumber
     * Meta informations extracted from the WSDL
     * - documentation: Sofern vorhanden kann man diesem Feld die Vorgangsnummer des Veranstalters entnehmen.
     * - minOccurs: 0
     * - maxLength: 32
     * @var string
     */
    public $ProcessNumber;
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
     * The ConvertedCacheTotalPrice
     * Meta informations extracted from the WSDL
     * - documentation: Erweiterung fuer FamiliyTab
     * - minOccurs: 0
     * @var \StructType\ConvertedTotalPriceListType
     */
    public $ConvertedCacheTotalPrice;
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
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for OfferBaseType
     * @uses OfferBaseType::setOfferID()
     * @uses OfferBaseType::setTourOperator()
     * @uses OfferBaseType::setProcessNumber()
     * @uses OfferBaseType::setTravelType()
     * @uses OfferBaseType::setProgramType()
     * @uses OfferBaseType::setOfferDateSpan()
     * @uses OfferBaseType::setCacheTotalPrice()
     * @uses OfferBaseType::setConvertedCacheTotalPrice()
     * @uses OfferBaseType::setSpecialJourneyAttributes()
     * @uses OfferBaseType::setCautions()
     * @uses OfferBaseType::setStatus()
     * @param string $offerID
     * @param \StructType\TourOperatorType $tourOperator
     * @param string $processNumber
     * @param string $travelType
     * @param string $programType
     * @param \StructType\DateTimeSpanType $offerDateSpan
     * @param \StructType\PriceType $cacheTotalPrice
     * @param \StructType\ConvertedTotalPriceListType $convertedCacheTotalPrice
     * @param SpecialJourneyAttribute $specialJourneyAttributes
     * @param \StructType\CautionsType $cautions
     * @param string $status
     */
    public function __construct($offerID = null, \StructType\TourOperatorType $tourOperator = null, $processNumber = null, $travelType = null, $programType = null, \StructType\DateTimeSpanType $offerDateSpan = null, \StructType\PriceType $cacheTotalPrice = null, \StructType\ConvertedTotalPriceListType $convertedCacheTotalPrice = null, SpecialJourneyAttribute $specialJourneyAttributes = null, \StructType\CautionsType $cautions = null, $status = null)
    {
        $this
            ->setOfferID($offerID)
            ->setTourOperator($tourOperator)
            ->setProcessNumber($processNumber)
            ->setTravelType($travelType)
            ->setProgramType($programType)
            ->setOfferDateSpan($offerDateSpan)
            ->setCacheTotalPrice($cacheTotalPrice)
            ->setConvertedCacheTotalPrice($convertedCacheTotalPrice)
            ->setSpecialJourneyAttributes($specialJourneyAttributes)
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
     */
    public function setTourOperator(\StructType\TourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
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
     * @return \StructType\OfferBaseType
     */
    public function setProcessNumber($processNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($processNumber) && strlen($processNumber) > 32) || (is_array($processNumber) && count($processNumber) > 32)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 32 element(s) or a scalar of 32 character(s) at most, "%d" length given', is_scalar($processNumber) ? strlen($processNumber) : count($processNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($processNumber) && !is_string($processNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processNumber)), __LINE__);
        }
        $this->ProcessNumber = $processNumber;
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
     */
    public function setCacheTotalPrice(\StructType\PriceType $cacheTotalPrice = null)
    {
        $this->CacheTotalPrice = $cacheTotalPrice;
        return $this;
    }
    /**
     * Get ConvertedCacheTotalPrice value
     * @return \StructType\ConvertedTotalPriceListType|null
     */
    public function getConvertedCacheTotalPrice()
    {
        return $this->ConvertedCacheTotalPrice;
    }
    /**
     * Set ConvertedCacheTotalPrice value
     * @param \StructType\ConvertedTotalPriceListType $convertedCacheTotalPrice
     * @return \StructType\OfferBaseType
     */
    public function setConvertedCacheTotalPrice(\StructType\ConvertedTotalPriceListType $convertedCacheTotalPrice = null)
    {
        $this->ConvertedCacheTotalPrice = $convertedCacheTotalPrice;
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
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
     * @return \StructType\OfferBaseType
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
