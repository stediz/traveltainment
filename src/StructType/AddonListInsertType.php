<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonListInsertType StructType
 * @subpackage Structs
 */
class AddonListInsertType extends AbstractStructBase
{
    /**
     * The AddonListInsertItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\AddonListInsertItemType[]
     */
    public $AddonListInsertItem;
    /**
     * Constructor method for AddonListInsertType
     * @uses AddonListInsertType::setAddonListInsertItem()
     * @param \traveltainment\SOAP17\StructType\AddonListInsertItemType[] $addonListInsertItem
     */
    public function __construct(array $addonListInsertItem = array())
    {
        $this
            ->setAddonListInsertItem($addonListInsertItem);
    }
    /**
     * Get AddonListInsertItem value
     * @return \traveltainment\SOAP17\StructType\AddonListInsertItemType[]|null
     */
    public function getAddonListInsertItem()
    {
        return $this->AddonListInsertItem;
    }
    /**
     * Set AddonListInsertItem value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddonListInsertItemType[] $addonListInsertItem
     * @return \traveltainment\SOAP17\StructType\AddonListInsertType
     */
    public function setAddonListInsertItem(array $addonListInsertItem = array())
    {
        foreach ($addonListInsertItem as $addonListInsertTypeAddonListInsertItemItem) {
            // validation for constraint: itemType
            if (!$addonListInsertTypeAddonListInsertItemItem instanceof \traveltainment\SOAP17\StructType\AddonListInsertItemType) {
                throw new \InvalidArgumentException(sprintf('The AddonListInsertItem property can only contain items of \traveltainment\SOAP17\StructType\AddonListInsertItemType, "%s" given', is_object($addonListInsertTypeAddonListInsertItemItem) ? get_class($addonListInsertTypeAddonListInsertItemItem) : gettype($addonListInsertTypeAddonListInsertItemItem)), __LINE__);
            }
        }
        $this->AddonListInsertItem = $addonListInsertItem;
        return $this;
    }
    /**
     * Add item to AddonListInsertItem value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddonListInsertItemType $item
     * @return \traveltainment\SOAP17\StructType\AddonListInsertType
     */
    public function addToAddonListInsertItem(\traveltainment\SOAP17\StructType\AddonListInsertItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\AddonListInsertItemType) {
            throw new \InvalidArgumentException(sprintf('The AddonListInsertItem property can only contain items of \traveltainment\SOAP17\StructType\AddonListInsertItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddonListInsertItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonListInsertType
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
