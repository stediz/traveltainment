<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferGridOptionsType StructType
 * @subpackage Structs
 */
class OfferGridOptionsType extends AbstractStructBase
{
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * The BestPriceDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferGridBestPriceDateSpanType
     */
    public $BestPriceDateSpan;
    /**
     * Constructor method for OfferGridOptionsType
     * @uses OfferGridOptionsType::setAdditionalCurrencies()
     * @uses OfferGridOptionsType::setBestPriceDateSpan()
     * @param string $additionalCurrencies
     * @param \StructType\OfferGridBestPriceDateSpanType $bestPriceDateSpan
     */
    public function __construct($additionalCurrencies = null, \StructType\OfferGridBestPriceDateSpanType $bestPriceDateSpan = null)
    {
        $this
            ->setAdditionalCurrencies($additionalCurrencies)
            ->setBestPriceDateSpan($bestPriceDateSpan);
    }
    /**
     * Get AdditionalCurrencies value
     * @return string|null
     */
    public function getAdditionalCurrencies()
    {
        return $this->AdditionalCurrencies;
    }
    /**
     * Set AdditionalCurrencies value
     * @param string $additionalCurrencies
     * @return \StructType\OfferGridOptionsType
     */
    public function setAdditionalCurrencies($additionalCurrencies = null)
    {
        // validation for constraint: string
        if (!is_null($additionalCurrencies) && !is_string($additionalCurrencies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalCurrencies)), __LINE__);
        }
        $this->AdditionalCurrencies = $additionalCurrencies;
        return $this;
    }
    /**
     * Get BestPriceDateSpan value
     * @return \StructType\OfferGridBestPriceDateSpanType|null
     */
    public function getBestPriceDateSpan()
    {
        return $this->BestPriceDateSpan;
    }
    /**
     * Set BestPriceDateSpan value
     * @param \StructType\OfferGridBestPriceDateSpanType $bestPriceDateSpan
     * @return \StructType\OfferGridOptionsType
     */
    public function setBestPriceDateSpan(\StructType\OfferGridBestPriceDateSpanType $bestPriceDateSpan = null)
    {
        $this->BestPriceDateSpan = $bestPriceDateSpan;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OfferGridOptionsType
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
