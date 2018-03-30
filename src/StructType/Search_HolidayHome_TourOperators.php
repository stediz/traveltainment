<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_HolidayHome_TourOperators StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_HolidayHome_TourOperators
 * @subpackage Structs
 */
class Search_HolidayHome_TourOperators extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRQ
     */
    public $request;
    /**
     * Constructor method for Search_HolidayHome_TourOperators
     * @uses Search_HolidayHome_TourOperators::setRequest()
     * @param \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRQ $request
     */
    public function __construct(\traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRQ $request
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperators
     */
    public function setRequest(\traveltainment\SOAP17\StructType\SearchEngineTourOperatorsRQ $request = null)
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
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperators
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
