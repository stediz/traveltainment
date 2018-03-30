<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\ParkingOfferDescriptionType
     */
    public $OfferDescription;
    /**
     * The OfferCost
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $OfferCost;
    /**
     * The ExtendedOfferCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $ExtendedOfferCost;
    /**
     * The AvailablePayments
     * @var \traveltainment\SOAP17\StructType\PaymentTypesType
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
     * @param \traveltainment\SOAP17\StructType\ParkingOfferDescriptionType $offerDescription
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $offerCost
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost
     * @param \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments
     */
    public function __construct($offerID = null, \traveltainment\SOAP17\StructType\ParkingOfferDescriptionType $offerDescription = null, \traveltainment\SOAP17\StructType\SimplePriceType $offerCost = null, \traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost = null, \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments = null)
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
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType
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
     * @return \traveltainment\SOAP17\StructType\ParkingOfferDescriptionType|null
     */
    public function getOfferDescription()
    {
        return $this->OfferDescription;
    }
    /**
     * Set OfferDescription value
     * @param \traveltainment\SOAP17\StructType\ParkingOfferDescriptionType $offerDescription
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType
     */
    public function setOfferDescription(\traveltainment\SOAP17\StructType\ParkingOfferDescriptionType $offerDescription = null)
    {
        $this->OfferDescription = $offerDescription;
        return $this;
    }
    /**
     * Get OfferCost value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getOfferCost()
    {
        return $this->OfferCost;
    }
    /**
     * Set OfferCost value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $offerCost
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType
     */
    public function setOfferCost(\traveltainment\SOAP17\StructType\SimplePriceType $offerCost = null)
    {
        $this->OfferCost = $offerCost;
        return $this;
    }
    /**
     * Get ExtendedOfferCost value
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getExtendedOfferCost()
    {
        return $this->ExtendedOfferCost;
    }
    /**
     * Set ExtendedOfferCost value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType
     */
    public function setExtendedOfferCost(\traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost = null)
    {
        $this->ExtendedOfferCost = $extendedOfferCost;
        return $this;
    }
    /**
     * Get AvailablePayments value
     * @return \traveltainment\SOAP17\StructType\PaymentTypesType|null
     */
    public function getAvailablePayments()
    {
        return $this->AvailablePayments;
    }
    /**
     * Set AvailablePayments value
     * @param \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType
     */
    public function setAvailablePayments(\traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments = null)
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
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType
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
