<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_OfferGrid StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_OfferGrid
 * @subpackage Structs
 */
class Search_HolidayHome_OfferGrid extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeOfferGridRQ
     */
    public $request;
    /**
     * Constructor method for Search_HolidayHome_OfferGrid
     * @uses Search_HolidayHome_OfferGrid::setRequest()
     * @param \StructType\HolidayHomeOfferGridRQ $request
     */
    public function __construct(\StructType\HolidayHomeOfferGridRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\HolidayHomeOfferGridRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\HolidayHomeOfferGridRQ $request
     * @return \StructType\Search_HolidayHome_OfferGrid
     */
    public function setRequest(\StructType\HolidayHomeOfferGridRQ $request = null)
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
     * @return \StructType\Search_HolidayHome_OfferGrid
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
