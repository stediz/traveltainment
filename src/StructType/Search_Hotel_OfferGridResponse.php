<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Hotel_OfferGridResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Hotel_OfferGridResponse
 * @subpackage Structs
 */
class Search_Hotel_OfferGridResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineOfferGridRS
     */
    public $return;
    /**
     * Constructor method for Search_Hotel_OfferGridResponse
     * @uses Search_Hotel_OfferGridResponse::setReturn()
     * @param \StructType\SearchEngineOfferGridRS $return
     */
    public function __construct(\StructType\SearchEngineOfferGridRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineOfferGridRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineOfferGridRS $return
     * @return \StructType\Search_Hotel_OfferGridResponse
     */
    public function setReturn(\StructType\SearchEngineOfferGridRS $return = null)
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
     * @return \StructType\Search_Hotel_OfferGridResponse
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
