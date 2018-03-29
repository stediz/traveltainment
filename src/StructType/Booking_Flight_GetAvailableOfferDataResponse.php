<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_Flight_GetAvailableOfferDataResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_Flight_GetAvailableOfferDataResponse
 * @subpackage Structs
 */
class Booking_Flight_GetAvailableOfferDataResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetAvailableOfferDataRSType
     */
    public $return;
    /**
     * Constructor method for Booking_Flight_GetAvailableOfferDataResponse
     * @uses Booking_Flight_GetAvailableOfferDataResponse::setReturn()
     * @param \StructType\GetAvailableOfferDataRSType $return
     */
    public function __construct(\StructType\GetAvailableOfferDataRSType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\GetAvailableOfferDataRSType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\GetAvailableOfferDataRSType $return
     * @return \StructType\Booking_Flight_GetAvailableOfferDataResponse
     */
    public function setReturn(\StructType\GetAvailableOfferDataRSType $return = null)
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
     * @return \StructType\Booking_Flight_GetAvailableOfferDataResponse
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
