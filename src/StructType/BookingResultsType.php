<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingResultsType StructType
 * @subpackage Structs
 */
class BookingResultsType extends AbstractStructBase
{
    /**
     * The BookingResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \StructType\BookingResultType[]
     */
    public $BookingResult;
    /**
     * Constructor method for BookingResultsType
     * @uses BookingResultsType::setBookingResult()
     * @param \StructType\BookingResultType[] $bookingResult
     */
    public function __construct(array $bookingResult = array())
    {
        $this
            ->setBookingResult($bookingResult);
    }
    /**
     * Get BookingResult value
     * @return \StructType\BookingResultType[]|null
     */
    public function getBookingResult()
    {
        return $this->BookingResult;
    }
    /**
     * Set BookingResult value
     * @throws \InvalidArgumentException
     * @param \StructType\BookingResultType[] $bookingResult
     * @return \StructType\BookingResultsType
     */
    public function setBookingResult(array $bookingResult = array())
    {
        foreach ($bookingResult as $bookingResultsTypeBookingResultItem) {
            // validation for constraint: itemType
            if (!$bookingResultsTypeBookingResultItem instanceof \StructType\BookingResultType) {
                throw new \InvalidArgumentException(sprintf('The BookingResult property can only contain items of \StructType\BookingResultType, "%s" given', is_object($bookingResultsTypeBookingResultItem) ? get_class($bookingResultsTypeBookingResultItem) : gettype($bookingResultsTypeBookingResultItem)), __LINE__);
            }
        }
        $this->BookingResult = $bookingResult;
        return $this;
    }
    /**
     * Add item to BookingResult value
     * @throws \InvalidArgumentException
     * @param \StructType\BookingResultType $item
     * @return \StructType\BookingResultsType
     */
    public function addToBookingResult(\StructType\BookingResultType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BookingResultType) {
            throw new \InvalidArgumentException(sprintf('The BookingResult property can only contain items of \StructType\BookingResultType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingResult[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookingResultsType
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
