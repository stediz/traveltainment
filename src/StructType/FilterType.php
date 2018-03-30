<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FilterType StructType
 * @subpackage Structs
 */
class FilterType extends AbstractStructBase
{
    /**
     * The CreationDate
     * @var \traveltainment\SOAP17\StructType\DateSpanType
     */
    public $CreationDate;
    /**
     * The DepartureDate
     * @var \traveltainment\SOAP17\StructType\DateSpanType
     */
    public $DepartureDate;
    /**
     * The BookingDate
     * @var \traveltainment\SOAP17\StructType\DateSpanType
     */
    public $BookingDate;
    /**
     * The ShoppingCartID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShoppingCartID;
    /**
     * The AddonID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddonID;
    /**
     * The BookingID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingID;
    /**
     * The CustomerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PersonNameType
     */
    public $CustomerName;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperatorType
     */
    public $TourOperator;
    /**
     * The ProcessNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProcessNo;
    /**
     * Constructor method for FilterType
     * @uses FilterType::setCreationDate()
     * @uses FilterType::setDepartureDate()
     * @uses FilterType::setBookingDate()
     * @uses FilterType::setShoppingCartID()
     * @uses FilterType::setAddonID()
     * @uses FilterType::setBookingID()
     * @uses FilterType::setCustomerName()
     * @uses FilterType::setTourOperator()
     * @uses FilterType::setProcessNo()
     * @param \traveltainment\SOAP17\StructType\DateSpanType $creationDate
     * @param \traveltainment\SOAP17\StructType\DateSpanType $departureDate
     * @param \traveltainment\SOAP17\StructType\DateSpanType $bookingDate
     * @param string $shoppingCartID
     * @param string $addonID
     * @param string $bookingID
     * @param \traveltainment\SOAP17\StructType\PersonNameType $customerName
     * @param \traveltainment\SOAP17\StructType\TourOperatorType $tourOperator
     * @param string $processNo
     */
    public function __construct(\traveltainment\SOAP17\StructType\DateSpanType $creationDate = null, \traveltainment\SOAP17\StructType\DateSpanType $departureDate = null, \traveltainment\SOAP17\StructType\DateSpanType $bookingDate = null, $shoppingCartID = null, $addonID = null, $bookingID = null, \traveltainment\SOAP17\StructType\PersonNameType $customerName = null, \traveltainment\SOAP17\StructType\TourOperatorType $tourOperator = null, $processNo = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setDepartureDate($departureDate)
            ->setBookingDate($bookingDate)
            ->setShoppingCartID($shoppingCartID)
            ->setAddonID($addonID)
            ->setBookingID($bookingID)
            ->setCustomerName($customerName)
            ->setTourOperator($tourOperator)
            ->setProcessNo($processNo);
    }
    /**
     * Get CreationDate value
     * @return \traveltainment\SOAP17\StructType\DateSpanType|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param \traveltainment\SOAP17\StructType\DateSpanType $creationDate
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setCreationDate(\traveltainment\SOAP17\StructType\DateSpanType $creationDate = null)
    {
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return \traveltainment\SOAP17\StructType\DateSpanType|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param \traveltainment\SOAP17\StructType\DateSpanType $departureDate
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setDepartureDate(\traveltainment\SOAP17\StructType\DateSpanType $departureDate = null)
    {
        $this->DepartureDate = $departureDate;
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
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setBookingDate(\traveltainment\SOAP17\StructType\DateSpanType $bookingDate = null)
    {
        $this->BookingDate = $bookingDate;
        return $this;
    }
    /**
     * Get ShoppingCartID value
     * @return string|null
     */
    public function getShoppingCartID()
    {
        return $this->ShoppingCartID;
    }
    /**
     * Set ShoppingCartID value
     * @param string $shoppingCartID
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setShoppingCartID($shoppingCartID = null)
    {
        // validation for constraint: string
        if (!is_null($shoppingCartID) && !is_string($shoppingCartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shoppingCartID)), __LINE__);
        }
        $this->ShoppingCartID = $shoppingCartID;
        return $this;
    }
    /**
     * Get AddonID value
     * @return string|null
     */
    public function getAddonID()
    {
        return $this->AddonID;
    }
    /**
     * Set AddonID value
     * @param string $addonID
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setAddonID($addonID = null)
    {
        // validation for constraint: string
        if (!is_null($addonID) && !is_string($addonID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addonID)), __LINE__);
        }
        $this->AddonID = $addonID;
        return $this;
    }
    /**
     * Get BookingID value
     * @return string|null
     */
    public function getBookingID()
    {
        return $this->BookingID;
    }
    /**
     * Set BookingID value
     * @param string $bookingID
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setBookingID($bookingID = null)
    {
        // validation for constraint: string
        if (!is_null($bookingID) && !is_string($bookingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingID)), __LINE__);
        }
        $this->BookingID = $bookingID;
        return $this;
    }
    /**
     * Get CustomerName value
     * @return \traveltainment\SOAP17\StructType\PersonNameType|null
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }
    /**
     * Set CustomerName value
     * @param \traveltainment\SOAP17\StructType\PersonNameType $customerName
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setCustomerName(\traveltainment\SOAP17\StructType\PersonNameType $customerName = null)
    {
        $this->CustomerName = $customerName;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\TourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\TourOperatorType $tourOperator
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\TourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get ProcessNo value
     * @return string|null
     */
    public function getProcessNo()
    {
        return $this->ProcessNo;
    }
    /**
     * Set ProcessNo value
     * @param string $processNo
     * @return \traveltainment\SOAP17\StructType\FilterType
     */
    public function setProcessNo($processNo = null)
    {
        // validation for constraint: string
        if (!is_null($processNo) && !is_string($processNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processNo)), __LINE__);
        }
        $this->ProcessNo = $processNo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\FilterType
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
