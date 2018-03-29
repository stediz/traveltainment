<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_UpdateAddonResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_UpdateAddonResponse
 * @subpackage Structs
 */
class Booking_UpdateAddonResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AddonUpdateRS
     */
    public $return;
    /**
     * Constructor method for Booking_UpdateAddonResponse
     * @uses Booking_UpdateAddonResponse::setReturn()
     * @param \StructType\AddonUpdateRS $return
     */
    public function __construct(\StructType\AddonUpdateRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\AddonUpdateRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\AddonUpdateRS $return
     * @return \StructType\Booking_UpdateAddonResponse
     */
    public function setReturn(\StructType\AddonUpdateRS $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Booking_UpdateAddonResponse
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
