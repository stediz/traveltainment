<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonCyrillicPersonNameType StructType
 * @subpackage Structs
 */
class NonCyrillicPersonNameType extends AbstractStructBase
{
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - documentation: Vorname
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - documentation: Zweitname
     * - minOccurs: 0
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $MiddleName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - documentation: Nachname
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $LastName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: Titel
     * - minOccurs: 0
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $Title;
    /**
     * The Salutation
     * Meta informations extracted from the WSDL
     * - documentation: Anrede
     * - minOccurs: 0
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $Salutation;
    /**
     * Constructor method for NonCyrillicPersonNameType
     * @uses NonCyrillicPersonNameType::setFirstName()
     * @uses NonCyrillicPersonNameType::setMiddleName()
     * @uses NonCyrillicPersonNameType::setLastName()
     * @uses NonCyrillicPersonNameType::setTitle()
     * @uses NonCyrillicPersonNameType::setSalutation()
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $title
     * @param string $salutation
     */
    public function __construct($firstName = null, $middleName = null, $lastName = null, $title = null, $salutation = null)
    {
        $this
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setLastName($lastName)
            ->setTitle($title)
            ->setSalutation($salutation);
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \traveltainment\SOAP17\StructType\NonCyrillicPersonNameType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: pattern
        if (is_scalar($firstName) && !preg_match('/\\P{IsCyrillic}*/', $firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($firstName, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \traveltainment\SOAP17\StructType\NonCyrillicPersonNameType
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: pattern
        if (is_scalar($middleName) && !preg_match('/\\P{IsCyrillic}*/', $middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($middleName, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
        }
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \traveltainment\SOAP17\StructType\NonCyrillicPersonNameType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: pattern
        if (is_scalar($lastName) && !preg_match('/\\P{IsCyrillic}*/', $lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($lastName, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \traveltainment\SOAP17\StructType\NonCyrillicPersonNameType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: pattern
        if (is_scalar($title) && !preg_match('/\\P{IsCyrillic}*/', $title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($title, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Salutation value
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->Salutation;
    }
    /**
     * Set Salutation value
     * @param string $salutation
     * @return \traveltainment\SOAP17\StructType\NonCyrillicPersonNameType
     */
    public function setSalutation($salutation = null)
    {
        // validation for constraint: pattern
        if (is_scalar($salutation) && !preg_match('/\\P{IsCyrillic}*/', $salutation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($salutation, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salutation)), __LINE__);
        }
        $this->Salutation = $salutation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\NonCyrillicPersonNameType
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
