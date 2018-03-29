<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_OfferGridResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_OfferGridResponse
 * @subpackage Structs
 */
class Search_HolidayHome_OfferGridResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeOfferGridRS
     */
    public $return;
    /**
     * Constructor method for Search_HolidayHome_OfferGridResponse
     * @uses Search_HolidayHome_OfferGridResponse::setReturn()
     * @param \StructType\HolidayHomeOfferGridRS $return
     */
    public function __construct(\StructType\HolidayHomeOfferGridRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\HolidayHomeOfferGridRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\HolidayHomeOfferGridRS $return
     * @return \StructType\Search_HolidayHome_OfferGridResponse
     */
    public function setReturn(\StructType\HolidayHomeOfferGridRS $return = null)
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
     * @return \StructType\Search_HolidayHome_OfferGridResponse
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
