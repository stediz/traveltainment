<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRS StructType
 * @subpackage Structs
 */
class BookRS extends XmlInterfaceRS
{
    /**
     * The Status
     * @var \StructType\StatusType
     */
    public $Status;
    /**
     * The BookingID
     * @var string
     */
    public $BookingID;
    /**
     * The ShoppingCartID
     * @var string
     */
    public $ShoppingCartID;
    /**
     * The PriceInformation
     * @var \StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The ReservationInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ReservationInformationType
     */
    public $ReservationInformation;
    /**
     * The Payment
     * @var \StructType\PaymentType
     */
    public $Payment;
    /**
     * The TravellerList
     * @var \StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The Customer
     * @var \StructType\CustomerType
     */
    public $Customer;
    /**
     * The Offer
     * @var \StructType\OfferType
     */
    public $Offer;
    /**
     * Constructor method for BookRS
     * @uses BookRS::setStatus()
     * @uses BookRS::setBookingID()
     * @uses BookRS::setShoppingCartID()
     * @uses BookRS::setPriceInformation()
     * @uses BookRS::setReservationInformation()
     * @uses BookRS::setPayment()
     * @uses BookRS::setTravellerList()
     * @uses BookRS::setCustomer()
     * @uses BookRS::setOffer()
     * @param \StructType\StatusType $status
     * @param string $bookingID
     * @param string $shoppingCartID
     * @param \StructType\PriceInformationType $priceInformation
     * @param \StructType\ReservationInformationType $reservationInformation
     * @param \StructType\PaymentType $payment
     * @param \StructType\TravellerListType $travellerList
     * @param \StructType\CustomerType $customer
     * @param \StructType\OfferType $offer
     */
    public function __construct(\StructType\StatusType $status = null, $bookingID = null, $shoppingCartID = null, \StructType\PriceInformationType $priceInformation = null, \StructType\ReservationInformationType $reservationInformation = null, \StructType\PaymentType $payment = null, \StructType\TravellerListType $travellerList = null, \StructType\CustomerType $customer = null, \StructType\OfferType $offer = null)
    {
        $this
            ->setStatus($status)
            ->setBookingID($bookingID)
            ->setShoppingCartID($shoppingCartID)
            ->setPriceInformation($priceInformation)
            ->setReservationInformation($reservationInformation)
            ->setPayment($payment)
            ->setTravellerList($travellerList)
            ->setCustomer($customer)
            ->setOffer($offer);
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
     * @return \StructType\BookRS
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
     * @return \StructType\BookRS
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
     * Get ShoppingCartID value
     * @return string|null
     */
    public function getShoppingCartID()
    {
        return $this->ShoppingCartID;
    }
    /**
     * Set ShoppingCartID value
     * @param string $shoppingCartID
     * @return \StructType\BookRS
     */
    public function setShoppingCartID($shoppingCartID = null)
    {
        // validation for constraint: string
        if (!is_null($shoppingCartID) && !is_string($shoppingCartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shoppingCartID)), __LINE__);
        }
        $this->ShoppingCartID = $shoppingCartID;
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
     * @return \StructType\BookRS
     */
    public function setPriceInformation(\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get ReservationInformation value
     * @return \StructType\ReservationInformationType|null
     */
    public function getReservationInformation()
    {
        return $this->ReservationInformation;
    }
    /**
     * Set ReservationInformation value
     * @param \StructType\ReservationInformationType $reservationInformation
     * @return \StructType\BookRS
     */
    public function setReservationInformation(\StructType\ReservationInformationType $reservationInformation = null)
    {
        $this->ReservationInformation = $reservationInformation;
        return $this;
    }
    /**
     * Get Payment value
     * @return \StructType\PaymentType|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \StructType\PaymentType $payment
     * @return \StructType\BookRS
     */
    public function setPayment(\StructType\PaymentType $payment = null)
    {
        $this->Payment = $payment;
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
     * @return \StructType\BookRS
     */
    public function setTravellerList(\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get Customer value
     * @return \StructType\CustomerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \StructType\CustomerType $customer
     * @return \StructType\BookRS
     */
    public function setCustomer(\StructType\CustomerType $customer = null)
    {
        $this->Customer = $customer;
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
     * @return \StructType\BookRS
     */
    public function setOffer(\StructType\OfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookRS
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
