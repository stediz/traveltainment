<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingResultType StructType
 * @subpackage Structs
 */
class BookingResultType extends AbstractStructBase
{
    /**
     * The BookRequestRef
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BookRequestRef;
    /**
     * The BookingID
     * @var string
     */
    public $BookingID;
    /**
     * The ReservationID
     * @var string
     */
    public $ReservationID;
    /**
     * The BookingCategory
     * @var string
     */
    public $BookingCategory;
    /**
     * The Status
     * @var \StructType\StatusType
     */
    public $Status;
    /**
     * Constructor method for BookingResultType
     * @uses BookingResultType::setBookRequestRef()
     * @uses BookingResultType::setBookingID()
     * @uses BookingResultType::setReservationID()
     * @uses BookingResultType::setBookingCategory()
     * @uses BookingResultType::setStatus()
     * @param string $bookRequestRef
     * @param string $bookingID
     * @param string $reservationID
     * @param string $bookingCategory
     * @param \StructType\StatusType $status
     */
    public function __construct($bookRequestRef = null, $bookingID = null, $reservationID = null, $bookingCategory = null, \StructType\StatusType $status = null)
    {
        $this
            ->setBookRequestRef($bookRequestRef)
            ->setBookingID($bookingID)
            ->setReservationID($reservationID)
            ->setBookingCategory($bookingCategory)
            ->setStatus($status);
    }
    /**
     * Get BookRequestRef value
     * @return string
     */
    public function getBookRequestRef()
    {
        return $this->BookRequestRef;
    }
    /**
     * Set BookRequestRef value
     * @param string $bookRequestRef
     * @return \StructType\BookingResultType
     */
    public function setBookRequestRef($bookRequestRef = null)
    {
        // validation for constraint: string
        if (!is_null($bookRequestRef) && !is_string($bookRequestRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookRequestRef)), __LINE__);
        }
        $this->BookRequestRef = $bookRequestRef;
        return $this;
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
     * @return \StructType\BookingResultType
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
     * Get ReservationID value
     * @return string|null
     */
    public function getReservationID()
    {
        return $this->ReservationID;
    }
    /**
     * Set ReservationID value
     * @param string $reservationID
     * @return \StructType\BookingResultType
     */
    public function setReservationID($reservationID = null)
    {
        // validation for constraint: string
        if (!is_null($reservationID) && !is_string($reservationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationID)), __LINE__);
        }
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Get BookingCategory value
     * @return string|null
     */
    public function getBookingCategory()
    {
        return $this->BookingCategory;
    }
    /**
     * Set BookingCategory value
     * @uses \EnumType\BookingCategoryEnum::valueIsValid()
     * @uses \EnumType\BookingCategoryEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bookingCategory
     * @return \StructType\BookingResultType
     */
    public function setBookingCategory($bookingCategory = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BookingCategoryEnum::valueIsValid($bookingCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bookingCategory, implode(', ', \EnumType\BookingCategoryEnum::getValidValues())), __LINE__);
        }
        $this->BookingCategory = $bookingCategory;
        return $this;
    }
    /**
     * Get Status value
     * @return \StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \StructType\StatusType $status
     * @return \StructType\BookingResultType
     */
    public function setStatus(\StructType\StatusType $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookingResultType
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
