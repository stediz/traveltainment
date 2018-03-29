<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityIDList StructType
 * @subpackage Structs
 */
class CityIDList extends AbstractStructBase
{
    /**
     * The TopRegionIDs
     * Meta informations extracted from the WSDL
     * - use: required
     * - maxLength: 100
     * - minLength: 1
     * @var int
     */
    public $TopRegionIDs;
    /**
     * The CityID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var int[]
     */
    public $CityID;
    /**
     * Constructor method for CityIDList
     * @uses CityIDList::setTopRegionIDs()
     * @uses CityIDList::setCityID()
     * @param int $topRegionIDs
     * @param int[] $cityID
     */
    public function __construct($topRegionIDs = null, array $cityID = array())
    {
        $this
            ->setTopRegionIDs($topRegionIDs)
            ->setCityID($cityID);
    }
    /**
     * Get TopRegionIDs value
     * @return int
     */
    public function getTopRegionIDs()
    {
        return $this->TopRegionIDs;
    }
    /**
     * Set TopRegionIDs value
     * @param int $topRegionIDs
     * @return \StructType\CityIDList
     */
    public function setTopRegionIDs($topRegionIDs = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($topRegionIDs) && strlen($topRegionIDs) > 100) || (is_array($topRegionIDs) && count($topRegionIDs) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($topRegionIDs) ? strlen($topRegionIDs) : count($topRegionIDs)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($topRegionIDs) && strlen($topRegionIDs) < 1) || (is_array($topRegionIDs) && count($topRegionIDs) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: int
        if (!is_null($topRegionIDs) && !is_numeric($topRegionIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($topRegionIDs)), __LINE__);
        }
        $this->TopRegionIDs = $topRegionIDs;
        return $this;
    }
    /**
     * Get CityID value
     * @return int[]|null
     */
    public function getCityID()
    {
        return $this->CityID;
    }
    /**
     * Set CityID value
     * @throws \InvalidArgumentException
     * @param int[] $cityID
     * @return \StructType\CityIDList
     */
    public function setCityID(array $cityID = array())
    {
        foreach ($cityID as $cityIDListCityIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($cityIDListCityIDItem)) {
                throw new \InvalidArgumentException(sprintf('The CityID property can only contain items of int, "%s" given', is_object($cityIDListCityIDItem) ? get_class($cityIDListCityIDItem) : gettype($cityIDListCityIDItem)), __LINE__);
            }
        }
        $this->CityID = $cityID;
        return $this;
    }
    /**
     * Add item to CityID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\CityIDList
     */
    public function addToCityID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The CityID property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CityID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CityIDList
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
