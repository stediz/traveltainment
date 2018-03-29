<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailedRoomType StructType
 * @subpackage Structs
 */
class DetailedRoomType extends AbstractStructBase
{
    /**
     * The Room
     * @var string
     */
    public $Room;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The RoomAdditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RoomAdditionList
     */
    public $RoomAdditions;
    /**
     * Constructor method for DetailedRoomType
     * @uses DetailedRoomType::setRoom()
     * @uses DetailedRoomType::setName()
     * @uses DetailedRoomType::setCode()
     * @uses DetailedRoomType::setRoomAdditions()
     * @param string $room
     * @param string $name
     * @param string $code
     * @param \StructType\RoomAdditionList $roomAdditions
     */
    public function __construct($room = null, $name = null, $code = null, \StructType\RoomAdditionList $roomAdditions = null)
    {
        $this
            ->setRoom($room)
            ->setName($name)
            ->setCode($code)
            ->setRoomAdditions($roomAdditions);
    }
    /**
     * Get Room value
     * @return string|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @uses \EnumType\Room::valueIsValid()
     * @uses \EnumType\Room::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $room
     * @return \StructType\DetailedRoomType
     */
    public function setRoom($room = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Room::valueIsValid($room)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $room, implode(', ', \EnumType\Room::getValidValues())), __LINE__);
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\DetailedRoomType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\DetailedRoomType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get RoomAdditions value
     * @return \StructType\RoomAdditionList|null
     */
    public function getRoomAdditions()
    {
        return $this->RoomAdditions;
    }
    /**
     * Set RoomAdditions value
     * @param \StructType\RoomAdditionList $roomAdditions
     * @return \StructType\DetailedRoomType
     */
    public function setRoomAdditions(\StructType\RoomAdditionList $roomAdditions = null)
    {
        $this->RoomAdditions = $roomAdditions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DetailedRoomType
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
