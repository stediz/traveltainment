<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEngineSimpleRegionListRS StructType
 * @subpackage Structs
 */
class SearchEngineSimpleRegionListRS extends XmlInterfaceRS
{
    /**
     * The SimpleRegionResultSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SimpleRegionResultSetType[]
     */
    public $SimpleRegionResultSet;
    /**
     * Constructor method for SearchEngineSimpleRegionListRS
     * @uses SearchEngineSimpleRegionListRS::setSimpleRegionResultSet()
     * @param \traveltainment\SOAP17\StructType\SimpleRegionResultSetType[] $simpleRegionResultSet
     */
    public function __construct(array $simpleRegionResultSet = array())
    {
        $this
            ->setSimpleRegionResultSet($simpleRegionResultSet);
    }
    /**
     * Get SimpleRegionResultSet value
     * @return \traveltainment\SOAP17\StructType\SimpleRegionResultSetType[]|null
     */
    public function getSimpleRegionResultSet()
    {
        return $this->SimpleRegionResultSet;
    }
    /**
     * Set SimpleRegionResultSet value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\SimpleRegionResultSetType[] $simpleRegionResultSet
     * @return \traveltainment\SOAP17\StructType\SearchEngineSimpleRegionListRS
     */
    public function setSimpleRegionResultSet(array $simpleRegionResultSet = array())
    {
        foreach ($simpleRegionResultSet as $searchEngineSimpleRegionListRSSimpleRegionResultSetItem) {
            // validation for constraint: itemType
            if (!$searchEngineSimpleRegionListRSSimpleRegionResultSetItem instanceof \traveltainment\SOAP17\StructType\SimpleRegionResultSetType) {
                throw new \InvalidArgumentException(sprintf('The SimpleRegionResultSet property can only contain items of \traveltainment\SOAP17\StructType\SimpleRegionResultSetType, "%s" given', is_object($searchEngineSimpleRegionListRSSimpleRegionResultSetItem) ? get_class($searchEngineSimpleRegionListRSSimpleRegionResultSetItem) : gettype($searchEngineSimpleRegionListRSSimpleRegionResultSetItem)), __LINE__);
            }
        }
        $this->SimpleRegionResultSet = $simpleRegionResultSet;
        return $this;
    }
    /**
     * Add item to SimpleRegionResultSet value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\SimpleRegionResultSetType $item
     * @return \traveltainment\SOAP17\StructType\SearchEngineSimpleRegionListRS
     */
    public function addToSimpleRegionResultSet(\traveltainment\SOAP17\StructType\SimpleRegionResultSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\SimpleRegionResultSetType) {
            throw new \InvalidArgumentException(sprintf('The SimpleRegionResultSet property can only contain items of \traveltainment\SOAP17\StructType\SimpleRegionResultSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SimpleRegionResultSet[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SearchEngineSimpleRegionListRS
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
