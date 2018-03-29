<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookParkingRequestType StructType
 * @subpackage Structs
 */
class BookParkingRequestType extends AbstractStructBase
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
     * The PaymentTokens
     * @var \StructType\PaymentTokensType
     */
    public $PaymentTokens;
    /**
     * The ParkingData
     * @var \StructType\ParkingDataType
     */
    public $ParkingData;
    /**
     * Constructor method for BookParkingRequestType
     * @uses BookParkingRequestType::setBookRequestID()
     * @uses BookParkingRequestType::setOfferID()
     * @uses BookParkingRequestType::setPaymentTokens()
     * @uses BookParkingRequestType::setParkingData()
     * @param string $bookRequestID
     * @param string $offerID
     * @param \StructType\PaymentTokensType $paymentTokens
     * @param \StructType\ParkingDataType $parkingData
     */
    public function __construct($bookRequestID = null, $offerID = null, \StructType\PaymentTokensType $paymentTokens = null, \StructType\ParkingDataType $parkingData = null)
    {
        $this
            ->setBookRequestID($bookRequestID)
            ->setOfferID($offerID)
            ->setPaymentTokens($paymentTokens)
            ->setParkingData($parkingData);
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
     * @return \StructType\BookParkingRequestType
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
     * @return \StructType\BookParkingRequestType
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
     * Get PaymentTokens value
     * @return \StructType\PaymentTokensType|null
     */
    public function getPaymentTokens()
    {
        return $this->PaymentTokens;
    }
    /**
     * Set PaymentTokens value
     * @param \StructType\PaymentTokensType $paymentTokens
     * @return \StructType\BookParkingRequestType
     */
    public function setPaymentTokens(\StructType\PaymentTokensType $paymentTokens = null)
    {
        $this->PaymentTokens = $paymentTokens;
        return $this;
    }
    /**
     * Get ParkingData value
     * @return \StructType\ParkingDataType|null
     */
    public function getParkingData()
    {
        return $this->ParkingData;
    }
    /**
     * Set ParkingData value
     * @param \StructType\ParkingDataType $parkingData
     * @return \StructType\BookParkingRequestType
     */
    public function setParkingData(\StructType\ParkingDataType $parkingData = null)
    {
        $this->ParkingData = $parkingData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookParkingRequestType
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
