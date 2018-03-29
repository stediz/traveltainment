<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeAvailabilityAndPriceCheckRS StructType
 * @subpackage Structs
 */
class HolidayHomeAvailabilityAndPriceCheckRS extends XmlInterfaceRS
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
     * @var \StructType\HolidayHomePriceInformationType
     */
    public $PriceInformation;
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeOfferType
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
     * The TravellerCount
     * Meta informations extracted from the WSDL
     * - maxInclusive: 8
     * - minInclusive: 1
     * @var int
     */
    public $TravellerCount;
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
     * Constructor method for HolidayHomeAvailabilityAndPriceCheckRS
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setStatus()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setBookingID()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setPriceInformation()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setOffer()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setAvailableBookingTypes()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setTravellerCount()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setAvailablePaymentTypes()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setOption()
     * @uses HolidayHomeAvailabilityAndPriceCheckRS::setReservationSystemInformation()
     * @param \StructType\StatusType $status
     * @param string $bookingID
     * @param \StructType\HolidayHomePriceInformationType $priceInformation
     * @param \StructType\HolidayHomeOfferType $offer
     * @param \StructType\AvailableBookingTypesListType $availableBookingTypes
     * @param int $travellerCount
     * @param \StructType\AvailablePaymentTypes $availablePaymentTypes
     * @param \StructType\OptionType[] $option
     * @param \StructType\ReservationSystemInformationType $reservationSystemInformation
     */
    public function __construct(\StructType\StatusType $status = null, $bookingID = null, \StructType\HolidayHomePriceInformationType $priceInformation = null, \StructType\HolidayHomeOfferType $offer = null, \StructType\AvailableBookingTypesListType $availableBookingTypes = null, $travellerCount = null, \StructType\AvailablePaymentTypes $availablePaymentTypes = null, array $option = array(), \StructType\ReservationSystemInformationType $reservationSystemInformation = null)
    {
        $this
            ->setStatus($status)
            ->setBookingID($bookingID)
            ->setPriceInformation($priceInformation)
            ->setOffer($offer)
            ->setAvailableBookingTypes($availableBookingTypes)
            ->setTravellerCount($travellerCount)
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \StructType\HolidayHomePriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \StructType\HolidayHomePriceInformationType $priceInformation
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setPriceInformation(\StructType\HolidayHomePriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\HolidayHomeOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\HolidayHomeOfferType $offer
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setOffer(\StructType\HolidayHomeOfferType $offer = null)
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setAvailableBookingTypes(\StructType\AvailableBookingTypesListType $availableBookingTypes = null)
    {
        $this->AvailableBookingTypes = $availableBookingTypes;
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setOption(array $option = array())
    {
        foreach ($option as $holidayHomeAvailabilityAndPriceCheckRSOptionItem) {
            // validation for constraint: itemType
            if (!$holidayHomeAvailabilityAndPriceCheckRSOptionItem instanceof \StructType\OptionType) {
                throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \StructType\OptionType, "%s" given', is_object($holidayHomeAvailabilityAndPriceCheckRSOptionItem) ? get_class($holidayHomeAvailabilityAndPriceCheckRSOptionItem) : gettype($holidayHomeAvailabilityAndPriceCheckRSOptionItem)), __LINE__);
            }
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Add item to Option value
     * @throws \InvalidArgumentException
     * @param \StructType\OptionType $item
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
