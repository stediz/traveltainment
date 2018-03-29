<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Package_HotelListResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Package_HotelListResponse
 * @subpackage Structs
 */
class Search_Package_HotelListResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineHotelListRS
     */
    public $return;
    /**
     * Constructor method for Search_Package_HotelListResponse
     * @uses Search_Package_HotelListResponse::setReturn()
     * @param \StructType\SearchEngineHotelListRS $return
     */
    public function __construct(\StructType\SearchEngineHotelListRS $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SearchEngineHotelListRS|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SearchEngineHotelListRS $return
     * @return \StructType\Search_Package_HotelListResponse
     */
    public function setReturn(\StructType\SearchEngineHotelListRS $return = null)
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
     * @return \StructType\Search_Package_HotelListResponse
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
