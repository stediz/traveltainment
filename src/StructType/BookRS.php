<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRS StructType
 * @subpackage Structs
 */
class BookRS extends XmlInterfaceRS
{
    /**
     * The Status
     * @var \traveltainment\SOAP17\StructType\StatusType
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
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The ReservationInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ReservationInformationType
     */
    public $ReservationInformation;
    /**
     * The Payment
     * @var \traveltainment\SOAP17\StructType\PaymentType
     */
    public $Payment;
    /**
     * The TravellerList
     * @var \traveltainment\SOAP17\StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The Customer
     * @var \traveltainment\SOAP17\StructType\CustomerType
     */
    public $Customer;
    /**
     * The Offer
     * @var \traveltainment\SOAP17\StructType\OfferType
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
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @param string $bookingID
     * @param string $shoppingCartID
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @param \traveltainment\SOAP17\StructType\ReservationInformationType $reservationInformation
     * @param \traveltainment\SOAP17\StructType\PaymentType $payment
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @param \traveltainment\SOAP17\StructType\CustomerType $customer
     * @param \traveltainment\SOAP17\StructType\OfferType $offer
     */
    public function __construct(\traveltainment\SOAP17\StructType\StatusType $status = null, $bookingID = null, $shoppingCartID = null, \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null, \traveltainment\SOAP17\StructType\ReservationInformationType $reservationInformation = null, \traveltainment\SOAP17\StructType\PaymentType $payment = null, \traveltainment\SOAP17\StructType\TravellerListType $travellerList = null, \traveltainment\SOAP17\StructType\CustomerType $customer = null, \traveltainment\SOAP17\StructType\OfferType $offer = null)
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
     * @return \traveltainment\SOAP17\StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @return \traveltainment\SOAP17\StructType\BookRS
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
     * @return \traveltainment\SOAP17\StructType\BookRS
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
     * @return \traveltainment\SOAP17\StructType\BookRS
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
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @return \traveltainment\SOAP17\StructType\BookRS
     */
    public function setPriceInformation(\traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get ReservationInformation value
     * @return \traveltainment\SOAP17\StructType\ReservationInformationType|null
     */
    public function getReservationInformation()
    {
        return $this->ReservationInformation;
    }
    /**
     * Set ReservationInformation value
     * @param \traveltainment\SOAP17\StructType\ReservationInformationType $reservationInformation
     * @return \traveltainment\SOAP17\StructType\BookRS
     */
    public function setReservationInformation(\traveltainment\SOAP17\StructType\ReservationInformationType $reservationInformation = null)
    {
        $this->ReservationInformation = $reservationInformation;
        return $this;
    }
    /**
     * Get Payment value
     * @return \traveltainment\SOAP17\StructType\PaymentType|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \traveltainment\SOAP17\StructType\PaymentType $payment
     * @return \traveltainment\SOAP17\StructType\BookRS
     */
    public function setPayment(\traveltainment\SOAP17\StructType\PaymentType $payment = null)
    {
        $this->Payment = $payment;
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
     * @return \traveltainment\SOAP17\StructType\BookRS
     */
    public function setTravellerList(\traveltainment\SOAP17\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get Customer value
     * @return \traveltainment\SOAP17\StructType\CustomerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \traveltainment\SOAP17\StructType\CustomerType $customer
     * @return \traveltainment\SOAP17\StructType\BookRS
     */
    public function setCustomer(\traveltainment\SOAP17\StructType\CustomerType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\OfferType $offer
     * @return \traveltainment\SOAP17\StructType\BookRS
     */
    public function setOffer(\traveltainment\SOAP17\StructType\OfferType $offer = null)
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
     * @return \traveltainment\SOAP17\StructType\BookRS
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
