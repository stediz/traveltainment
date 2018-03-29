<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ErrorCode
     * @var string
     */
    public $ErrorCode;
    /**
     * The ErrorMsg
     * @var \StructType\ErrorMsgType
     */
    public $ErrorMsg;
    /**
     * The ErrorDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ErrorDetailsType
     */
    public $ErrorDetails;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setErrorCode()
     * @uses ErrorType::setErrorMsg()
     * @uses ErrorType::setErrorDetails()
     * @param string $errorCode
     * @param \StructType\ErrorMsgType $errorMsg
     * @param \StructType\ErrorDetailsType $errorDetails
     */
    public function __construct($errorCode = null, \StructType\ErrorMsgType $errorMsg = null, \StructType\ErrorDetailsType $errorDetails = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMsg($errorMsg)
            ->setErrorDetails($errorDetails);
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \EnumType\ErrorCodeEnum::valueIsValid()
     * @uses \EnumType\ErrorCodeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorCode
     * @return \StructType\ErrorType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ErrorCodeEnum::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorCode, implode(', ', \EnumType\ErrorCodeEnum::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ErrorMsg value
     * @return \StructType\ErrorMsgType|null
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }
    /**
     * Set ErrorMsg value
     * @param \StructType\ErrorMsgType $errorMsg
     * @return \StructType\ErrorType
     */
    public function setErrorMsg(\StructType\ErrorMsgType $errorMsg = null)
    {
        $this->ErrorMsg = $errorMsg;
        return $this;
    }
    /**
     * Get ErrorDetails value
     * @return \StructType\ErrorDetailsType|null
     */
    public function getErrorDetails()
    {
        return $this->ErrorDetails;
    }
    /**
     * Set ErrorDetails value
     * @param \StructType\ErrorDetailsType $errorDetails
     * @return \StructType\ErrorType
     */
    public function setErrorDetails(\StructType\ErrorDetailsType $errorDetails = null)
    {
        $this->ErrorDetails = $errorDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ErrorType
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
