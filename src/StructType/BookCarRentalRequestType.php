<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookCarRentalRequestType StructType
 * @subpackage Structs
 */
class BookCarRentalRequestType extends AbstractStructBase
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
     * @var \traveltainment\SOAP17\StructType\PaymentTokensType
     */
    public $PaymentTokens;
    /**
     * The CarRentalData
     * @var \traveltainment\SOAP17\StructType\CarRentalDataType
     */
    public $CarRentalData;
    /**
     * Constructor method for BookCarRentalRequestType
     * @uses BookCarRentalRequestType::setBookRequestID()
     * @uses BookCarRentalRequestType::setOfferID()
     * @uses BookCarRentalRequestType::setPaymentTokens()
     * @uses BookCarRentalRequestType::setCarRentalData()
     * @param string $bookRequestID
     * @param string $offerID
     * @param \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens
     * @param \traveltainment\SOAP17\StructType\CarRentalDataType $carRentalData
     */
    public function __construct($bookRequestID = null, $offerID = null, \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens = null, \traveltainment\SOAP17\StructType\CarRentalDataType $carRentalData = null)
    {
        $this
            ->setBookRequestID($bookRequestID)
            ->setOfferID($offerID)
            ->setPaymentTokens($paymentTokens)
            ->setCarRentalData($carRentalData);
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
     * @return \traveltainment\SOAP17\StructType\BookCarRentalRequestType
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
     * @return \traveltainment\SOAP17\StructType\BookCarRentalRequestType
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
     * @return \traveltainment\SOAP17\StructType\PaymentTokensType|null
     */
    public function getPaymentTokens()
    {
        return $this->PaymentTokens;
    }
    /**
     * Set PaymentTokens value
     * @param \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens
     * @return \traveltainment\SOAP17\StructType\BookCarRentalRequestType
     */
    public function setPaymentTokens(\traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens = null)
    {
        $this->PaymentTokens = $paymentTokens;
        return $this;
    }
    /**
     * Get CarRentalData value
     * @return \traveltainment\SOAP17\StructType\CarRentalDataType|null
     */
    public function getCarRentalData()
    {
        return $this->CarRentalData;
    }
    /**
     * Set CarRentalData value
     * @param \traveltainment\SOAP17\StructType\CarRentalDataType $carRentalData
     * @return \traveltainment\SOAP17\StructType\BookCarRentalRequestType
     */
    public function setCarRentalData(\traveltainment\SOAP17\StructType\CarRentalDataType $carRentalData = null)
    {
        $this->CarRentalData = $carRentalData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BookCarRentalRequestType
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
