<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonPriceType StructType
 * Meta informations extracted from the WSDL
 * - union: Decimal16.2 | EmptyString
 * @subpackage Structs
 */
class PersonPriceType extends AbstractStructBase
{
    /**
     * The TravellerRef
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $TravellerRef;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - union: Decimal16.2 | EmptyString
     * @var string
     */
    public $_;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for PersonPriceType
     * @uses PersonPriceType::setTravellerRef()
     * @uses PersonPriceType::set_()
     * @uses PersonPriceType::setCurrency()
     * @param string $travellerRef
     * @param string $_
     * @param string $currency
     */
    public function __construct($travellerRef = null, $_ = null, $currency = null)
    {
        $this
            ->setTravellerRef($travellerRef)
            ->set_($_)
            ->setCurrency($currency);
    }
    /**
     * Get TravellerRef value
     * @return string
     */
    public function getTravellerRef()
    {
        return $this->TravellerRef;
    }
    /**
     * Set TravellerRef value
     * @param string $travellerRef
     * @return \StructType\PersonPriceType
     */
    public function setTravellerRef($travellerRef = null)
    {
        // validation for constraint: string
        if (!is_null($travellerRef) && !is_string($travellerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerRef)), __LINE__);
        }
        $this->TravellerRef = $travellerRef;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\PersonPriceType
     */
    public function set_($_ = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($_) && strlen(substr($_, strpos($_, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($_, strpos($_, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($_ < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $_), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($_) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $_)) !== 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 16 digits, "%d" given', strlen(substr($_, strpos($_, '.')))), __LINE__);
        }
        // validation for constraint: length
        if ((is_scalar($_) && strlen($_) !== 0) || (is_array($_) && count($_) !== 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s)', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \StructType\PersonPriceType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currency) && !preg_match('/[A-Z]{3}/', $currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($currency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PersonPriceType
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
