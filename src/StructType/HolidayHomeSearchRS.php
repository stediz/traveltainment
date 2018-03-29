<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeSearchRS StructType
 * @subpackage Structs
 */
class HolidayHomeSearchRS extends XmlInterfaceRS
{
    /**
     * The ResultSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \StructType\HolidayHomeResultSetList[]
     */
    public $ResultSet;
    /**
     * Constructor method for HolidayHomeSearchRS
     * @uses HolidayHomeSearchRS::setResultSet()
     * @param \StructType\HolidayHomeResultSetList[] $resultSet
     */
    public function __construct(array $resultSet = array())
    {
        $this
            ->setResultSet($resultSet);
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
     * @return \StructType\HolidayHomeSearchRS
     */
    public function setResultSet(array $resultSet = array())
    {
        foreach ($resultSet as $holidayHomeSearchRSResultSetItem) {
            // validation for constraint: itemType
            if (!$holidayHomeSearchRSResultSetItem instanceof \StructType\HolidayHomeResultSetList) {
                throw new \InvalidArgumentException(sprintf('The ResultSet property can only contain items of \StructType\HolidayHomeResultSetList, "%s" given', is_object($holidayHomeSearchRSResultSetItem) ? get_class($holidayHomeSearchRSResultSetItem) : gettype($holidayHomeSearchRSResultSetItem)), __LINE__);
            }
        }
        $this->ResultSet = $resultSet;
        return $this;
    }
    /**
     * Add item to ResultSet value
     * @throws \InvalidArgumentException
     * @param \StructType\HolidayHomeResultSetList $item
     * @return \StructType\HolidayHomeSearchRS
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
     * @return \StructType\HolidayHomeSearchRS
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
