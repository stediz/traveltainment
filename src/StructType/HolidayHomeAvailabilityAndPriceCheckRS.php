<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\StatusType
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
     * @var \traveltainment\SOAP17\StructType\HolidayHomePriceInformationType
     */
    public $PriceInformation;
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferType
     */
    public $Offer;
    /**
     * The AvailableBookingTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AvailableBookingTypesListType
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
     * @var \traveltainment\SOAP17\StructType\AvailablePaymentTypes
     */
    public $AvailablePaymentTypes;
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OptionType[]
     */
    public $Option;
    /**
     * The ReservationSystemInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ReservationSystemInformationType
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
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @param string $bookingID
     * @param \traveltainment\SOAP17\StructType\HolidayHomePriceInformationType $priceInformation
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer
     * @param \traveltainment\SOAP17\StructType\AvailableBookingTypesListType $availableBookingTypes
     * @param int $travellerCount
     * @param \traveltainment\SOAP17\StructType\AvailablePaymentTypes $availablePaymentTypes
     * @param \traveltainment\SOAP17\StructType\OptionType[] $option
     * @param \traveltainment\SOAP17\StructType\ReservationSystemInformationType $reservationSystemInformation
     */
    public function __construct(\traveltainment\SOAP17\StructType\StatusType $status = null, $bookingID = null, \traveltainment\SOAP17\StructType\HolidayHomePriceInformationType $priceInformation = null, \traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer = null, \traveltainment\SOAP17\StructType\AvailableBookingTypesListType $availableBookingTypes = null, $travellerCount = null, \traveltainment\SOAP17\StructType\AvailablePaymentTypes $availablePaymentTypes = null, array $option = array(), \traveltainment\SOAP17\StructType\ReservationSystemInformationType $reservationSystemInformation = null)
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
     * @return \traveltainment\SOAP17\StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setStatus(\traveltainment\SOAP17\StructType\StatusType $status = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomePriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \traveltainment\SOAP17\StructType\HolidayHomePriceInformationType $priceInformation
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setPriceInformation(\traveltainment\SOAP17\StructType\HolidayHomePriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setOffer(\traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get AvailableBookingTypes value
     * @return \traveltainment\SOAP17\StructType\AvailableBookingTypesListType|null
     */
    public function getAvailableBookingTypes()
    {
        return $this->AvailableBookingTypes;
    }
    /**
     * Set AvailableBookingTypes value
     * @param \traveltainment\SOAP17\StructType\AvailableBookingTypesListType $availableBookingTypes
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setAvailableBookingTypes(\traveltainment\SOAP17\StructType\AvailableBookingTypesListType $availableBookingTypes = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
     * @return \traveltainment\SOAP17\StructType\AvailablePaymentTypes|null
     */
    public function getAvailablePaymentTypes()
    {
        return $this->AvailablePaymentTypes;
    }
    /**
     * Set AvailablePaymentTypes value
     * @param \traveltainment\SOAP17\StructType\AvailablePaymentTypes $availablePaymentTypes
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setAvailablePaymentTypes(\traveltainment\SOAP17\StructType\AvailablePaymentTypes $availablePaymentTypes = null)
    {
        $this->AvailablePaymentTypes = $availablePaymentTypes;
        return $this;
    }
    /**
     * Get Option value
     * @return \traveltainment\SOAP17\StructType\OptionType[]|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\OptionType[] $option
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setOption(array $option = array())
    {
        foreach ($option as $holidayHomeAvailabilityAndPriceCheckRSOptionItem) {
            // validation for constraint: itemType
            if (!$holidayHomeAvailabilityAndPriceCheckRSOptionItem instanceof \traveltainment\SOAP17\StructType\OptionType) {
                throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \traveltainment\SOAP17\StructType\OptionType, "%s" given', is_object($holidayHomeAvailabilityAndPriceCheckRSOptionItem) ? get_class($holidayHomeAvailabilityAndPriceCheckRSOptionItem) : gettype($holidayHomeAvailabilityAndPriceCheckRSOptionItem)), __LINE__);
            }
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Add item to Option value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\OptionType $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function addToOption(\traveltainment\SOAP17\StructType\OptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\OptionType) {
            throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \traveltainment\SOAP17\StructType\OptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Option[] = $item;
        return $this;
    }
    /**
     * Get ReservationSystemInformation value
     * @return \traveltainment\SOAP17\StructType\ReservationSystemInformationType|null
     */
    public function getReservationSystemInformation()
    {
        return $this->ReservationSystemInformation;
    }
    /**
     * Set ReservationSystemInformation value
     * @param \traveltainment\SOAP17\StructType\ReservationSystemInformationType $reservationSystemInformation
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
     */
    public function setReservationSystemInformation(\traveltainment\SOAP17\StructType\ReservationSystemInformationType $reservationSystemInformation = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRS
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
