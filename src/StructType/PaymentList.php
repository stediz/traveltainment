<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentList StructType
 * @subpackage Structs
 */
class PaymentList extends AbstractStructBase
{
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType[]
     */
    public $Payment;
    /**
     * Constructor method for PaymentList
     * @uses PaymentList::setPayment()
     * @param \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType[] $payment
     */
    public function __construct(array $payment = array())
    {
        $this
            ->setPayment($payment);
    }
    /**
     * Get Payment value
     * @return \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType[] $payment
     * @return \traveltainment\SOAP17\StructType\PaymentList
     */
    public function setPayment(array $payment = array())
    {
        foreach ($payment as $paymentListPaymentItem) {
            // validation for constraint: itemType
            if (!$paymentListPaymentItem instanceof \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType) {
                throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType, "%s" given', is_object($paymentListPaymentItem) ? get_class($paymentListPaymentItem) : gettype($paymentListPaymentItem)), __LINE__);
            }
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType $item
     * @return \traveltainment\SOAP17\StructType\PaymentList
     */
    public function addToPayment(\traveltainment\SOAP17\StructType\XmlPaymentDescriptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\PaymentList
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
