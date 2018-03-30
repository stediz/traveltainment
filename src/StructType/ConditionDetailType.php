<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionDetailType StructType
 * @subpackage Structs
 */
class ConditionDetailType extends AbstractStructBase
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
     * @var \traveltainment\SOAP17\StructType\TextSectionsType
     */
    public $TextSections;
    /**
     * Constructor method for ConditionDetailType
     * @uses ConditionDetailType::setTitle()
     * @uses ConditionDetailType::setTextSections()
     * @param string $title
     * @param \traveltainment\SOAP17\StructType\TextSectionsType $textSections
     */
    public function __construct($title = null, \traveltainment\SOAP17\StructType\TextSectionsType $textSections = null)
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
     * @return \traveltainment\SOAP17\StructType\ConditionDetailType
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
     * @return \traveltainment\SOAP17\StructType\TextSectionsType|null
     */
    public function getTextSections()
    {
        return $this->TextSections;
    }
    /**
     * Set TextSections value
     * @param \traveltainment\SOAP17\StructType\TextSectionsType $textSections
     * @return \traveltainment\SOAP17\StructType\ConditionDetailType
     */
    public function setTextSections(\traveltainment\SOAP17\StructType\TextSectionsType $textSections = null)
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
     * @return \traveltainment\SOAP17\StructType\ConditionDetailType
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
