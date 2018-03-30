<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookInsuranceRequestType StructType
 * @subpackage Structs
 */
class BookInsuranceRequestType extends AbstractStructBase
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
     * Meta informations extracted from the WSDL
     * - documentation: Identifiziert ein Angebot, welches mit dieser OfferID von 'GetInsuranceOfferListRS' geliefert wurde (Pfad: Offers/Offer/OfferID).
     * @var string
     */
    public $OfferID;
    /**
     * The PaymentTokens
     * @var \traveltainment\SOAP17\StructType\PaymentTokensType
     */
    public $PaymentTokens;
    /**
     * The InsuranceData
     * @var \traveltainment\SOAP17\StructType\InsuranceDataType
     */
    public $InsuranceData;
    /**
     * Constructor method for BookInsuranceRequestType
     * @uses BookInsuranceRequestType::setBookRequestID()
     * @uses BookInsuranceRequestType::setOfferID()
     * @uses BookInsuranceRequestType::setPaymentTokens()
     * @uses BookInsuranceRequestType::setInsuranceData()
     * @param string $bookRequestID
     * @param string $offerID
     * @param \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens
     * @param \traveltainment\SOAP17\StructType\InsuranceDataType $insuranceData
     */
    public function __construct($bookRequestID = null, $offerID = null, \traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens = null, \traveltainment\SOAP17\StructType\InsuranceDataType $insuranceData = null)
    {
        $this
            ->setBookRequestID($bookRequestID)
            ->setOfferID($offerID)
            ->setPaymentTokens($paymentTokens)
            ->setInsuranceData($insuranceData);
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
     * @return \traveltainment\SOAP17\StructType\BookInsuranceRequestType
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
     * @return \traveltainment\SOAP17\StructType\BookInsuranceRequestType
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
     * @return \traveltainment\SOAP17\StructType\BookInsuranceRequestType
     */
    public function setPaymentTokens(\traveltainment\SOAP17\StructType\PaymentTokensType $paymentTokens = null)
    {
        $this->PaymentTokens = $paymentTokens;
        return $this;
    }
    /**
     * Get InsuranceData value
     * @return \traveltainment\SOAP17\StructType\InsuranceDataType|null
     */
    public function getInsuranceData()
    {
        return $this->InsuranceData;
    }
    /**
     * Set InsuranceData value
     * @param \traveltainment\SOAP17\StructType\InsuranceDataType $insuranceData
     * @return \traveltainment\SOAP17\StructType\BookInsuranceRequestType
     */
    public function setInsuranceData(\traveltainment\SOAP17\StructType\InsuranceDataType $insuranceData = null)
    {
        $this->InsuranceData = $insuranceData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BookInsuranceRequestType
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
