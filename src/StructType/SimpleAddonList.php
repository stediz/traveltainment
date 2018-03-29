<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleAddonList StructType
 * @subpackage Structs
 */
class SimpleAddonList extends AbstractStructBase
{
    /**
     * The Addon
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\SimpleAddonType[]
     */
    public $Addon;
    /**
     * Constructor method for SimpleAddonList
     * @uses SimpleAddonList::setAddon()
     * @param \StructType\SimpleAddonType[] $addon
     */
    public function __construct(array $addon = array())
    {
        $this
            ->setAddon($addon);
    }
    /**
     * Get Addon value
     * @return \StructType\SimpleAddonType[]|null
     */
    public function getAddon()
    {
        return $this->Addon;
    }
    /**
     * Set Addon value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleAddonType[] $addon
     * @return \StructType\SimpleAddonList
     */
    public function setAddon(array $addon = array())
    {
        foreach ($addon as $simpleAddonListAddonItem) {
            // validation for constraint: itemType
            if (!$simpleAddonListAddonItem instanceof \StructType\SimpleAddonType) {
                throw new \InvalidArgumentException(sprintf('The Addon property can only contain items of \StructType\SimpleAddonType, "%s" given', is_object($simpleAddonListAddonItem) ? get_class($simpleAddonListAddonItem) : gettype($simpleAddonListAddonItem)), __LINE__);
            }
        }
        $this->Addon = $addon;
        return $this;
    }
    /**
     * Add item to Addon value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleAddonType $item
     * @return \StructType\SimpleAddonList
     */
    public function addToAddon(\StructType\SimpleAddonType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SimpleAddonType) {
            throw new \InvalidArgumentException(sprintf('The Addon property can only contain items of \StructType\SimpleAddonType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\SimpleAddonList
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
