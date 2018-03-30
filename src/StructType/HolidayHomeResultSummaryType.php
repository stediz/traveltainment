<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeResultSummaryType StructType
 * @subpackage Structs
 */
class HolidayHomeResultSummaryType extends AbstractStructBase
{
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType[]
     */
    public $Region;
    /**
     * Constructor method for HolidayHomeResultSummaryType
     * @uses HolidayHomeResultSummaryType::setRegion()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType[] $region
     */
    public function __construct(array $region = array())
    {
        $this
            ->setRegion($region);
    }
    /**
     * Get Region value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType[]|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType[] $region
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSummaryType
     */
    public function setRegion(array $region = array())
    {
        foreach ($region as $holidayHomeResultSummaryTypeRegionItem) {
            // validation for constraint: itemType
            if (!$holidayHomeResultSummaryTypeRegionItem instanceof \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType) {
                throw new \InvalidArgumentException(sprintf('The Region property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType, "%s" given', is_object($holidayHomeResultSummaryTypeRegionItem) ? get_class($holidayHomeResultSummaryTypeRegionItem) : gettype($holidayHomeResultSummaryTypeRegionItem)), __LINE__);
            }
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Add item to Region value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSummaryType
     */
    public function addToRegion(\traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType) {
            throw new \InvalidArgumentException(sprintf('The Region property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeRegionSummaryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Region[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSummaryType
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
