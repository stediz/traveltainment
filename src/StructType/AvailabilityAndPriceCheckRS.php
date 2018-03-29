<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityAndPriceCheckRS StructType
 * @subpackage Structs
 */
class AvailabilityAndPriceCheckRS extends XmlInterfaceRS
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\StatusType
     */
    public $Status;
    /**
     * The BookingID
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten enthaelt eine von der BookingEngine generiert ID, welche dem Buchungsprozess eindeutig zugeordnet ist.
     * - minOccurs: 0
     * @var string
     */
    public $BookingID;
    /**
     * The PriceInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferType
     */
    public $Offer;
    /**
     * The AvailableBookingTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AvailableBookingTypesListType
     */
    public $AvailableBookingTypes;
    /**
     * The TravellerList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The AvailablePaymentTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AvailablePaymentTypes
     */
    public $AvailablePaymentTypes;
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\OptionType[]
     */
    public $Option;
    /**
     * The ReservationSystemInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ReservationSystemInformationType
     */
    public $ReservationSystemInformation;
    /**
     * Constructor method for AvailabilityAndPriceCheckRS
     * @uses AvailabilityAndPriceCheckRS::setStatus()
     * @uses AvailabilityAndPriceCheckRS::setBookingID()
     * @uses AvailabilityAndPriceCheckRS::setPriceInformation()
     * @uses AvailabilityAndPriceCheckRS::setOffer()
     * @uses AvailabilityAndPriceCheckRS::setAvailableBookingTypes()
     * @uses AvailabilityAndPriceCheckRS::setTravellerList()
     * @uses AvailabilityAndPriceCheckRS::setAvailablePaymentTypes()
     * @uses AvailabilityAndPriceCheckRS::setOption()
     * @uses AvailabilityAndPriceCheckRS::setReservationSystemInformation()
     * @param \StructType\StatusType $status
     * @param string $bookingID
     * @param \StructType\PriceInformationType $priceInformation
     * @param \StructType\OfferType $offer
     * @param \StructType\AvailableBookingTypesListType $availableBookingTypes
     * @param \StructType\TravellerListType $travellerList
     * @param \StructType\AvailablePaymentTypes $availablePaymentTypes
     * @param \StructType\OptionType[] $option
     * @param \StructType\ReservationSystemInformationType $reservationSystemInformation
     */
    public function __construct(\StructType\StatusType $status = null, $bookingID = null, \StructType\PriceInformationType $priceInformation = null, \StructType\OfferType $offer = null, \StructType\AvailableBookingTypesListType $availableBookingTypes = null, \StructType\TravellerListType $travellerList = null, \StructType\AvailablePaymentTypes $availablePaymentTypes = null, array $option = array(), \StructType\ReservationSystemInformationType $reservationSystemInformation = null)
    {
        $this
            ->setStatus($status)
            ->setBookingID($bookingID)
            ->setPriceInformation($priceInformation)
            ->setOffer($offer)
            ->setAvailableBookingTypes($availableBookingTypes)
            ->setTravellerList($travellerList)
            ->setAvailablePaymentTypes($availablePaymentTypes)
            ->setOption($option)
            ->setReservationSystemInformation($reservationSystemInformation);
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
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setStatus(\StructType\StatusType $status = null)
    {
        $this->Status = $status;
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
     * @return \StructType\AvailabilityAndPriceCheckRS
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
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setPriceInformation(\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\OfferType $offer
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setOffer(\StructType\OfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get AvailableBookingTypes value
     * @return \StructType\AvailableBookingTypesListType|null
     */
    public function getAvailableBookingTypes()
    {
        return $this->AvailableBookingTypes;
    }
    /**
     * Set AvailableBookingTypes value
     * @param \StructType\AvailableBookingTypesListType $availableBookingTypes
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setAvailableBookingTypes(\StructType\AvailableBookingTypesListType $availableBookingTypes = null)
    {
        $this->AvailableBookingTypes = $availableBookingTypes;
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
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setTravellerList(\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get AvailablePaymentTypes value
     * @return \StructType\AvailablePaymentTypes|null
     */
    public function getAvailablePaymentTypes()
    {
        return $this->AvailablePaymentTypes;
    }
    /**
     * Set AvailablePaymentTypes value
     * @param \StructType\AvailablePaymentTypes $availablePaymentTypes
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setAvailablePaymentTypes(\StructType\AvailablePaymentTypes $availablePaymentTypes = null)
    {
        $this->AvailablePaymentTypes = $availablePaymentTypes;
        return $this;
    }
    /**
     * Get Option value
     * @return \StructType\OptionType[]|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @throws \InvalidArgumentException
     * @param \StructType\OptionType[] $option
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setOption(array $option = array())
    {
        foreach ($option as $availabilityAndPriceCheckRSOptionItem) {
            // validation for constraint: itemType
            if (!$availabilityAndPriceCheckRSOptionItem instanceof \StructType\OptionType) {
                throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \StructType\OptionType, "%s" given', is_object($availabilityAndPriceCheckRSOptionItem) ? get_class($availabilityAndPriceCheckRSOptionItem) : gettype($availabilityAndPriceCheckRSOptionItem)), __LINE__);
            }
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Add item to Option value
     * @throws \InvalidArgumentException
     * @param \StructType\OptionType $item
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function addToOption(\StructType\OptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OptionType) {
            throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \StructType\OptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Option[] = $item;
        return $this;
    }
    /**
     * Get ReservationSystemInformation value
     * @return \StructType\ReservationSystemInformationType|null
     */
    public function getReservationSystemInformation()
    {
        return $this->ReservationSystemInformation;
    }
    /**
     * Set ReservationSystemInformation value
     * @param \StructType\ReservationSystemInformationType $reservationSystemInformation
     * @return \StructType\AvailabilityAndPriceCheckRS
     */
    public function setReservationSystemInformation(\StructType\ReservationSystemInformationType $reservationSystemInformation = null)
    {
        $this->ReservationSystemInformation = $reservationSystemInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AvailabilityAndPriceCheckRS
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
