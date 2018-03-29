<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Alternatives StructType
 * @subpackage Structs
 */
class Alternatives extends AbstractStructBase
{
    /**
     * The Alternative
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * @var \StructType\Alternative[]
     */
    public $Alternative;
    /**
     * Constructor method for Alternatives
     * @uses Alternatives::setAlternative()
     * @param \StructType\Alternative[] $alternative
     */
    public function __construct(array $alternative = array())
    {
        $this
            ->setAlternative($alternative);
    }
    /**
     * Get Alternative value
     * @return \StructType\Alternative[]|null
     */
    public function getAlternative()
    {
        return $this->Alternative;
    }
    /**
     * Set Alternative value
     * @throws \InvalidArgumentException
     * @param \StructType\Alternative[] $alternative
     * @return \StructType\Alternatives
     */
    public function setAlternative(array $alternative = array())
    {
        foreach ($alternative as $alternativesAlternativeItem) {
            // validation for constraint: itemType
            if (!$alternativesAlternativeItem instanceof \StructType\Alternative) {
                throw new \InvalidArgumentException(sprintf('The Alternative property can only contain items of \StructType\Alternative, "%s" given', is_object($alternativesAlternativeItem) ? get_class($alternativesAlternativeItem) : gettype($alternativesAlternativeItem)), __LINE__);
            }
        }
        $this->Alternative = $alternative;
        return $this;
    }
    /**
     * Add item to Alternative value
     * @throws \InvalidArgumentException
     * @param \StructType\Alternative $item
     * @return \StructType\Alternatives
     */
    public function addToAlternative(\StructType\Alternative $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Alternative) {
            throw new \InvalidArgumentException(sprintf('The Alternative property can only contain items of \StructType\Alternative, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Alternative[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Alternatives
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
