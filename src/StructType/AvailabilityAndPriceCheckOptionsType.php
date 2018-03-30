<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityAndPriceCheckOptionsType StructType
 * @subpackage Structs
 */
class AvailabilityAndPriceCheckOptionsType extends AbstractStructBase
{
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OptionType[]
     */
    public $Option;
    /**
     * Constructor method for AvailabilityAndPriceCheckOptionsType
     * @uses AvailabilityAndPriceCheckOptionsType::setAdditionalCurrencies()
     * @uses AvailabilityAndPriceCheckOptionsType::setOption()
     * @param string $additionalCurrencies
     * @param \traveltainment\SOAP17\StructType\OptionType[] $option
     */
    public function __construct($additionalCurrencies = null, array $option = array())
    {
        $this
            ->setAdditionalCurrencies($additionalCurrencies)
            ->setOption($option);
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
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType
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
     * Get Option value
     * @return \traveltainment\SOAP17\StructType\OptionType[]|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\OptionType[] $option
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType
     */
    public function setOption(array $option = array())
    {
        foreach ($option as $availabilityAndPriceCheckOptionsTypeOptionItem) {
            // validation for constraint: itemType
            if (!$availabilityAndPriceCheckOptionsTypeOptionItem instanceof \traveltainment\SOAP17\StructType\OptionType) {
                throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \traveltainment\SOAP17\StructType\OptionType, "%s" given', is_object($availabilityAndPriceCheckOptionsTypeOptionItem) ? get_class($availabilityAndPriceCheckOptionsTypeOptionItem) : gettype($availabilityAndPriceCheckOptionsTypeOptionItem)), __LINE__);
            }
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Add item to Option value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\OptionType $item
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType
     */
    public function addToOption(\traveltainment\SOAP17\StructType\OptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\OptionType) {
            throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \traveltainment\SOAP17\StructType\OptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Option[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType
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
