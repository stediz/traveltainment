<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\BookingStatusType
     */
    public $BookingStatus;
    /**
     * The BookingEngineType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\BookingEngineTypeType
     */
    public $BookingEngineType;
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CredentialsType
     */
    public $Credentials;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CustomerType
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
     * @var \traveltainment\SOAP17\StructType\TravellerList4ScType
     */
    public $TravellerList;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TotalType
     */
    public $Total;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PaymentType
     */
    public $Payment;
    /**
     * The DownStreamProcesses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\DownstreamProcessListType
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
     * @param \traveltainment\SOAP17\StructType\BookingStatusType $bookingStatus
     * @param \traveltainment\SOAP17\StructType\BookingEngineTypeType $bookingEngineType
     * @param \traveltainment\SOAP17\StructType\CredentialsType $credentials
     * @param \traveltainment\SOAP17\StructType\CustomerType $customer
     * @param int $travellersCount
     * @param \traveltainment\SOAP17\StructType\TravellerList4ScType $travellerList
     * @param \traveltainment\SOAP17\StructType\TotalType $total
     * @param \traveltainment\SOAP17\StructType\PaymentType $payment
     * @param \traveltainment\SOAP17\StructType\DownstreamProcessListType $downStreamProcesses
     */
    public function __construct($bookingID = null, $creationDate = null, $bookingDate = null, \traveltainment\SOAP17\StructType\BookingStatusType $bookingStatus = null, \traveltainment\SOAP17\StructType\BookingEngineTypeType $bookingEngineType = null, \traveltainment\SOAP17\StructType\CredentialsType $credentials = null, \traveltainment\SOAP17\StructType\CustomerType $customer = null, $travellersCount = null, \traveltainment\SOAP17\StructType\TravellerList4ScType $travellerList = null, \traveltainment\SOAP17\StructType\TotalType $total = null, \traveltainment\SOAP17\StructType\PaymentType $payment = null, \traveltainment\SOAP17\StructType\DownstreamProcessListType $downStreamProcesses = null)
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
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
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
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
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
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
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
     * @return \traveltainment\SOAP17\StructType\BookingStatusType|null
     */
    public function getBookingStatus()
    {
        return $this->BookingStatus;
    }
    /**
     * Set BookingStatus value
     * @param \traveltainment\SOAP17\StructType\BookingStatusType $bookingStatus
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setBookingStatus(\traveltainment\SOAP17\StructType\BookingStatusType $bookingStatus = null)
    {
        $this->BookingStatus = $bookingStatus;
        return $this;
    }
    /**
     * Get BookingEngineType value
     * @return \traveltainment\SOAP17\StructType\BookingEngineTypeType|null
     */
    public function getBookingEngineType()
    {
        return $this->BookingEngineType;
    }
    /**
     * Set BookingEngineType value
     * @param \traveltainment\SOAP17\StructType\BookingEngineTypeType $bookingEngineType
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setBookingEngineType(\traveltainment\SOAP17\StructType\BookingEngineTypeType $bookingEngineType = null)
    {
        $this->BookingEngineType = $bookingEngineType;
        return $this;
    }
    /**
     * Get Credentials value
     * @return \traveltainment\SOAP17\StructType\CredentialsType|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \traveltainment\SOAP17\StructType\CredentialsType $credentials
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setCredentials(\traveltainment\SOAP17\StructType\CredentialsType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get Customer value
     * @return \traveltainment\SOAP17\StructType\CustomerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \traveltainment\SOAP17\StructType\CustomerType $customer
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setCustomer(\traveltainment\SOAP17\StructType\CustomerType $customer = null)
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
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
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
     * @return \traveltainment\SOAP17\StructType\TravellerList4ScType|null
     */
    public function getTravellerList()
    {
        return $this->TravellerList;
    }
    /**
     * Set TravellerList value
     * @param \traveltainment\SOAP17\StructType\TravellerList4ScType $travellerList
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setTravellerList(\traveltainment\SOAP17\StructType\TravellerList4ScType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get Total value
     * @return \traveltainment\SOAP17\StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \traveltainment\SOAP17\StructType\TotalType $total
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setTotal(\traveltainment\SOAP17\StructType\TotalType $total = null)
    {
        $this->Total = $total;
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
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setPayment(\traveltainment\SOAP17\StructType\PaymentType $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get DownStreamProcesses value
     * @return \traveltainment\SOAP17\StructType\DownstreamProcessListType|null
     */
    public function getDownStreamProcesses()
    {
        return $this->DownStreamProcesses;
    }
    /**
     * Set DownStreamProcesses value
     * @param \traveltainment\SOAP17\StructType\DownstreamProcessListType $downStreamProcesses
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
     */
    public function setDownStreamProcesses(\traveltainment\SOAP17\StructType\DownstreamProcessListType $downStreamProcesses = null)
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
     * @return \traveltainment\SOAP17\StructType\BookingScBaseType
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
