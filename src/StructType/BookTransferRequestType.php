<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookTransferRequestType StructType
 * @subpackage Structs
 */
class BookTransferRequestType extends AbstractStructBase
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
     * The TransferData
     * @var \StructType\TransferDetails4BookType
     */
    public $TransferData;
    /**
     * Constructor method for BookTransferRequestType
     * @uses BookTransferRequestType::setBookRequestID()
     * @uses BookTransferRequestType::setOfferID()
     * @uses BookTransferRequestType::setPaymentTokens()
     * @uses BookTransferRequestType::setTransferData()
     * @param string $bookRequestID
     * @param string $offerID
     * @param \StructType\PaymentTokensType $paymentTokens
     * @param \StructType\TransferDetails4BookType $transferData
     */
    public function __construct($bookRequestID = null, $offerID = null, \StructType\PaymentTokensType $paymentTokens = null, \StructType\TransferDetails4BookType $transferData = null)
    {
        $this
            ->setBookRequestID($bookRequestID)
            ->setOfferID($offerID)
            ->setPaymentTokens($paymentTokens)
            ->setTransferData($transferData);
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
     * @return \StructType\BookTransferRequestType
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
     * @return \StructType\BookTransferRequestType
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
     * @return \StructType\BookTransferRequestType
     */
    public function setPaymentTokens(\StructType\PaymentTokensType $paymentTokens = null)
    {
        $this->PaymentTokens = $paymentTokens;
        return $this;
    }
    /**
     * Get TransferData value
     * @return \StructType\TransferDetails4BookType|null
     */
    public function getTransferData()
    {
        return $this->TransferData;
    }
    /**
     * Set TransferData value
     * @param \StructType\TransferDetails4BookType $transferData
     * @return \StructType\BookTransferRequestType
     */
    public function setTransferData(\StructType\TransferDetails4BookType $transferData = null)
    {
        $this->TransferData = $transferData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookTransferRequestType
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
