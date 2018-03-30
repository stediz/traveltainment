<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InclusiveDetailsType StructType
 * @subpackage Structs
 */
class InclusiveDetailsType extends AbstractStructBase
{
    /**
     * The InclusiveDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConditionDetailType[]
     */
    public $InclusiveDetail;
    /**
     * Constructor method for InclusiveDetailsType
     * @uses InclusiveDetailsType::setInclusiveDetail()
     * @param \traveltainment\SOAP17\StructType\ConditionDetailType[] $inclusiveDetail
     */
    public function __construct(array $inclusiveDetail = array())
    {
        $this
            ->setInclusiveDetail($inclusiveDetail);
    }
    /**
     * Get InclusiveDetail value
     * @return \traveltainment\SOAP17\StructType\ConditionDetailType[]|null
     */
    public function getInclusiveDetail()
    {
        return $this->InclusiveDetail;
    }
    /**
     * Set InclusiveDetail value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConditionDetailType[] $inclusiveDetail
     * @return \traveltainment\SOAP17\StructType\InclusiveDetailsType
     */
    public function setInclusiveDetail(array $inclusiveDetail = array())
    {
        foreach ($inclusiveDetail as $inclusiveDetailsTypeInclusiveDetailItem) {
            // validation for constraint: itemType
            if (!$inclusiveDetailsTypeInclusiveDetailItem instanceof \traveltainment\SOAP17\StructType\ConditionDetailType) {
                throw new \InvalidArgumentException(sprintf('The InclusiveDetail property can only contain items of \traveltainment\SOAP17\StructType\ConditionDetailType, "%s" given', is_object($inclusiveDetailsTypeInclusiveDetailItem) ? get_class($inclusiveDetailsTypeInclusiveDetailItem) : gettype($inclusiveDetailsTypeInclusiveDetailItem)), __LINE__);
            }
        }
        $this->InclusiveDetail = $inclusiveDetail;
        return $this;
    }
    /**
     * Add item to InclusiveDetail value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConditionDetailType $item
     * @return \traveltainment\SOAP17\StructType\InclusiveDetailsType
     */
    public function addToInclusiveDetail(\traveltainment\SOAP17\StructType\ConditionDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConditionDetailType) {
            throw new \InvalidArgumentException(sprintf('The InclusiveDetail property can only contain items of \traveltainment\SOAP17\StructType\ConditionDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InclusiveDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\InclusiveDetailsType
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
