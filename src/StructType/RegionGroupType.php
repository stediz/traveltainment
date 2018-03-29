<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionGroupType StructType
 * @subpackage Structs
 */
class RegionGroupType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $Name;
    /**
     * The RegionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $RegionID;
    /**
     * Constructor method for RegionGroupType
     * @uses RegionGroupType::setName()
     * @uses RegionGroupType::setRegionID()
     * @param string $name
     * @param int[] $regionID
     */
    public function __construct($name = null, array $regionID = array())
    {
        $this
            ->setName($name)
            ->setRegionID($regionID);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\RegionGroupType
     */
    public function setName($name = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($name) && strlen($name) < 1) || (is_array($name) && count($name) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get RegionID value
     * @return int[]|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @throws \InvalidArgumentException
     * @param int[] $regionID
     * @return \StructType\RegionGroupType
     */
    public function setRegionID(array $regionID = array())
    {
        foreach ($regionID as $regionGroupTypeRegionIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($regionGroupTypeRegionIDItem)) {
                throw new \InvalidArgumentException(sprintf('The RegionID property can only contain items of int, "%s" given', is_object($regionGroupTypeRegionIDItem) ? get_class($regionGroupTypeRegionIDItem) : gettype($regionGroupTypeRegionIDItem)), __LINE__);
            }
        }
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Add item to RegionID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\RegionGroupType
     */
    public function addToRegionID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The RegionID property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RegionID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RegionGroupType
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
