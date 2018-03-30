<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Der AccomodationType ist die Abbildung einer Unterbringung und kann neben eines Hotelaufenthalts auch eine Ferienwohnung darstellen
 * @subpackage Structs
 */
class AccommodationType extends AbstractStructBase
{
    /**
     * The ObjectID
     * Meta informations extracted from the WSDL
     * - documentation: Ehemaliger IFF Code.
     * @var int
     */
    public $ObjectID;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectName;
    /**
     * The AccomCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccomCode;
    /**
     * The RoomCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RoomCode;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Room;
    /**
     * The RoomTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RoomTypeName;
    /**
     * The RoomAdditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\RoomAdditionList
     */
    public $RoomAdditions;
    /**
     * The MealPlanCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MealPlanCode;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Meal;
    /**
     * The HotelRegionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HotelRegionCode;
    /**
     * The StayDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\DateSpanType
     */
    public $StayDateSpan;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AddressType
     */
    public $Address;
    /**
     * The Contacts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ContactListType
     */
    public $Contacts;
    /**
     * The ObjectImages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ObjectImagesType
     */
    public $ObjectImages;
    /**
     * The IsRefundable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRefundable;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - fractionDigits: 1
     * - minInclusive: 0.0
     * - totalDigits: 3
     * @var float
     */
    public $Category;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\RegionType
     */
    public $Region;
    /**
     * Constructor method for AccommodationType
     * @uses AccommodationType::setObjectID()
     * @uses AccommodationType::setObjectName()
     * @uses AccommodationType::setAccomCode()
     * @uses AccommodationType::setRoomCode()
     * @uses AccommodationType::setRoom()
     * @uses AccommodationType::setRoomTypeName()
     * @uses AccommodationType::setRoomAdditions()
     * @uses AccommodationType::setMealPlanCode()
     * @uses AccommodationType::setMeal()
     * @uses AccommodationType::setHotelRegionCode()
     * @uses AccommodationType::setStayDateSpan()
     * @uses AccommodationType::setAddress()
     * @uses AccommodationType::setContacts()
     * @uses AccommodationType::setObjectImages()
     * @uses AccommodationType::setIsRefundable()
     * @uses AccommodationType::setCategory()
     * @uses AccommodationType::setRegion()
     * @param int $objectID
     * @param string $objectName
     * @param string $accomCode
     * @param string $roomCode
     * @param string $room
     * @param string $roomTypeName
     * @param \traveltainment\SOAP17\StructType\RoomAdditionList $roomAdditions
     * @param string $mealPlanCode
     * @param string $meal
     * @param string $hotelRegionCode
     * @param \traveltainment\SOAP17\StructType\DateSpanType $stayDateSpan
     * @param \traveltainment\SOAP17\StructType\AddressType $address
     * @param \traveltainment\SOAP17\StructType\ContactListType $contacts
     * @param \traveltainment\SOAP17\StructType\ObjectImagesType $objectImages
     * @param bool $isRefundable
     * @param float $category
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     */
    public function __construct($objectID = null, $objectName = null, $accomCode = null, $roomCode = null, $room = null, $roomTypeName = null, \traveltainment\SOAP17\StructType\RoomAdditionList $roomAdditions = null, $mealPlanCode = null, $meal = null, $hotelRegionCode = null, \traveltainment\SOAP17\StructType\DateSpanType $stayDateSpan = null, \traveltainment\SOAP17\StructType\AddressType $address = null, \traveltainment\SOAP17\StructType\ContactListType $contacts = null, \traveltainment\SOAP17\StructType\ObjectImagesType $objectImages = null, $isRefundable = null, $category = null, \traveltainment\SOAP17\StructType\RegionType $region = null)
    {
        $this
            ->setObjectID($objectID)
            ->setObjectName($objectName)
            ->setAccomCode($accomCode)
            ->setRoomCode($roomCode)
            ->setRoom($room)
            ->setRoomTypeName($roomTypeName)
            ->setRoomAdditions($roomAdditions)
            ->setMealPlanCode($mealPlanCode)
            ->setMeal($meal)
            ->setHotelRegionCode($hotelRegionCode)
            ->setStayDateSpan($stayDateSpan)
            ->setAddress($address)
            ->setContacts($contacts)
            ->setObjectImages($objectImages)
            ->setIsRefundable($isRefundable)
            ->setCategory($category)
            ->setRegion($region);
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
     * @return \traveltainment\SOAP17\StructType\AccommodationType
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
     * @return \traveltainment\SOAP17\StructType\AccommodationType
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
     * Get AccomCode value
     * @return string|null
     */
    public function getAccomCode()
    {
        return $this->AccomCode;
    }
    /**
     * Set AccomCode value
     * @param string $accomCode
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setAccomCode($accomCode = null)
    {
        // validation for constraint: string
        if (!is_null($accomCode) && !is_string($accomCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accomCode)), __LINE__);
        }
        $this->AccomCode = $accomCode;
        return $this;
    }
    /**
     * Get RoomCode value
     * @return string|null
     */
    public function getRoomCode()
    {
        return $this->RoomCode;
    }
    /**
     * Set RoomCode value
     * @param string $roomCode
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setRoomCode($roomCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomCode) && !is_string($roomCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomCode)), __LINE__);
        }
        $this->RoomCode = $roomCode;
        return $this;
    }
    /**
     * Get Room value
     * @return string|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @uses \traveltainment\SOAP17\EnumType\Room::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Room::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $room
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setRoom($room = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Room::valueIsValid($room)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $room, implode(', ', \traveltainment\SOAP17\EnumType\Room::getValidValues())), __LINE__);
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Get RoomTypeName value
     * @return string|null
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }
    /**
     * Set RoomTypeName value
     * @param string $roomTypeName
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setRoomTypeName($roomTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeName) && !is_string($roomTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeName)), __LINE__);
        }
        $this->RoomTypeName = $roomTypeName;
        return $this;
    }
    /**
     * Get RoomAdditions value
     * @return \traveltainment\SOAP17\StructType\RoomAdditionList|null
     */
    public function getRoomAdditions()
    {
        return $this->RoomAdditions;
    }
    /**
     * Set RoomAdditions value
     * @param \traveltainment\SOAP17\StructType\RoomAdditionList $roomAdditions
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setRoomAdditions(\traveltainment\SOAP17\StructType\RoomAdditionList $roomAdditions = null)
    {
        $this->RoomAdditions = $roomAdditions;
        return $this;
    }
    /**
     * Get MealPlanCode value
     * @return string|null
     */
    public function getMealPlanCode()
    {
        return $this->MealPlanCode;
    }
    /**
     * Set MealPlanCode value
     * @param string $mealPlanCode
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setMealPlanCode($mealPlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealPlanCode) && !is_string($mealPlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealPlanCode)), __LINE__);
        }
        $this->MealPlanCode = $mealPlanCode;
        return $this;
    }
    /**
     * Get Meal value
     * @return string|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @uses \traveltainment\SOAP17\EnumType\Meal::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Meal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $meal
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setMeal($meal = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Meal::valueIsValid($meal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $meal, implode(', ', \traveltainment\SOAP17\EnumType\Meal::getValidValues())), __LINE__);
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Get HotelRegionCode value
     * @return string|null
     */
    public function getHotelRegionCode()
    {
        return $this->HotelRegionCode;
    }
    /**
     * Set HotelRegionCode value
     * @param string $hotelRegionCode
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setHotelRegionCode($hotelRegionCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelRegionCode) && !is_string($hotelRegionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelRegionCode)), __LINE__);
        }
        $this->HotelRegionCode = $hotelRegionCode;
        return $this;
    }
    /**
     * Get StayDateSpan value
     * @return \traveltainment\SOAP17\StructType\DateSpanType|null
     */
    public function getStayDateSpan()
    {
        return $this->StayDateSpan;
    }
    /**
     * Set StayDateSpan value
     * @param \traveltainment\SOAP17\StructType\DateSpanType $stayDateSpan
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setStayDateSpan(\traveltainment\SOAP17\StructType\DateSpanType $stayDateSpan = null)
    {
        $this->StayDateSpan = $stayDateSpan;
        return $this;
    }
    /**
     * Get Address value
     * @return \traveltainment\SOAP17\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \traveltainment\SOAP17\StructType\AddressType $address
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setAddress(\traveltainment\SOAP17\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \traveltainment\SOAP17\StructType\ContactListType|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \traveltainment\SOAP17\StructType\ContactListType $contacts
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setContacts(\traveltainment\SOAP17\StructType\ContactListType $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Get ObjectImages value
     * @return \traveltainment\SOAP17\StructType\ObjectImagesType|null
     */
    public function getObjectImages()
    {
        return $this->ObjectImages;
    }
    /**
     * Set ObjectImages value
     * @param \traveltainment\SOAP17\StructType\ObjectImagesType $objectImages
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setObjectImages(\traveltainment\SOAP17\StructType\ObjectImagesType $objectImages = null)
    {
        $this->ObjectImages = $objectImages;
        return $this;
    }
    /**
     * Get IsRefundable value
     * @return bool|null
     */
    public function getIsRefundable()
    {
        return $this->IsRefundable;
    }
    /**
     * Set IsRefundable value
     * @param bool $isRefundable
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setIsRefundable($isRefundable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRefundable) && !is_bool($isRefundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRefundable)), __LINE__);
        }
        $this->IsRefundable = $isRefundable;
        return $this;
    }
    /**
     * Get Category value
     * @return float|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param float $category
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($category) && strlen(substr($category, strpos($category, '.') + 1)) !== 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 1 fraction digits, "%d" given', strlen(substr($category, strpos($category, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($category < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $category), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($category) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $category)) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 3 digits, "%d" given', strlen(substr($category, strpos($category, '.')))), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Region value
     * @return \traveltainment\SOAP17\StructType\RegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @return \traveltainment\SOAP17\StructType\AccommodationType
     */
    public function setRegion(\traveltainment\SOAP17\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AccommodationType
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
