<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomAdditionListType StructType
 * @subpackage Structs
 */
class RoomAdditionListType extends AbstractStructBase
{
    /**
     * The RoomAddition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $RoomAddition;
    /**
     * Constructor method for RoomAdditionListType
     * @uses RoomAdditionListType::setRoomAddition()
     * @param string[] $roomAddition
     */
    public function __construct(array $roomAddition = array())
    {
        $this
            ->setRoomAddition($roomAddition);
    }
    /**
     * Get RoomAddition value
     * @return string[]|null
     */
    public function getRoomAddition()
    {
        return $this->RoomAddition;
    }
    /**
     * Set RoomAddition value
     * @uses \traveltainment\SOAP17\EnumType\RoomAddition::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\RoomAddition::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $roomAddition
     * @return \traveltainment\SOAP17\StructType\RoomAdditionListType
     */
    public function setRoomAddition(array $roomAddition = array())
    {
        $invalidValues = array();
        foreach ($roomAddition as $roomAdditionListTypeRoomAdditionItem) {
            if (!\traveltainment\SOAP17\EnumType\RoomAddition::valueIsValid($roomAdditionListTypeRoomAdditionItem)) {
                $invalidValues[] = var_export($roomAdditionListTypeRoomAdditionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\RoomAddition::getValidValues())), __LINE__);
        }
        $this->RoomAddition = $roomAddition;
        return $this;
    }
    /**
     * Add item to RoomAddition value
     * @uses \traveltainment\SOAP17\EnumType\RoomAddition::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\RoomAddition::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\RoomAdditionListType
     */
    public function addToRoomAddition($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\RoomAddition::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\RoomAddition::getValidValues())), __LINE__);
        }
        $this->RoomAddition[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RoomAdditionListType
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
