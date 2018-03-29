<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_CarRentalLocations StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_CarRentalLocations
 * @subpackage Structs
 */
class Search_CrossSelling_CarRentalLocations extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetCarRentalLocationsRQType
     */
    public $request;
    /**
     * Constructor method for Search_CrossSelling_CarRentalLocations
     * @uses Search_CrossSelling_CarRentalLocations::setRequest()
     * @param \StructType\GetCarRentalLocationsRQType $request
     */
    public function __construct(\StructType\GetCarRentalLocationsRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetCarRentalLocationsRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetCarRentalLocationsRQType $request
     * @return \StructType\Search_CrossSelling_CarRentalLocations
     */
    public function setRequest(\StructType\GetCarRentalLocationsRQType $request = null)
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
     * @return \StructType\Search_CrossSelling_CarRentalLocations
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
