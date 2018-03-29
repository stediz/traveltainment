<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_TourOperatorsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_TourOperatorsResponse
 * @subpackage Structs
 */
class Search_HolidayHome_TourOperatorsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineTourOperatorsRS
     */
    public $return;
    /**
     * Constructor method for Search_HolidayHome_TourOperatorsResponse
     * @uses Search_HolidayHome_TourOperatorsResponse::setReturn()
     * @param \StructType\SearchEngineTourOperatorsRS $return
     */
    public function __construct(\StructType\SearchEngineTourOperatorsRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineTourOperatorsRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineTourOperatorsRS $return
     * @return \StructType\Search_HolidayHome_TourOperatorsResponse
     */
    public function setReturn(\StructType\SearchEngineTourOperatorsRS $return = null)
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
     * @return \StructType\Search_HolidayHome_TourOperatorsResponse
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
