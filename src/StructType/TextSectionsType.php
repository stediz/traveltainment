<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextSectionsType StructType
 * @subpackage Structs
 */
class TextSectionsType extends AbstractStructBase
{
    /**
     * The TextSection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TextSectionType[]
     */
    public $TextSection;
    /**
     * Constructor method for TextSectionsType
     * @uses TextSectionsType::setTextSection()
     * @param \StructType\TextSectionType[] $textSection
     */
    public function __construct(array $textSection = array())
    {
        $this
            ->setTextSection($textSection);
    }
    /**
     * Get TextSection value
     * @return \StructType\TextSectionType[]|null
     */
    public function getTextSection()
    {
        return $this->TextSection;
    }
    /**
     * Set TextSection value
     * @throws \InvalidArgumentException
     * @param \StructType\TextSectionType[] $textSection
     * @return \StructType\TextSectionsType
     */
    public function setTextSection(array $textSection = array())
    {
        foreach ($textSection as $textSectionsTypeTextSectionItem) {
            // validation for constraint: itemType
            if (!$textSectionsTypeTextSectionItem instanceof \StructType\TextSectionType) {
                throw new \InvalidArgumentException(sprintf('The TextSection property can only contain items of \StructType\TextSectionType, "%s" given', is_object($textSectionsTypeTextSectionItem) ? get_class($textSectionsTypeTextSectionItem) : gettype($textSectionsTypeTextSectionItem)), __LINE__);
            }
        }
        $this->TextSection = $textSection;
        return $this;
    }
    /**
     * Add item to TextSection value
     * @throws \InvalidArgumentException
     * @param \StructType\TextSectionType $item
     * @return \StructType\TextSectionsType
     */
    public function addToTextSection(\StructType\TextSectionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TextSectionType) {
            throw new \InvalidArgumentException(sprintf('The TextSection property can only contain items of \StructType\TextSectionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextSection[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TextSectionsType
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
