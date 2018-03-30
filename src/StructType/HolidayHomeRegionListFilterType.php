<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeRegionListFilterType StructType
 * @subpackage Structs
 */
class HolidayHomeRegionListFilterType extends AbstractStructBase
{
    /**
     * The RegionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\RegionID
     */
    public $RegionID;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectName;
    /**
     * The ObjectCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectCode;
    /**
     * The UDFRegions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\UDFRegionsType
     */
    public $UDFRegions;
    /**
     * Constructor method for HolidayHomeRegionListFilterType
     * @uses HolidayHomeRegionListFilterType::setRegionID()
     * @uses HolidayHomeRegionListFilterType::setObjectName()
     * @uses HolidayHomeRegionListFilterType::setObjectCode()
     * @uses HolidayHomeRegionListFilterType::setUDFRegions()
     * @param \traveltainment\SOAP17\StructType\RegionID $regionID
     * @param string $objectName
     * @param string $objectCode
     * @param \traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionID $regionID = null, $objectName = null, $objectCode = null, \traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions = null)
    {
        $this
            ->setRegionID($regionID)
            ->setObjectName($objectName)
            ->setObjectCode($objectCode)
            ->setUDFRegions($uDFRegions);
    }
    /**
     * Get RegionID value
     * @return \traveltainment\SOAP17\StructType\RegionID|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param \traveltainment\SOAP17\StructType\RegionID $regionID
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionListFilterType
     */
    public function setRegionID(\traveltainment\SOAP17\StructType\RegionID $regionID = null)
    {
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionListFilterType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Get ObjectCode value
     * @return string|null
     */
    public function getObjectCode()
    {
        return $this->ObjectCode;
    }
    /**
     * Set ObjectCode value
     * @param string $objectCode
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionListFilterType
     */
    public function setObjectCode($objectCode = null)
    {
        // validation for constraint: string
        if (!is_null($objectCode) && !is_string($objectCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectCode)), __LINE__);
        }
        $this->ObjectCode = $objectCode;
        return $this;
    }
    /**
     * Get UDFRegions value
     * @return \traveltainment\SOAP17\StructType\UDFRegionsType|null
     */
    public function getUDFRegions()
    {
        return $this->UDFRegions;
    }
    /**
     * Set UDFRegions value
     * @param \traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionListFilterType
     */
    public function setUDFRegions(\traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions = null)
    {
        $this->UDFRegions = $uDFRegions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionListFilterType
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
