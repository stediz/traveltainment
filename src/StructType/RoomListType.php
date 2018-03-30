<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomListType StructType
 * @subpackage Structs
 */
class RoomListType extends AbstractStructBase
{
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Room;
    /**
     * The RoomAdditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\RoomAdditionListType
     */
    public $RoomAdditions;
    /**
     * The Weightage
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxInclusive: 100
     * - minInclusive: 0
     * @var int
     */
    public $Weightage;
    /**
     * Constructor method for RoomListType
     * @uses RoomListType::setRoom()
     * @uses RoomListType::setRoomAdditions()
     * @uses RoomListType::setWeightage()
     * @param string[] $room
     * @param \traveltainment\SOAP17\StructType\RoomAdditionListType $roomAdditions
     * @param int $weightage
     */
    public function __construct(array $room = array(), \traveltainment\SOAP17\StructType\RoomAdditionListType $roomAdditions = null, $weightage = '0')
    {
        $this
            ->setRoom($room)
            ->setRoomAdditions($roomAdditions)
            ->setWeightage($weightage);
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
     * @return \traveltainment\SOAP17\StructType\RoomListType
     */
    public function setRoom(array $room = array())
    {
        $invalidValues = array();
        foreach ($room as $roomListTypeRoomItem) {
            if (!\traveltainment\SOAP17\EnumType\Room::valueIsValid($roomListTypeRoomItem)) {
                $invalidValues[] = var_export($roomListTypeRoomItem, true);
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
     * @return \traveltainment\SOAP17\StructType\RoomListType
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
     * Get RoomAdditions value
     * @return \traveltainment\SOAP17\StructType\RoomAdditionListType|null
     */
    public function getRoomAdditions()
    {
        return $this->RoomAdditions;
    }
    /**
     * Set RoomAdditions value
     * @param \traveltainment\SOAP17\StructType\RoomAdditionListType $roomAdditions
     * @return \traveltainment\SOAP17\StructType\RoomListType
     */
    public function setRoomAdditions(\traveltainment\SOAP17\StructType\RoomAdditionListType $roomAdditions = null)
    {
        $this->RoomAdditions = $roomAdditions;
        return $this;
    }
    /**
     * Get Weightage value
     * @return int|null
     */
    public function getWeightage()
    {
        return $this->Weightage;
    }
    /**
     * Set Weightage value
     * @param int $weightage
     * @return \traveltainment\SOAP17\StructType\RoomListType
     */
    public function setWeightage($weightage = '0')
    {
        // validation for constraint: maxInclusive
        if ($weightage > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 100, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($weightage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($weightage) && !is_numeric($weightage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weightage)), __LINE__);
        }
        $this->Weightage = $weightage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RoomListType
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
