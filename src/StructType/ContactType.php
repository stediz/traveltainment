<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactType StructType
 * @subpackage Structs
 */
class ContactType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The LocationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifiziert das Umfeld, z.B. "Home" und "Work" als Privat- und Arbeitsbereich. | Mit Hilfe des Locationstypes kann man zwischen verschieden Umfeldern unterscheiden. Z.B. Home und Work als Privat- und Arbeitsbereich.
     * @var string
     */
    public $LocationType;
    /**
     * The TechType
     * Meta informations extracted from the WSDL
     * - documentation: Definiert das Kommunikationsmedium. | der TechType definiert das Kommunikationsmedium, fuer welche die Kontaktangaben gelten.
     * @var string
     */
    public $TechType;
    /**
     * Constructor method for ContactType
     * @uses ContactType::set_()
     * @uses ContactType::setLocationType()
     * @uses ContactType::setTechType()
     * @param string $_
     * @param string $locationType
     * @param string $techType
     */
    public function __construct($_ = null, $locationType = null, $techType = null)
    {
        $this
            ->set_($_)
            ->setLocationType($locationType)
            ->setTechType($techType);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\ContactType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \EnumType\UseLocationTypeEnum::valueIsValid()
     * @uses \EnumType\UseLocationTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationType
     * @return \StructType\ContactType
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UseLocationTypeEnum::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationType, implode(', ', \EnumType\UseLocationTypeEnum::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Get TechType value
     * @return string|null
     */
    public function getTechType()
    {
        return $this->TechType;
    }
    /**
     * Set TechType value
     * @uses \EnumType\ContactTechTypeEnum::valueIsValid()
     * @uses \EnumType\ContactTechTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $techType
     * @return \StructType\ContactType
     */
    public function setTechType($techType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ContactTechTypeEnum::valueIsValid($techType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $techType, implode(', ', \EnumType\ContactTechTypeEnum::getValidValues())), __LINE__);
        }
        $this->TechType = $techType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ContactType
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
