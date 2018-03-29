<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleBookingType StructType
 * @subpackage Structs
 */
class SimpleBookingType extends AbstractStructBase
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
     * The Credentials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CredentialsType
     */
    public $Credentials;
    /**
     * The BookingEngineType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingEngineType;
    /**
     * The CustomerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PersonNameType
     */
    public $CustomerName;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TotalType
     */
    public $Total;
    /**
     * The TravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DateSpanType
     */
    public $TravelDateSpan;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TourOperatorType
     */
    public $TourOperator;
    /**
     * The ProcessNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProcessNumber;
    /**
     * The BookingStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\BookingStatusType
     */
    public $BookingStatus;
    /**
     * Constructor method for SimpleBookingType
     * @uses SimpleBookingType::setBookingID()
     * @uses SimpleBookingType::setCreationDate()
     * @uses SimpleBookingType::setBookingDate()
     * @uses SimpleBookingType::setCredentials()
     * @uses SimpleBookingType::setBookingEngineType()
     * @uses SimpleBookingType::setCustomerName()
     * @uses SimpleBookingType::setTotal()
     * @uses SimpleBookingType::setTravelDateSpan()
     * @uses SimpleBookingType::setTourOperator()
     * @uses SimpleBookingType::setProcessNumber()
     * @uses SimpleBookingType::setBookingStatus()
     * @param string $bookingID
     * @param string $creationDate
     * @param string $bookingDate
     * @param \StructType\CredentialsType $credentials
     * @param string $bookingEngineType
     * @param \StructType\PersonNameType $customerName
     * @param \StructType\TotalType $total
     * @param \StructType\DateSpanType $travelDateSpan
     * @param \StructType\TourOperatorType $tourOperator
     * @param string $processNumber
     * @param \StructType\BookingStatusType $bookingStatus
     */
    public function __construct($bookingID = null, $creationDate = null, $bookingDate = null, \StructType\CredentialsType $credentials = null, $bookingEngineType = null, \StructType\PersonNameType $customerName = null, \StructType\TotalType $total = null, \StructType\DateSpanType $travelDateSpan = null, \StructType\TourOperatorType $tourOperator = null, $processNumber = null, \StructType\BookingStatusType $bookingStatus = null)
    {
        $this
            ->setBookingID($bookingID)
            ->setCreationDate($creationDate)
            ->setBookingDate($bookingDate)
            ->setCredentials($credentials)
            ->setBookingEngineType($bookingEngineType)
            ->setCustomerName($customerName)
            ->setTotal($total)
            ->setTravelDateSpan($travelDateSpan)
            ->setTourOperator($tourOperator)
            ->setProcessNumber($processNumber)
            ->setBookingStatus($bookingStatus);
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
     * @return \StructType\SimpleBookingType
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
     * @return \StructType\SimpleBookingType
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
     * @return \StructType\SimpleBookingType
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
     * @return \StructType\SimpleBookingType
     */
    public function setCredentials(\StructType\CredentialsType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get BookingEngineType value
     * @return string|null
     */
    public function getBookingEngineType()
    {
        return $this->BookingEngineType;
    }
    /**
     * Set BookingEngineType value
     * @uses \EnumType\OfferDefinitionType::valueIsValid()
     * @uses \EnumType\OfferDefinitionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bookingEngineType
     * @return \StructType\SimpleBookingType
     */
    public function setBookingEngineType($bookingEngineType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OfferDefinitionType::valueIsValid($bookingEngineType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bookingEngineType, implode(', ', \EnumType\OfferDefinitionType::getValidValues())), __LINE__);
        }
        $this->BookingEngineType = $bookingEngineType;
        return $this;
    }
    /**
     * Get CustomerName value
     * @return \StructType\PersonNameType|null
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }
    /**
     * Set CustomerName value
     * @param \StructType\PersonNameType $customerName
     * @return \StructType\SimpleBookingType
     */
    public function setCustomerName(\StructType\PersonNameType $customerName = null)
    {
        $this->CustomerName = $customerName;
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
     * @return \StructType\SimpleBookingType
     */
    public function setTotal(\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get TravelDateSpan value
     * @return \StructType\DateSpanType|null
     */
    public function getTravelDateSpan()
    {
        return $this->TravelDateSpan;
    }
    /**
     * Set TravelDateSpan value
     * @param \StructType\DateSpanType $travelDateSpan
     * @return \StructType\SimpleBookingType
     */
    public function setTravelDateSpan(\StructType\DateSpanType $travelDateSpan = null)
    {
        $this->TravelDateSpan = $travelDateSpan;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \StructType\TourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \StructType\TourOperatorType $tourOperator
     * @return \StructType\SimpleBookingType
     */
    public function setTourOperator(\StructType\TourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get ProcessNumber value
     * @return string|null
     */
    public function getProcessNumber()
    {
        return $this->ProcessNumber;
    }
    /**
     * Set ProcessNumber value
     * @param string $processNumber
     * @return \StructType\SimpleBookingType
     */
    public function setProcessNumber($processNumber = null)
    {
        // validation for constraint: string
        if (!is_null($processNumber) && !is_string($processNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processNumber)), __LINE__);
        }
        $this->ProcessNumber = $processNumber;
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
     * @return \StructType\SimpleBookingType
     */
    public function setBookingStatus(\StructType\BookingStatusType $bookingStatus = null)
    {
        $this->BookingStatus = $bookingStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleBookingType
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
