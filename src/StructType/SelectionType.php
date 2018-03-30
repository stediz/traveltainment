<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectionType StructType
 * @subpackage Structs
 */
class SelectionType extends AbstractStructBase
{
    /**
     * The ObjectID
     * @var \traveltainment\SOAP17\StructType\ObjectIDType
     */
    public $ObjectID;
    /**
     * The ObjectIDs
     * @var \traveltainment\SOAP17\StructType\ObjectIDListType
     */
    public $ObjectIDs;
    /**
     * The RegionID
     * @var int
     */
    public $RegionID;
    /**
     * The AirportOfRegion
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $AirportOfRegion;
    /**
     * The RegionIDs
     * Meta informations extracted from the WSDL
     * - maxLength: 100
     * - minLength: 1
     * @var int
     */
    public $RegionIDs;
    /**
     * Constructor method for SelectionType
     * @uses SelectionType::setObjectID()
     * @uses SelectionType::setObjectIDs()
     * @uses SelectionType::setRegionID()
     * @uses SelectionType::setAirportOfRegion()
     * @uses SelectionType::setRegionIDs()
     * @param \traveltainment\SOAP17\StructType\ObjectIDType $objectID
     * @param \traveltainment\SOAP17\StructType\ObjectIDListType $objectIDs
     * @param int $regionID
     * @param string $airportOfRegion
     * @param int $regionIDs
     */
    public function __construct(\traveltainment\SOAP17\StructType\ObjectIDType $objectID = null, \traveltainment\SOAP17\StructType\ObjectIDListType $objectIDs = null, $regionID = null, $airportOfRegion = null, $regionIDs = null)
    {
        $this
            ->setObjectID($objectID)
            ->setObjectIDs($objectIDs)
            ->setRegionID($regionID)
            ->setAirportOfRegion($airportOfRegion)
            ->setRegionIDs($regionIDs);
    }
    /**
     * Get ObjectID value
     * @return \traveltainment\SOAP17\StructType\ObjectIDType|null
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param \traveltainment\SOAP17\StructType\ObjectIDType $objectID
     * @return \traveltainment\SOAP17\StructType\SelectionType
     */
    public function setObjectID(\traveltainment\SOAP17\StructType\ObjectIDType $objectID = null)
    {
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Get ObjectIDs value
     * @return \traveltainment\SOAP17\StructType\ObjectIDListType|null
     */
    public function getObjectIDs()
    {
        return $this->ObjectIDs;
    }
    /**
     * Set ObjectIDs value
     * @param \traveltainment\SOAP17\StructType\ObjectIDListType $objectIDs
     * @return \traveltainment\SOAP17\StructType\SelectionType
     */
    public function setObjectIDs(\traveltainment\SOAP17\StructType\ObjectIDListType $objectIDs = null)
    {
        $this->ObjectIDs = $objectIDs;
        return $this;
    }
    /**
     * Get RegionID value
     * @return int|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param int $regionID
     * @return \traveltainment\SOAP17\StructType\SelectionType
     */
    public function setRegionID($regionID = null)
    {
        // validation for constraint: int
        if (!is_null($regionID) && !is_numeric($regionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regionID)), __LINE__);
        }
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Get AirportOfRegion value
     * @return string|null
     */
    public function getAirportOfRegion()
    {
        return $this->AirportOfRegion;
    }
    /**
     * Set AirportOfRegion value
     * @param string $airportOfRegion
     * @return \traveltainment\SOAP17\StructType\SelectionType
     */
    public function setAirportOfRegion($airportOfRegion = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airportOfRegion) && !preg_match('/[A-Z]{3}/', $airportOfRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($airportOfRegion, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airportOfRegion) && !is_string($airportOfRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportOfRegion)), __LINE__);
        }
        $this->AirportOfRegion = $airportOfRegion;
        return $this;
    }
    /**
     * Get RegionIDs value
     * @return int|null
     */
    public function getRegionIDs()
    {
        return $this->RegionIDs;
    }
    /**
     * Set RegionIDs value
     * @param int $regionIDs
     * @return \traveltainment\SOAP17\StructType\SelectionType
     */
    public function setRegionIDs($regionIDs = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($regionIDs) && strlen($regionIDs) > 100) || (is_array($regionIDs) && count($regionIDs) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($regionIDs) ? strlen($regionIDs) : count($regionIDs)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($regionIDs) && strlen($regionIDs) < 1) || (is_array($regionIDs) && count($regionIDs) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: int
        if (!is_null($regionIDs) && !is_numeric($regionIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regionIDs)), __LINE__);
        }
        $this->RegionIDs = $regionIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SelectionType
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
