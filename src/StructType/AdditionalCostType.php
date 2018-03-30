<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalCostType StructType
 * @subpackage Structs
 */
class AdditionalCostType extends AbstractStructBase
{
    /**
     * The AddCostInfoAvailable
     * @var string
     */
    public $AddCostInfoAvailable;
    /**
     * The AddCostInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddCostInfo;
    /**
     * Constructor method for AdditionalCostType
     * @uses AdditionalCostType::setAddCostInfoAvailable()
     * @uses AdditionalCostType::setAddCostInfo()
     * @param string $addCostInfoAvailable
     * @param string $addCostInfo
     */
    public function __construct($addCostInfoAvailable = null, $addCostInfo = null)
    {
        $this
            ->setAddCostInfoAvailable($addCostInfoAvailable)
            ->setAddCostInfo($addCostInfo);
    }
    /**
     * Get AddCostInfoAvailable value
     * @return string|null
     */
    public function getAddCostInfoAvailable()
    {
        return $this->AddCostInfoAvailable;
    }
    /**
     * Set AddCostInfoAvailable value
     * @uses \traveltainment\SOAP17\EnumType\AddCostInfoAvailableEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\AddCostInfoAvailableEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addCostInfoAvailable
     * @return \traveltainment\SOAP17\StructType\AdditionalCostType
     */
    public function setAddCostInfoAvailable($addCostInfoAvailable = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\AddCostInfoAvailableEnum::valueIsValid($addCostInfoAvailable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addCostInfoAvailable, implode(', ', \traveltainment\SOAP17\EnumType\AddCostInfoAvailableEnum::getValidValues())), __LINE__);
        }
        $this->AddCostInfoAvailable = $addCostInfoAvailable;
        return $this;
    }
    /**
     * Get AddCostInfo value
     * @return string|null
     */
    public function getAddCostInfo()
    {
        return $this->AddCostInfo;
    }
    /**
     * Set AddCostInfo value
     * @param string $addCostInfo
     * @return \traveltainment\SOAP17\StructType\AdditionalCostType
     */
    public function setAddCostInfo($addCostInfo = null)
    {
        // validation for constraint: string
        if (!is_null($addCostInfo) && !is_string($addCostInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addCostInfo)), __LINE__);
        }
        $this->AddCostInfo = $addCostInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AdditionalCostType
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
