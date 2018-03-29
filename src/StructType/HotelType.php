<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelType StructType
 * @subpackage Structs
 */
class HotelType extends AbstractStructBase
{
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RoomListType
     */
    public $RoomType;
    /**
     * The MealType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\MealRequest
     */
    public $MealType;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Category
     */
    public $Category;
    /**
     * The SpecialStayAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SpecialStayAttributesListType
     */
    public $SpecialStayAttributes;
    /**
     * The HotelAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelAttributesType
     */
    public $HotelAttributes;
    /**
     * The AdditionalAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalAttributes;
    /**
     * The ObjectName
     * @var string
     */
    public $ObjectName;
    /**
     * The ObjectID
     * @var int
     */
    public $ObjectID;
    /**
     * The City
     * @var \StructType\CityType
     */
    public $City;
    /**
     * The HotelReview
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewType
     */
    public $HotelReview;
    /**
     * The ObjectImages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ObjectImagesType
     */
    public $ObjectImages;
    /**
     * The TeaserText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TeaserTextType
     */
    public $TeaserText;
    /**
     * The AccomIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AccomIds
     */
    public $AccomIds;
    /**
     * Constructor method for HotelType
     * @uses HotelType::setRoomType()
     * @uses HotelType::setMealType()
     * @uses HotelType::setCategory()
     * @uses HotelType::setSpecialStayAttributes()
     * @uses HotelType::setHotelAttributes()
     * @uses HotelType::setAdditionalAttributes()
     * @uses HotelType::setObjectName()
     * @uses HotelType::setObjectID()
     * @uses HotelType::setCity()
     * @uses HotelType::setHotelReview()
     * @uses HotelType::setObjectImages()
     * @uses HotelType::setTeaserText()
     * @uses HotelType::setAccomIds()
     * @param \StructType\RoomListType $roomType
     * @param \StructType\MealRequest $mealType
     * @param \StructType\Category $category
     * @param \StructType\SpecialStayAttributesListType $specialStayAttributes
     * @param \StructType\HotelAttributesType $hotelAttributes
     * @param string $additionalAttributes
     * @param string $objectName
     * @param int $objectID
     * @param \StructType\CityType $city
     * @param \StructType\HotelReviewType $hotelReview
     * @param \StructType\ObjectImagesType $objectImages
     * @param \StructType\TeaserTextType $teaserText
     * @param \StructType\AccomIds $accomIds
     */
    public function __construct(\StructType\RoomListType $roomType = null, \StructType\MealRequest $mealType = null, \StructType\Category $category = null, \StructType\SpecialStayAttributesListType $specialStayAttributes = null, \StructType\HotelAttributesType $hotelAttributes = null, $additionalAttributes = null, $objectName = null, $objectID = null, \StructType\CityType $city = null, \StructType\HotelReviewType $hotelReview = null, \StructType\ObjectImagesType $objectImages = null, \StructType\TeaserTextType $teaserText = null, \StructType\AccomIds $accomIds = null)
    {
        $this
            ->setRoomType($roomType)
            ->setMealType($mealType)
            ->setCategory($category)
            ->setSpecialStayAttributes($specialStayAttributes)
            ->setHotelAttributes($hotelAttributes)
            ->setAdditionalAttributes($additionalAttributes)
            ->setObjectName($objectName)
            ->setObjectID($objectID)
            ->setCity($city)
            ->setHotelReview($hotelReview)
            ->setObjectImages($objectImages)
            ->setTeaserText($teaserText)
            ->setAccomIds($accomIds);
    }
    /**
     * Get RoomType value
     * @return \StructType\RoomListType|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param \StructType\RoomListType $roomType
     * @return \StructType\HotelType
     */
    public function setRoomType(\StructType\RoomListType $roomType = null)
    {
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get MealType value
     * @return \StructType\MealRequest|null
     */
    public function getMealType()
    {
        return $this->MealType;
    }
    /**
     * Set MealType value
     * @param \StructType\MealRequest $mealType
     * @return \StructType\HotelType
     */
    public function setMealType(\StructType\MealRequest $mealType = null)
    {
        $this->MealType = $mealType;
        return $this;
    }
    /**
     * Get Category value
     * @return \StructType\Category|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \StructType\Category $category
     * @return \StructType\HotelType
     */
    public function setCategory(\StructType\Category $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get SpecialStayAttributes value
     * @return \StructType\SpecialStayAttributesListType|null
     */
    public function getSpecialStayAttributes()
    {
        return $this->SpecialStayAttributes;
    }
    /**
     * Set SpecialStayAttributes value
     * @param \StructType\SpecialStayAttributesListType $specialStayAttributes
     * @return \StructType\HotelType
     */
    public function setSpecialStayAttributes(\StructType\SpecialStayAttributesListType $specialStayAttributes = null)
    {
        $this->SpecialStayAttributes = $specialStayAttributes;
        return $this;
    }
    /**
     * Get HotelAttributes value
     * @return \StructType\HotelAttributesType|null
     */
    public function getHotelAttributes()
    {
        return $this->HotelAttributes;
    }
    /**
     * Set HotelAttributes value
     * @param \StructType\HotelAttributesType $hotelAttributes
     * @return \StructType\HotelType
     */
    public function setHotelAttributes(\StructType\HotelAttributesType $hotelAttributes = null)
    {
        $this->HotelAttributes = $hotelAttributes;
        return $this;
    }
    /**
     * Get AdditionalAttributes value
     * @return string|null
     */
    public function getAdditionalAttributes()
    {
        return $this->AdditionalAttributes;
    }
    /**
     * Set AdditionalAttributes value
     * @param string $additionalAttributes
     * @return \StructType\HotelType
     */
    public function setAdditionalAttributes($additionalAttributes = null)
    {
        // validation for constraint: string
        if (!is_null($additionalAttributes) && !is_string($additionalAttributes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalAttributes)), __LINE__);
        }
        $this->AdditionalAttributes = $additionalAttributes;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \StructType\HotelType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Get ObjectID value
     * @return int|null
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param int $objectID
     * @return \StructType\HotelType
     */
    public function setObjectID($objectID = null)
    {
        // validation for constraint: int
        if (!is_null($objectID) && !is_numeric($objectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($objectID)), __LINE__);
        }
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Get City value
     * @return \StructType\CityType|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param \StructType\CityType $city
     * @return \StructType\HotelType
     */
    public function setCity(\StructType\CityType $city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Get HotelReview value
     * @return \StructType\HotelReviewType|null
     */
    public function getHotelReview()
    {
        return $this->HotelReview;
    }
    /**
     * Set HotelReview value
     * @param \StructType\HotelReviewType $hotelReview
     * @return \StructType\HotelType
     */
    public function setHotelReview(\StructType\HotelReviewType $hotelReview = null)
    {
        $this->HotelReview = $hotelReview;
        return $this;
    }
    /**
     * Get ObjectImages value
     * @return \StructType\ObjectImagesType|null
     */
    public function getObjectImages()
    {
        return $this->ObjectImages;
    }
    /**
     * Set ObjectImages value
     * @param \StructType\ObjectImagesType $objectImages
     * @return \StructType\HotelType
     */
    public function setObjectImages(\StructType\ObjectImagesType $objectImages = null)
    {
        $this->ObjectImages = $objectImages;
        return $this;
    }
    /**
     * Get TeaserText value
     * @return \StructType\TeaserTextType|null
     */
    public function getTeaserText()
    {
        return $this->TeaserText;
    }
    /**
     * Set TeaserText value
     * @param \StructType\TeaserTextType $teaserText
     * @return \StructType\HotelType
     */
    public function setTeaserText(\StructType\TeaserTextType $teaserText = null)
    {
        $this->TeaserText = $teaserText;
        return $this;
    }
    /**
     * Get AccomIds value
     * @return \StructType\AccomIds|null
     */
    public function getAccomIds()
    {
        return $this->AccomIds;
    }
    /**
     * Set AccomIds value
     * @param \StructType\AccomIds $accomIds
     * @return \StructType\HotelType
     */
    public function setAccomIds(\StructType\AccomIds $accomIds = null)
    {
        $this->AccomIds = $accomIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelType
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
