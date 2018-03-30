<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionNode StructType
 * @subpackage Structs
 */
class RegionNode extends AbstractStructBase
{
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The RegionName
     * @var string
     */
    public $RegionName;
    /**
     * The SubRegions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\RegionNodeList
     */
    public $SubRegions;
    /**
     * Constructor method for RegionNode
     * @uses RegionNode::setID()
     * @uses RegionNode::setRegionName()
     * @uses RegionNode::setSubRegions()
     * @param int $iD
     * @param string $regionName
     * @param \traveltainment\SOAP17\StructType\RegionNodeList $subRegions
     */
    public function __construct($iD = null, $regionName = null, \traveltainment\SOAP17\StructType\RegionNodeList $subRegions = null)
    {
        $this
            ->setID($iD)
            ->setRegionName($regionName)
            ->setSubRegions($subRegions);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \traveltainment\SOAP17\StructType\RegionNode
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get RegionName value
     * @return string|null
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }
    /**
     * Set RegionName value
     * @param string $regionName
     * @return \traveltainment\SOAP17\StructType\RegionNode
     */
    public function setRegionName($regionName = null)
    {
        // validation for constraint: string
        if (!is_null($regionName) && !is_string($regionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionName)), __LINE__);
        }
        $this->RegionName = $regionName;
        return $this;
    }
    /**
     * Get SubRegions value
     * @return \traveltainment\SOAP17\StructType\RegionNodeList|null
     */
    public function getSubRegions()
    {
        return $this->SubRegions;
    }
    /**
     * Set SubRegions value
     * @param \traveltainment\SOAP17\StructType\RegionNodeList $subRegions
     * @return \traveltainment\SOAP17\StructType\RegionNode
     */
    public function setSubRegions(\traveltainment\SOAP17\StructType\RegionNodeList $subRegions = null)
    {
        $this->SubRegions = $subRegions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RegionNode
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
