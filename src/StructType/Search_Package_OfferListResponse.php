<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_OfferListResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_OfferListResponse
 * @subpackage Structs
 */
class Search_Package_OfferListResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineOfferListRS
     */
    public $return;
    /**
     * Constructor method for Search_Package_OfferListResponse
     * @uses Search_Package_OfferListResponse::setReturn()
     * @param \StructType\SearchEngineOfferListRS $return
     */
    public function __construct(\StructType\SearchEngineOfferListRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineOfferListRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineOfferListRS $return
     * @return \StructType\Search_Package_OfferListResponse
     */
    public function setReturn(\StructType\SearchEngineOfferListRS $return = null)
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
     * @return \StructType\Search_Package_OfferListResponse
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
