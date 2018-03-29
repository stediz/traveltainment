<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedKeyValueListType StructType
 * @subpackage Structs
 */
class ExtendedKeyValueListType extends AbstractStructBase
{
    /**
     * The Param
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtendedKeyValueType[]
     */
    public $Param;
    /**
     * Constructor method for ExtendedKeyValueListType
     * @uses ExtendedKeyValueListType::setParam()
     * @param \StructType\ExtendedKeyValueType[] $param
     */
    public function __construct(array $param = array())
    {
        $this
            ->setParam($param);
    }
    /**
     * Get Param value
     * @return \StructType\ExtendedKeyValueType[]|null
     */
    public function getParam()
    {
        return $this->Param;
    }
    /**
     * Set Param value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtendedKeyValueType[] $param
     * @return \StructType\ExtendedKeyValueListType
     */
    public function setParam(array $param = array())
    {
        foreach ($param as $extendedKeyValueListTypeParamItem) {
            // validation for constraint: itemType
            if (!$extendedKeyValueListTypeParamItem instanceof \StructType\ExtendedKeyValueType) {
                throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \StructType\ExtendedKeyValueType, "%s" given', is_object($extendedKeyValueListTypeParamItem) ? get_class($extendedKeyValueListTypeParamItem) : gettype($extendedKeyValueListTypeParamItem)), __LINE__);
            }
        }
        $this->Param = $param;
        return $this;
    }
    /**
     * Add item to Param value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtendedKeyValueType $item
     * @return \StructType\ExtendedKeyValueListType
     */
    public function addToParam(\StructType\ExtendedKeyValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtendedKeyValueType) {
            throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \StructType\ExtendedKeyValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\ExtendedKeyValueListType
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
