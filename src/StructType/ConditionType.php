<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionType StructType
 * @subpackage Structs
 */
class ConditionType extends AbstractStructBase
{
    /**
     * The Title
     * @var string
     */
    public $Title;
    /**
     * The TextSections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TextSectionsType
     */
    public $TextSections;
    /**
     * Constructor method for ConditionType
     * @uses ConditionType::setTitle()
     * @uses ConditionType::setTextSections()
     * @param string $title
     * @param \StructType\TextSectionsType $textSections
     */
    public function __construct($title = null, \StructType\TextSectionsType $textSections = null)
    {
        $this
            ->setTitle($title)
            ->setTextSections($textSections);
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
     * @return \StructType\ConditionType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get TextSections value
     * @return \StructType\TextSectionsType|null
     */
    public function getTextSections()
    {
        return $this->TextSections;
    }
    /**
     * Set TextSections value
     * @param \StructType\TextSectionsType $textSections
     * @return \StructType\ConditionType
     */
    public function setTextSections(\StructType\TextSectionsType $textSections = null)
    {
        $this->TextSections = $textSections;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConditionType
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
