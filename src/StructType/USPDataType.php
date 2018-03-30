<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for USPDataType StructType
 * @subpackage Structs
 */
class USPDataType extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Category;
    /**
     * The SubCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SubCategory;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The BookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\DateSpanType
     */
    public $BookingDate;
    /**
     * The TravelDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\DateSpanType
     */
    public $TravelDate;
    /**
     * The Unit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\Unit
     */
    public $Unit;
    /**
     * Constructor method for USPDataType
     * @uses USPDataType::setCategory()
     * @uses USPDataType::setSubCategory()
     * @uses USPDataType::setText()
     * @uses USPDataType::setBookingDate()
     * @uses USPDataType::setTravelDate()
     * @uses USPDataType::setUnit()
     * @param string $category
     * @param string $subCategory
     * @param string $text
     * @param \traveltainment\SOAP17\StructType\DateSpanType $bookingDate
     * @param \traveltainment\SOAP17\StructType\DateSpanType $travelDate
     * @param \traveltainment\SOAP17\StructType\Unit $unit
     */
    public function __construct($category = null, $subCategory = null, $text = null, \traveltainment\SOAP17\StructType\DateSpanType $bookingDate = null, \traveltainment\SOAP17\StructType\DateSpanType $travelDate = null, \traveltainment\SOAP17\StructType\Unit $unit = null)
    {
        $this
            ->setCategory($category)
            ->setSubCategory($subCategory)
            ->setText($text)
            ->setBookingDate($bookingDate)
            ->setTravelDate($travelDate)
            ->setUnit($unit);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \traveltainment\SOAP17\StructType\USPDataType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get SubCategory value
     * @return string|null
     */
    public function getSubCategory()
    {
        return $this->SubCategory;
    }
    /**
     * Set SubCategory value
     * @param string $subCategory
     * @return \traveltainment\SOAP17\StructType\USPDataType
     */
    public function setSubCategory($subCategory = null)
    {
        // validation for constraint: string
        if (!is_null($subCategory) && !is_string($subCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subCategory)), __LINE__);
        }
        $this->SubCategory = $subCategory;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \traveltainment\SOAP17\StructType\USPDataType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get BookingDate value
     * @return \traveltainment\SOAP17\StructType\DateSpanType|null
     */
    public function getBookingDate()
    {
        return $this->BookingDate;
    }
    /**
     * Set BookingDate value
     * @param \traveltainment\SOAP17\StructType\DateSpanType $bookingDate
     * @return \traveltainment\SOAP17\StructType\USPDataType
     */
    public function setBookingDate(\traveltainment\SOAP17\StructType\DateSpanType $bookingDate = null)
    {
        $this->BookingDate = $bookingDate;
        return $this;
    }
    /**
     * Get TravelDate value
     * @return \traveltainment\SOAP17\StructType\DateSpanType|null
     */
    public function getTravelDate()
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param \traveltainment\SOAP17\StructType\DateSpanType $travelDate
     * @return \traveltainment\SOAP17\StructType\USPDataType
     */
    public function setTravelDate(\traveltainment\SOAP17\StructType\DateSpanType $travelDate = null)
    {
        $this->TravelDate = $travelDate;
        return $this;
    }
    /**
     * Get Unit value
     * @return \traveltainment\SOAP17\StructType\Unit|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param \traveltainment\SOAP17\StructType\Unit $unit
     * @return \traveltainment\SOAP17\StructType\USPDataType
     */
    public function setUnit(\traveltainment\SOAP17\StructType\Unit $unit = null)
    {
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\USPDataType
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
