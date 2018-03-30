<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionListRegionType StructType
 * @subpackage Structs
 */
class RegionListRegionType extends RegionType
{
    /**
     * The RegionGroup
     * @var string
     */
    public $RegionGroup;
    /**
     * The RegionGroupID
     * @var int
     */
    public $RegionGroupID;
    /**
     * The NumberOfFittingHotels
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberOfFittingHotels;
    /**
     * Constructor method for RegionListRegionType
     * @uses RegionListRegionType::setRegionGroup()
     * @uses RegionListRegionType::setRegionGroupID()
     * @uses RegionListRegionType::setNumberOfFittingHotels()
     * @param string $regionGroup
     * @param int $regionGroupID
     * @param int $numberOfFittingHotels
     */
    public function __construct($regionGroup = null, $regionGroupID = null, $numberOfFittingHotels = null)
    {
        $this
            ->setRegionGroup($regionGroup)
            ->setRegionGroupID($regionGroupID)
            ->setNumberOfFittingHotels($numberOfFittingHotels);
    }
    /**
     * Get RegionGroup value
     * @return string|null
     */
    public function getRegionGroup()
    {
        return $this->RegionGroup;
    }
    /**
     * Set RegionGroup value
     * @param string $regionGroup
     * @return \traveltainment\SOAP17\StructType\RegionListRegionType
     */
    public function setRegionGroup($regionGroup = null)
    {
        // validation for constraint: string
        if (!is_null($regionGroup) && !is_string($regionGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionGroup)), __LINE__);
        }
        $this->RegionGroup = $regionGroup;
        return $this;
    }
    /**
     * Get RegionGroupID value
     * @return int|null
     */
    public function getRegionGroupID()
    {
        return $this->RegionGroupID;
    }
    /**
     * Set RegionGroupID value
     * @param int $regionGroupID
     * @return \traveltainment\SOAP17\StructType\RegionListRegionType
     */
    public function setRegionGroupID($regionGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($regionGroupID) && !is_numeric($regionGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regionGroupID)), __LINE__);
        }
        $this->RegionGroupID = $regionGroupID;
        return $this;
    }
    /**
     * Get NumberOfFittingHotels value
     * @return int|null
     */
    public function getNumberOfFittingHotels()
    {
        return $this->NumberOfFittingHotels;
    }
    /**
     * Set NumberOfFittingHotels value
     * @param int $numberOfFittingHotels
     * @return \traveltainment\SOAP17\StructType\RegionListRegionType
     */
    public function setNumberOfFittingHotels($numberOfFittingHotels = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFittingHotels) && !is_numeric($numberOfFittingHotels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFittingHotels)), __LINE__);
        }
        $this->NumberOfFittingHotels = $numberOfFittingHotels;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RegionListRegionType
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
