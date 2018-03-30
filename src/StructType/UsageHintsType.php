<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsageHintsType StructType
 * @subpackage Structs
 */
class UsageHintsType extends AbstractStructBase
{
    /**
     * The UsageHint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $UsageHint;
    /**
     * Constructor method for UsageHintsType
     * @uses UsageHintsType::setUsageHint()
     * @param string[] $usageHint
     */
    public function __construct(array $usageHint = array())
    {
        $this
            ->setUsageHint($usageHint);
    }
    /**
     * Get UsageHint value
     * @return string[]
     */
    public function getUsageHint()
    {
        return $this->UsageHint;
    }
    /**
     * Set UsageHint value
     * @throws \InvalidArgumentException
     * @param string[] $usageHint
     * @return \traveltainment\SOAP17\StructType\UsageHintsType
     */
    public function setUsageHint(array $usageHint = array())
    {
        foreach ($usageHint as $usageHintsTypeUsageHintItem) {
            // validation for constraint: itemType
            if (!is_string($usageHintsTypeUsageHintItem)) {
                throw new \InvalidArgumentException(sprintf('The UsageHint property can only contain items of string, "%s" given', is_object($usageHintsTypeUsageHintItem) ? get_class($usageHintsTypeUsageHintItem) : gettype($usageHintsTypeUsageHintItem)), __LINE__);
            }
        }
        $this->UsageHint = $usageHint;
        return $this;
    }
    /**
     * Add item to UsageHint value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\UsageHintsType
     */
    public function addToUsageHint($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The UsageHint property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UsageHint[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\UsageHintsType
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
