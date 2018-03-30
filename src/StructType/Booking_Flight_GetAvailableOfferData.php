<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_Flight_GetAvailableOfferData StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_Flight_GetAvailableOfferData
 * @subpackage Structs
 */
class Booking_Flight_GetAvailableOfferData extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType
     */
    public $request;
    /**
     * Constructor method for Booking_Flight_GetAvailableOfferData
     * @uses Booking_Flight_GetAvailableOfferData::setRequest()
     * @param \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType $request
     */
    public function __construct(\traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType $request
     * @return \traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferData
     */
    public function setRequest(\traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType $request = null)
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
     * @return \traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferData
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
