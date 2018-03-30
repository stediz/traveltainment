<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeType StructType
 * @subpackage Structs
 */
class HolidayHomeType extends AbstractStructBase
{
    /**
     * The ObjectName
     * @var string
     */
    public $ObjectName;
    /**
     * The ObjectID
     * @var int
     */
    public $ObjectID;
    /**
     * The City
     * @var \traveltainment\SOAP17\StructType\CityIdentType
     */
    public $City;
    /**
     * The MeanCategory
     * @var float
     */
    public $MeanCategory;
    /**
     * The MaximalOccupancy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximalOccupancy;
    /**
     * The FloorArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FloorArea;
    /**
     * The ObjectImages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ObjectImagesType
     */
    public $ObjectImages;
    /**
     * The HolidayHomeAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeAttributesType
     */
    public $HolidayHomeAttributes;
    /**
     * The DistanceToSea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DistanceToSea;
    /**
     * The DistanceToSkilift
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DistanceToSkilift;
    /**
     * Constructor method for HolidayHomeType
     * @uses HolidayHomeType::setObjectName()
     * @uses HolidayHomeType::setObjectID()
     * @uses HolidayHomeType::setCity()
     * @uses HolidayHomeType::setMeanCategory()
     * @uses HolidayHomeType::setMaximalOccupancy()
     * @uses HolidayHomeType::setFloorArea()
     * @uses HolidayHomeType::setObjectImages()
     * @uses HolidayHomeType::setHolidayHomeAttributes()
     * @uses HolidayHomeType::setDistanceToSea()
     * @uses HolidayHomeType::setDistanceToSkilift()
     * @param string $objectName
     * @param int $objectID
     * @param \traveltainment\SOAP17\StructType\CityIdentType $city
     * @param float $meanCategory
     * @param int $maximalOccupancy
     * @param int $floorArea
     * @param \traveltainment\SOAP17\StructType\ObjectImagesType $objectImages
     * @param \traveltainment\SOAP17\StructType\HolidayHomeAttributesType $holidayHomeAttributes
     * @param string $distanceToSea
     * @param string $distanceToSkilift
     */
    public function __construct($objectName = null, $objectID = null, \traveltainment\SOAP17\StructType\CityIdentType $city = null, $meanCategory = null, $maximalOccupancy = null, $floorArea = null, \traveltainment\SOAP17\StructType\ObjectImagesType $objectImages = null, \traveltainment\SOAP17\StructType\HolidayHomeAttributesType $holidayHomeAttributes = null, $distanceToSea = null, $distanceToSkilift = null)
    {
        $this
            ->setObjectName($objectName)
            ->setObjectID($objectID)
            ->setCity($city)
            ->setMeanCategory($meanCategory)
            ->setMaximalOccupancy($maximalOccupancy)
            ->setFloorArea($floorArea)
            ->setObjectImages($objectImages)
            ->setHolidayHomeAttributes($holidayHomeAttributes)
            ->setDistanceToSea($distanceToSea)
            ->setDistanceToSkilift($distanceToSkilift);
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
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
     * Get ObjectID value
     * @return int|null
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param int $objectID
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setObjectID($objectID = null)
    {
        // validation for constraint: int
        if (!is_null($objectID) && !is_numeric($objectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($objectID)), __LINE__);
        }
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Get City value
     * @return \traveltainment\SOAP17\StructType\CityIdentType|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param \traveltainment\SOAP17\StructType\CityIdentType $city
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setCity(\traveltainment\SOAP17\StructType\CityIdentType $city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Get MeanCategory value
     * @return float|null
     */
    public function getMeanCategory()
    {
        return $this->MeanCategory;
    }
    /**
     * Set MeanCategory value
     * @param float $meanCategory
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setMeanCategory($meanCategory = null)
    {
        $this->MeanCategory = $meanCategory;
        return $this;
    }
    /**
     * Get MaximalOccupancy value
     * @return int|null
     */
    public function getMaximalOccupancy()
    {
        return $this->MaximalOccupancy;
    }
    /**
     * Set MaximalOccupancy value
     * @param int $maximalOccupancy
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setMaximalOccupancy($maximalOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maximalOccupancy) && !is_numeric($maximalOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalOccupancy)), __LINE__);
        }
        $this->MaximalOccupancy = $maximalOccupancy;
        return $this;
    }
    /**
     * Get FloorArea value
     * @return int|null
     */
    public function getFloorArea()
    {
        return $this->FloorArea;
    }
    /**
     * Set FloorArea value
     * @param int $floorArea
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setFloorArea($floorArea = null)
    {
        // validation for constraint: int
        if (!is_null($floorArea) && !is_numeric($floorArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($floorArea)), __LINE__);
        }
        $this->FloorArea = $floorArea;
        return $this;
    }
    /**
     * Get ObjectImages value
     * @return \traveltainment\SOAP17\StructType\ObjectImagesType|null
     */
    public function getObjectImages()
    {
        return $this->ObjectImages;
    }
    /**
     * Set ObjectImages value
     * @param \traveltainment\SOAP17\StructType\ObjectImagesType $objectImages
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setObjectImages(\traveltainment\SOAP17\StructType\ObjectImagesType $objectImages = null)
    {
        $this->ObjectImages = $objectImages;
        return $this;
    }
    /**
     * Get HolidayHomeAttributes value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAttributesType|null
     */
    public function getHolidayHomeAttributes()
    {
        return $this->HolidayHomeAttributes;
    }
    /**
     * Set HolidayHomeAttributes value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeAttributesType $holidayHomeAttributes
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setHolidayHomeAttributes(\traveltainment\SOAP17\StructType\HolidayHomeAttributesType $holidayHomeAttributes = null)
    {
        $this->HolidayHomeAttributes = $holidayHomeAttributes;
        return $this;
    }
    /**
     * Get DistanceToSea value
     * @return string|null
     */
    public function getDistanceToSea()
    {
        return $this->DistanceToSea;
    }
    /**
     * Set DistanceToSea value
     * @uses \traveltainment\SOAP17\EnumType\DistanceEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\DistanceEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $distanceToSea
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setDistanceToSea($distanceToSea = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\DistanceEnum::valueIsValid($distanceToSea)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distanceToSea, implode(', ', \traveltainment\SOAP17\EnumType\DistanceEnum::getValidValues())), __LINE__);
        }
        $this->DistanceToSea = $distanceToSea;
        return $this;
    }
    /**
     * Get DistanceToSkilift value
     * @return string|null
     */
    public function getDistanceToSkilift()
    {
        return $this->DistanceToSkilift;
    }
    /**
     * Set DistanceToSkilift value
     * @uses \traveltainment\SOAP17\EnumType\DistanceEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\DistanceEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $distanceToSkilift
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public function setDistanceToSkilift($distanceToSkilift = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\DistanceEnum::valueIsValid($distanceToSkilift)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distanceToSkilift, implode(', ', \traveltainment\SOAP17\EnumType\DistanceEnum::getValidValues())), __LINE__);
        }
        $this->DistanceToSkilift = $distanceToSkilift;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType
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
