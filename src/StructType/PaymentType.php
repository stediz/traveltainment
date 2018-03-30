<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\CreditCardInfoType
     */
    public $CreditCardInfo;
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SurchargeType
     */
    public $Surcharge;
    /**
     * The TokenList
     * @var \traveltainment\SOAP17\StructType\TokenList
     */
    public $TokenList;
    /**
     * The PaymentList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PaymentList
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
     * @param \traveltainment\SOAP17\StructType\CreditCardInfoType $creditCardInfo
     * @param \traveltainment\SOAP17\StructType\SurchargeType $surcharge
     * @param \traveltainment\SOAP17\StructType\TokenList $tokenList
     * @param \traveltainment\SOAP17\StructType\PaymentList $paymentList
     */
    public function __construct($paymentType = null, \traveltainment\SOAP17\StructType\CreditCardInfoType $creditCardInfo = null, \traveltainment\SOAP17\StructType\SurchargeType $surcharge = null, \traveltainment\SOAP17\StructType\TokenList $tokenList = null, \traveltainment\SOAP17\StructType\PaymentList $paymentList = null)
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
     * @uses \traveltainment\SOAP17\EnumType\PaymentTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\PaymentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \traveltainment\SOAP17\StructType\PaymentType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\PaymentTypeEnum::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \traveltainment\SOAP17\EnumType\PaymentTypeEnum::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get CreditCardInfo value
     * @return \traveltainment\SOAP17\StructType\CreditCardInfoType|null
     */
    public function getCreditCardInfo()
    {
        return $this->CreditCardInfo;
    }
    /**
     * Set CreditCardInfo value
     * @param \traveltainment\SOAP17\StructType\CreditCardInfoType $creditCardInfo
     * @return \traveltainment\SOAP17\StructType\PaymentType
     */
    public function setCreditCardInfo(\traveltainment\SOAP17\StructType\CreditCardInfoType $creditCardInfo = null)
    {
        $this->CreditCardInfo = $creditCardInfo;
        return $this;
    }
    /**
     * Get Surcharge value
     * @return \traveltainment\SOAP17\StructType\SurchargeType|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param \traveltainment\SOAP17\StructType\SurchargeType $surcharge
     * @return \traveltainment\SOAP17\StructType\PaymentType
     */
    public function setSurcharge(\traveltainment\SOAP17\StructType\SurchargeType $surcharge = null)
    {
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Get TokenList value
     * @return \traveltainment\SOAP17\StructType\TokenList|null
     */
    public function getTokenList()
    {
        return $this->TokenList;
    }
    /**
     * Set TokenList value
     * @param \traveltainment\SOAP17\StructType\TokenList $tokenList
     * @return \traveltainment\SOAP17\StructType\PaymentType
     */
    public function setTokenList(\traveltainment\SOAP17\StructType\TokenList $tokenList = null)
    {
        $this->TokenList = $tokenList;
        return $this;
    }
    /**
     * Get PaymentList value
     * @return \traveltainment\SOAP17\StructType\PaymentList|null
     */
    public function getPaymentList()
    {
        return $this->PaymentList;
    }
    /**
     * Set PaymentList value
     * @param \traveltainment\SOAP17\StructType\PaymentList $paymentList
     * @return \traveltainment\SOAP17\StructType\PaymentType
     */
    public function setPaymentList(\traveltainment\SOAP17\StructType\PaymentList $paymentList = null)
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
     * @return \traveltainment\SOAP17\StructType\PaymentType
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
