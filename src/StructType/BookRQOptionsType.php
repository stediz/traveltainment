<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRQOptionsType StructType
 * @subpackage Structs
 */
class BookRQOptionsType extends AbstractStructBase
{
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * Constructor method for BookRQOptionsType
     * @uses BookRQOptionsType::setAdditionalCurrencies()
     * @param string $additionalCurrencies
     */
    public function __construct($additionalCurrencies = null)
    {
        $this
            ->setAdditionalCurrencies($additionalCurrencies);
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
     * @return \StructType\BookRQOptionsType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookRQOptionsType
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
