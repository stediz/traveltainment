<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_UpdateAddon StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_UpdateAddon
 * @subpackage Structs
 */
class Booking_UpdateAddon extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AddonUpdateRQ
     */
    public $request;
    /**
     * Constructor method for Booking_UpdateAddon
     * @uses Booking_UpdateAddon::setRequest()
     * @param \StructType\AddonUpdateRQ $request
     */
    public function __construct(\StructType\AddonUpdateRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\AddonUpdateRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\AddonUpdateRQ $request
     * @return \StructType\Booking_UpdateAddon
     */
    public function setRequest(\StructType\AddonUpdateRQ $request = null)
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
     * @return \StructType\Booking_UpdateAddon
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
