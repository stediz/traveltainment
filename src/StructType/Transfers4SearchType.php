<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transfers4SearchType StructType
 * @subpackage Structs
 */
class Transfers4SearchType extends AbstractStructBase
{
    /**
     * The Transfer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Transfer4SearchType[]
     */
    public $Transfer;
    /**
     * Constructor method for Transfers4SearchType
     * @uses Transfers4SearchType::setTransfer()
     * @param \StructType\Transfer4SearchType[] $transfer
     */
    public function __construct(array $transfer = array())
    {
        $this
            ->setTransfer($transfer);
    }
    /**
     * Get Transfer value
     * @return \StructType\Transfer4SearchType[]|null
     */
    public function getTransfer()
    {
        return $this->Transfer;
    }
    /**
     * Set Transfer value
     * @throws \InvalidArgumentException
     * @param \StructType\Transfer4SearchType[] $transfer
     * @return \StructType\Transfers4SearchType
     */
    public function setTransfer(array $transfer = array())
    {
        foreach ($transfer as $transfers4SearchTypeTransferItem) {
            // validation for constraint: itemType
            if (!$transfers4SearchTypeTransferItem instanceof \StructType\Transfer4SearchType) {
                throw new \InvalidArgumentException(sprintf('The Transfer property can only contain items of \StructType\Transfer4SearchType, "%s" given', is_object($transfers4SearchTypeTransferItem) ? get_class($transfers4SearchTypeTransferItem) : gettype($transfers4SearchTypeTransferItem)), __LINE__);
            }
        }
        $this->Transfer = $transfer;
        return $this;
    }
    /**
     * Add item to Transfer value
     * @throws \InvalidArgumentException
     * @param \StructType\Transfer4SearchType $item
     * @return \StructType\Transfers4SearchType
     */
    public function addToTransfer(\StructType\Transfer4SearchType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Transfer4SearchType) {
            throw new \InvalidArgumentException(sprintf('The Transfer property can only contain items of \StructType\Transfer4SearchType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transfer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transfers4SearchType
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
