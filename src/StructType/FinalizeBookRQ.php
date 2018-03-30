<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinalizeBookRQ StructType
 * @subpackage Structs
 */
class FinalizeBookRQ extends XmlInterfaceRQ
{
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
     * The Payment
     * @var \traveltainment\SOAP17\StructType\PaymentType
     */
    public $Payment;
    /**
     * Constructor method for FinalizeBookRQ
     * @uses FinalizeBookRQ::setBookingID()
     * @uses FinalizeBookRQ::setShoppingCartID()
     * @uses FinalizeBookRQ::setPayment()
     * @param string $bookingID
     * @param string $shoppingCartID
     * @param \traveltainment\SOAP17\StructType\PaymentType $payment
     */
    public function __construct($bookingID = null, $shoppingCartID = null, \traveltainment\SOAP17\StructType\PaymentType $payment = null)
    {
        $this
            ->setBookingID($bookingID)
            ->setShoppingCartID($shoppingCartID)
            ->setPayment($payment);
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
     * @return \traveltainment\SOAP17\StructType\FinalizeBookRQ
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
     * @return \traveltainment\SOAP17\StructType\FinalizeBookRQ
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
     * @return \traveltainment\SOAP17\StructType\FinalizeBookRQ
     */
    public function setPayment(\traveltainment\SOAP17\StructType\PaymentType $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\FinalizeBookRQ
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
