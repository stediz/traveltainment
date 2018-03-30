<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarRentalOfferConditionsRSType StructType
 * @subpackage Structs
 */
class GetCarRentalOfferConditionsRSType extends ResponseType
{
    /**
     * The Errors
     * @var \traveltainment\SOAP17\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConditionsType
     */
    public $Conditions;
    /**
     * Constructor method for GetCarRentalOfferConditionsRSType
     * @uses GetCarRentalOfferConditionsRSType::setErrors()
     * @uses GetCarRentalOfferConditionsRSType::setConditions()
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @param \traveltainment\SOAP17\StructType\ConditionsType $conditions
     */
    public function __construct(\traveltainment\SOAP17\StructType\ErrorsType $errors = null, \traveltainment\SOAP17\StructType\ConditionsType $conditions = null)
    {
        $this
            ->setErrors($errors)
            ->setConditions($conditions);
    }
    /**
     * Get Errors value
     * @return \traveltainment\SOAP17\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferConditionsRSType
     */
    public function setErrors(\traveltainment\SOAP17\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Conditions value
     * @return \traveltainment\SOAP17\StructType\ConditionsType|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }
    /**
     * Set Conditions value
     * @param \traveltainment\SOAP17\StructType\ConditionsType $conditions
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferConditionsRSType
     */
    public function setConditions(\traveltainment\SOAP17\StructType\ConditionsType $conditions = null)
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
     * @return \traveltainment\SOAP17\StructType\GetCarRentalOfferConditionsRSType
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
