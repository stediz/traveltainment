<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookShoppingCartRSType StructType
 * @subpackage Structs
 */
class BookShoppingCartRSType extends ResponseType
{
    /**
     * The Errors
     * @var \traveltainment\SOAP17\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The ShoppingCartID
     * @var string
     */
    public $ShoppingCartID;
    /**
     * The SessionID
     * @var string
     */
    public $SessionID;
    /**
     * The BookingResults
     * @var \traveltainment\SOAP17\StructType\BookingResultsType
     */
    public $BookingResults;
    /**
     * Constructor method for BookShoppingCartRSType
     * @uses BookShoppingCartRSType::setErrors()
     * @uses BookShoppingCartRSType::setShoppingCartID()
     * @uses BookShoppingCartRSType::setSessionID()
     * @uses BookShoppingCartRSType::setBookingResults()
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @param string $shoppingCartID
     * @param string $sessionID
     * @param \traveltainment\SOAP17\StructType\BookingResultsType $bookingResults
     */
    public function __construct(\traveltainment\SOAP17\StructType\ErrorsType $errors = null, $shoppingCartID = null, $sessionID = null, \traveltainment\SOAP17\StructType\BookingResultsType $bookingResults = null)
    {
        $this
            ->setErrors($errors)
            ->setShoppingCartID($shoppingCartID)
            ->setSessionID($sessionID)
            ->setBookingResults($bookingResults);
    }
    /**
     * Get Errors value
     * @return \traveltainment\SOAP17\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @return \traveltainment\SOAP17\StructType\BookShoppingCartRSType
     */
    public function setErrors(\traveltainment\SOAP17\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
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
     * @return \traveltainment\SOAP17\StructType\BookShoppingCartRSType
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
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \traveltainment\SOAP17\StructType\BookShoppingCartRSType
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get BookingResults value
     * @return \traveltainment\SOAP17\StructType\BookingResultsType|null
     */
    public function getBookingResults()
    {
        return $this->BookingResults;
    }
    /**
     * Set BookingResults value
     * @param \traveltainment\SOAP17\StructType\BookingResultsType $bookingResults
     * @return \traveltainment\SOAP17\StructType\BookShoppingCartRSType
     */
    public function setBookingResults(\traveltainment\SOAP17\StructType\BookingResultsType $bookingResults = null)
    {
        $this->BookingResults = $bookingResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BookShoppingCartRSType
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
