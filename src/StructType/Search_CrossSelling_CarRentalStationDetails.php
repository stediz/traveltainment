<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_CarRentalStationDetails StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_CarRentalStationDetails
 * @subpackage Structs
 */
class Search_CrossSelling_CarRentalStationDetails extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType
     */
    public $request;
    /**
     * Constructor method for Search_CrossSelling_CarRentalStationDetails
     * @uses Search_CrossSelling_CarRentalStationDetails::setRequest()
     * @param \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType $request
     */
    public function __construct(\traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType $request
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetails
     */
    public function setRequest(\traveltainment\SOAP17\StructType\GetCarRentalStationDetailsRQType $request = null)
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
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetails
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
