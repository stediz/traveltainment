<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_BookShoppingCart StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_BookShoppingCart
 * @subpackage Structs
 */
class Booking_BookShoppingCart extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\BookShoppingCartRQType
     */
    public $request;
    /**
     * Constructor method for Booking_BookShoppingCart
     * @uses Booking_BookShoppingCart::setRequest()
     * @param \StructType\BookShoppingCartRQType $request
     */
    public function __construct(\StructType\BookShoppingCartRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\BookShoppingCartRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\BookShoppingCartRQType $request
     * @return \StructType\Booking_BookShoppingCart
     */
    public function setRequest(\StructType\BookShoppingCartRQType $request = null)
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
     * @return \StructType\Booking_BookShoppingCart
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
