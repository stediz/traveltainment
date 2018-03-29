<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Hotel_HotelList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_Hotel_HotelList
 * @subpackage Structs
 */
class Search_Hotel_HotelList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchEngineHotelListRQ
     */
    public $request;
    /**
     * Constructor method for Search_Hotel_HotelList
     * @uses Search_Hotel_HotelList::setRequest()
     * @param \StructType\SearchEngineHotelListRQ $request
     */
    public function __construct(\StructType\SearchEngineHotelListRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\SearchEngineHotelListRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\SearchEngineHotelListRQ $request
     * @return \StructType\Search_Hotel_HotelList
     */
    public function setRequest(\StructType\SearchEngineHotelListRQ $request = null)
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
     * @return \StructType\Search_Hotel_HotelList
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
