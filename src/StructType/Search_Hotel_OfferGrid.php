<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Hotel_OfferGrid StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Hotel_OfferGrid
 * @subpackage Structs
 */
class Search_Hotel_OfferGrid extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ
     */
    public $request;
    /**
     * Constructor method for Search_Hotel_OfferGrid
     * @uses Search_Hotel_OfferGrid::setRequest()
     * @param \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ $request
     */
    public function __construct(\traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ $request
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_OfferGrid
     */
    public function setRequest(\traveltainment\SOAP17\StructType\SearchEngineOfferGridRQ $request = null)
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
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_OfferGrid
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
