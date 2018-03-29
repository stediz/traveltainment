<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescriptionType StructType
 * @subpackage Structs
 */
class DescriptionType extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The AdditionalInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AdditionalInfoType
     */
    public $AdditionalInfo;
    /**
     * The Images
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ImagesType
     */
    public $Images;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TextType
     */
    public $Text;
    /**
     * Constructor method for DescriptionType
     * @uses DescriptionType::setName()
     * @uses DescriptionType::setAdditionalInfo()
     * @uses DescriptionType::setImages()
     * @uses DescriptionType::setText()
     * @param string $name
     * @param \StructType\AdditionalInfoType $additionalInfo
     * @param \StructType\ImagesType $images
     * @param \StructType\TextType $text
     */
    public function __construct($name = null, \StructType\AdditionalInfoType $additionalInfo = null, \StructType\ImagesType $images = null, \StructType\TextType $text = null)
    {
        $this
            ->setName($name)
            ->setAdditionalInfo($additionalInfo)
            ->setImages($images)
            ->setText($text);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\DescriptionType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return \StructType\AdditionalInfoType|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param \StructType\AdditionalInfoType $additionalInfo
     * @return \StructType\DescriptionType
     */
    public function setAdditionalInfo(\StructType\AdditionalInfoType $additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Get Images value
     * @return \StructType\ImagesType|null
     */
    public function getImages()
    {
        return $this->Images;
    }
    /**
     * Set Images value
     * @param \StructType\ImagesType $images
     * @return \StructType\DescriptionType
     */
    public function setImages(\StructType\ImagesType $images = null)
    {
        $this->Images = $images;
        return $this;
    }
    /**
     * Get Text value
     * @return \StructType\TextType|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param \StructType\TextType $text
     * @return \StructType\DescriptionType
     */
    public function setText(\StructType\TextType $text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DescriptionType
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
