<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeRegionSummaryType StructType
 * @subpackage Structs
 */
class HolidayHomeRegionSummaryType extends AbstractStructBase
{
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType[]
     */
    public $City;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * Constructor method for HolidayHomeRegionSummaryType
     * @uses HolidayHomeRegionSummaryType::setCity()
     * @uses HolidayHomeRegionSummaryType::setName()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType[] $city
     * @param string $name
     */
    public function __construct(array $city = array(), $name = null)
    {
        $this
            ->setCity($city)
            ->setName($name);
    }
    /**
     * Get City value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType[]|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType[] $city
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType
     */
    public function setCity(array $city = array())
    {
        foreach ($city as $holidayHomeRegionSummaryTypeCityItem) {
            // validation for constraint: itemType
            if (!$holidayHomeRegionSummaryTypeCityItem instanceof \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType) {
                throw new \InvalidArgumentException(sprintf('The City property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType, "%s" given', is_object($holidayHomeRegionSummaryTypeCityItem) ? get_class($holidayHomeRegionSummaryTypeCityItem) : gettype($holidayHomeRegionSummaryTypeCityItem)), __LINE__);
            }
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Add item to City value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType
     */
    public function addToCity(\traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType) {
            throw new \InvalidArgumentException(sprintf('The City property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeCitySummaryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->City[] = $item;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType
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
