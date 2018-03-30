<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\AdditionalInfoType
     */
    public $AdditionalInfo;
    /**
     * The Images
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ImagesType
     */
    public $Images;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TextType
     */
    public $Text;
    /**
     * Constructor method for DescriptionType
     * @uses DescriptionType::setName()
     * @uses DescriptionType::setAdditionalInfo()
     * @uses DescriptionType::setImages()
     * @uses DescriptionType::setText()
     * @param string $name
     * @param \traveltainment\SOAP17\StructType\AdditionalInfoType $additionalInfo
     * @param \traveltainment\SOAP17\StructType\ImagesType $images
     * @param \traveltainment\SOAP17\StructType\TextType $text
     */
    public function __construct($name = null, \traveltainment\SOAP17\StructType\AdditionalInfoType $additionalInfo = null, \traveltainment\SOAP17\StructType\ImagesType $images = null, \traveltainment\SOAP17\StructType\TextType $text = null)
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
     * @return \traveltainment\SOAP17\StructType\DescriptionType
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
     * @return \traveltainment\SOAP17\StructType\AdditionalInfoType|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param \traveltainment\SOAP17\StructType\AdditionalInfoType $additionalInfo
     * @return \traveltainment\SOAP17\StructType\DescriptionType
     */
    public function setAdditionalInfo(\traveltainment\SOAP17\StructType\AdditionalInfoType $additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Get Images value
     * @return \traveltainment\SOAP17\StructType\ImagesType|null
     */
    public function getImages()
    {
        return $this->Images;
    }
    /**
     * Set Images value
     * @param \traveltainment\SOAP17\StructType\ImagesType $images
     * @return \traveltainment\SOAP17\StructType\DescriptionType
     */
    public function setImages(\traveltainment\SOAP17\StructType\ImagesType $images = null)
    {
        $this->Images = $images;
        return $this;
    }
    /**
     * Get Text value
     * @return \traveltainment\SOAP17\StructType\TextType|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param \traveltainment\SOAP17\StructType\TextType $text
     * @return \traveltainment\SOAP17\StructType\DescriptionType
     */
    public function setText(\traveltainment\SOAP17\StructType\TextType $text = null)
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
     * @return \traveltainment\SOAP17\StructType\DescriptionType
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
