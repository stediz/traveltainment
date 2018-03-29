<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueListType StructType
 * @subpackage Structs
 */
class KeyValueListType extends AbstractStructBase
{
    /**
     * The Param
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\KeyValueType[]
     */
    public $Param;
    /**
     * Constructor method for KeyValueListType
     * @uses KeyValueListType::setParam()
     * @param \StructType\KeyValueType[] $param
     */
    public function __construct(array $param = array())
    {
        $this
            ->setParam($param);
    }
    /**
     * Get Param value
     * @return \StructType\KeyValueType[]|null
     */
    public function getParam()
    {
        return $this->Param;
    }
    /**
     * Set Param value
     * @throws \InvalidArgumentException
     * @param \StructType\KeyValueType[] $param
     * @return \StructType\KeyValueListType
     */
    public function setParam(array $param = array())
    {
        foreach ($param as $keyValueListTypeParamItem) {
            // validation for constraint: itemType
            if (!$keyValueListTypeParamItem instanceof \StructType\KeyValueType) {
                throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \StructType\KeyValueType, "%s" given', is_object($keyValueListTypeParamItem) ? get_class($keyValueListTypeParamItem) : gettype($keyValueListTypeParamItem)), __LINE__);
            }
        }
        $this->Param = $param;
        return $this;
    }
    /**
     * Add item to Param value
     * @throws \InvalidArgumentException
     * @param \StructType\KeyValueType $item
     * @return \StructType\KeyValueListType
     */
    public function addToParam(\StructType\KeyValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\KeyValueType) {
            throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \StructType\KeyValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Param[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\KeyValueListType
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
