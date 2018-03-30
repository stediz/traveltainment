<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\TransferPriceType[]
     */
    public $TransferPrice;
    /**
     * Constructor method for TransferPriceDetailsType
     * @uses TransferPriceDetailsType::setTransferPrice()
     * @param \traveltainment\SOAP17\StructType\TransferPriceType[] $transferPrice
     */
    public function __construct(array $transferPrice = array())
    {
        $this
            ->setTransferPrice($transferPrice);
    }
    /**
     * Get TransferPrice value
     * @return \traveltainment\SOAP17\StructType\TransferPriceType[]|null
     */
    public function getTransferPrice()
    {
        return $this->TransferPrice;
    }
    /**
     * Set TransferPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TransferPriceType[] $transferPrice
     * @return \traveltainment\SOAP17\StructType\TransferPriceDetailsType
     */
    public function setTransferPrice(array $transferPrice = array())
    {
        foreach ($transferPrice as $transferPriceDetailsTypeTransferPriceItem) {
            // validation for constraint: itemType
            if (!$transferPriceDetailsTypeTransferPriceItem instanceof \traveltainment\SOAP17\StructType\TransferPriceType) {
                throw new \InvalidArgumentException(sprintf('The TransferPrice property can only contain items of \traveltainment\SOAP17\StructType\TransferPriceType, "%s" given', is_object($transferPriceDetailsTypeTransferPriceItem) ? get_class($transferPriceDetailsTypeTransferPriceItem) : gettype($transferPriceDetailsTypeTransferPriceItem)), __LINE__);
            }
        }
        $this->TransferPrice = $transferPrice;
        return $this;
    }
    /**
     * Add item to TransferPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TransferPriceType $item
     * @return \traveltainment\SOAP17\StructType\TransferPriceDetailsType
     */
    public function addToTransferPrice(\traveltainment\SOAP17\StructType\TransferPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\TransferPriceType) {
            throw new \InvalidArgumentException(sprintf('The TransferPrice property can only contain items of \traveltainment\SOAP17\StructType\TransferPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\TransferPriceDetailsType
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
