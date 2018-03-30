<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTypesType StructType
 * @subpackage Structs
 */
class PaymentTypesType extends AbstractStructBase
{
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\PaymentType[]
     */
    public $Payment;
    /**
     * Constructor method for PaymentTypesType
     * @uses PaymentTypesType::setPayment()
     * @param \traveltainment\SOAP17\StructType\PaymentType[] $payment
     */
    public function __construct(array $payment = array())
    {
        $this
            ->setPayment($payment);
    }
    /**
     * Get Payment value
     * @return \traveltainment\SOAP17\StructType\PaymentType[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\PaymentType[] $payment
     * @return \traveltainment\SOAP17\StructType\PaymentTypesType
     */
    public function setPayment(array $payment = array())
    {
        foreach ($payment as $paymentTypesTypePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentTypesTypePaymentItem instanceof \traveltainment\SOAP17\StructType\PaymentType) {
                throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \traveltainment\SOAP17\StructType\PaymentType, "%s" given', is_object($paymentTypesTypePaymentItem) ? get_class($paymentTypesTypePaymentItem) : gettype($paymentTypesTypePaymentItem)), __LINE__);
            }
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\PaymentType $item
     * @return \traveltainment\SOAP17\StructType\PaymentTypesType
     */
    public function addToPayment(\traveltainment\SOAP17\StructType\PaymentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\PaymentType) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \traveltainment\SOAP17\StructType\PaymentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\PaymentTypesType
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
