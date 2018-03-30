<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderInfoMessagesType StructType
 * @subpackage Structs
 */
class ProviderInfoMessagesType extends AbstractStructBase
{
    /**
     * The ProviderInfoMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ProviderInfoMessage;
    /**
     * Constructor method for ProviderInfoMessagesType
     * @uses ProviderInfoMessagesType::setProviderInfoMessage()
     * @param string[] $providerInfoMessage
     */
    public function __construct(array $providerInfoMessage = array())
    {
        $this
            ->setProviderInfoMessage($providerInfoMessage);
    }
    /**
     * Get ProviderInfoMessage value
     * @return string[]|null
     */
    public function getProviderInfoMessage()
    {
        return $this->ProviderInfoMessage;
    }
    /**
     * Set ProviderInfoMessage value
     * @throws \InvalidArgumentException
     * @param string[] $providerInfoMessage
     * @return \traveltainment\SOAP17\StructType\ProviderInfoMessagesType
     */
    public function setProviderInfoMessage(array $providerInfoMessage = array())
    {
        foreach ($providerInfoMessage as $providerInfoMessagesTypeProviderInfoMessageItem) {
            // validation for constraint: itemType
            if (!is_string($providerInfoMessagesTypeProviderInfoMessageItem)) {
                throw new \InvalidArgumentException(sprintf('The ProviderInfoMessage property can only contain items of string, "%s" given', is_object($providerInfoMessagesTypeProviderInfoMessageItem) ? get_class($providerInfoMessagesTypeProviderInfoMessageItem) : gettype($providerInfoMessagesTypeProviderInfoMessageItem)), __LINE__);
            }
        }
        $this->ProviderInfoMessage = $providerInfoMessage;
        return $this;
    }
    /**
     * Add item to ProviderInfoMessage value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\ProviderInfoMessagesType
     */
    public function addToProviderInfoMessage($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ProviderInfoMessage property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProviderInfoMessage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ProviderInfoMessagesType
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
