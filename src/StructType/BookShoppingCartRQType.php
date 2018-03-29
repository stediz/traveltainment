<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookShoppingCartRQType StructType
 * @subpackage Structs
 */
class BookShoppingCartRQType extends RequestType
{
    /**
     * The ClientIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: .*
     * @var string
     */
    public $ClientIP;
    /**
     * The CID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CID;
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SessionID;
    /**
     * The TravellersCount
     * Meta informations extracted from the WSDL
     * - minInclusive: 0
     * @var int
     */
    public $TravellersCount;
    /**
     * The Travellers
     * @var \StructType\TravellersType
     */
    public $Travellers;
    /**
     * The Customer
     * @var \StructType\CustomerType
     */
    public $Customer;
    /**
     * The BookRequests
     * @var \StructType\BookRequestsType
     */
    public $BookRequests;
    /**
     * Constructor method for BookShoppingCartRQType
     * @uses BookShoppingCartRQType::setClientIP()
     * @uses BookShoppingCartRQType::setCID()
     * @uses BookShoppingCartRQType::setSessionID()
     * @uses BookShoppingCartRQType::setTravellersCount()
     * @uses BookShoppingCartRQType::setTravellers()
     * @uses BookShoppingCartRQType::setCustomer()
     * @uses BookShoppingCartRQType::setBookRequests()
     * @param string $clientIP
     * @param string $cID
     * @param string $sessionID
     * @param int $travellersCount
     * @param \StructType\TravellersType $travellers
     * @param \StructType\CustomerType $customer
     * @param \StructType\BookRequestsType $bookRequests
     */
    public function __construct($clientIP = null, $cID = null, $sessionID = null, $travellersCount = null, \StructType\TravellersType $travellers = null, \StructType\CustomerType $customer = null, \StructType\BookRequestsType $bookRequests = null)
    {
        $this
            ->setClientIP($clientIP)
            ->setCID($cID)
            ->setSessionID($sessionID)
            ->setTravellersCount($travellersCount)
            ->setTravellers($travellers)
            ->setCustomer($customer)
            ->setBookRequests($bookRequests);
    }
    /**
     * Get ClientIP value
     * @return string|null
     */
    public function getClientIP()
    {
        return $this->ClientIP;
    }
    /**
     * Set ClientIP value
     * @param string $clientIP
     * @return \StructType\BookShoppingCartRQType
     */
    public function setClientIP($clientIP = null)
    {
        // validation for constraint: pattern
        if (is_scalar($clientIP) && !preg_match('/.*/', $clientIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches ".*", "%s" given', var_export($clientIP, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($clientIP) && !is_string($clientIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientIP)), __LINE__);
        }
        $this->ClientIP = $clientIP;
        return $this;
    }
    /**
     * Get CID value
     * @return string|null
     */
    public function getCID()
    {
        return $this->CID;
    }
    /**
     * Set CID value
     * @param string $cID
     * @return \StructType\BookShoppingCartRQType
     */
    public function setCID($cID = null)
    {
        // validation for constraint: string
        if (!is_null($cID) && !is_string($cID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cID)), __LINE__);
        }
        $this->CID = $cID;
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \StructType\BookShoppingCartRQType
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get TravellersCount value
     * @return int|null
     */
    public function getTravellersCount()
    {
        return $this->TravellersCount;
    }
    /**
     * Set TravellersCount value
     * @param int $travellersCount
     * @return \StructType\BookShoppingCartRQType
     */
    public function setTravellersCount($travellersCount = null)
    {
        // validation for constraint: minInclusive
        if ($travellersCount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $travellersCount), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($travellersCount) && !is_numeric($travellersCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($travellersCount)), __LINE__);
        }
        $this->TravellersCount = $travellersCount;
        return $this;
    }
    /**
     * Get Travellers value
     * @return \StructType\TravellersType|null
     */
    public function getTravellers()
    {
        return $this->Travellers;
    }
    /**
     * Set Travellers value
     * @param \StructType\TravellersType $travellers
     * @return \StructType\BookShoppingCartRQType
     */
    public function setTravellers(\StructType\TravellersType $travellers = null)
    {
        $this->Travellers = $travellers;
        return $this;
    }
    /**
     * Get Customer value
     * @return \StructType\CustomerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \StructType\CustomerType $customer
     * @return \StructType\BookShoppingCartRQType
     */
    public function setCustomer(\StructType\CustomerType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get BookRequests value
     * @return \StructType\BookRequestsType|null
     */
    public function getBookRequests()
    {
        return $this->BookRequests;
    }
    /**
     * Set BookRequests value
     * @param \StructType\BookRequestsType $bookRequests
     * @return \StructType\BookShoppingCartRQType
     */
    public function setBookRequests(\StructType\BookRequestsType $bookRequests = null)
    {
        $this->BookRequests = $bookRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookShoppingCartRQType
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
