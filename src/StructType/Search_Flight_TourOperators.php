<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Flight_TourOperators StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Flight_TourOperators
 * @subpackage Structs
 */
class Search_Flight_TourOperators extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineTourOperatorsRQ
     */
    public $request;
    /**
     * Constructor method for Search_Flight_TourOperators
     * @uses Search_Flight_TourOperators::setRequest()
     * @param \StructType\SearchEngineTourOperatorsRQ $request
     */
    public function __construct(\StructType\SearchEngineTourOperatorsRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineTourOperatorsRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineTourOperatorsRQ $request
     * @return \StructType\Search_Flight_TourOperators
     */
    public function setRequest(\StructType\SearchEngineTourOperatorsRQ $request = null)
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
     * @return \StructType\Search_Flight_TourOperators
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
