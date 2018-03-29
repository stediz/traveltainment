<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_GetShoppingCart StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_GetShoppingCart
 * @subpackage Structs
 */
class Booking_GetShoppingCart extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetShoppingCartRQ
     */
    public $request;
    /**
     * Constructor method for Booking_GetShoppingCart
     * @uses Booking_GetShoppingCart::setRequest()
     * @param \StructType\GetShoppingCartRQ $request
     */
    public function __construct(\StructType\GetShoppingCartRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetShoppingCartRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetShoppingCartRQ $request
     * @return \StructType\Booking_GetShoppingCart
     */
    public function setRequest(\StructType\GetShoppingCartRQ $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Booking_GetShoppingCart
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
