<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertedTravellerPriceBlockType StructType
 * @subpackage Structs
 */
class ConvertedTravellerPriceBlockType extends AbstractStructBase
{
    /**
     * The OriginalAmount
     * Meta informations extracted from the WSDL
     * - documentation: Geldbetrag
     * - nillable: true
     * @var \traveltainment\SOAP17\StructType\AmountType
     */
    public $OriginalAmount;
    /**
     * The TaxesAndFees
     * Meta informations extracted from the WSDL
     * - fractionDigits: 2
     * - minInclusive: 0.0
     * - totalDigits: 16
     * @var float
     */
    public $TaxesAndFees;
    /**
     * The ConvertedTravellerPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType[]
     */
    public $ConvertedTravellerPrice;
    /**
     * The travellerRef
     * @var string
     */
    public $travellerRef;
    /**
     * Constructor method for ConvertedTravellerPriceBlockType
     * @uses ConvertedTravellerPriceBlockType::setOriginalAmount()
     * @uses ConvertedTravellerPriceBlockType::setTaxesAndFees()
     * @uses ConvertedTravellerPriceBlockType::setConvertedTravellerPrice()
     * @uses ConvertedTravellerPriceBlockType::setTravellerRef()
     * @param \traveltainment\SOAP17\StructType\AmountType $originalAmount
     * @param float $taxesAndFees
     * @param \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType[] $convertedTravellerPrice
     * @param string $travellerRef
     */
    public function __construct(\traveltainment\SOAP17\StructType\AmountType $originalAmount = null, $taxesAndFees = null, array $convertedTravellerPrice = array(), $travellerRef = null)
    {
        $this
            ->setOriginalAmount($originalAmount)
            ->setTaxesAndFees($taxesAndFees)
            ->setConvertedTravellerPrice($convertedTravellerPrice)
            ->setTravellerRef($travellerRef);
    }
    /**
     * Get OriginalAmount value
     * @return \traveltainment\SOAP17\StructType\AmountType|null
     */
    public function getOriginalAmount()
    {
        return $this->OriginalAmount;
    }
    /**
     * Set OriginalAmount value
     * @param \traveltainment\SOAP17\StructType\AmountType $originalAmount
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceBlockType
     */
    public function setOriginalAmount(\traveltainment\SOAP17\StructType\AmountType $originalAmount = null)
    {
        $this->OriginalAmount = $originalAmount;
        return $this;
    }
    /**
     * Get TaxesAndFees value
     * @return float|null
     */
    public function getTaxesAndFees()
    {
        return $this->TaxesAndFees;
    }
    /**
     * Set TaxesAndFees value
     * @param float $taxesAndFees
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceBlockType
     */
    public function setTaxesAndFees($taxesAndFees = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($taxesAndFees) && strlen(substr($taxesAndFees, strpos($taxesAndFees, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($taxesAndFees, strpos($taxesAndFees, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($taxesAndFees < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $taxesAndFees), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($taxesAndFees) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $taxesAndFees)) !== 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 16 digits, "%d" given', strlen(substr($taxesAndFees, strpos($taxesAndFees, '.')))), __LINE__);
        }
        $this->TaxesAndFees = $taxesAndFees;
        return $this;
    }
    /**
     * Get ConvertedTravellerPrice value
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType[]|null
     */
    public function getConvertedTravellerPrice()
    {
        return $this->ConvertedTravellerPrice;
    }
    /**
     * Set ConvertedTravellerPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType[] $convertedTravellerPrice
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceBlockType
     */
    public function setConvertedTravellerPrice(array $convertedTravellerPrice = array())
    {
        foreach ($convertedTravellerPrice as $convertedTravellerPriceBlockTypeConvertedTravellerPriceItem) {
            // validation for constraint: itemType
            if (!$convertedTravellerPriceBlockTypeConvertedTravellerPriceItem instanceof \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType) {
                throw new \InvalidArgumentException(sprintf('The ConvertedTravellerPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType, "%s" given', is_object($convertedTravellerPriceBlockTypeConvertedTravellerPriceItem) ? get_class($convertedTravellerPriceBlockTypeConvertedTravellerPriceItem) : gettype($convertedTravellerPriceBlockTypeConvertedTravellerPriceItem)), __LINE__);
            }
        }
        $this->ConvertedTravellerPrice = $convertedTravellerPrice;
        return $this;
    }
    /**
     * Add item to ConvertedTravellerPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType $item
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceBlockType
     */
    public function addToConvertedTravellerPrice(\traveltainment\SOAP17\StructType\ConvertedTravellerPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType) {
            throw new \InvalidArgumentException(sprintf('The ConvertedTravellerPrice property can only contain items of \traveltainment\SOAP17\StructType\ConvertedTravellerPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConvertedTravellerPrice[] = $item;
        return $this;
    }
    /**
     * Get travellerRef value
     * @return string|null
     */
    public function getTravellerRef()
    {
        return $this->travellerRef;
    }
    /**
     * Set travellerRef value
     * @param string $travellerRef
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceBlockType
     */
    public function setTravellerRef($travellerRef = null)
    {
        // validation for constraint: string
        if (!is_null($travellerRef) && !is_string($travellerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerRef)), __LINE__);
        }
        $this->travellerRef = $travellerRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ConvertedTravellerPriceBlockType
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
