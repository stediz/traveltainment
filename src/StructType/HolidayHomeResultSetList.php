<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeResultSetList StructType
 * @subpackage Structs
 */
class HolidayHomeResultSetList extends AbstractStructBase
{
    /**
     * The ListItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeListItemType[]
     */
    public $ListItem;
    /**
     * The TotalNumberOfResults
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $TotalNumberOfResults;
    /**
     * The Alternatives
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Alternatives;
    /**
     * Constructor method for HolidayHomeResultSetList
     * @uses HolidayHomeResultSetList::setListItem()
     * @uses HolidayHomeResultSetList::setTotalNumberOfResults()
     * @uses HolidayHomeResultSetList::setAlternatives()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListItemType[] $listItem
     * @param int $totalNumberOfResults
     * @param bool $alternatives
     */
    public function __construct(array $listItem = array(), $totalNumberOfResults = null, $alternatives = null)
    {
        $this
            ->setListItem($listItem)
            ->setTotalNumberOfResults($totalNumberOfResults)
            ->setAlternatives($alternatives);
    }
    /**
     * Get ListItem value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListItemType[]|null
     */
    public function getListItem()
    {
        return $this->ListItem;
    }
    /**
     * Set ListItem value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListItemType[] $listItem
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSetList
     */
    public function setListItem(array $listItem = array())
    {
        foreach ($listItem as $holidayHomeResultSetListListItemItem) {
            // validation for constraint: itemType
            if (!$holidayHomeResultSetListListItemItem instanceof \traveltainment\SOAP17\StructType\HolidayHomeListItemType) {
                throw new \InvalidArgumentException(sprintf('The ListItem property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeListItemType, "%s" given', is_object($holidayHomeResultSetListListItemItem) ? get_class($holidayHomeResultSetListListItemItem) : gettype($holidayHomeResultSetListListItemItem)), __LINE__);
            }
        }
        $this->ListItem = $listItem;
        return $this;
    }
    /**
     * Add item to ListItem value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeListItemType $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSetList
     */
    public function addToListItem(\traveltainment\SOAP17\StructType\HolidayHomeListItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\HolidayHomeListItemType) {
            throw new \InvalidArgumentException(sprintf('The ListItem property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeListItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ListItem[] = $item;
        return $this;
    }
    /**
     * Get TotalNumberOfResults value
     * @return int|null
     */
    public function getTotalNumberOfResults()
    {
        return $this->TotalNumberOfResults;
    }
    /**
     * Set TotalNumberOfResults value
     * @param int $totalNumberOfResults
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSetList
     */
    public function setTotalNumberOfResults($totalNumberOfResults = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfResults) && !is_numeric($totalNumberOfResults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalNumberOfResults)), __LINE__);
        }
        $this->TotalNumberOfResults = $totalNumberOfResults;
        return $this;
    }
    /**
     * Get Alternatives value
     * @return bool|null
     */
    public function getAlternatives()
    {
        return $this->Alternatives;
    }
    /**
     * Set Alternatives value
     * @param bool $alternatives
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSetList
     */
    public function setAlternatives($alternatives = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternatives) && !is_bool($alternatives)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alternatives)), __LINE__);
        }
        $this->Alternatives = $alternatives;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeResultSetList
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
