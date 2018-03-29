<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferPriceDetailsType StructType
 * @subpackage Structs
 */
class TransferPriceDetailsType extends AbstractStructBase
{
    /**
     * The TransferPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \StructType\TransferPriceType[]
     */
    public $TransferPrice;
    /**
     * Constructor method for TransferPriceDetailsType
     * @uses TransferPriceDetailsType::setTransferPrice()
     * @param \StructType\TransferPriceType[] $transferPrice
     */
    public function __construct(array $transferPrice = array())
    {
        $this
            ->setTransferPrice($transferPrice);
    }
    /**
     * Get TransferPrice value
     * @return \StructType\TransferPriceType[]|null
     */
    public function getTransferPrice()
    {
        return $this->TransferPrice;
    }
    /**
     * Set TransferPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\TransferPriceType[] $transferPrice
     * @return \StructType\TransferPriceDetailsType
     */
    public function setTransferPrice(array $transferPrice = array())
    {
        foreach ($transferPrice as $transferPriceDetailsTypeTransferPriceItem) {
            // validation for constraint: itemType
            if (!$transferPriceDetailsTypeTransferPriceItem instanceof \StructType\TransferPriceType) {
                throw new \InvalidArgumentException(sprintf('The TransferPrice property can only contain items of \StructType\TransferPriceType, "%s" given', is_object($transferPriceDetailsTypeTransferPriceItem) ? get_class($transferPriceDetailsTypeTransferPriceItem) : gettype($transferPriceDetailsTypeTransferPriceItem)), __LINE__);
            }
        }
        $this->TransferPrice = $transferPrice;
        return $this;
    }
    /**
     * Add item to TransferPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\TransferPriceType $item
     * @return \StructType\TransferPriceDetailsType
     */
    public function addToTransferPrice(\StructType\TransferPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TransferPriceType) {
            throw new \InvalidArgumentException(sprintf('The TransferPrice property can only contain items of \StructType\TransferPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TransferPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransferPriceDetailsType
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
