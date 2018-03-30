<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRQ StructType
 * @subpackage Structs
 */
class BookRQ extends BookRQRestriction
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
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
     * The BookingType
     * @var string
     */
    public $BookingType;
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
     * The Payment
     * @var \traveltainment\SOAP17\StructType\PaymentType
     */
    public $Payment;
    /**
     * The CustomerRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerRemarks;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\BookRQOptionsType
     */
    public $Options;
    /**
     * Constructor method for BookRQ
     * @uses BookRQ::setOfferID()
     * @uses BookRQ::setBookingID()
     * @uses BookRQ::setShoppingCartID()
     * @uses BookRQ::setBookingType()
     * @uses BookRQ::setTravellerList()
     * @uses BookRQ::setCustomer()
     * @uses BookRQ::setPayment()
     * @uses BookRQ::setCustomerRemarks()
     * @uses BookRQ::setOptions()
     * @param string $offerID
     * @param string $bookingID
     * @param string $shoppingCartID
     * @param string $bookingType
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @param \traveltainment\SOAP17\StructType\CustomerType $customer
     * @param \traveltainment\SOAP17\StructType\PaymentType $payment
     * @param string $customerRemarks
     * @param \traveltainment\SOAP17\StructType\BookRQOptionsType $options
     */
    public function __construct($offerID = null, $bookingID = null, $shoppingCartID = null, $bookingType = null, \traveltainment\SOAP17\StructType\TravellerListType $travellerList = null, \traveltainment\SOAP17\StructType\CustomerType $customer = null, \traveltainment\SOAP17\StructType\PaymentType $payment = null, $customerRemarks = null, \traveltainment\SOAP17\StructType\BookRQOptionsType $options = null)
    {
        $this
            ->setOfferID($offerID)
            ->setBookingID($bookingID)
            ->setShoppingCartID($shoppingCartID)
            ->setBookingType($bookingType)
            ->setTravellerList($travellerList)
            ->setCustomer($customer)
            ->setPayment($payment)
            ->setCustomerRemarks($customerRemarks)
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
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
     * Get BookingType value
     * @return string|null
     */
    public function getBookingType()
    {
        return $this->BookingType;
    }
    /**
     * Set BookingType value
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bookingType
     * @return \traveltainment\SOAP17\StructType\BookRQ
     */
    public function setBookingType($bookingType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid($bookingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bookingType, implode(', ', \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues())), __LINE__);
        }
        $this->BookingType = $bookingType;
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
     */
    public function setCustomer(\traveltainment\SOAP17\StructType\CustomerType $customer = null)
    {
        $this->Customer = $customer;
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
     */
    public function setPayment(\traveltainment\SOAP17\StructType\PaymentType $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get CustomerRemarks value
     * @return string|null
     */
    public function getCustomerRemarks()
    {
        return $this->CustomerRemarks;
    }
    /**
     * Set CustomerRemarks value
     * @param string $customerRemarks
     * @return \traveltainment\SOAP17\StructType\BookRQ
     */
    public function setCustomerRemarks($customerRemarks = null)
    {
        // validation for constraint: string
        if (!is_null($customerRemarks) && !is_string($customerRemarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerRemarks)), __LINE__);
        }
        $this->CustomerRemarks = $customerRemarks;
        return $this;
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\BookRQOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\BookRQOptionsType $options
     * @return \traveltainment\SOAP17\StructType\BookRQ
     */
    public function setOptions(\traveltainment\SOAP17\StructType\BookRQOptionsType $options = null)
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
     * @return \traveltainment\SOAP17\StructType\BookRQ
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
