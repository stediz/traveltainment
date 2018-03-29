<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transfer4BookType StructType
 * @subpackage Structs
 */
class Transfer4BookType extends AbstractStructBase
{
    /**
     * The Pickup
     * @var \StructType\TransferEventType
     */
    public $Pickup;
    /**
     * The Dropoff
     * @var \StructType\TransferEventType
     */
    public $Dropoff;
    /**
     * Constructor method for Transfer4BookType
     * @uses Transfer4BookType::setPickup()
     * @uses Transfer4BookType::setDropoff()
     * @param \StructType\TransferEventType $pickup
     * @param \StructType\TransferEventType $dropoff
     */
    public function __construct(\StructType\TransferEventType $pickup = null, \StructType\TransferEventType $dropoff = null)
    {
        $this
            ->setPickup($pickup)
            ->setDropoff($dropoff);
    }
    /**
     * Get Pickup value
     * @return \StructType\TransferEventType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \StructType\TransferEventType $pickup
     * @return \StructType\Transfer4BookType
     */
    public function setPickup(\StructType\TransferEventType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Dropoff value
     * @return \StructType\TransferEventType|null
     */
    public function getDropoff()
    {
        return $this->Dropoff;
    }
    /**
     * Set Dropoff value
     * @param \StructType\TransferEventType $dropoff
     * @return \StructType\Transfer4BookType
     */
    public function setDropoff(\StructType\TransferEventType $dropoff = null)
    {
        $this->Dropoff = $dropoff;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transfer4BookType
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
