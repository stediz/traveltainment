<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_Package_AvailabilityAndPriceCheckResponse
 * StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_Package_AvailabilityAndPriceCheckResponse
 * @subpackage Structs
 */
class Booking_Package_AvailabilityAndPriceCheckResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AvailabilityAndPriceCheckRS
     */
    public $return;
    /**
     * Constructor method for Booking_Package_AvailabilityAndPriceCheckResponse
     * @uses Booking_Package_AvailabilityAndPriceCheckResponse::setReturn()
     * @param \StructType\AvailabilityAndPriceCheckRS $return
     */
    public function __construct(\StructType\AvailabilityAndPriceCheckRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\AvailabilityAndPriceCheckRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\AvailabilityAndPriceCheckRS $return
     * @return \StructType\Booking_Package_AvailabilityAndPriceCheckResponse
     */
    public function setReturn(\StructType\AvailabilityAndPriceCheckRS $return = null)
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
     * @return \StructType\Booking_Package_AvailabilityAndPriceCheckResponse
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
