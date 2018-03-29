<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeListRS StructType
 * @subpackage Structs
 */
class HolidayHomeListRS extends XmlInterfaceRS
{
    /**
     * The DefaultRegion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionType
     */
    public $DefaultRegion;
    /**
     * The ResultSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeResultSummaryType
     */
    public $ResultSummary;
    /**
     * The ResultSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \StructType\HolidayHomeResultSetList[]
     */
    public $ResultSet;
    /**
     * Constructor method for HolidayHomeListRS
     * @uses HolidayHomeListRS::setDefaultRegion()
     * @uses HolidayHomeListRS::setResultSummary()
     * @uses HolidayHomeListRS::setResultSet()
     * @param \StructType\RegionType $defaultRegion
     * @param \StructType\HolidayHomeResultSummaryType $resultSummary
     * @param \StructType\HolidayHomeResultSetList[] $resultSet
     */
    public function __construct(\StructType\RegionType $defaultRegion = null, \StructType\HolidayHomeResultSummaryType $resultSummary = null, array $resultSet = array())
    {
        $this
            ->setDefaultRegion($defaultRegion)
            ->setResultSummary($resultSummary)
            ->setResultSet($resultSet);
    }
    /**
     * Get DefaultRegion value
     * @return \StructType\RegionType|null
     */
    public function getDefaultRegion()
    {
        return $this->DefaultRegion;
    }
    /**
     * Set DefaultRegion value
     * @param \StructType\RegionType $defaultRegion
     * @return \StructType\HolidayHomeListRS
     */
    public function setDefaultRegion(\StructType\RegionType $defaultRegion = null)
    {
        $this->DefaultRegion = $defaultRegion;
        return $this;
    }
    /**
     * Get ResultSummary value
     * @return \StructType\HolidayHomeResultSummaryType|null
     */
    public function getResultSummary()
    {
        return $this->ResultSummary;
    }
    /**
     * Set ResultSummary value
     * @param \StructType\HolidayHomeResultSummaryType $resultSummary
     * @return \StructType\HolidayHomeListRS
     */
    public function setResultSummary(\StructType\HolidayHomeResultSummaryType $resultSummary = null)
    {
        $this->ResultSummary = $resultSummary;
        return $this;
    }
    /**
     * Get ResultSet value
     * @return \StructType\HolidayHomeResultSetList[]|null
     */
    public function getResultSet()
    {
        return $this->ResultSet;
    }
    /**
     * Set ResultSet value
     * @throws \InvalidArgumentException
     * @param \StructType\HolidayHomeResultSetList[] $resultSet
     * @return \StructType\HolidayHomeListRS
     */
    public function setResultSet(array $resultSet = array())
    {
        foreach ($resultSet as $holidayHomeListRSResultSetItem) {
            // validation for constraint: itemType
            if (!$holidayHomeListRSResultSetItem instanceof \StructType\HolidayHomeResultSetList) {
                throw new \InvalidArgumentException(sprintf('The ResultSet property can only contain items of \StructType\HolidayHomeResultSetList, "%s" given', is_object($holidayHomeListRSResultSetItem) ? get_class($holidayHomeListRSResultSetItem) : gettype($holidayHomeListRSResultSetItem)), __LINE__);
            }
        }
        $this->ResultSet = $resultSet;
        return $this;
    }
    /**
     * Add item to ResultSet value
     * @throws \InvalidArgumentException
     * @param \StructType\HolidayHomeResultSetList $item
     * @return \StructType\HolidayHomeListRS
     */
    public function addToResultSet(\StructType\HolidayHomeResultSetList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HolidayHomeResultSetList) {
            throw new \InvalidArgumentException(sprintf('The ResultSet property can only contain items of \StructType\HolidayHomeResultSetList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResultSet[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeListRS
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
