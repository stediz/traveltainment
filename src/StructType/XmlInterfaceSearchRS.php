<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XmlInterfaceSearchRS StructType
 * @subpackage Structs
 */
class XmlInterfaceSearchRS extends XmlInterfaceRS
{
    /**
     * The ResultSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \StructType\ResultSetList[]
     */
    public $ResultSet;
    /**
     * Constructor method for XmlInterfaceSearchRS
     * @uses XmlInterfaceSearchRS::setResultSet()
     * @param \StructType\ResultSetList[] $resultSet
     */
    public function __construct(array $resultSet = array())
    {
        $this
            ->setResultSet($resultSet);
    }
    /**
     * Get ResultSet value
     * @return \StructType\ResultSetList[]|null
     */
    public function getResultSet()
    {
        return $this->ResultSet;
    }
    /**
     * Set ResultSet value
     * @throws \InvalidArgumentException
     * @param \StructType\ResultSetList[] $resultSet
     * @return \StructType\XmlInterfaceSearchRS
     */
    public function setResultSet(array $resultSet = array())
    {
        foreach ($resultSet as $xmlInterfaceSearchRSResultSetItem) {
            // validation for constraint: itemType
            if (!$xmlInterfaceSearchRSResultSetItem instanceof \StructType\ResultSetList) {
                throw new \InvalidArgumentException(sprintf('The ResultSet property can only contain items of \StructType\ResultSetList, "%s" given', is_object($xmlInterfaceSearchRSResultSetItem) ? get_class($xmlInterfaceSearchRSResultSetItem) : gettype($xmlInterfaceSearchRSResultSetItem)), __LINE__);
            }
        }
        $this->ResultSet = $resultSet;
        return $this;
    }
    /**
     * Add item to ResultSet value
     * @throws \InvalidArgumentException
     * @param \StructType\ResultSetList $item
     * @return \StructType\XmlInterfaceSearchRS
     */
    public function addToResultSet(\StructType\ResultSetList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResultSetList) {
            throw new \InvalidArgumentException(sprintf('The ResultSet property can only contain items of \StructType\ResultSetList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\XmlInterfaceSearchRS
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
