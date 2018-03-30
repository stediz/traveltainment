<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\ChosenAlternativesInformation
     */
    public $ChosenAlternatives;
    /**
     * The TravellerList
     * Meta informations extracted from the WSDL
     * - documentation: Die TravellerList enthaelt 1 bis 8 Traveller.
     * @var \traveltainment\SOAP17\StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType
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
     * @param \traveltainment\SOAP17\StructType\ChosenAlternativesInformation $chosenAlternatives
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @param \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options
     */
    public function __construct($offerID = null, $bookingID = null, \traveltainment\SOAP17\StructType\ChosenAlternativesInformation $chosenAlternatives = null, \traveltainment\SOAP17\StructType\TravellerListType $travellerList = null, \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckRQ
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
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckRQ
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
     * @return \traveltainment\SOAP17\StructType\ChosenAlternativesInformation|null
     */
    public function getChosenAlternatives()
    {
        return $this->ChosenAlternatives;
    }
    /**
     * Set ChosenAlternatives value
     * @param \traveltainment\SOAP17\StructType\ChosenAlternativesInformation $chosenAlternatives
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckRQ
     */
    public function setChosenAlternatives(\traveltainment\SOAP17\StructType\ChosenAlternativesInformation $chosenAlternatives = null)
    {
        $this->ChosenAlternatives = $chosenAlternatives;
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
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckRQ
     */
    public function setTravellerList(\traveltainment\SOAP17\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckRQ
     */
    public function setOptions(\traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options = null)
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
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckRQ
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
