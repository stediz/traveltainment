<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferPriceInformationType StructType
 * @subpackage Structs
 */
class OfferPriceInformationType extends AbstractStructBase
{
    /**
     * The Prices
     * @var \StructType\PricesType
     */
    public $Prices;
    /**
     * The CachePrices
     * @var \StructType\PricesType
     */
    public $CachePrices;
    /**
     * The AdditionalCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AdditionalCostType
     */
    public $AdditionalCost;
    /**
     * Constructor method for OfferPriceInformationType
     * @uses OfferPriceInformationType::setPrices()
     * @uses OfferPriceInformationType::setCachePrices()
     * @uses OfferPriceInformationType::setAdditionalCost()
     * @param \StructType\PricesType $prices
     * @param \StructType\PricesType $cachePrices
     * @param \StructType\AdditionalCostType $additionalCost
     */
    public function __construct(\StructType\PricesType $prices = null, \StructType\PricesType $cachePrices = null, \StructType\AdditionalCostType $additionalCost = null)
    {
        $this
            ->setPrices($prices)
            ->setCachePrices($cachePrices)
            ->setAdditionalCost($additionalCost);
    }
    /**
     * Get Prices value
     * @return \StructType\PricesType|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }
    /**
     * Set Prices value
     * @param \StructType\PricesType $prices
     * @return \StructType\OfferPriceInformationType
     */
    public function setPrices(\StructType\PricesType $prices = null)
    {
        $this->Prices = $prices;
        return $this;
    }
    /**
     * Get CachePrices value
     * @return \StructType\PricesType|null
     */
    public function getCachePrices()
    {
        return $this->CachePrices;
    }
    /**
     * Set CachePrices value
     * @param \StructType\PricesType $cachePrices
     * @return \StructType\OfferPriceInformationType
     */
    public function setCachePrices(\StructType\PricesType $cachePrices = null)
    {
        $this->CachePrices = $cachePrices;
        return $this;
    }
    /**
     * Get AdditionalCost value
     * @return \StructType\AdditionalCostType|null
     */
    public function getAdditionalCost()
    {
        return $this->AdditionalCost;
    }
    /**
     * Set AdditionalCost value
     * @param \StructType\AdditionalCostType $additionalCost
     * @return \StructType\OfferPriceInformationType
     */
    public function setAdditionalCost(\StructType\AdditionalCostType $additionalCost = null)
    {
        $this->AdditionalCost = $additionalCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OfferPriceInformationType
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
