<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonList StructType
 * @subpackage Structs
 */
class AddonList extends AbstractStructBase
{
    /**
     * The Addon
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\AddonType[]
     */
    public $Addon;
    /**
     * Constructor method for AddonList
     * @uses AddonList::setAddon()
     * @param \traveltainment\SOAP17\StructType\AddonType[] $addon
     */
    public function __construct(array $addon = array())
    {
        $this
            ->setAddon($addon);
    }
    /**
     * Get Addon value
     * @return \traveltainment\SOAP17\StructType\AddonType[]|null
     */
    public function getAddon()
    {
        return $this->Addon;
    }
    /**
     * Set Addon value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddonType[] $addon
     * @return \traveltainment\SOAP17\StructType\AddonList
     */
    public function setAddon(array $addon = array())
    {
        foreach ($addon as $addonListAddonItem) {
            // validation for constraint: itemType
            if (!$addonListAddonItem instanceof \traveltainment\SOAP17\StructType\AddonType) {
                throw new \InvalidArgumentException(sprintf('The Addon property can only contain items of \traveltainment\SOAP17\StructType\AddonType, "%s" given', is_object($addonListAddonItem) ? get_class($addonListAddonItem) : gettype($addonListAddonItem)), __LINE__);
            }
        }
        $this->Addon = $addon;
        return $this;
    }
    /**
     * Add item to Addon value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddonType $item
     * @return \traveltainment\SOAP17\StructType\AddonList
     */
    public function addToAddon(\traveltainment\SOAP17\StructType\AddonType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\AddonType) {
            throw new \InvalidArgumentException(sprintf('The Addon property can only contain items of \traveltainment\SOAP17\StructType\AddonType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Addon[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonList
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
