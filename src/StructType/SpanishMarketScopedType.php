<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpanishMarketScopedType StructType
 * @subpackage Structs
 */
class SpanishMarketScopedType extends AbstractStructBase
{
    /**
     * The ResidentDiscountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResidentDiscountCode;
    /**
     * The ResidentZIPCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $ResidentZIPCode;
    /**
     * The ResidentDiscountPaxCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResidentDiscountPaxCategory;
    /**
     * The ResidentCertificateNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 64
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $ResidentCertificateNumber;
    /**
     * The NIECardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 64
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $NIECardNumber;
    /**
     * Constructor method for SpanishMarketScopedType
     * @uses SpanishMarketScopedType::setResidentDiscountCode()
     * @uses SpanishMarketScopedType::setResidentZIPCode()
     * @uses SpanishMarketScopedType::setResidentDiscountPaxCategory()
     * @uses SpanishMarketScopedType::setResidentCertificateNumber()
     * @uses SpanishMarketScopedType::setNIECardNumber()
     * @param string $residentDiscountCode
     * @param string $residentZIPCode
     * @param string $residentDiscountPaxCategory
     * @param string $residentCertificateNumber
     * @param string $nIECardNumber
     */
    public function __construct($residentDiscountCode = null, $residentZIPCode = null, $residentDiscountPaxCategory = null, $residentCertificateNumber = null, $nIECardNumber = null)
    {
        $this
            ->setResidentDiscountCode($residentDiscountCode)
            ->setResidentZIPCode($residentZIPCode)
            ->setResidentDiscountPaxCategory($residentDiscountPaxCategory)
            ->setResidentCertificateNumber($residentCertificateNumber)
            ->setNIECardNumber($nIECardNumber);
    }
    /**
     * Get ResidentDiscountCode value
     * @return string|null
     */
    public function getResidentDiscountCode()
    {
        return $this->ResidentDiscountCode;
    }
    /**
     * Set ResidentDiscountCode value
     * @uses \traveltainment\SOAP17\EnumType\ResidentDiscountRequestCodeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\ResidentDiscountRequestCodeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $residentDiscountCode
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType
     */
    public function setResidentDiscountCode($residentDiscountCode = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\ResidentDiscountRequestCodeEnum::valueIsValid($residentDiscountCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $residentDiscountCode, implode(', ', \traveltainment\SOAP17\EnumType\ResidentDiscountRequestCodeEnum::getValidValues())), __LINE__);
        }
        $this->ResidentDiscountCode = $residentDiscountCode;
        return $this;
    }
    /**
     * Get ResidentZIPCode value
     * @return string|null
     */
    public function getResidentZIPCode()
    {
        return $this->ResidentZIPCode;
    }
    /**
     * Set ResidentZIPCode value
     * @param string $residentZIPCode
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType
     */
    public function setResidentZIPCode($residentZIPCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($residentZIPCode) && !preg_match('/\\P{IsCyrillic}*/', $residentZIPCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($residentZIPCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($residentZIPCode) && !is_string($residentZIPCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residentZIPCode)), __LINE__);
        }
        $this->ResidentZIPCode = $residentZIPCode;
        return $this;
    }
    /**
     * Get ResidentDiscountPaxCategory value
     * @return string|null
     */
    public function getResidentDiscountPaxCategory()
    {
        return $this->ResidentDiscountPaxCategory;
    }
    /**
     * Set ResidentDiscountPaxCategory value
     * @uses \traveltainment\SOAP17\EnumType\ResidentDiscountPaxCategoryEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\ResidentDiscountPaxCategoryEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $residentDiscountPaxCategory
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType
     */
    public function setResidentDiscountPaxCategory($residentDiscountPaxCategory = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\ResidentDiscountPaxCategoryEnum::valueIsValid($residentDiscountPaxCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $residentDiscountPaxCategory, implode(', ', \traveltainment\SOAP17\EnumType\ResidentDiscountPaxCategoryEnum::getValidValues())), __LINE__);
        }
        $this->ResidentDiscountPaxCategory = $residentDiscountPaxCategory;
        return $this;
    }
    /**
     * Get ResidentCertificateNumber value
     * @return string|null
     */
    public function getResidentCertificateNumber()
    {
        return $this->ResidentCertificateNumber;
    }
    /**
     * Set ResidentCertificateNumber value
     * @param string $residentCertificateNumber
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType
     */
    public function setResidentCertificateNumber($residentCertificateNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($residentCertificateNumber) && strlen($residentCertificateNumber) > 64) || (is_array($residentCertificateNumber) && count($residentCertificateNumber) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($residentCertificateNumber) ? strlen($residentCertificateNumber) : count($residentCertificateNumber)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($residentCertificateNumber) && !preg_match('/\\P{IsCyrillic}*/', $residentCertificateNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($residentCertificateNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($residentCertificateNumber) && !is_string($residentCertificateNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residentCertificateNumber)), __LINE__);
        }
        $this->ResidentCertificateNumber = $residentCertificateNumber;
        return $this;
    }
    /**
     * Get NIECardNumber value
     * @return string|null
     */
    public function getNIECardNumber()
    {
        return $this->NIECardNumber;
    }
    /**
     * Set NIECardNumber value
     * @param string $nIECardNumber
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType
     */
    public function setNIECardNumber($nIECardNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($nIECardNumber) && strlen($nIECardNumber) > 64) || (is_array($nIECardNumber) && count($nIECardNumber) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($nIECardNumber) ? strlen($nIECardNumber) : count($nIECardNumber)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($nIECardNumber) && !preg_match('/\\P{IsCyrillic}*/', $nIECardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($nIECardNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($nIECardNumber) && !is_string($nIECardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nIECardNumber)), __LINE__);
        }
        $this->NIECardNumber = $nIECardNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SpanishMarketScopedType
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
