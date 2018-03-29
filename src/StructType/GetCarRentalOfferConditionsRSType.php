<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalOfferConditionsRSType StructType
 * @subpackage Structs
 */
class GetCarRentalOfferConditionsRSType extends ResponseType
{
    /**
     * The Errors
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ConditionsType
     */
    public $Conditions;
    /**
     * Constructor method for GetCarRentalOfferConditionsRSType
     * @uses GetCarRentalOfferConditionsRSType::setErrors()
     * @uses GetCarRentalOfferConditionsRSType::setConditions()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\ConditionsType $conditions
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\ConditionsType $conditions = null)
    {
        $this
            ->setErrors($errors)
            ->setConditions($conditions);
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \StructType\ErrorsType $errors
     * @return \StructType\GetCarRentalOfferConditionsRSType
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Conditions value
     * @return \StructType\ConditionsType|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }
    /**
     * Set Conditions value
     * @param \StructType\ConditionsType $conditions
     * @return \StructType\GetCarRentalOfferConditionsRSType
     */
    public function setConditions(\StructType\ConditionsType $conditions = null)
    {
        $this->Conditions = $conditions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCarRentalOfferConditionsRSType
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
