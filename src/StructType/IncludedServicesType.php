<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludedServicesType StructType
 * @subpackage Structs
 */
class IncludedServicesType extends AbstractStructBase
{
    /**
     * The IncludedService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\IncludedServiceType[]
     */
    public $IncludedService;
    /**
     * Constructor method for IncludedServicesType
     * @uses IncludedServicesType::setIncludedService()
     * @param \StructType\IncludedServiceType[] $includedService
     */
    public function __construct(array $includedService = array())
    {
        $this
            ->setIncludedService($includedService);
    }
    /**
     * Get IncludedService value
     * @return \StructType\IncludedServiceType[]|null
     */
    public function getIncludedService()
    {
        return $this->IncludedService;
    }
    /**
     * Set IncludedService value
     * @throws \InvalidArgumentException
     * @param \StructType\IncludedServiceType[] $includedService
     * @return \StructType\IncludedServicesType
     */
    public function setIncludedService(array $includedService = array())
    {
        foreach ($includedService as $includedServicesTypeIncludedServiceItem) {
            // validation for constraint: itemType
            if (!$includedServicesTypeIncludedServiceItem instanceof \StructType\IncludedServiceType) {
                throw new \InvalidArgumentException(sprintf('The IncludedService property can only contain items of \StructType\IncludedServiceType, "%s" given', is_object($includedServicesTypeIncludedServiceItem) ? get_class($includedServicesTypeIncludedServiceItem) : gettype($includedServicesTypeIncludedServiceItem)), __LINE__);
            }
        }
        $this->IncludedService = $includedService;
        return $this;
    }
    /**
     * Add item to IncludedService value
     * @throws \InvalidArgumentException
     * @param \StructType\IncludedServiceType $item
     * @return \StructType\IncludedServicesType
     */
    public function addToIncludedService(\StructType\IncludedServiceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\IncludedServiceType) {
            throw new \InvalidArgumentException(sprintf('The IncludedService property can only contain items of \StructType\IncludedServiceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IncludedService[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\IncludedServicesType
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
