<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transfer4SearchType StructType
 * @subpackage Structs
 */
class Transfer4SearchType extends AbstractStructBase
{
    /**
     * The TransferMinutes
     * @var int
     */
    public $TransferMinutes;
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
     * Constructor method for Transfer4SearchType
     * @uses Transfer4SearchType::setTransferMinutes()
     * @uses Transfer4SearchType::setPickup()
     * @uses Transfer4SearchType::setDropoff()
     * @param int $transferMinutes
     * @param \StructType\TransferEventType $pickup
     * @param \StructType\TransferEventType $dropoff
     */
    public function __construct($transferMinutes = null, \StructType\TransferEventType $pickup = null, \StructType\TransferEventType $dropoff = null)
    {
        $this
            ->setTransferMinutes($transferMinutes)
            ->setPickup($pickup)
            ->setDropoff($dropoff);
    }
    /**
     * Get TransferMinutes value
     * @return int|null
     */
    public function getTransferMinutes()
    {
        return $this->TransferMinutes;
    }
    /**
     * Set TransferMinutes value
     * @param int $transferMinutes
     * @return \StructType\Transfer4SearchType
     */
    public function setTransferMinutes($transferMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($transferMinutes) && !is_numeric($transferMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transferMinutes)), __LINE__);
        }
        $this->TransferMinutes = $transferMinutes;
        return $this;
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
     * @return \StructType\Transfer4SearchType
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
     * @return \StructType\Transfer4SearchType
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
     * @return \StructType\Transfer4SearchType
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
