<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableBookingTypesListType StructType
 * @subpackage Structs
 */
class AvailableBookingTypesListType extends AbstractStructBase
{
    /**
     * The BookingType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $BookingType;
    /**
     * Constructor method for AvailableBookingTypesListType
     * @uses AvailableBookingTypesListType::setBookingType()
     * @param string[] $bookingType
     */
    public function __construct(array $bookingType = array())
    {
        $this
            ->setBookingType($bookingType);
    }
    /**
     * Get BookingType value
     * @return string[]|null
     */
    public function getBookingType()
    {
        return $this->BookingType;
    }
    /**
     * Set BookingType value
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $bookingType
     * @return \traveltainment\SOAP17\StructType\AvailableBookingTypesListType
     */
    public function setBookingType(array $bookingType = array())
    {
        $invalidValues = array();
        foreach ($bookingType as $availableBookingTypesListTypeBookingTypeItem) {
            if (!\traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid($availableBookingTypesListTypeBookingTypeItem)) {
                $invalidValues[] = var_export($availableBookingTypesListTypeBookingTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues())), __LINE__);
        }
        $this->BookingType = $bookingType;
        return $this;
    }
    /**
     * Add item to BookingType value
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\AvailableBookingTypesListType
     */
    public function addToBookingType($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues())), __LINE__);
        }
        $this->BookingType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AvailableBookingTypesListType
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
