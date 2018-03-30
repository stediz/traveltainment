<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionsType StructType
 * @subpackage Structs
 */
class ConditionsType extends AbstractStructBase
{
    /**
     * The Condition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConditionType[]
     */
    public $Condition;
    /**
     * Constructor method for ConditionsType
     * @uses ConditionsType::setCondition()
     * @param \traveltainment\SOAP17\StructType\ConditionType[] $condition
     */
    public function __construct(array $condition = array())
    {
        $this
            ->setCondition($condition);
    }
    /**
     * Get Condition value
     * @return \traveltainment\SOAP17\StructType\ConditionType[]|null
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConditionType[] $condition
     * @return \traveltainment\SOAP17\StructType\ConditionsType
     */
    public function setCondition(array $condition = array())
    {
        foreach ($condition as $conditionsTypeConditionItem) {
            // validation for constraint: itemType
            if (!$conditionsTypeConditionItem instanceof \traveltainment\SOAP17\StructType\ConditionType) {
                throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of \traveltainment\SOAP17\StructType\ConditionType, "%s" given', is_object($conditionsTypeConditionItem) ? get_class($conditionsTypeConditionItem) : gettype($conditionsTypeConditionItem)), __LINE__);
            }
        }
        $this->Condition = $condition;
        return $this;
    }
    /**
     * Add item to Condition value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConditionType $item
     * @return \traveltainment\SOAP17\StructType\ConditionsType
     */
    public function addToCondition(\traveltainment\SOAP17\StructType\ConditionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConditionType) {
            throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of \traveltainment\SOAP17\StructType\ConditionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Condition[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ConditionsType
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
