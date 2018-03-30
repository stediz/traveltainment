<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking_GetTermsAndConditionsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Booking_GetTermsAndConditionsResponse
 * @subpackage Structs
 */
class Booking_GetTermsAndConditionsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\GetTermsAndConditionsRS
     */
    public $return;
    /**
     * Constructor method for Booking_GetTermsAndConditionsResponse
     * @uses Booking_GetTermsAndConditionsResponse::setReturn()
     * @param \traveltainment\SOAP17\StructType\GetTermsAndConditionsRS $return
     */
    public function __construct(\traveltainment\SOAP17\StructType\GetTermsAndConditionsRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \traveltainment\SOAP17\StructType\GetTermsAndConditionsRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \traveltainment\SOAP17\StructType\GetTermsAndConditionsRS $return
     * @return \traveltainment\SOAP17\StructType\Booking_GetTermsAndConditionsResponse
     */
    public function setReturn(\traveltainment\SOAP17\StructType\GetTermsAndConditionsRS $return = null)
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
     * @return \traveltainment\SOAP17\StructType\Booking_GetTermsAndConditionsResponse
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
