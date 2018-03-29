<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_OfferGrid StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_OfferGrid
 * @subpackage Structs
 */
class Search_Package_OfferGrid extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineOfferGridRQ
     */
    public $request;
    /**
     * Constructor method for Search_Package_OfferGrid
     * @uses Search_Package_OfferGrid::setRequest()
     * @param \StructType\SearchEngineOfferGridRQ $request
     */
    public function __construct(\StructType\SearchEngineOfferGridRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineOfferGridRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineOfferGridRQ $request
     * @return \StructType\Search_Package_OfferGrid
     */
    public function setRequest(\StructType\SearchEngineOfferGridRQ $request = null)
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
     * @return \StructType\Search_Package_OfferGrid
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
