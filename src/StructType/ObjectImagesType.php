<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjectImagesType StructType
 * @subpackage Structs
 */
class ObjectImagesType extends AbstractStructBase
{
    /**
     * The Thumbnail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Thumbnail;
    /**
     * The MediumImage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MediumImage;
    /**
     * The LargeImage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LargeImage;
    /**
     * Constructor method for ObjectImagesType
     * @uses ObjectImagesType::setThumbnail()
     * @uses ObjectImagesType::setMediumImage()
     * @uses ObjectImagesType::setLargeImage()
     * @param string $thumbnail
     * @param string $mediumImage
     * @param string $largeImage
     */
    public function __construct($thumbnail = null, $mediumImage = null, $largeImage = null)
    {
        $this
            ->setThumbnail($thumbnail)
            ->setMediumImage($mediumImage)
            ->setLargeImage($largeImage);
    }
    /**
     * Get Thumbnail value
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->Thumbnail;
    }
    /**
     * Set Thumbnail value
     * @param string $thumbnail
     * @return \StructType\ObjectImagesType
     */
    public function setThumbnail($thumbnail = null)
    {
        // validation for constraint: string
        if (!is_null($thumbnail) && !is_string($thumbnail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($thumbnail)), __LINE__);
        }
        $this->Thumbnail = $thumbnail;
        return $this;
    }
    /**
     * Get MediumImage value
     * @return string|null
     */
    public function getMediumImage()
    {
        return $this->MediumImage;
    }
    /**
     * Set MediumImage value
     * @param string $mediumImage
     * @return \StructType\ObjectImagesType
     */
    public function setMediumImage($mediumImage = null)
    {
        // validation for constraint: string
        if (!is_null($mediumImage) && !is_string($mediumImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mediumImage)), __LINE__);
        }
        $this->MediumImage = $mediumImage;
        return $this;
    }
    /**
     * Get LargeImage value
     * @return string|null
     */
    public function getLargeImage()
    {
        return $this->LargeImage;
    }
    /**
     * Set LargeImage value
     * @param string $largeImage
     * @return \StructType\ObjectImagesType
     */
    public function setLargeImage($largeImage = null)
    {
        // validation for constraint: string
        if (!is_null($largeImage) && !is_string($largeImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($largeImage)), __LINE__);
        }
        $this->LargeImage = $largeImage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ObjectImagesType
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
