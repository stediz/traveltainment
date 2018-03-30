<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestsType StructType
 * @subpackage Structs
 */
class BookRequestsType extends AbstractStructBase
{
    /**
     * The BookTravelRequest
     * @var \traveltainment\SOAP17\StructType\BookTravelRequestType
     */
    public $BookTravelRequest;
    /**
     * The BookCarRentalRequest
     * @var \traveltainment\SOAP17\StructType\BookCarRentalRequestType
     */
    public $BookCarRentalRequest;
    /**
     * The BookInsuranceRequest
     * @var \traveltainment\SOAP17\StructType\BookInsuranceRequestType
     */
    public $BookInsuranceRequest;
    /**
     * The BookTransferRequest
     * @var \traveltainment\SOAP17\StructType\BookTransferRequestType
     */
    public $BookTransferRequest;
    /**
     * The BookParkingRequest
     * @var \traveltainment\SOAP17\StructType\BookParkingRequestType
     */
    public $BookParkingRequest;
    /**
     * Constructor method for BookRequestsType
     * @uses BookRequestsType::setBookTravelRequest()
     * @uses BookRequestsType::setBookCarRentalRequest()
     * @uses BookRequestsType::setBookInsuranceRequest()
     * @uses BookRequestsType::setBookTransferRequest()
     * @uses BookRequestsType::setBookParkingRequest()
     * @param \traveltainment\SOAP17\StructType\BookTravelRequestType $bookTravelRequest
     * @param \traveltainment\SOAP17\StructType\BookCarRentalRequestType $bookCarRentalRequest
     * @param \traveltainment\SOAP17\StructType\BookInsuranceRequestType $bookInsuranceRequest
     * @param \traveltainment\SOAP17\StructType\BookTransferRequestType $bookTransferRequest
     * @param \traveltainment\SOAP17\StructType\BookParkingRequestType $bookParkingRequest
     */
    public function __construct(\traveltainment\SOAP17\StructType\BookTravelRequestType $bookTravelRequest = null, \traveltainment\SOAP17\StructType\BookCarRentalRequestType $bookCarRentalRequest = null, \traveltainment\SOAP17\StructType\BookInsuranceRequestType $bookInsuranceRequest = null, \traveltainment\SOAP17\StructType\BookTransferRequestType $bookTransferRequest = null, \traveltainment\SOAP17\StructType\BookParkingRequestType $bookParkingRequest = null)
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
     * @return \traveltainment\SOAP17\StructType\BookTravelRequestType|null
     */
    public function getBookTravelRequest()
    {
        return $this->BookTravelRequest;
    }
    /**
     * Set BookTravelRequest value
     * @param \traveltainment\SOAP17\StructType\BookTravelRequestType $bookTravelRequest
     * @return \traveltainment\SOAP17\StructType\BookRequestsType
     */
    public function setBookTravelRequest(\traveltainment\SOAP17\StructType\BookTravelRequestType $bookTravelRequest = null)
    {
        $this->BookTravelRequest = $bookTravelRequest;
        return $this;
    }
    /**
     * Get BookCarRentalRequest value
     * @return \traveltainment\SOAP17\StructType\BookCarRentalRequestType|null
     */
    public function getBookCarRentalRequest()
    {
        return $this->BookCarRentalRequest;
    }
    /**
     * Set BookCarRentalRequest value
     * @param \traveltainment\SOAP17\StructType\BookCarRentalRequestType $bookCarRentalRequest
     * @return \traveltainment\SOAP17\StructType\BookRequestsType
     */
    public function setBookCarRentalRequest(\traveltainment\SOAP17\StructType\BookCarRentalRequestType $bookCarRentalRequest = null)
    {
        $this->BookCarRentalRequest = $bookCarRentalRequest;
        return $this;
    }
    /**
     * Get BookInsuranceRequest value
     * @return \traveltainment\SOAP17\StructType\BookInsuranceRequestType|null
     */
    public function getBookInsuranceRequest()
    {
        return $this->BookInsuranceRequest;
    }
    /**
     * Set BookInsuranceRequest value
     * @param \traveltainment\SOAP17\StructType\BookInsuranceRequestType $bookInsuranceRequest
     * @return \traveltainment\SOAP17\StructType\BookRequestsType
     */
    public function setBookInsuranceRequest(\traveltainment\SOAP17\StructType\BookInsuranceRequestType $bookInsuranceRequest = null)
    {
        $this->BookInsuranceRequest = $bookInsuranceRequest;
        return $this;
    }
    /**
     * Get BookTransferRequest value
     * @return \traveltainment\SOAP17\StructType\BookTransferRequestType|null
     */
    public function getBookTransferRequest()
    {
        return $this->BookTransferRequest;
    }
    /**
     * Set BookTransferRequest value
     * @param \traveltainment\SOAP17\StructType\BookTransferRequestType $bookTransferRequest
     * @return \traveltainment\SOAP17\StructType\BookRequestsType
     */
    public function setBookTransferRequest(\traveltainment\SOAP17\StructType\BookTransferRequestType $bookTransferRequest = null)
    {
        $this->BookTransferRequest = $bookTransferRequest;
        return $this;
    }
    /**
     * Get BookParkingRequest value
     * @return \traveltainment\SOAP17\StructType\BookParkingRequestType|null
     */
    public function getBookParkingRequest()
    {
        return $this->BookParkingRequest;
    }
    /**
     * Set BookParkingRequest value
     * @param \traveltainment\SOAP17\StructType\BookParkingRequestType $bookParkingRequest
     * @return \traveltainment\SOAP17\StructType\BookRequestsType
     */
    public function setBookParkingRequest(\traveltainment\SOAP17\StructType\BookParkingRequestType $bookParkingRequest = null)
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
     * @return \traveltainment\SOAP17\StructType\BookRequestsType
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
