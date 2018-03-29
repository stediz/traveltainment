<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardInfoType StructType
 * @subpackage Structs
 */
class CreditCardInfoType extends AbstractStructBase
{
    /**
     * The CreditCardType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CreditCardType;
    /**
     * The ServiceProvider
     * @var string
     */
    public $ServiceProvider;
    /**
     * Constructor method for CreditCardInfoType
     * @uses CreditCardInfoType::setCreditCardType()
     * @uses CreditCardInfoType::setServiceProvider()
     * @param string $creditCardType
     * @param string $serviceProvider
     */
    public function __construct($creditCardType = null, $serviceProvider = null)
    {
        $this
            ->setCreditCardType($creditCardType)
            ->setServiceProvider($serviceProvider);
    }
    /**
     * Get CreditCardType value
     * @return string
     */
    public function getCreditCardType()
    {
        return $this->CreditCardType;
    }
    /**
     * Set CreditCardType value
     * @uses \EnumType\CardCodeEnum::valueIsValid()
     * @uses \EnumType\CardCodeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $creditCardType
     * @return \StructType\CreditCardInfoType
     */
    public function setCreditCardType($creditCardType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CardCodeEnum::valueIsValid($creditCardType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $creditCardType, implode(', ', \EnumType\CardCodeEnum::getValidValues())), __LINE__);
        }
        $this->CreditCardType = $creditCardType;
        return $this;
    }
    /**
     * Get ServiceProvider value
     * @return string|null
     */
    public function getServiceProvider()
    {
        return $this->ServiceProvider;
    }
    /**
     * Set ServiceProvider value
     * @uses \EnumType\ServiceProviderEnum::valueIsValid()
     * @uses \EnumType\ServiceProviderEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceProvider
     * @return \StructType\CreditCardInfoType
     */
    public function setServiceProvider($serviceProvider = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ServiceProviderEnum::valueIsValid($serviceProvider)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceProvider, implode(', ', \EnumType\ServiceProviderEnum::getValidValues())), __LINE__);
        }
        $this->ServiceProvider = $serviceProvider;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreditCardInfoType
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
