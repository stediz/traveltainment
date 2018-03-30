<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RS_MetadataType StructType
 * @subpackage Structs
 */
class RS_MetadataType extends AbstractStructBase
{
    /**
     * The IsTest
     * @var bool
     */
    public $IsTest;
    /**
     * The RequestID
     * @var string
     */
    public $RequestID;
    /**
     * The TransactionID
     * @var string
     */
    public $TransactionID;
    /**
     * The ResponseID
     * @var string
     */
    public $ResponseID;
    /**
     * The Timestamp
     * @var string
     */
    public $Timestamp;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * Constructor method for RS_MetadataType
     * @uses RS_MetadataType::setIsTest()
     * @uses RS_MetadataType::setRequestID()
     * @uses RS_MetadataType::setTransactionID()
     * @uses RS_MetadataType::setResponseID()
     * @uses RS_MetadataType::setTimestamp()
     * @uses RS_MetadataType::setLanguage()
     * @param bool $isTest
     * @param string $requestID
     * @param string $transactionID
     * @param string $responseID
     * @param string $timestamp
     * @param string $language
     */
    public function __construct($isTest = null, $requestID = null, $transactionID = null, $responseID = null, $timestamp = null, $language = null)
    {
        $this
            ->setIsTest($isTest)
            ->setRequestID($requestID)
            ->setTransactionID($transactionID)
            ->setResponseID($responseID)
            ->setTimestamp($timestamp)
            ->setLanguage($language);
    }
    /**
     * Get IsTest value
     * @return bool|null
     */
    public function getIsTest()
    {
        return $this->IsTest;
    }
    /**
     * Set IsTest value
     * @param bool $isTest
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
     */
    public function setIsTest($isTest = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTest) && !is_bool($isTest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTest)), __LINE__);
        }
        $this->IsTest = $isTest;
        return $this;
    }
    /**
     * Get RequestID value
     * @return string|null
     */
    public function getRequestID()
    {
        return $this->RequestID;
    }
    /**
     * Set RequestID value
     * @param string $requestID
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
     */
    public function setRequestID($requestID = null)
    {
        // validation for constraint: string
        if (!is_null($requestID) && !is_string($requestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestID)), __LINE__);
        }
        $this->RequestID = $requestID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get ResponseID value
     * @return string|null
     */
    public function getResponseID()
    {
        return $this->ResponseID;
    }
    /**
     * Set ResponseID value
     * @param string $responseID
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
     */
    public function setResponseID($responseID = null)
    {
        // validation for constraint: string
        if (!is_null($responseID) && !is_string($responseID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseID)), __LINE__);
        }
        $this->ResponseID = $responseID;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RS_MetadataType
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
