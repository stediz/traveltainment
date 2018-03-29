<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorDetailsType StructType
 * @subpackage Structs
 */
class ErrorDetailsType extends AbstractStructBase
{
    /**
     * The ErrorDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ErrorDetailType[]
     */
    public $ErrorDetail;
    /**
     * Constructor method for ErrorDetailsType
     * @uses ErrorDetailsType::setErrorDetail()
     * @param \StructType\ErrorDetailType[] $errorDetail
     */
    public function __construct(array $errorDetail = array())
    {
        $this
            ->setErrorDetail($errorDetail);
    }
    /**
     * Get ErrorDetail value
     * @return \StructType\ErrorDetailType[]|null
     */
    public function getErrorDetail()
    {
        return $this->ErrorDetail;
    }
    /**
     * Set ErrorDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorDetailType[] $errorDetail
     * @return \StructType\ErrorDetailsType
     */
    public function setErrorDetail(array $errorDetail = array())
    {
        foreach ($errorDetail as $errorDetailsTypeErrorDetailItem) {
            // validation for constraint: itemType
            if (!$errorDetailsTypeErrorDetailItem instanceof \StructType\ErrorDetailType) {
                throw new \InvalidArgumentException(sprintf('The ErrorDetail property can only contain items of \StructType\ErrorDetailType, "%s" given', is_object($errorDetailsTypeErrorDetailItem) ? get_class($errorDetailsTypeErrorDetailItem) : gettype($errorDetailsTypeErrorDetailItem)), __LINE__);
            }
        }
        $this->ErrorDetail = $errorDetail;
        return $this;
    }
    /**
     * Add item to ErrorDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorDetailType $item
     * @return \StructType\ErrorDetailsType
     */
    public function addToErrorDetail(\StructType\ErrorDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ErrorDetailType) {
            throw new \InvalidArgumentException(sprintf('The ErrorDetail property can only contain items of \StructType\ErrorDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ErrorDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ErrorDetailsType
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
