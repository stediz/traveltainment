<?php

namespace StructType;

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
     * @var \StructType\AddonType[]
     */
    public $Addon;
    /**
     * Constructor method for AddonList
     * @uses AddonList::setAddon()
     * @param \StructType\AddonType[] $addon
     */
    public function __construct(array $addon = array())
    {
        $this
            ->setAddon($addon);
    }
    /**
     * Get Addon value
     * @return \StructType\AddonType[]|null
     */
    public function getAddon()
    {
        return $this->Addon;
    }
    /**
     * Set Addon value
     * @throws \InvalidArgumentException
     * @param \StructType\AddonType[] $addon
     * @return \StructType\AddonList
     */
    public function setAddon(array $addon = array())
    {
        foreach ($addon as $addonListAddonItem) {
            // validation for constraint: itemType
            if (!$addonListAddonItem instanceof \StructType\AddonType) {
                throw new \InvalidArgumentException(sprintf('The Addon property can only contain items of \StructType\AddonType, "%s" given', is_object($addonListAddonItem) ? get_class($addonListAddonItem) : gettype($addonListAddonItem)), __LINE__);
            }
        }
        $this->Addon = $addon;
        return $this;
    }
    /**
     * Add item to Addon value
     * @throws \InvalidArgumentException
     * @param \StructType\AddonType $item
     * @return \StructType\AddonList
     */
    public function addToAddon(\StructType\AddonType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddonType) {
            throw new \InvalidArgumentException(sprintf('The Addon property can only contain items of \StructType\AddonType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\AddonList
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
