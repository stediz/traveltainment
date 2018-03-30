<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleRoomInformationListType StructType
 * @subpackage Structs
 */
class SimpleRoomInformationListType extends AbstractStructBase
{
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Room;
    /**
     * Constructor method for SimpleRoomInformationListType
     * @uses SimpleRoomInformationListType::setRoom()
     * @param string[] $room
     */
    public function __construct(array $room = array())
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return string[]|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @uses \traveltainment\SOAP17\EnumType\Room::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Room::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $room
     * @return \traveltainment\SOAP17\StructType\SimpleRoomInformationListType
     */
    public function setRoom(array $room = array())
    {
        $invalidValues = array();
        foreach ($room as $simpleRoomInformationListTypeRoomItem) {
            if (!\traveltainment\SOAP17\EnumType\Room::valueIsValid($simpleRoomInformationListTypeRoomItem)) {
                $invalidValues[] = var_export($simpleRoomInformationListTypeRoomItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\Room::getValidValues())), __LINE__);
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Add item to Room value
     * @uses \traveltainment\SOAP17\EnumType\Room::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Room::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\SimpleRoomInformationListType
     */
    public function addToRoom($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Room::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\Room::getValidValues())), __LINE__);
        }
        $this->Room[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SimpleRoomInformationListType
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
