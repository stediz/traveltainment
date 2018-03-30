<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalReturnInfoType StructType
 * @subpackage Structs
 */
class CarRentalReturnInfoType extends AbstractStructBase
{
    /**
     * The ReturnStationCode
     * Meta informations extracted from the WSDL
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $ReturnStationCode;
    /**
     * The ReturnDateTime
     * @var string
     */
    public $ReturnDateTime;
    /**
     * Constructor method for CarRentalReturnInfoType
     * @uses CarRentalReturnInfoType::setReturnStationCode()
     * @uses CarRentalReturnInfoType::setReturnDateTime()
     * @param string $returnStationCode
     * @param string $returnDateTime
     */
    public function __construct($returnStationCode = null, $returnDateTime = null)
    {
        $this
            ->setReturnStationCode($returnStationCode)
            ->setReturnDateTime($returnDateTime);
    }
    /**
     * Get ReturnStationCode value
     * @return string|null
     */
    public function getReturnStationCode()
    {
        return $this->ReturnStationCode;
    }
    /**
     * Set ReturnStationCode value
     * @param string $returnStationCode
     * @return \traveltainment\SOAP17\StructType\CarRentalReturnInfoType
     */
    public function setReturnStationCode($returnStationCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($returnStationCode) && strlen($returnStationCode) > 16) || (is_array($returnStationCode) && count($returnStationCode) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($returnStationCode) ? strlen($returnStationCode) : count($returnStationCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($returnStationCode) && strlen($returnStationCode) < 1) || (is_array($returnStationCode) && count($returnStationCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($returnStationCode) && !is_string($returnStationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnStationCode)), __LINE__);
        }
        $this->ReturnStationCode = $returnStationCode;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \traveltainment\SOAP17\StructType\CarRentalReturnInfoType
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalReturnInfoType
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
