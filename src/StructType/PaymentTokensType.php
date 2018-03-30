<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTokensType StructType
 * @subpackage Structs
 */
class PaymentTokensType extends AbstractStructBase
{
    /**
     * The PaymentToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \traveltainment\SOAP17\StructType\PaymentTokenType[]
     */
    public $PaymentToken;
    /**
     * Constructor method for PaymentTokensType
     * @uses PaymentTokensType::setPaymentToken()
     * @param \traveltainment\SOAP17\StructType\PaymentTokenType[] $paymentToken
     */
    public function __construct(array $paymentToken = array())
    {
        $this
            ->setPaymentToken($paymentToken);
    }
    /**
     * Get PaymentToken value
     * @return \traveltainment\SOAP17\StructType\PaymentTokenType[]|null
     */
    public function getPaymentToken()
    {
        return $this->PaymentToken;
    }
    /**
     * Set PaymentToken value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\PaymentTokenType[] $paymentToken
     * @return \traveltainment\SOAP17\StructType\PaymentTokensType
     */
    public function setPaymentToken(array $paymentToken = array())
    {
        foreach ($paymentToken as $paymentTokensTypePaymentTokenItem) {
            // validation for constraint: itemType
            if (!$paymentTokensTypePaymentTokenItem instanceof \traveltainment\SOAP17\StructType\PaymentTokenType) {
                throw new \InvalidArgumentException(sprintf('The PaymentToken property can only contain items of \traveltainment\SOAP17\StructType\PaymentTokenType, "%s" given', is_object($paymentTokensTypePaymentTokenItem) ? get_class($paymentTokensTypePaymentTokenItem) : gettype($paymentTokensTypePaymentTokenItem)), __LINE__);
            }
        }
        $this->PaymentToken = $paymentToken;
        return $this;
    }
    /**
     * Add item to PaymentToken value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\PaymentTokenType $item
     * @return \traveltainment\SOAP17\StructType\PaymentTokensType
     */
    public function addToPaymentToken(\traveltainment\SOAP17\StructType\PaymentTokenType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\PaymentTokenType) {
            throw new \InvalidArgumentException(sprintf('The PaymentToken property can only contain items of \traveltainment\SOAP17\StructType\PaymentTokenType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentToken[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\PaymentTokensType
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
