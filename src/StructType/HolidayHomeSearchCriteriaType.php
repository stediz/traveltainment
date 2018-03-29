<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeSearchCriteriaType StructType
 * @subpackage Structs
 */
class HolidayHomeSearchCriteriaType extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxInclusive: 5
     * - minInclusive: 1
     * @var int
     */
    public $Category;
    /**
     * The HolidayHomeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HolidayHomeType;
    /**
     * The RoomCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RoomCount;
    /**
     * The HolidayHomeAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeAttributesType
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
     * Constructor method for HolidayHomeSearchCriteriaType
     * @uses HolidayHomeSearchCriteriaType::setCategory()
     * @uses HolidayHomeSearchCriteriaType::setHolidayHomeType()
     * @uses HolidayHomeSearchCriteriaType::setRoomCount()
     * @uses HolidayHomeSearchCriteriaType::setHolidayHomeAttributes()
     * @uses HolidayHomeSearchCriteriaType::setDistanceToSea()
     * @uses HolidayHomeSearchCriteriaType::setDistanceToSkilift()
     * @param int $category
     * @param string $holidayHomeType
     * @param int $roomCount
     * @param \StructType\HolidayHomeAttributesType $holidayHomeAttributes
     * @param string $distanceToSea
     * @param string $distanceToSkilift
     */
    public function __construct($category = null, $holidayHomeType = null, $roomCount = null, \StructType\HolidayHomeAttributesType $holidayHomeAttributes = null, $distanceToSea = null, $distanceToSkilift = null)
    {
        $this
            ->setCategory($category)
            ->setHolidayHomeType($holidayHomeType)
            ->setRoomCount($roomCount)
            ->setHolidayHomeAttributes($holidayHomeAttributes)
            ->setDistanceToSea($distanceToSea)
            ->setDistanceToSkilift($distanceToSkilift);
    }
    /**
     * Get Category value
     * @return int|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param int $category
     * @return \StructType\HolidayHomeSearchCriteriaType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: maxInclusive
        if ($category > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 5, "%s" given', $category), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($category < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $category), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($category) && !is_numeric($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get HolidayHomeType value
     * @return string|null
     */
    public function getHolidayHomeType()
    {
        return $this->HolidayHomeType;
    }
    /**
     * Set HolidayHomeType value
     * @uses \EnumType\HolidayHomeTypeEnum::valueIsValid()
     * @uses \EnumType\HolidayHomeTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $holidayHomeType
     * @return \StructType\HolidayHomeSearchCriteriaType
     */
    public function setHolidayHomeType($holidayHomeType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HolidayHomeTypeEnum::valueIsValid($holidayHomeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $holidayHomeType, implode(', ', \EnumType\HolidayHomeTypeEnum::getValidValues())), __LINE__);
        }
        $this->HolidayHomeType = $holidayHomeType;
        return $this;
    }
    /**
     * Get RoomCount value
     * @return int|null
     */
    public function getRoomCount()
    {
        return $this->RoomCount;
    }
    /**
     * Set RoomCount value
     * @param int $roomCount
     * @return \StructType\HolidayHomeSearchCriteriaType
     */
    public function setRoomCount($roomCount = null)
    {
        // validation for constraint: int
        if (!is_null($roomCount) && !is_numeric($roomCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($roomCount)), __LINE__);
        }
        $this->RoomCount = $roomCount;
        return $this;
    }
    /**
     * Get HolidayHomeAttributes value
     * @return \StructType\HolidayHomeAttributesType|null
     */
    public function getHolidayHomeAttributes()
    {
        return $this->HolidayHomeAttributes;
    }
    /**
     * Set HolidayHomeAttributes value
     * @param \StructType\HolidayHomeAttributesType $holidayHomeAttributes
     * @return \StructType\HolidayHomeSearchCriteriaType
     */
    public function setHolidayHomeAttributes(\StructType\HolidayHomeAttributesType $holidayHomeAttributes = null)
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
     * @uses \EnumType\DistanceEnum::valueIsValid()
     * @uses \EnumType\DistanceEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $distanceToSea
     * @return \StructType\HolidayHomeSearchCriteriaType
     */
    public function setDistanceToSea($distanceToSea = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DistanceEnum::valueIsValid($distanceToSea)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distanceToSea, implode(', ', \EnumType\DistanceEnum::getValidValues())), __LINE__);
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
     * @uses \EnumType\DistanceEnum::valueIsValid()
     * @uses \EnumType\DistanceEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $distanceToSkilift
     * @return \StructType\HolidayHomeSearchCriteriaType
     */
    public function setDistanceToSkilift($distanceToSkilift = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DistanceEnum::valueIsValid($distanceToSkilift)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distanceToSkilift, implode(', ', \EnumType\DistanceEnum::getValidValues())), __LINE__);
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
     * @return \StructType\HolidayHomeSearchCriteriaType
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
