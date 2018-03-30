<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookTravelRequestType StructType
 * @subpackage Structs
 */
class BookTravelRequestType extends AbstractStructBase
{
    /**
     * The BookRequestID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BookRequestID;
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
     * The BookingType
     * @var string
     */
    public $BookingType;
    /**
     * The PaymentTokens
     * @var \traveltainment\SOAP17\StructType\PaymentTokensType
     */
    public $PaymentTokens;
    /**
     * The CustomerRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerRemarks;
    /**
     * The PortalRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PortalRemarks;
    /**
     * Constructor method for BookTravelRequestType
     * @uses BookTravelRequestType::setBookRequestID()
     * @uses BookTravelRequestType::setOfferID()
     * @uses BookTravelRequestType::setBookingID()
     * @uses BookTravelRequestType::setBookingType()
     * @uses BookTravelRequestType::setPaymentTokens()
     * @uses BookTravelRequestType::setCustomerRemarks()
     * @uses BookTravelRequestType::setPortalRemarks()
     * @param string $bookRequestID
     * @param string $offerID
     * @param string $bookingID
     * @param string $bookingType
     * @param \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens
     * @param string $customerRemarks
     * @param string $portalRemarks
     */
    public function __construct($bookRequestID = null, $offerID = null, $bookingID = null, $bookingType = null, \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens = null, $customerRemarks = null, $portalRemarks = null)
    {
        $this
            ->setBookRequestID($bookRequestID)
            ->setOfferID($offerID)
            ->setBookingID($bookingID)
            ->setBookingType($bookingType)
            ->setPaymentTokens($paymentTokens)
            ->setCustomerRemarks($customerRemarks)
            ->setPortalRemarks($portalRemarks);
    }
    /**
     * Get BookRequestID value
     * @return string
     */
    public function getBookRequestID()
    {
        return $this->BookRequestID;
    }
    /**
     * Set BookRequestID value
     * @param string $bookRequestID
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
     */
    public function setBookRequestID($bookRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($bookRequestID) && !is_string($bookRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookRequestID)), __LINE__);
        }
        $this->BookRequestID = $bookRequestID;
        return $this;
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
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
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
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
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
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
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
     * Get PaymentTokens value
     * @return \traveltainment\SOAP17\StructType\PaymentTokensType|null
     */
    public function getPaymentTokens()
    {
        return $this->PaymentTokens;
    }
    /**
     * Set PaymentTokens value
     * @param \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
     */
    public function setPaymentTokens(\traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens = null)
    {
        $this->PaymentTokens = $paymentTokens;
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
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
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
     * Get PortalRemarks value
     * @return string|null
     */
    public function getPortalRemarks()
    {
        return $this->PortalRemarks;
    }
    /**
     * Set PortalRemarks value
     * @param string $portalRemarks
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
     */
    public function setPortalRemarks($portalRemarks = null)
    {
        // validation for constraint: string
        if (!is_null($portalRemarks) && !is_string($portalRemarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portalRemarks)), __LINE__);
        }
        $this->PortalRemarks = $portalRemarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType
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
