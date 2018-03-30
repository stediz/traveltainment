<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferPriceInformationType StructType
 * @subpackage Structs
 */
class OfferPriceInformationType extends AbstractStructBase
{
    /**
     * The Prices
     * @var \traveltainment\SOAP17\StructType\PricesType
     */
    public $Prices;
    /**
     * The CachePrices
     * @var \traveltainment\SOAP17\StructType\PricesType
     */
    public $CachePrices;
    /**
     * The AdditionalCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AdditionalCostType
     */
    public $AdditionalCost;
    /**
     * Constructor method for OfferPriceInformationType
     * @uses OfferPriceInformationType::setPrices()
     * @uses OfferPriceInformationType::setCachePrices()
     * @uses OfferPriceInformationType::setAdditionalCost()
     * @param \traveltainment\SOAP17\StructType\PricesType $prices
     * @param \traveltainment\SOAP17\StructType\PricesType $cachePrices
     * @param \traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost
     */
    public function __construct(\traveltainment\SOAP17\StructType\PricesType $prices = null, \traveltainment\SOAP17\StructType\PricesType $cachePrices = null, \traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost = null)
    {
        $this
            ->setPrices($prices)
            ->setCachePrices($cachePrices)
            ->setAdditionalCost($additionalCost);
    }
    /**
     * Get Prices value
     * @return \traveltainment\SOAP17\StructType\PricesType|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }
    /**
     * Set Prices value
     * @param \traveltainment\SOAP17\StructType\PricesType $prices
     * @return \traveltainment\SOAP17\StructType\OfferPriceInformationType
     */
    public function setPrices(\traveltainment\SOAP17\StructType\PricesType $prices = null)
    {
        $this->Prices = $prices;
        return $this;
    }
    /**
     * Get CachePrices value
     * @return \traveltainment\SOAP17\StructType\PricesType|null
     */
    public function getCachePrices()
    {
        return $this->CachePrices;
    }
    /**
     * Set CachePrices value
     * @param \traveltainment\SOAP17\StructType\PricesType $cachePrices
     * @return \traveltainment\SOAP17\StructType\OfferPriceInformationType
     */
    public function setCachePrices(\traveltainment\SOAP17\StructType\PricesType $cachePrices = null)
    {
        $this->CachePrices = $cachePrices;
        return $this;
    }
    /**
     * Get AdditionalCost value
     * @return \traveltainment\SOAP17\StructType\AdditionalCostType|null
     */
    public function getAdditionalCost()
    {
        return $this->AdditionalCost;
    }
    /**
     * Set AdditionalCost value
     * @param \traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost
     * @return \traveltainment\SOAP17\StructType\OfferPriceInformationType
     */
    public function setAdditionalCost(\traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost = null)
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
     * @return \traveltainment\SOAP17\StructType\OfferPriceInformationType
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
