<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\ErrorDetailType[]
     */
    public $ErrorDetail;
    /**
     * Constructor method for ErrorDetailsType
     * @uses ErrorDetailsType::setErrorDetail()
     * @param \traveltainment\SOAP17\StructType\ErrorDetailType[] $errorDetail
     */
    public function __construct(array $errorDetail = array())
    {
        $this
            ->setErrorDetail($errorDetail);
    }
    /**
     * Get ErrorDetail value
     * @return \traveltainment\SOAP17\StructType\ErrorDetailType[]|null
     */
    public function getErrorDetail()
    {
        return $this->ErrorDetail;
    }
    /**
     * Set ErrorDetail value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ErrorDetailType[] $errorDetail
     * @return \traveltainment\SOAP17\StructType\ErrorDetailsType
     */
    public function setErrorDetail(array $errorDetail = array())
    {
        foreach ($errorDetail as $errorDetailsTypeErrorDetailItem) {
            // validation for constraint: itemType
            if (!$errorDetailsTypeErrorDetailItem instanceof \traveltainment\SOAP17\StructType\ErrorDetailType) {
                throw new \InvalidArgumentException(sprintf('The ErrorDetail property can only contain items of \traveltainment\SOAP17\StructType\ErrorDetailType, "%s" given', is_object($errorDetailsTypeErrorDetailItem) ? get_class($errorDetailsTypeErrorDetailItem) : gettype($errorDetailsTypeErrorDetailItem)), __LINE__);
            }
        }
        $this->ErrorDetail = $errorDetail;
        return $this;
    }
    /**
     * Add item to ErrorDetail value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ErrorDetailType $item
     * @return \traveltainment\SOAP17\StructType\ErrorDetailsType
     */
    public function addToErrorDetail(\traveltainment\SOAP17\StructType\ErrorDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ErrorDetailType) {
            throw new \InvalidArgumentException(sprintf('The ErrorDetail property can only contain items of \traveltainment\SOAP17\StructType\ErrorDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\ErrorDetailsType
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
