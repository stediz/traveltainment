<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTokenType StructType
 * @subpackage Structs
 */
class PaymentTokenType extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ID;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PaymentType;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for PaymentTokenType
     * @uses PaymentTokenType::setID()
     * @uses PaymentTokenType::setPaymentType()
     * @uses PaymentTokenType::set_()
     * @param string $iD
     * @param string $paymentType
     * @param string $_
     */
    public function __construct($iD = null, $paymentType = null, $_ = null)
    {
        $this
            ->setID($iD)
            ->setPaymentType($paymentType)
            ->set_($_);
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\PaymentTokenType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \EnumType\PaymentTypeEnum::valueIsValid()
     * @uses \EnumType\PaymentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \StructType\PaymentTokenType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTypeEnum::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \EnumType\PaymentTypeEnum::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
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
     * @return \StructType\PaymentTokenType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaymentTokenType
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
