<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewRoomAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewRoomAttributesType extends AbstractStructBase
{
    /**
     * The RoomAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $RoomAttribute;
    /**
     * Constructor method for HotelReviewRoomAttributesType
     * @uses HotelReviewRoomAttributesType::setRoomAttribute()
     * @param string[] $roomAttribute
     */
    public function __construct(array $roomAttribute = array())
    {
        $this
            ->setRoomAttribute($roomAttribute);
    }
    /**
     * Get RoomAttribute value
     * @return string[]|null
     */
    public function getRoomAttribute()
    {
        return $this->RoomAttribute;
    }
    /**
     * Set RoomAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $roomAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType
     */
    public function setRoomAttribute(array $roomAttribute = array())
    {
        $invalidValues = array();
        foreach ($roomAttribute as $hotelReviewRoomAttributesTypeRoomAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::valueIsValid($hotelReviewRoomAttributesTypeRoomAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewRoomAttributesTypeRoomAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::getValidValues())), __LINE__);
        }
        $this->RoomAttribute = $roomAttribute;
        return $this;
    }
    /**
     * Add item to RoomAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType
     */
    public function addToRoomAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewRoomAttribute::getValidValues())), __LINE__);
        }
        $this->RoomAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewRoomAttributesType
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
