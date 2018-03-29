<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_HolidayHome_AvailabilityAndPriceCheck StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_HolidayHome_AvailabilityAndPriceCheck
 * @subpackage Structs
 */
class Booking_HolidayHome_AvailabilityAndPriceCheck extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AvailabilityAndPriceCheckRQ
     */
    public $request;
    /**
     * Constructor method for Booking_HolidayHome_AvailabilityAndPriceCheck
     * @uses Booking_HolidayHome_AvailabilityAndPriceCheck::setRequest()
     * @param \StructType\AvailabilityAndPriceCheckRQ $request
     */
    public function __construct(\StructType\AvailabilityAndPriceCheckRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\AvailabilityAndPriceCheckRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\AvailabilityAndPriceCheckRQ $request
     * @return \StructType\Booking_HolidayHome_AvailabilityAndPriceCheck
     */
    public function setRequest(\StructType\AvailabilityAndPriceCheckRQ $request = null)
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
     * @return \StructType\Booking_HolidayHome_AvailabilityAndPriceCheck
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
