<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RQ_MetadataType StructType
 * @subpackage Structs
 */
class RQ_MetadataType extends AbstractStructBase
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Language;
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
     * Meta informations extracted from the WSDL
     * - maxLength: 128
     * - minLength: 1
     * @var string
     */
    public $TransactionID;
    /**
     * Constructor method for RQ_MetadataType
     * @uses RQ_MetadataType::setLanguage()
     * @uses RQ_MetadataType::setIsTest()
     * @uses RQ_MetadataType::setRequestID()
     * @uses RQ_MetadataType::setTransactionID()
     * @param string $language
     * @param bool $isTest
     * @param string $requestID
     * @param string $transactionID
     */
    public function __construct($language = null, $isTest = null, $requestID = null, $transactionID = null)
    {
        $this
            ->setLanguage($language)
            ->setIsTest($isTest)
            ->setRequestID($requestID)
            ->setTransactionID($transactionID);
    }
    /**
     * Get Language value
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \traveltainment\SOAP17\StructType\RQ_MetadataType
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
     * @return \traveltainment\SOAP17\StructType\RQ_MetadataType
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
     * @return \traveltainment\SOAP17\StructType\RQ_MetadataType
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
     * @return \traveltainment\SOAP17\StructType\RQ_MetadataType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($transactionID) && strlen($transactionID) > 128) || (is_array($transactionID) && count($transactionID) > 128)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 128 element(s) or a scalar of 128 character(s) at most, "%d" length given', is_scalar($transactionID) ? strlen($transactionID) : count($transactionID)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($transactionID) && strlen($transactionID) < 1) || (is_array($transactionID) && count($transactionID) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RQ_MetadataType
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
