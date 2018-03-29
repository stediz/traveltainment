<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingScBaseType StructType
 * @subpackage Structs
 */
class BookingScBaseType extends AbstractStructBase
{
    /**
     * The BookingID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingID;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The BookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingDate;
    /**
     * The BookingStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\BookingStatusType
     */
    public $BookingStatus;
    /**
     * The BookingEngineType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\BookingEngineTypeType
     */
    public $BookingEngineType;
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CredentialsType
     */
    public $Credentials;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CustomerType
     */
    public $Customer;
    /**
     * The TravellersCount
     * Meta informations extracted from the WSDL
     * - minInclusive: 0
     * @var int
     */
    public $TravellersCount;
    /**
     * The TravellerList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravellerList4ScType
     */
    public $TravellerList;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TotalType
     */
    public $Total;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PaymentType
     */
    public $Payment;
    /**
     * The DownStreamProcesses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DownstreamProcessListType
     */
    public $DownStreamProcesses;
    /**
     * Constructor method for BookingScBaseType
     * @uses BookingScBaseType::setBookingID()
     * @uses BookingScBaseType::setCreationDate()
     * @uses BookingScBaseType::setBookingDate()
     * @uses BookingScBaseType::setBookingStatus()
     * @uses BookingScBaseType::setBookingEngineType()
     * @uses BookingScBaseType::setCredentials()
     * @uses BookingScBaseType::setCustomer()
     * @uses BookingScBaseType::setTravellersCount()
     * @uses BookingScBaseType::setTravellerList()
     * @uses BookingScBaseType::setTotal()
     * @uses BookingScBaseType::setPayment()
     * @uses BookingScBaseType::setDownStreamProcesses()
     * @param string $bookingID
     * @param string $creationDate
     * @param string $bookingDate
     * @param \StructType\BookingStatusType $bookingStatus
     * @param \StructType\BookingEngineTypeType $bookingEngineType
     * @param \StructType\CredentialsType $credentials
     * @param \StructType\CustomerType $customer
     * @param int $travellersCount
     * @param \StructType\TravellerList4ScType $travellerList
     * @param \StructType\TotalType $total
     * @param \StructType\PaymentType $payment
     * @param \StructType\DownstreamProcessListType $downStreamProcesses
     */
    public function __construct($bookingID = null, $creationDate = null, $bookingDate = null, \StructType\BookingStatusType $bookingStatus = null, \StructType\BookingEngineTypeType $bookingEngineType = null, \StructType\CredentialsType $credentials = null, \StructType\CustomerType $customer = null, $travellersCount = null, \StructType\TravellerList4ScType $travellerList = null, \StructType\TotalType $total = null, \StructType\PaymentType $payment = null, \StructType\DownstreamProcessListType $downStreamProcesses = null)
    {
        $this
            ->setBookingID($bookingID)
            ->setCreationDate($creationDate)
            ->setBookingDate($bookingDate)
            ->setBookingStatus($bookingStatus)
            ->setBookingEngineType($bookingEngineType)
            ->setCredentials($credentials)
            ->setCustomer($customer)
            ->setTravellersCount($travellersCount)
            ->setTravellerList($travellerList)
            ->setTotal($total)
            ->setPayment($payment)
            ->setDownStreamProcesses($downStreamProcesses);
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
     * @return \StructType\BookingScBaseType
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
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \StructType\BookingScBaseType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get BookingDate value
     * @return string|null
     */
    public function getBookingDate()
    {
        return $this->BookingDate;
    }
    /**
     * Set BookingDate value
     * @param string $bookingDate
     * @return \StructType\BookingScBaseType
     */
    public function setBookingDate($bookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingDate)), __LINE__);
        }
        $this->BookingDate = $bookingDate;
        return $this;
    }
    /**
     * Get BookingStatus value
     * @return \StructType\BookingStatusType|null
     */
    public function getBookingStatus()
    {
        return $this->BookingStatus;
    }
    /**
     * Set BookingStatus value
     * @param \StructType\BookingStatusType $bookingStatus
     * @return \StructType\BookingScBaseType
     */
    public function setBookingStatus(\StructType\BookingStatusType $bookingStatus = null)
    {
        $this->BookingStatus = $bookingStatus;
        return $this;
    }
    /**
     * Get BookingEngineType value
     * @return \StructType\BookingEngineTypeType|null
     */
    public function getBookingEngineType()
    {
        return $this->BookingEngineType;
    }
    /**
     * Set BookingEngineType value
     * @param \StructType\BookingEngineTypeType $bookingEngineType
     * @return \StructType\BookingScBaseType
     */
    public function setBookingEngineType(\StructType\BookingEngineTypeType $bookingEngineType = null)
    {
        $this->BookingEngineType = $bookingEngineType;
        return $this;
    }
    /**
     * Get Credentials value
     * @return \StructType\CredentialsType|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \StructType\CredentialsType $credentials
     * @return \StructType\BookingScBaseType
     */
    public function setCredentials(\StructType\CredentialsType $credentials = null)
    {
        $this->Credentials = $credentials;
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
     * @return \StructType\BookingScBaseType
     */
    public function setCustomer(\StructType\CustomerType $customer = null)
    {
        $this->Customer = $customer;
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
     * @return \StructType\BookingScBaseType
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
     * Get TravellerList value
     * @return \StructType\TravellerList4ScType|null
     */
    public function getTravellerList()
    {
        return $this->TravellerList;
    }
    /**
     * Set TravellerList value
     * @param \StructType\TravellerList4ScType $travellerList
     * @return \StructType\BookingScBaseType
     */
    public function setTravellerList(\StructType\TravellerList4ScType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\TotalType $total
     * @return \StructType\BookingScBaseType
     */
    public function setTotal(\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Payment value
     * @return \StructType\PaymentType|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \StructType\PaymentType $payment
     * @return \StructType\BookingScBaseType
     */
    public function setPayment(\StructType\PaymentType $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get DownStreamProcesses value
     * @return \StructType\DownstreamProcessListType|null
     */
    public function getDownStreamProcesses()
    {
        return $this->DownStreamProcesses;
    }
    /**
     * Set DownStreamProcesses value
     * @param \StructType\DownstreamProcessListType $downStreamProcesses
     * @return \StructType\BookingScBaseType
     */
    public function setDownStreamProcesses(\StructType\DownstreamProcessListType $downStreamProcesses = null)
    {
        $this->DownStreamProcesses = $downStreamProcesses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookingScBaseType
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
