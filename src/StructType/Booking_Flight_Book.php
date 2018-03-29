<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_Flight_Book StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_Flight_Book
 * @subpackage Structs
 */
class Booking_Flight_Book extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\BookRQ
     */
    public $request;
    /**
     * Constructor method for Booking_Flight_Book
     * @uses Booking_Flight_Book::setRequest()
     * @param \StructType\BookRQ $request
     */
    public function __construct(\StructType\BookRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\BookRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\BookRQ $request
     * @return \StructType\Booking_Flight_Book
     */
    public function setRequest(\StructType\BookRQ $request = null)
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
     * @return \StructType\Booking_Flight_Book
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
