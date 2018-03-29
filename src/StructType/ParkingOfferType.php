<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingOfferType StructType
 * @subpackage Structs
 */
class ParkingOfferType extends AbstractStructBase
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The OfferDescription
     * @var \StructType\ParkingOfferDescriptionType
     */
    public $OfferDescription;
    /**
     * The OfferCost
     * @var \StructType\SimplePriceType
     */
    public $OfferCost;
    /**
     * The ExtendedOfferCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceInformationType
     */
    public $ExtendedOfferCost;
    /**
     * The AvailablePayments
     * @var \StructType\PaymentTypesType
     */
    public $AvailablePayments;
    /**
     * Constructor method for ParkingOfferType
     * @uses ParkingOfferType::setOfferID()
     * @uses ParkingOfferType::setOfferDescription()
     * @uses ParkingOfferType::setOfferCost()
     * @uses ParkingOfferType::setExtendedOfferCost()
     * @uses ParkingOfferType::setAvailablePayments()
     * @param string $offerID
     * @param \StructType\ParkingOfferDescriptionType $offerDescription
     * @param \StructType\SimplePriceType $offerCost
     * @param \StructType\PriceInformationType $extendedOfferCost
     * @param \StructType\PaymentTypesType $availablePayments
     */
    public function __construct($offerID = null, \StructType\ParkingOfferDescriptionType $offerDescription = null, \StructType\SimplePriceType $offerCost = null, \StructType\PriceInformationType $extendedOfferCost = null, \StructType\PaymentTypesType $availablePayments = null)
    {
        $this
            ->setOfferID($offerID)
            ->setOfferDescription($offerDescription)
            ->setOfferCost($offerCost)
            ->setExtendedOfferCost($extendedOfferCost)
            ->setAvailablePayments($availablePayments);
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \StructType\ParkingOfferType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get OfferDescription value
     * @return \StructType\ParkingOfferDescriptionType|null
     */
    public function getOfferDescription()
    {
        return $this->OfferDescription;
    }
    /**
     * Set OfferDescription value
     * @param \StructType\ParkingOfferDescriptionType $offerDescription
     * @return \StructType\ParkingOfferType
     */
    public function setOfferDescription(\StructType\ParkingOfferDescriptionType $offerDescription = null)
    {
        $this->OfferDescription = $offerDescription;
        return $this;
    }
    /**
     * Get OfferCost value
     * @return \StructType\SimplePriceType|null
     */
    public function getOfferCost()
    {
        return $this->OfferCost;
    }
    /**
     * Set OfferCost value
     * @param \StructType\SimplePriceType $offerCost
     * @return \StructType\ParkingOfferType
     */
    public function setOfferCost(\StructType\SimplePriceType $offerCost = null)
    {
        $this->OfferCost = $offerCost;
        return $this;
    }
    /**
     * Get ExtendedOfferCost value
     * @return \StructType\PriceInformationType|null
     */
    public function getExtendedOfferCost()
    {
        return $this->ExtendedOfferCost;
    }
    /**
     * Set ExtendedOfferCost value
     * @param \StructType\PriceInformationType $extendedOfferCost
     * @return \StructType\ParkingOfferType
     */
    public function setExtendedOfferCost(\StructType\PriceInformationType $extendedOfferCost = null)
    {
        $this->ExtendedOfferCost = $extendedOfferCost;
        return $this;
    }
    /**
     * Get AvailablePayments value
     * @return \StructType\PaymentTypesType|null
     */
    public function getAvailablePayments()
    {
        return $this->AvailablePayments;
    }
    /**
     * Set AvailablePayments value
     * @param \StructType\PaymentTypesType $availablePayments
     * @return \StructType\ParkingOfferType
     */
    public function setAvailablePayments(\StructType\PaymentTypesType $availablePayments = null)
    {
        $this->AvailablePayments = $availablePayments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParkingOfferType
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
