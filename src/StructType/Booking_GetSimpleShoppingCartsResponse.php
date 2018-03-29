<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_GetSimpleShoppingCartsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_GetSimpleShoppingCartsResponse
 * @subpackage Structs
 */
class Booking_GetSimpleShoppingCartsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetSimpleShoppingCartsRS
     */
    public $return;
    /**
     * Constructor method for Booking_GetSimpleShoppingCartsResponse
     * @uses Booking_GetSimpleShoppingCartsResponse::setReturn()
     * @param \StructType\GetSimpleShoppingCartsRS $return
     */
    public function __construct(\StructType\GetSimpleShoppingCartsRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\GetSimpleShoppingCartsRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\GetSimpleShoppingCartsRS $return
     * @return \StructType\Booking_GetSimpleShoppingCartsResponse
     */
    public function setReturn(\StructType\GetSimpleShoppingCartsRS $return = null)
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
     * @return \StructType\Booking_GetSimpleShoppingCartsResponse
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
