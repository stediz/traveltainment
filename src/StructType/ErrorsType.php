<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorsType StructType
 * @subpackage Structs
 */
class ErrorsType extends AbstractStructBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\ErrorType[]
     */
    public $Error;
    /**
     * Constructor method for ErrorsType
     * @uses ErrorsType::setError()
     * @param \traveltainment\SOAP17\StructType\ErrorType[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \traveltainment\SOAP17\StructType\ErrorType[]|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ErrorType[] $error
     * @return \traveltainment\SOAP17\StructType\ErrorsType
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errorsTypeErrorItem) {
            // validation for constraint: itemType
            if (!$errorsTypeErrorItem instanceof \traveltainment\SOAP17\StructType\ErrorType) {
                throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \traveltainment\SOAP17\StructType\ErrorType, "%s" given', is_object($errorsTypeErrorItem) ? get_class($errorsTypeErrorItem) : gettype($errorsTypeErrorItem)), __LINE__);
            }
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ErrorType $item
     * @return \traveltainment\SOAP17\StructType\ErrorsType
     */
    public function addToError(\traveltainment\SOAP17\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \traveltainment\SOAP17\StructType\ErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ErrorsType
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
