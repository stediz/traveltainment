<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentType StructType
 * @subpackage Structs
 */
class PaymentType extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PaymentType;
    /**
     * The CreditCardInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CreditCardInfoType
     */
    public $CreditCardInfo;
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SurchargeType
     */
    public $Surcharge;
    /**
     * The TokenList
     * @var \StructType\TokenList
     */
    public $TokenList;
    /**
     * The PaymentList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PaymentList
     */
    public $PaymentList;
    /**
     * Constructor method for PaymentType
     * @uses PaymentType::setPaymentType()
     * @uses PaymentType::setCreditCardInfo()
     * @uses PaymentType::setSurcharge()
     * @uses PaymentType::setTokenList()
     * @uses PaymentType::setPaymentList()
     * @param string $paymentType
     * @param \StructType\CreditCardInfoType $creditCardInfo
     * @param \StructType\SurchargeType $surcharge
     * @param \StructType\TokenList $tokenList
     * @param \StructType\PaymentList $paymentList
     */
    public function __construct($paymentType = null, \StructType\CreditCardInfoType $creditCardInfo = null, \StructType\SurchargeType $surcharge = null, \StructType\TokenList $tokenList = null, \StructType\PaymentList $paymentList = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setCreditCardInfo($creditCardInfo)
            ->setSurcharge($surcharge)
            ->setTokenList($tokenList)
            ->setPaymentList($paymentList);
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
     * @return \StructType\PaymentType
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
     * Get CreditCardInfo value
     * @return \StructType\CreditCardInfoType|null
     */
    public function getCreditCardInfo()
    {
        return $this->CreditCardInfo;
    }
    /**
     * Set CreditCardInfo value
     * @param \StructType\CreditCardInfoType $creditCardInfo
     * @return \StructType\PaymentType
     */
    public function setCreditCardInfo(\StructType\CreditCardInfoType $creditCardInfo = null)
    {
        $this->CreditCardInfo = $creditCardInfo;
        return $this;
    }
    /**
     * Get Surcharge value
     * @return \StructType\SurchargeType|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param \StructType\SurchargeType $surcharge
     * @return \StructType\PaymentType
     */
    public function setSurcharge(\StructType\SurchargeType $surcharge = null)
    {
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Get TokenList value
     * @return \StructType\TokenList|null
     */
    public function getTokenList()
    {
        return $this->TokenList;
    }
    /**
     * Set TokenList value
     * @param \StructType\TokenList $tokenList
     * @return \StructType\PaymentType
     */
    public function setTokenList(\StructType\TokenList $tokenList = null)
    {
        $this->TokenList = $tokenList;
        return $this;
    }
    /**
     * Get PaymentList value
     * @return \StructType\PaymentList|null
     */
    public function getPaymentList()
    {
        return $this->PaymentList;
    }
    /**
     * Set PaymentList value
     * @param \StructType\PaymentList $paymentList
     * @return \StructType\PaymentType
     */
    public function setPaymentList(\StructType\PaymentList $paymentList = null)
    {
        $this->PaymentList = $paymentList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaymentType
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
