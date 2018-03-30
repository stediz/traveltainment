<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDescriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Choice of payment types consistent with type attribute
 * @subpackage Structs
 */
class PaymentDescriptionType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The CreditCard
     * @var \traveltainment\SOAP17\StructType\CreditCardType
     */
    public $CreditCard;
    /**
     * The BankTransfer
     * @var \traveltainment\SOAP17\StructType\BankTransferType
     */
    public $BankTransfer;
    /**
     * The DirectDebit
     * @var \traveltainment\SOAP17\StructType\DirectDebitType
     */
    public $DirectDebit;
    /**
     * The DirectDebitInternational
     * @var \traveltainment\SOAP17\StructType\DirectDebitInternationalType
     */
    public $DirectDebitInternational;
    /**
     * The Agency
     * @var \traveltainment\SOAP17\StructType\AgencyType
     */
    public $Agency;
    /**
     * The Ideal
     * @var \traveltainment\SOAP17\StructType\IdealType
     */
    public $Ideal;
    /**
     * The Phone
     * @var \traveltainment\SOAP17\StructType\PhoneType
     */
    public $Phone;
    /**
     * Constructor method for PaymentDescriptionType
     * @uses PaymentDescriptionType::setType()
     * @uses PaymentDescriptionType::setCreditCard()
     * @uses PaymentDescriptionType::setBankTransfer()
     * @uses PaymentDescriptionType::setDirectDebit()
     * @uses PaymentDescriptionType::setDirectDebitInternational()
     * @uses PaymentDescriptionType::setAgency()
     * @uses PaymentDescriptionType::setIdeal()
     * @uses PaymentDescriptionType::setPhone()
     * @param string $type
     * @param \traveltainment\SOAP17\StructType\CreditCardType $creditCard
     * @param \traveltainment\SOAP17\StructType\BankTransferType $bankTransfer
     * @param \traveltainment\SOAP17\StructType\DirectDebitType $directDebit
     * @param \traveltainment\SOAP17\StructType\DirectDebitInternationalType $directDebitInternational
     * @param \traveltainment\SOAP17\StructType\AgencyType $agency
     * @param \traveltainment\SOAP17\StructType\IdealType $ideal
     * @param \traveltainment\SOAP17\StructType\PhoneType $phone
     */
    public function __construct($type = null, \traveltainment\SOAP17\StructType\CreditCardType $creditCard = null, \traveltainment\SOAP17\StructType\BankTransferType $bankTransfer = null, \traveltainment\SOAP17\StructType\DirectDebitType $directDebit = null, \traveltainment\SOAP17\StructType\DirectDebitInternationalType $directDebitInternational = null, \traveltainment\SOAP17\StructType\AgencyType $agency = null, \traveltainment\SOAP17\StructType\IdealType $ideal = null, \traveltainment\SOAP17\StructType\PhoneType $phone = null)
    {
        $this
            ->setType($type)
            ->setCreditCard($creditCard)
            ->setBankTransfer($bankTransfer)
            ->setDirectDebit($directDebit)
            ->setDirectDebitInternational($directDebitInternational)
            ->setAgency($agency)
            ->setIdeal($ideal)
            ->setPhone($phone);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \traveltainment\SOAP17\EnumType\PaymentTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\PaymentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\PaymentTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \traveltainment\SOAP17\EnumType\PaymentTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \traveltainment\SOAP17\StructType\CreditCardType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \traveltainment\SOAP17\StructType\CreditCardType $creditCard
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setCreditCard(\traveltainment\SOAP17\StructType\CreditCardType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get BankTransfer value
     * @return \traveltainment\SOAP17\StructType\BankTransferType|null
     */
    public function getBankTransfer()
    {
        return $this->BankTransfer;
    }
    /**
     * Set BankTransfer value
     * @param \traveltainment\SOAP17\StructType\BankTransferType $bankTransfer
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setBankTransfer(\traveltainment\SOAP17\StructType\BankTransferType $bankTransfer = null)
    {
        $this->BankTransfer = $bankTransfer;
        return $this;
    }
    /**
     * Get DirectDebit value
     * @return \traveltainment\SOAP17\StructType\DirectDebitType|null
     */
    public function getDirectDebit()
    {
        return $this->DirectDebit;
    }
    /**
     * Set DirectDebit value
     * @param \traveltainment\SOAP17\StructType\DirectDebitType $directDebit
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setDirectDebit(\traveltainment\SOAP17\StructType\DirectDebitType $directDebit = null)
    {
        $this->DirectDebit = $directDebit;
        return $this;
    }
    /**
     * Get DirectDebitInternational value
     * @return \traveltainment\SOAP17\StructType\DirectDebitInternationalType|null
     */
    public function getDirectDebitInternational()
    {
        return $this->DirectDebitInternational;
    }
    /**
     * Set DirectDebitInternational value
     * @param \traveltainment\SOAP17\StructType\DirectDebitInternationalType $directDebitInternational
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setDirectDebitInternational(\traveltainment\SOAP17\StructType\DirectDebitInternationalType $directDebitInternational = null)
    {
        $this->DirectDebitInternational = $directDebitInternational;
        return $this;
    }
    /**
     * Get Agency value
     * @return \traveltainment\SOAP17\StructType\AgencyType|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param \traveltainment\SOAP17\StructType\AgencyType $agency
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setAgency(\traveltainment\SOAP17\StructType\AgencyType $agency = null)
    {
        $this->Agency = $agency;
        return $this;
    }
    /**
     * Get Ideal value
     * @return \traveltainment\SOAP17\StructType\IdealType|null
     */
    public function getIdeal()
    {
        return $this->Ideal;
    }
    /**
     * Set Ideal value
     * @param \traveltainment\SOAP17\StructType\IdealType $ideal
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setIdeal(\traveltainment\SOAP17\StructType\IdealType $ideal = null)
    {
        $this->Ideal = $ideal;
        return $this;
    }
    /**
     * Get Phone value
     * @return \traveltainment\SOAP17\StructType\PhoneType|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param \traveltainment\SOAP17\StructType\PhoneType $phone
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
     */
    public function setPhone(\traveltainment\SOAP17\StructType\PhoneType $phone = null)
    {
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\PaymentDescriptionType
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
