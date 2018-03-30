<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transfer4BookType StructType
 * @subpackage Structs
 */
class Transfer4BookType extends AbstractStructBase
{
    /**
     * The Pickup
     * @var \traveltainment\SOAP17\StructType\TransferEventType
     */
    public $Pickup;
    /**
     * The Dropoff
     * @var \traveltainment\SOAP17\StructType\TransferEventType
     */
    public $Dropoff;
    /**
     * Constructor method for Transfer4BookType
     * @uses Transfer4BookType::setPickup()
     * @uses Transfer4BookType::setDropoff()
     * @param \traveltainment\SOAP17\StructType\TransferEventType $pickup
     * @param \traveltainment\SOAP17\StructType\TransferEventType $dropoff
     */
    public function __construct(\traveltainment\SOAP17\StructType\TransferEventType $pickup = null, \traveltainment\SOAP17\StructType\TransferEventType $dropoff = null)
    {
        $this
            ->setPickup($pickup)
            ->setDropoff($dropoff);
    }
    /**
     * Get Pickup value
     * @return \traveltainment\SOAP17\StructType\TransferEventType|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \traveltainment\SOAP17\StructType\TransferEventType $pickup
     * @return \traveltainment\SOAP17\StructType\Transfer4BookType
     */
    public function setPickup(\traveltainment\SOAP17\StructType\TransferEventType $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get Dropoff value
     * @return \traveltainment\SOAP17\StructType\TransferEventType|null
     */
    public function getDropoff()
    {
        return $this->Dropoff;
    }
    /**
     * Set Dropoff value
     * @param \traveltainment\SOAP17\StructType\TransferEventType $dropoff
     * @return \traveltainment\SOAP17\StructType\Transfer4BookType
     */
    public function setDropoff(\traveltainment\SOAP17\StructType\TransferEventType $dropoff = null)
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
     * @return \traveltainment\SOAP17\StructType\Transfer4BookType
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
