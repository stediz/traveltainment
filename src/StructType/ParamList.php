<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParamList StructType
 * @subpackage Structs
 */
class ParamList extends AbstractStructBase
{
    /**
     * The Param
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\ParamType[]
     */
    public $Param;
    /**
     * Constructor method for ParamList
     * @uses ParamList::setParam()
     * @param \traveltainment\SOAP17\StructType\ParamType[] $param
     */
    public function __construct(array $param = array())
    {
        $this
            ->setParam($param);
    }
    /**
     * Get Param value
     * @return \traveltainment\SOAP17\StructType\ParamType[]|null
     */
    public function getParam()
    {
        return $this->Param;
    }
    /**
     * Set Param value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ParamType[] $param
     * @return \traveltainment\SOAP17\StructType\ParamList
     */
    public function setParam(array $param = array())
    {
        foreach ($param as $paramListParamItem) {
            // validation for constraint: itemType
            if (!$paramListParamItem instanceof \traveltainment\SOAP17\StructType\ParamType) {
                throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \traveltainment\SOAP17\StructType\ParamType, "%s" given', is_object($paramListParamItem) ? get_class($paramListParamItem) : gettype($paramListParamItem)), __LINE__);
            }
        }
        $this->Param = $param;
        return $this;
    }
    /**
     * Add item to Param value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ParamType $item
     * @return \traveltainment\SOAP17\StructType\ParamList
     */
    public function addToParam(\traveltainment\SOAP17\StructType\ParamType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ParamType) {
            throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \traveltainment\SOAP17\StructType\ParamType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\ParamList
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
