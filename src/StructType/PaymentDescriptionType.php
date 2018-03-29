<?php

namespace StructType;

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
     * @var \StructType\CreditCardType
     */
    public $CreditCard;
    /**
     * The BankTransfer
     * @var \StructType\BankTransferType
     */
    public $BankTransfer;
    /**
     * The DirectDebit
     * @var \StructType\DirectDebitType
     */
    public $DirectDebit;
    /**
     * The DirectDebitInternational
     * @var \StructType\DirectDebitInternationalType
     */
    public $DirectDebitInternational;
    /**
     * The Agency
     * @var \StructType\AgencyType
     */
    public $Agency;
    /**
     * The Ideal
     * @var \StructType\IdealType
     */
    public $Ideal;
    /**
     * The Phone
     * @var \StructType\PhoneType
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
     * @param \StructType\CreditCardType $creditCard
     * @param \StructType\BankTransferType $bankTransfer
     * @param \StructType\DirectDebitType $directDebit
     * @param \StructType\DirectDebitInternationalType $directDebitInternational
     * @param \StructType\AgencyType $agency
     * @param \StructType\IdealType $ideal
     * @param \StructType\PhoneType $phone
     */
    public function __construct($type = null, \StructType\CreditCardType $creditCard = null, \StructType\BankTransferType $bankTransfer = null, \StructType\DirectDebitType $directDebit = null, \StructType\DirectDebitInternationalType $directDebitInternational = null, \StructType\AgencyType $agency = null, \StructType\IdealType $ideal = null, \StructType\PhoneType $phone = null)
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
     * @uses \EnumType\PaymentTypeEnum::valueIsValid()
     * @uses \EnumType\PaymentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\PaymentDescriptionType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \EnumType\PaymentTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \StructType\CreditCardType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \StructType\CreditCardType $creditCard
     * @return \StructType\PaymentDescriptionType
     */
    public function setCreditCard(\StructType\CreditCardType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get BankTransfer value
     * @return \StructType\BankTransferType|null
     */
    public function getBankTransfer()
    {
        return $this->BankTransfer;
    }
    /**
     * Set BankTransfer value
     * @param \StructType\BankTransferType $bankTransfer
     * @return \StructType\PaymentDescriptionType
     */
    public function setBankTransfer(\StructType\BankTransferType $bankTransfer = null)
    {
        $this->BankTransfer = $bankTransfer;
        return $this;
    }
    /**
     * Get DirectDebit value
     * @return \StructType\DirectDebitType|null
     */
    public function getDirectDebit()
    {
        return $this->DirectDebit;
    }
    /**
     * Set DirectDebit value
     * @param \StructType\DirectDebitType $directDebit
     * @return \StructType\PaymentDescriptionType
     */
    public function setDirectDebit(\StructType\DirectDebitType $directDebit = null)
    {
        $this->DirectDebit = $directDebit;
        return $this;
    }
    /**
     * Get DirectDebitInternational value
     * @return \StructType\DirectDebitInternationalType|null
     */
    public function getDirectDebitInternational()
    {
        return $this->DirectDebitInternational;
    }
    /**
     * Set DirectDebitInternational value
     * @param \StructType\DirectDebitInternationalType $directDebitInternational
     * @return \StructType\PaymentDescriptionType
     */
    public function setDirectDebitInternational(\StructType\DirectDebitInternationalType $directDebitInternational = null)
    {
        $this->DirectDebitInternational = $directDebitInternational;
        return $this;
    }
    /**
     * Get Agency value
     * @return \StructType\AgencyType|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param \StructType\AgencyType $agency
     * @return \StructType\PaymentDescriptionType
     */
    public function setAgency(\StructType\AgencyType $agency = null)
    {
        $this->Agency = $agency;
        return $this;
    }
    /**
     * Get Ideal value
     * @return \StructType\IdealType|null
     */
    public function getIdeal()
    {
        return $this->Ideal;
    }
    /**
     * Set Ideal value
     * @param \StructType\IdealType $ideal
     * @return \StructType\PaymentDescriptionType
     */
    public function setIdeal(\StructType\IdealType $ideal = null)
    {
        $this->Ideal = $ideal;
        return $this;
    }
    /**
     * Get Phone value
     * @return \StructType\PhoneType|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param \StructType\PhoneType $phone
     * @return \StructType\PaymentDescriptionType
     */
    public function setPhone(\StructType\PhoneType $phone = null)
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
     * @return \StructType\PaymentDescriptionType
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
