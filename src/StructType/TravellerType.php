<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerType StructType
 * @subpackage Structs
 */
class TravellerType extends NonCyrillicPersonType
{
    /**
     * The Age
     * @var string
     */
    public $Age;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Der Name einer Person.
     * @var \StructType\NonCyrillicPersonNameType
     */
    public $PersonName;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - documentation: Das Geschlecht einer Person, oder 'UNKNOWN' falls das Geschlecht nicht bekannt ist.
     * @var string
     */
    public $Gender;
    /**
     * The BirthDate
     * Meta informations extracted from the WSDL
     * - documentation: Das Geburtstag einer Person. | Das Geburtstag des Reisenden. Dieser wird als Datum uebergeben.
     * - pattern: [1-9][0-9]{3}-(([0][1-9])|([1][0-2]))\-(([0-2][0-9])|([3][01]))(\+(([01][0-9])|(2[0-3])):([0-5][0-9]))?
     * @var string
     */
    public $BirthDate;
    /**
     * The AgeQualifier
     * Meta informations extracted from the WSDL
     * - documentation: Gibt an, ob es sich bei den Reisenden um einen Erwachsenen (ADULT), ein Kind (CHILD) oder ein Baby (INFANT) handelt.
     * @var string
     */
    public $AgeQualifier;
    /**
     * The IDCardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 64
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $IDCardNumber;
    /**
     * The SpanishMarketScoped
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SpanishMarketScopedType
     */
    public $SpanishMarketScoped;
    /**
     * The RussianMarketScoped
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RussianMarketScopedType
     */
    public $RussianMarketScoped;
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Gibt an, ob es sich bei den Reisenden um einen Erwachsenen (ADULT), ein Kind (CHILD) oder ein Baby (INFANT) handelt.
     * @var string
     */
    public $Type;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten wird nur fuer den Response benoetigt. Der Knoten Total kann verschiedene Preise beinhalten. | This type is just needed for the response type.
     * - minOccurs: 0
     * @var \StructType\TotalType
     */
    public $Total;
    /**
     * The FrequentFlierProgram
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $FrequentFlierProgram;
    /**
     * The FrequentFlierAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $FrequentFlierAccount;
    /**
     * The travellerRef
     * Meta informations extracted from the WSDL
     * - pattern: \P{IsCyrillic}*
     * @var string
     */
    public $travellerRef;
    /**
     * Constructor method for TravellerType
     * @uses TravellerType::setAge()
     * @uses TravellerType::setPersonName()
     * @uses TravellerType::setGender()
     * @uses TravellerType::setBirthDate()
     * @uses TravellerType::setAgeQualifier()
     * @uses TravellerType::setIDCardNumber()
     * @uses TravellerType::setSpanishMarketScoped()
     * @uses TravellerType::setRussianMarketScoped()
     * @uses TravellerType::setID()
     * @uses TravellerType::setType()
     * @uses TravellerType::setTotal()
     * @uses TravellerType::setFrequentFlierProgram()
     * @uses TravellerType::setFrequentFlierAccount()
     * @uses TravellerType::setTravellerRef()
     * @param string $age
     * @param \StructType\NonCyrillicPersonNameType $personName
     * @param string $gender
     * @param string $birthDate
     * @param string $ageQualifier
     * @param string $iDCardNumber
     * @param \StructType\SpanishMarketScopedType $spanishMarketScoped
     * @param \StructType\RussianMarketScopedType $russianMarketScoped
     * @param string $iD
     * @param string $type
     * @param \StructType\TotalType $total
     * @param string $frequentFlierProgram
     * @param string $frequentFlierAccount
     * @param string $travellerRef
     */
    public function __construct($age = null, \StructType\NonCyrillicPersonNameType $personName = null, $gender = null, $birthDate = null, $ageQualifier = null, $iDCardNumber = null, \StructType\SpanishMarketScopedType $spanishMarketScoped = null, \StructType\RussianMarketScopedType $russianMarketScoped = null, $iD = null, $type = null, \StructType\TotalType $total = null, $frequentFlierProgram = null, $frequentFlierAccount = null, $travellerRef = null)
    {
        $this
            ->setAge($age)
            ->setPersonName($personName)
            ->setGender($gender)
            ->setBirthDate($birthDate)
            ->setAgeQualifier($ageQualifier)
            ->setIDCardNumber($iDCardNumber)
            ->setSpanishMarketScoped($spanishMarketScoped)
            ->setRussianMarketScoped($russianMarketScoped)
            ->setID($iD)
            ->setType($type)
            ->setTotal($total)
            ->setFrequentFlierProgram($frequentFlierProgram)
            ->setFrequentFlierAccount($frequentFlierAccount)
            ->setTravellerRef($travellerRef);
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \StructType\TravellerType
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get PersonName value
     * @return \StructType\NonCyrillicPersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \StructType\NonCyrillicPersonNameType $personName
     * @return \StructType\TravellerType
     */
    public function setPersonName(\StructType\NonCyrillicPersonNameType $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @uses \EnumType\GenderType::valueIsValid()
     * @uses \EnumType\GenderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \StructType\TravellerType
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GenderType::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gender, implode(', ', \EnumType\GenderType::getValidValues())), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \StructType\TravellerType
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: pattern
        if (is_scalar($birthDate) && !preg_match('/[1-9][0-9]{3}-(([0][1-9])|([1][0-2]))\\-(([0-2][0-9])|([3][01]))(\\+(([01][0-9])|(2[0-3])):([0-5][0-9]))?/', $birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[1-9][0-9]{3}-(([0][1-9])|([1][0-2]))\-(([0-2][0-9])|([3][01]))(\+(([01][0-9])|(2[0-3])):([0-5][0-9]))?", "%s" given', var_export($birthDate, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->BirthDate = $birthDate;
        return $this;
    }
    /**
     * Get AgeQualifier value
     * @return string|null
     */
    public function getAgeQualifier()
    {
        return $this->AgeQualifier;
    }
    /**
     * Set AgeQualifier value
     * @uses \EnumType\PersType::valueIsValid()
     * @uses \EnumType\PersType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ageQualifier
     * @return \StructType\TravellerType
     */
    public function setAgeQualifier($ageQualifier = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PersType::valueIsValid($ageQualifier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ageQualifier, implode(', ', \EnumType\PersType::getValidValues())), __LINE__);
        }
        $this->AgeQualifier = $ageQualifier;
        return $this;
    }
    /**
     * Get IDCardNumber value
     * @return string|null
     */
    public function getIDCardNumber()
    {
        return $this->IDCardNumber;
    }
    /**
     * Set IDCardNumber value
     * @param string $iDCardNumber
     * @return \StructType\TravellerType
     */
    public function setIDCardNumber($iDCardNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($iDCardNumber) && strlen($iDCardNumber) > 64) || (is_array($iDCardNumber) && count($iDCardNumber) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($iDCardNumber) ? strlen($iDCardNumber) : count($iDCardNumber)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($iDCardNumber) && !preg_match('/\\P{IsCyrillic}*/', $iDCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($iDCardNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($iDCardNumber) && !is_string($iDCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDCardNumber)), __LINE__);
        }
        $this->IDCardNumber = $iDCardNumber;
        return $this;
    }
    /**
     * Get SpanishMarketScoped value
     * @return \StructType\SpanishMarketScopedType|null
     */
    public function getSpanishMarketScoped()
    {
        return $this->SpanishMarketScoped;
    }
    /**
     * Set SpanishMarketScoped value
     * @param \StructType\SpanishMarketScopedType $spanishMarketScoped
     * @return \StructType\TravellerType
     */
    public function setSpanishMarketScoped(\StructType\SpanishMarketScopedType $spanishMarketScoped = null)
    {
        $this->SpanishMarketScoped = $spanishMarketScoped;
        return $this;
    }
    /**
     * Get RussianMarketScoped value
     * @return \StructType\RussianMarketScopedType|null
     */
    public function getRussianMarketScoped()
    {
        return $this->RussianMarketScoped;
    }
    /**
     * Set RussianMarketScoped value
     * @param \StructType\RussianMarketScopedType $russianMarketScoped
     * @return \StructType\TravellerType
     */
    public function setRussianMarketScoped(\StructType\RussianMarketScopedType $russianMarketScoped = null)
    {
        $this->RussianMarketScoped = $russianMarketScoped;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\TravellerType
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\PersType::valueIsValid()
     * @uses \EnumType\PersType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\TravellerType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PersType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \EnumType\PersType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\TotalType $total
     * @return \StructType\TravellerType
     */
    public function setTotal(\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get FrequentFlierProgram value
     * @return string|null
     */
    public function getFrequentFlierProgram()
    {
        return $this->FrequentFlierProgram;
    }
    /**
     * Set FrequentFlierProgram value
     * @param string $frequentFlierProgram
     * @return \StructType\TravellerType
     */
    public function setFrequentFlierProgram($frequentFlierProgram = null)
    {
        // validation for constraint: pattern
        if (is_scalar($frequentFlierProgram) && !preg_match('/\\P{IsCyrillic}*/', $frequentFlierProgram)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($frequentFlierProgram, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($frequentFlierProgram) && !is_string($frequentFlierProgram)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlierProgram)), __LINE__);
        }
        $this->FrequentFlierProgram = $frequentFlierProgram;
        return $this;
    }
    /**
     * Get FrequentFlierAccount value
     * @return string|null
     */
    public function getFrequentFlierAccount()
    {
        return $this->FrequentFlierAccount;
    }
    /**
     * Set FrequentFlierAccount value
     * @param string $frequentFlierAccount
     * @return \StructType\TravellerType
     */
    public function setFrequentFlierAccount($frequentFlierAccount = null)
    {
        // validation for constraint: pattern
        if (is_scalar($frequentFlierAccount) && !preg_match('/\\P{IsCyrillic}*/', $frequentFlierAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($frequentFlierAccount, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($frequentFlierAccount) && !is_string($frequentFlierAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlierAccount)), __LINE__);
        }
        $this->FrequentFlierAccount = $frequentFlierAccount;
        return $this;
    }
    /**
     * Get travellerRef value
     * @return string|null
     */
    public function getTravellerRef()
    {
        return $this->travellerRef;
    }
    /**
     * Set travellerRef value
     * @param string $travellerRef
     * @return \StructType\TravellerType
     */
    public function setTravellerRef($travellerRef = null)
    {
        // validation for constraint: pattern
        if (is_scalar($travellerRef) && !preg_match('/\\P{IsCyrillic}*/', $travellerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\P{IsCyrillic}*", "%s" given', var_export($travellerRef, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($travellerRef) && !is_string($travellerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerRef)), __LINE__);
        }
        $this->travellerRef = $travellerRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TravellerType
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
