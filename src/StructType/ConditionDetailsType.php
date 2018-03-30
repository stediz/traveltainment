<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionDetailsType StructType
 * @subpackage Structs
 */
class ConditionDetailsType extends AbstractStructBase
{
    /**
     * The ConditionDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConditionDetailType[]
     */
    public $ConditionDetail;
    /**
     * Constructor method for ConditionDetailsType
     * @uses ConditionDetailsType::setConditionDetail()
     * @param \traveltainment\SOAP17\StructType\ConditionDetailType[] $conditionDetail
     */
    public function __construct(array $conditionDetail = array())
    {
        $this
            ->setConditionDetail($conditionDetail);
    }
    /**
     * Get ConditionDetail value
     * @return \traveltainment\SOAP17\StructType\ConditionDetailType[]|null
     */
    public function getConditionDetail()
    {
        return $this->ConditionDetail;
    }
    /**
     * Set ConditionDetail value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConditionDetailType[] $conditionDetail
     * @return \traveltainment\SOAP17\StructType\ConditionDetailsType
     */
    public function setConditionDetail(array $conditionDetail = array())
    {
        foreach ($conditionDetail as $conditionDetailsTypeConditionDetailItem) {
            // validation for constraint: itemType
            if (!$conditionDetailsTypeConditionDetailItem instanceof \traveltainment\SOAP17\StructType\ConditionDetailType) {
                throw new \InvalidArgumentException(sprintf('The ConditionDetail property can only contain items of \traveltainment\SOAP17\StructType\ConditionDetailType, "%s" given', is_object($conditionDetailsTypeConditionDetailItem) ? get_class($conditionDetailsTypeConditionDetailItem) : gettype($conditionDetailsTypeConditionDetailItem)), __LINE__);
            }
        }
        $this->ConditionDetail = $conditionDetail;
        return $this;
    }
    /**
     * Add item to ConditionDetail value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConditionDetailType $item
     * @return \traveltainment\SOAP17\StructType\ConditionDetailsType
     */
    public function addToConditionDetail(\traveltainment\SOAP17\StructType\ConditionDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConditionDetailType) {
            throw new \InvalidArgumentException(sprintf('The ConditionDetail property can only contain items of \traveltainment\SOAP17\StructType\ConditionDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConditionDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ConditionDetailsType
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
