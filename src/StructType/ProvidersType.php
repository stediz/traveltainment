<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProvidersType StructType
 * @subpackage Structs
 */
class ProvidersType extends AbstractStructBase
{
    /**
     * The ProviderID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ProviderID;
    /**
     * Constructor method for ProvidersType
     * @uses ProvidersType::setProviderID()
     * @param string[] $providerID
     */
    public function __construct(array $providerID = array())
    {
        $this
            ->setProviderID($providerID);
    }
    /**
     * Get ProviderID value
     * @return string[]|null
     */
    public function getProviderID()
    {
        return $this->ProviderID;
    }
    /**
     * Set ProviderID value
     * @throws \InvalidArgumentException
     * @param string[] $providerID
     * @return \traveltainment\SOAP17\StructType\ProvidersType
     */
    public function setProviderID(array $providerID = array())
    {
        foreach ($providerID as $providersTypeProviderIDItem) {
            // validation for constraint: itemType
            if (!is_string($providersTypeProviderIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ProviderID property can only contain items of string, "%s" given', is_object($providersTypeProviderIDItem) ? get_class($providersTypeProviderIDItem) : gettype($providersTypeProviderIDItem)), __LINE__);
            }
        }
        $this->ProviderID = $providerID;
        return $this;
    }
    /**
     * Add item to ProviderID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\ProvidersType
     */
    public function addToProviderID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ProviderID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProviderID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ProvidersType
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
