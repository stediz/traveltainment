<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImagesType StructType
 * @subpackage Structs
 */
class ImagesType extends AbstractStructBase
{
    /**
     * The ImageURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $ImageURL;
    /**
     * Constructor method for ImagesType
     * @uses ImagesType::setImageURL()
     * @param string[] $imageURL
     */
    public function __construct(array $imageURL = array())
    {
        $this
            ->setImageURL($imageURL);
    }
    /**
     * Get ImageURL value
     * @return string[]
     */
    public function getImageURL()
    {
        return $this->ImageURL;
    }
    /**
     * Set ImageURL value
     * @throws \InvalidArgumentException
     * @param string[] $imageURL
     * @return \traveltainment\SOAP17\StructType\ImagesType
     */
    public function setImageURL(array $imageURL = array())
    {
        foreach ($imageURL as $imagesTypeImageURLItem) {
            // validation for constraint: itemType
            if (!is_string($imagesTypeImageURLItem)) {
                throw new \InvalidArgumentException(sprintf('The ImageURL property can only contain items of string, "%s" given', is_object($imagesTypeImageURLItem) ? get_class($imagesTypeImageURLItem) : gettype($imagesTypeImageURLItem)), __LINE__);
            }
        }
        $this->ImageURL = $imageURL;
        return $this;
    }
    /**
     * Add item to ImageURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\ImagesType
     */
    public function addToImageURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ImageURL property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ImageURL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ImagesType
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
