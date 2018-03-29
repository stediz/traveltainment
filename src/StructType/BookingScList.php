<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingScList StructType
 * @subpackage Structs
 */
class BookingScList extends AbstractStructBase
{
    /**
     * The Booking
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\BookingScType[]
     */
    public $Booking;
    /**
     * Constructor method for BookingScList
     * @uses BookingScList::setBooking()
     * @param \StructType\BookingScType[] $booking
     */
    public function __construct(array $booking = array())
    {
        $this
            ->setBooking($booking);
    }
    /**
     * Get Booking value
     * @return \StructType\BookingScType[]|null
     */
    public function getBooking()
    {
        return $this->Booking;
    }
    /**
     * Set Booking value
     * @throws \InvalidArgumentException
     * @param \StructType\BookingScType[] $booking
     * @return \StructType\BookingScList
     */
    public function setBooking(array $booking = array())
    {
        foreach ($booking as $bookingScListBookingItem) {
            // validation for constraint: itemType
            if (!$bookingScListBookingItem instanceof \StructType\BookingScType) {
                throw new \InvalidArgumentException(sprintf('The Booking property can only contain items of \StructType\BookingScType, "%s" given', is_object($bookingScListBookingItem) ? get_class($bookingScListBookingItem) : gettype($bookingScListBookingItem)), __LINE__);
            }
        }
        $this->Booking = $booking;
        return $this;
    }
    /**
     * Add item to Booking value
     * @throws \InvalidArgumentException
     * @param \StructType\BookingScType $item
     * @return \StructType\BookingScList
     */
    public function addToBooking(\StructType\BookingScType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BookingScType) {
            throw new \InvalidArgumentException(sprintf('The Booking property can only contain items of \StructType\BookingScType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Booking[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookingScList
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
