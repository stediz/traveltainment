<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleRegionResultSetType StructType
 * @subpackage Structs
 */
class SimpleRegionResultSetType extends AbstractStructBase
{
    /**
     * The SimpleListItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 400
     * - minOccurs: 0
     * @var \StructType\SimpleRegionOfferType[]
     */
    public $SimpleListItem;
    /**
     * The Alternatives
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Alternatives;
    /**
     * The TotalNumberOfResults
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $TotalNumberOfResults;
    /**
     * Constructor method for SimpleRegionResultSetType
     * @uses SimpleRegionResultSetType::setSimpleListItem()
     * @uses SimpleRegionResultSetType::setAlternatives()
     * @uses SimpleRegionResultSetType::setTotalNumberOfResults()
     * @param \StructType\SimpleRegionOfferType[] $simpleListItem
     * @param bool $alternatives
     * @param int $totalNumberOfResults
     */
    public function __construct(array $simpleListItem = array(), $alternatives = null, $totalNumberOfResults = null)
    {
        $this
            ->setSimpleListItem($simpleListItem)
            ->setAlternatives($alternatives)
            ->setTotalNumberOfResults($totalNumberOfResults);
    }
    /**
     * Get SimpleListItem value
     * @return \StructType\SimpleRegionOfferType[]|null
     */
    public function getSimpleListItem()
    {
        return $this->SimpleListItem;
    }
    /**
     * Set SimpleListItem value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleRegionOfferType[] $simpleListItem
     * @return \StructType\SimpleRegionResultSetType
     */
    public function setSimpleListItem(array $simpleListItem = array())
    {
        foreach ($simpleListItem as $simpleRegionResultSetTypeSimpleListItemItem) {
            // validation for constraint: itemType
            if (!$simpleRegionResultSetTypeSimpleListItemItem instanceof \StructType\SimpleRegionOfferType) {
                throw new \InvalidArgumentException(sprintf('The SimpleListItem property can only contain items of \StructType\SimpleRegionOfferType, "%s" given', is_object($simpleRegionResultSetTypeSimpleListItemItem) ? get_class($simpleRegionResultSetTypeSimpleListItemItem) : gettype($simpleRegionResultSetTypeSimpleListItemItem)), __LINE__);
            }
        }
        $this->SimpleListItem = $simpleListItem;
        return $this;
    }
    /**
     * Add item to SimpleListItem value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleRegionOfferType $item
     * @return \StructType\SimpleRegionResultSetType
     */
    public function addToSimpleListItem(\StructType\SimpleRegionOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SimpleRegionOfferType) {
            throw new \InvalidArgumentException(sprintf('The SimpleListItem property can only contain items of \StructType\SimpleRegionOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SimpleListItem[] = $item;
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
     * @return \StructType\SimpleRegionResultSetType
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
     * @return \StructType\SimpleRegionResultSetType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleRegionResultSetType
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
