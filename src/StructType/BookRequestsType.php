<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestsType StructType
 * @subpackage Structs
 */
class BookRequestsType extends AbstractStructBase
{
    /**
     * The BookTravelRequest
     * @var \StructType\BookTravelRequestType
     */
    public $BookTravelRequest;
    /**
     * The BookCarRentalRequest
     * @var \StructType\BookCarRentalRequestType
     */
    public $BookCarRentalRequest;
    /**
     * The BookInsuranceRequest
     * @var \StructType\BookInsuranceRequestType
     */
    public $BookInsuranceRequest;
    /**
     * The BookTransferRequest
     * @var \StructType\BookTransferRequestType
     */
    public $BookTransferRequest;
    /**
     * The BookParkingRequest
     * @var \StructType\BookParkingRequestType
     */
    public $BookParkingRequest;
    /**
     * Constructor method for BookRequestsType
     * @uses BookRequestsType::setBookTravelRequest()
     * @uses BookRequestsType::setBookCarRentalRequest()
     * @uses BookRequestsType::setBookInsuranceRequest()
     * @uses BookRequestsType::setBookTransferRequest()
     * @uses BookRequestsType::setBookParkingRequest()
     * @param \StructType\BookTravelRequestType $bookTravelRequest
     * @param \StructType\BookCarRentalRequestType $bookCarRentalRequest
     * @param \StructType\BookInsuranceRequestType $bookInsuranceRequest
     * @param \StructType\BookTransferRequestType $bookTransferRequest
     * @param \StructType\BookParkingRequestType $bookParkingRequest
     */
    public function __construct(\StructType\BookTravelRequestType $bookTravelRequest = null, \StructType\BookCarRentalRequestType $bookCarRentalRequest = null, \StructType\BookInsuranceRequestType $bookInsuranceRequest = null, \StructType\BookTransferRequestType $bookTransferRequest = null, \StructType\BookParkingRequestType $bookParkingRequest = null)
    {
        $this
            ->setBookTravelRequest($bookTravelRequest)
            ->setBookCarRentalRequest($bookCarRentalRequest)
            ->setBookInsuranceRequest($bookInsuranceRequest)
            ->setBookTransferRequest($bookTransferRequest)
            ->setBookParkingRequest($bookParkingRequest);
    }
    /**
     * Get BookTravelRequest value
     * @return \StructType\BookTravelRequestType|null
     */
    public function getBookTravelRequest()
    {
        return $this->BookTravelRequest;
    }
    /**
     * Set BookTravelRequest value
     * @param \StructType\BookTravelRequestType $bookTravelRequest
     * @return \StructType\BookRequestsType
     */
    public function setBookTravelRequest(\StructType\BookTravelRequestType $bookTravelRequest = null)
    {
        $this->BookTravelRequest = $bookTravelRequest;
        return $this;
    }
    /**
     * Get BookCarRentalRequest value
     * @return \StructType\BookCarRentalRequestType|null
     */
    public function getBookCarRentalRequest()
    {
        return $this->BookCarRentalRequest;
    }
    /**
     * Set BookCarRentalRequest value
     * @param \StructType\BookCarRentalRequestType $bookCarRentalRequest
     * @return \StructType\BookRequestsType
     */
    public function setBookCarRentalRequest(\StructType\BookCarRentalRequestType $bookCarRentalRequest = null)
    {
        $this->BookCarRentalRequest = $bookCarRentalRequest;
        return $this;
    }
    /**
     * Get BookInsuranceRequest value
     * @return \StructType\BookInsuranceRequestType|null
     */
    public function getBookInsuranceRequest()
    {
        return $this->BookInsuranceRequest;
    }
    /**
     * Set BookInsuranceRequest value
     * @param \StructType\BookInsuranceRequestType $bookInsuranceRequest
     * @return \StructType\BookRequestsType
     */
    public function setBookInsuranceRequest(\StructType\BookInsuranceRequestType $bookInsuranceRequest = null)
    {
        $this->BookInsuranceRequest = $bookInsuranceRequest;
        return $this;
    }
    /**
     * Get BookTransferRequest value
     * @return \StructType\BookTransferRequestType|null
     */
    public function getBookTransferRequest()
    {
        return $this->BookTransferRequest;
    }
    /**
     * Set BookTransferRequest value
     * @param \StructType\BookTransferRequestType $bookTransferRequest
     * @return \StructType\BookRequestsType
     */
    public function setBookTransferRequest(\StructType\BookTransferRequestType $bookTransferRequest = null)
    {
        $this->BookTransferRequest = $bookTransferRequest;
        return $this;
    }
    /**
     * Get BookParkingRequest value
     * @return \StructType\BookParkingRequestType|null
     */
    public function getBookParkingRequest()
    {
        return $this->BookParkingRequest;
    }
    /**
     * Set BookParkingRequest value
     * @param \StructType\BookParkingRequestType $bookParkingRequest
     * @return \StructType\BookRequestsType
     */
    public function setBookParkingRequest(\StructType\BookParkingRequestType $bookParkingRequest = null)
    {
        $this->BookParkingRequest = $bookParkingRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookRequestsType
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
