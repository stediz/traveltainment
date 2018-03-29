<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleOffer StructType
 * @subpackage Structs
 */
class SimpleOffer extends AbstractStructBase
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The Price
     * @var int
     */
    public $Price;
    /**
     * The Fulfilments
     * @var \StructType\Fulfilments
     */
    public $Fulfilments;
    /**
     * The Flags
     * @var \StructType\Flags
     */
    public $Flags;
    /**
     * The PriceInformation
     * @var \StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The AverageFlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AverageFlightDuration;
    /**
     * The Weightage
     * @var int
     */
    public $Weightage;
    /**
     * Constructor method for SimpleOffer
     * @uses SimpleOffer::setOfferID()
     * @uses SimpleOffer::setPrice()
     * @uses SimpleOffer::setFulfilments()
     * @uses SimpleOffer::setFlags()
     * @uses SimpleOffer::setPriceInformation()
     * @uses SimpleOffer::setAverageFlightDuration()
     * @uses SimpleOffer::setWeightage()
     * @param string $offerID
     * @param int $price
     * @param \StructType\Fulfilments $fulfilments
     * @param \StructType\Flags $flags
     * @param \StructType\PriceInformationType $priceInformation
     * @param int $averageFlightDuration
     * @param int $weightage
     */
    public function __construct($offerID = null, $price = null, \StructType\Fulfilments $fulfilments = null, \StructType\Flags $flags = null, \StructType\PriceInformationType $priceInformation = null, $averageFlightDuration = null, $weightage = null)
    {
        $this
            ->setOfferID($offerID)
            ->setPrice($price)
            ->setFulfilments($fulfilments)
            ->setFlags($flags)
            ->setPriceInformation($priceInformation)
            ->setAverageFlightDuration($averageFlightDuration)
            ->setWeightage($weightage);
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
     * @return \StructType\SimpleOffer
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
     * Get Price value
     * @return int|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param int $price
     * @return \StructType\SimpleOffer
     */
    public function setPrice($price = null)
    {
        // validation for constraint: int
        if (!is_null($price) && !is_numeric($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price)), __LINE__);
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Get Fulfilments value
     * @return \StructType\Fulfilments|null
     */
    public function getFulfilments()
    {
        return $this->Fulfilments;
    }
    /**
     * Set Fulfilments value
     * @param \StructType\Fulfilments $fulfilments
     * @return \StructType\SimpleOffer
     */
    public function setFulfilments(\StructType\Fulfilments $fulfilments = null)
    {
        $this->Fulfilments = $fulfilments;
        return $this;
    }
    /**
     * Get Flags value
     * @return \StructType\Flags|null
     */
    public function getFlags()
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @param \StructType\Flags $flags
     * @return \StructType\SimpleOffer
     */
    public function setFlags(\StructType\Flags $flags = null)
    {
        $this->Flags = $flags;
        return $this;
    }
    /**
     * Get PriceInformation value
     * @return \StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \StructType\PriceInformationType $priceInformation
     * @return \StructType\SimpleOffer
     */
    public function setPriceInformation(\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get AverageFlightDuration value
     * @return int|null
     */
    public function getAverageFlightDuration()
    {
        return $this->AverageFlightDuration;
    }
    /**
     * Set AverageFlightDuration value
     * @param int $averageFlightDuration
     * @return \StructType\SimpleOffer
     */
    public function setAverageFlightDuration($averageFlightDuration = null)
    {
        // validation for constraint: int
        if (!is_null($averageFlightDuration) && !is_numeric($averageFlightDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($averageFlightDuration)), __LINE__);
        }
        $this->AverageFlightDuration = $averageFlightDuration;
        return $this;
    }
    /**
     * Get Weightage value
     * @return int|null
     */
    public function getWeightage()
    {
        return $this->Weightage;
    }
    /**
     * Set Weightage value
     * @param int $weightage
     * @return \StructType\SimpleOffer
     */
    public function setWeightage($weightage = null)
    {
        // validation for constraint: int
        if (!is_null($weightage) && !is_numeric($weightage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weightage)), __LINE__);
        }
        $this->Weightage = $weightage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleOffer
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
