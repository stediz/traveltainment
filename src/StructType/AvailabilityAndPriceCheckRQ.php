<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityAndPriceCheckRQ StructType
 * @subpackage Structs
 */
class AvailabilityAndPriceCheckRQ extends XmlInterfaceRQ
{
    /**
     * The OfferID
     * Meta informations extracted from the WSDL
     * - documentation: Die OfferID ist eine temporaere und eindeutige ID, die Aufschluss ueber das derzeit angefragte Angebot des Users gibt. Die OfferID kann man den Search-Responses entnehmen.
     * @var string
     */
    public $OfferID;
    /**
     * The BookingID
     * Meta informations extracted from the WSDL
     * - documentation: Die BookingID ist die ID eines Buchungsauftrags und wird von der BookingEngine generiert und ausgegeben. Der AvailabiltyAndPriceCheckRQ benoetigt diese ID, wenn man auf einer bestehenden Buchung eine BA ausfuehren moechte.
     * @var string
     */
    public $BookingID;
    /**
     * The ChosenAlternatives
     * Meta informations extracted from the WSDL
     * - documentation: Alternativen
     * - minOccurs: 0
     * @var \StructType\ChosenAlternativesInformation
     */
    public $ChosenAlternatives;
    /**
     * The TravellerList
     * Meta informations extracted from the WSDL
     * - documentation: Die TravellerList enthaelt 1 bis 8 Traveller.
     * @var \StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AvailabilityAndPriceCheckOptionsType
     */
    public $Options;
    /**
     * Constructor method for AvailabilityAndPriceCheckRQ
     * @uses AvailabilityAndPriceCheckRQ::setOfferID()
     * @uses AvailabilityAndPriceCheckRQ::setBookingID()
     * @uses AvailabilityAndPriceCheckRQ::setChosenAlternatives()
     * @uses AvailabilityAndPriceCheckRQ::setTravellerList()
     * @uses AvailabilityAndPriceCheckRQ::setOptions()
     * @param string $offerID
     * @param string $bookingID
     * @param \StructType\ChosenAlternativesInformation $chosenAlternatives
     * @param \StructType\TravellerListType $travellerList
     * @param \StructType\AvailabilityAndPriceCheckOptionsType $options
     */
    public function __construct($offerID = null, $bookingID = null, \StructType\ChosenAlternativesInformation $chosenAlternatives = null, \StructType\TravellerListType $travellerList = null, \StructType\AvailabilityAndPriceCheckOptionsType $options = null)
    {
        $this
            ->setOfferID($offerID)
            ->setBookingID($bookingID)
            ->setChosenAlternatives($chosenAlternatives)
            ->setTravellerList($travellerList)
            ->setOptions($options);
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
     * @return \StructType\AvailabilityAndPriceCheckRQ
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
     * Get BookingID value
     * @return string|null
     */
    public function getBookingID()
    {
        return $this->BookingID;
    }
    /**
     * Set BookingID value
     * @param string $bookingID
     * @return \StructType\AvailabilityAndPriceCheckRQ
     */
    public function setBookingID($bookingID = null)
    {
        // validation for constraint: string
        if (!is_null($bookingID) && !is_string($bookingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingID)), __LINE__);
        }
        $this->BookingID = $bookingID;
        return $this;
    }
    /**
     * Get ChosenAlternatives value
     * @return \StructType\ChosenAlternativesInformation|null
     */
    public function getChosenAlternatives()
    {
        return $this->ChosenAlternatives;
    }
    /**
     * Set ChosenAlternatives value
     * @param \StructType\ChosenAlternativesInformation $chosenAlternatives
     * @return \StructType\AvailabilityAndPriceCheckRQ
     */
    public function setChosenAlternatives(\StructType\ChosenAlternativesInformation $chosenAlternatives = null)
    {
        $this->ChosenAlternatives = $chosenAlternatives;
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
     * @return \StructType\AvailabilityAndPriceCheckRQ
     */
    public function setTravellerList(\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get Options value
     * @return \StructType\AvailabilityAndPriceCheckOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\AvailabilityAndPriceCheckOptionsType $options
     * @return \StructType\AvailabilityAndPriceCheckRQ
     */
    public function setOptions(\StructType\AvailabilityAndPriceCheckOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AvailabilityAndPriceCheckRQ
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
