<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperatorHintsType StructType
 * @subpackage Structs
 */
class OperatorHintsType extends AbstractStructBase
{
    /**
     * The OperatorHint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $OperatorHint;
    /**
     * Constructor method for OperatorHintsType
     * @uses OperatorHintsType::setOperatorHint()
     * @param string[] $operatorHint
     */
    public function __construct(array $operatorHint = array())
    {
        $this
            ->setOperatorHint($operatorHint);
    }
    /**
     * Get OperatorHint value
     * @return string[]
     */
    public function getOperatorHint()
    {
        return $this->OperatorHint;
    }
    /**
     * Set OperatorHint value
     * @throws \InvalidArgumentException
     * @param string[] $operatorHint
     * @return \StructType\OperatorHintsType
     */
    public function setOperatorHint(array $operatorHint = array())
    {
        foreach ($operatorHint as $operatorHintsTypeOperatorHintItem) {
            // validation for constraint: itemType
            if (!is_string($operatorHintsTypeOperatorHintItem)) {
                throw new \InvalidArgumentException(sprintf('The OperatorHint property can only contain items of string, "%s" given', is_object($operatorHintsTypeOperatorHintItem) ? get_class($operatorHintsTypeOperatorHintItem) : gettype($operatorHintsTypeOperatorHintItem)), __LINE__);
            }
        }
        $this->OperatorHint = $operatorHint;
        return $this;
    }
    /**
     * Add item to OperatorHint value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\OperatorHintsType
     */
    public function addToOperatorHint($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The OperatorHint property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperatorHint[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OperatorHintsType
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
