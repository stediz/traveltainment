<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineRegionListRS StructType
 * @subpackage Structs
 */
class SearchEngineRegionListRS extends XmlInterfaceSearchRS
{
    /**
     * The GeographicalBounds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\GeographicalBounds
     */
    public $GeographicalBounds;
    /**
     * Constructor method for SearchEngineRegionListRS
     * @uses SearchEngineRegionListRS::setGeographicalBounds()
     * @param \traveltainment\SOAP17\StructType\GeographicalBounds $geographicalBounds
     */
    public function __construct(\traveltainment\SOAP17\StructType\GeographicalBounds $geographicalBounds = null)
    {
        $this
            ->setGeographicalBounds($geographicalBounds);
    }
    /**
     * Get GeographicalBounds value
     * @return \traveltainment\SOAP17\StructType\GeographicalBounds|null
     */
    public function getGeographicalBounds()
    {
        return $this->GeographicalBounds;
    }
    /**
     * Set GeographicalBounds value
     * @param \traveltainment\SOAP17\StructType\GeographicalBounds $geographicalBounds
     * @return \traveltainment\SOAP17\StructType\SearchEngineRegionListRS
     */
    public function setGeographicalBounds(\traveltainment\SOAP17\StructType\GeographicalBounds $geographicalBounds = null)
    {
        $this->GeographicalBounds = $geographicalBounds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SearchEngineRegionListRS
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
