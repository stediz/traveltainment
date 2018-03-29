<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleBookingList StructType
 * @subpackage Structs
 */
class SimpleBookingList extends AbstractStructBase
{
    /**
     * The Booking
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\SimpleBookingType[]
     */
    public $Booking;
    /**
     * Constructor method for SimpleBookingList
     * @uses SimpleBookingList::setBooking()
     * @param \StructType\SimpleBookingType[] $booking
     */
    public function __construct(array $booking = array())
    {
        $this
            ->setBooking($booking);
    }
    /**
     * Get Booking value
     * @return \StructType\SimpleBookingType[]|null
     */
    public function getBooking()
    {
        return $this->Booking;
    }
    /**
     * Set Booking value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleBookingType[] $booking
     * @return \StructType\SimpleBookingList
     */
    public function setBooking(array $booking = array())
    {
        foreach ($booking as $simpleBookingListBookingItem) {
            // validation for constraint: itemType
            if (!$simpleBookingListBookingItem instanceof \StructType\SimpleBookingType) {
                throw new \InvalidArgumentException(sprintf('The Booking property can only contain items of \StructType\SimpleBookingType, "%s" given', is_object($simpleBookingListBookingItem) ? get_class($simpleBookingListBookingItem) : gettype($simpleBookingListBookingItem)), __LINE__);
            }
        }
        $this->Booking = $booking;
        return $this;
    }
    /**
     * Add item to Booking value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleBookingType $item
     * @return \StructType\SimpleBookingList
     */
    public function addToBooking(\StructType\SimpleBookingType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SimpleBookingType) {
            throw new \InvalidArgumentException(sprintf('The Booking property can only contain items of \StructType\SimpleBookingType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\SimpleBookingList
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
