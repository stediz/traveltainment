<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_CarRentalStationDetailsResponse
 * StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_CarRentalStationDetailsResponse
 * @subpackage Structs
 */
class Search_CrossSelling_CarRentalStationDetailsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetCarRentalStationDetailsRSType
     */
    public $return;
    /**
     * Constructor method for Search_CrossSelling_CarRentalStationDetailsResponse
     * @uses Search_CrossSelling_CarRentalStationDetailsResponse::setReturn()
     * @param \StructType\GetCarRentalStationDetailsRSType $return
     */
    public function __construct(\StructType\GetCarRentalStationDetailsRSType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\GetCarRentalStationDetailsRSType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\GetCarRentalStationDetailsRSType $return
     * @return \StructType\Search_CrossSelling_CarRentalStationDetailsResponse
     */
    public function setReturn(\StructType\GetCarRentalStationDetailsRSType $return = null)
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
     * @return \StructType\Search_CrossSelling_CarRentalStationDetailsResponse
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
