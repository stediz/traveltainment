<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardType StructType
 * @subpackage Structs
 */
class CreditCardType extends AbstractStructBase
{
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CardType;
    /**
     * The ServiceProvider
     * @var string
     */
    public $ServiceProvider;
    /**
     * Constructor method for CreditCardType
     * @uses CreditCardType::setCardType()
     * @uses CreditCardType::setServiceProvider()
     * @param string $cardType
     * @param string $serviceProvider
     */
    public function __construct($cardType = null, $serviceProvider = null)
    {
        $this
            ->setCardType($cardType)
            ->setServiceProvider($serviceProvider);
    }
    /**
     * Get CardType value
     * @return string
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @uses \traveltainment\SOAP17\EnumType\CardCodeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CardCodeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cardType
     * @return \traveltainment\SOAP17\StructType\CreditCardType
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CardCodeEnum::valueIsValid($cardType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cardType, implode(', ', \traveltainment\SOAP17\EnumType\CardCodeEnum::getValidValues())), __LINE__);
        }
        $this->CardType = $cardType;
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
     * @uses \traveltainment\SOAP17\EnumType\ServiceProviderEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\ServiceProviderEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceProvider
     * @return \traveltainment\SOAP17\StructType\CreditCardType
     */
    public function setServiceProvider($serviceProvider = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\ServiceProviderEnum::valueIsValid($serviceProvider)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceProvider, implode(', ', \traveltainment\SOAP17\EnumType\ServiceProviderEnum::getValidValues())), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\CreditCardType
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
