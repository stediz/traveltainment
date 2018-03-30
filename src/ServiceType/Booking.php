<?php

namespace traveltainment\SOAP17\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Booking ServiceType
 * @subpackage Services
 */
class Booking extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Booking_GetShoppingCart
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_GetShoppingCart $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_GetShoppingCartResponse|bool
     */
    public function Booking_GetShoppingCart(\traveltainment\SOAP17\StructType\Booking_GetShoppingCart $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_GetShoppingCart($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_GetSimpleShoppingCarts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_GetSimpleShoppingCarts $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_GetSimpleShoppingCartsResponse|bool
     */
    public function Booking_GetSimpleShoppingCarts(\traveltainment\SOAP17\StructType\Booking_GetSimpleShoppingCarts $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_GetSimpleShoppingCarts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_FinalizeShoppingCart
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_FinalizeShoppingCart $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_FinalizeShoppingCartResponse|bool
     */
    public function Booking_FinalizeShoppingCart(\traveltainment\SOAP17\StructType\Booking_FinalizeShoppingCart $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_FinalizeShoppingCart($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_GetTermsAndConditions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_GetTermsAndConditions $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_GetTermsAndConditionsResponse|bool
     */
    public function Booking_GetTermsAndConditions(\traveltainment\SOAP17\StructType\Booking_GetTermsAndConditions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_GetTermsAndConditions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_BookShoppingCart
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_BookShoppingCart $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_BookShoppingCartResponse|bool
     */
    public function Booking_BookShoppingCart(\traveltainment\SOAP17\StructType\Booking_BookShoppingCart $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_BookShoppingCart($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Package_GetAvailableOfferData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Package_GetAvailableOfferData $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Package_GetAvailableOfferDataResponse|bool
     */
    public function Booking_Package_GetAvailableOfferData(\traveltainment\SOAP17\StructType\Booking_Package_GetAvailableOfferData $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Package_GetAvailableOfferData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Hotel_GetAvailableOfferData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Hotel_GetAvailableOfferData $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Hotel_GetAvailableOfferDataResponse|bool
     */
    public function Booking_Hotel_GetAvailableOfferData(\traveltainment\SOAP17\StructType\Booking_Hotel_GetAvailableOfferData $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Hotel_GetAvailableOfferData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_HolidayHome_GetAvailableOfferData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_HolidayHome_GetAvailableOfferData $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_HolidayHome_GetAvailableOfferDataResponse|bool
     */
    public function Booking_HolidayHome_GetAvailableOfferData(\traveltainment\SOAP17\StructType\Booking_HolidayHome_GetAvailableOfferData $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_HolidayHome_GetAvailableOfferData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Flight_GetAvailableOfferData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferData $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferDataResponse|bool
     */
    public function Booking_Flight_GetAvailableOfferData(\traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferData $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Flight_GetAvailableOfferData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Package_GetAlternativeFlightsList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Package_GetAlternativeFlightsList $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Package_GetAlternativeFlightsListResponse|bool
     */
    public function Booking_Package_GetAlternativeFlightsList(\traveltainment\SOAP17\StructType\Booking_Package_GetAlternativeFlightsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Package_GetAlternativeFlightsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Flight_AvailabilityAndPriceCheck
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Flight_AvailabilityAndPriceCheck $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Flight_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_Flight_AvailabilityAndPriceCheck(\traveltainment\SOAP17\StructType\Booking_Flight_AvailabilityAndPriceCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Flight_AvailabilityAndPriceCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Hotel_AvailabilityAndPriceCheck
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Hotel_AvailabilityAndPriceCheck $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Hotel_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_Hotel_AvailabilityAndPriceCheck(\traveltainment\SOAP17\StructType\Booking_Hotel_AvailabilityAndPriceCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Hotel_AvailabilityAndPriceCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_Package_AvailabilityAndPriceCheck
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Package_AvailabilityAndPriceCheck $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Package_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_Package_AvailabilityAndPriceCheck(\traveltainment\SOAP17\StructType\Booking_Package_AvailabilityAndPriceCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Package_AvailabilityAndPriceCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_HolidayHome_Book
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_HolidayHome_Book $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_HolidayHome_BookResponse|bool
     */
    public function Booking_HolidayHome_Book(\traveltainment\SOAP17\StructType\Booking_HolidayHome_Book $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_HolidayHome_Book($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_Flight_FinalizeBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Flight_FinalizeBook $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Flight_FinalizeBookResponse|bool
     */
    public function Booking_Flight_FinalizeBook(\traveltainment\SOAP17\StructType\Booking_Flight_FinalizeBook $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Flight_FinalizeBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_Hotel_FinalizeBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Hotel_FinalizeBook $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Hotel_FinalizeBookResponse|bool
     */
    public function Booking_Hotel_FinalizeBook(\traveltainment\SOAP17\StructType\Booking_Hotel_FinalizeBook $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Hotel_FinalizeBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_Package_FinalizeBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Package_FinalizeBook $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Package_FinalizeBookResponse|bool
     */
    public function Booking_Package_FinalizeBook(\traveltainment\SOAP17\StructType\Booking_Package_FinalizeBook $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Package_FinalizeBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_HolidayHome_FinalizeBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_HolidayHome_FinalizeBook $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_HolidayHome_FinalizeBookResponse|bool
     */
    public function Booking_HolidayHome_FinalizeBook(\traveltainment\SOAP17\StructType\Booking_HolidayHome_FinalizeBook $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_HolidayHome_FinalizeBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_InsertAddon
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_InsertAddon $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_InsertAddonResponse|bool
     */
    public function Booking_InsertAddon(\traveltainment\SOAP17\StructType\Booking_InsertAddon $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_InsertAddon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_UpdateAddon
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_UpdateAddon $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_UpdateAddonResponse|bool
     */
    public function Booking_UpdateAddon(\traveltainment\SOAP17\StructType\Booking_UpdateAddon $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_UpdateAddon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Booking_HolidayHome_AvailabilityAndPriceCheck
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_HolidayHome_AvailabilityAndPriceCheck $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_HolidayHome_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_HolidayHome_AvailabilityAndPriceCheck(\traveltainment\SOAP17\StructType\Booking_HolidayHome_AvailabilityAndPriceCheck $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_HolidayHome_AvailabilityAndPriceCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_Flight_Book
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Flight_Book $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Flight_BookResponse|bool
     */
    public function Booking_Flight_Book(\traveltainment\SOAP17\StructType\Booking_Flight_Book $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Flight_Book($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_Hotel_Book
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Hotel_Book $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Hotel_BookResponse|bool
     */
    public function Booking_Hotel_Book(\traveltainment\SOAP17\StructType\Booking_Hotel_Book $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Hotel_Book($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Booking_Package_Book
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Booking_Package_Book $parameters
     * @return \traveltainment\SOAP17\StructType\Booking_Package_BookResponse|bool
     */
    public function Booking_Package_Book(\traveltainment\SOAP17\StructType\Booking_Package_Book $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Booking_Package_Book($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \traveltainment\SOAP17\StructType\Booking_BookShoppingCartResponse|\traveltainment\SOAP17\StructType\Booking_FinalizeShoppingCartResponse|\traveltainment\SOAP17\StructType\Booking_Flight_AvailabilityAndPriceCheckResponse|\traveltainment\SOAP17\StructType\Booking_Flight_BookResponse|\traveltainment\SOAP17\StructType\Booking_Flight_FinalizeBookResponse|\traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferDataResponse|\traveltainment\SOAP17\StructType\Booking_GetShoppingCartResponse|\traveltainment\SOAP17\StructType\Booking_GetSimpleShoppingCartsResponse|\traveltainment\SOAP17\StructType\Booking_GetTermsAndConditionsResponse|\traveltainment\SOAP17\StructType\Booking_HolidayHome_AvailabilityAndPriceCheckResponse|\traveltainment\SOAP17\StructType\Booking_HolidayHome_BookResponse|\traveltainment\SOAP17\StructType\Booking_HolidayHome_FinalizeBookResponse|\traveltainment\SOAP17\StructType\Booking_HolidayHome_GetAvailableOfferDataResponse|\traveltainment\SOAP17\StructType\Booking_Hotel_AvailabilityAndPriceCheckResponse|\traveltainment\SOAP17\StructType\Booking_Hotel_BookResponse|\traveltainment\SOAP17\StructType\Booking_Hotel_FinalizeBookResponse|\traveltainment\SOAP17\StructType\Booking_Hotel_GetAvailableOfferDataResponse|\traveltainment\SOAP17\StructType\Booking_InsertAddonResponse|\traveltainment\SOAP17\StructType\Booking_Package_AvailabilityAndPriceCheckResponse|\traveltainment\SOAP17\StructType\Booking_Package_BookResponse|\traveltainment\SOAP17\StructType\Booking_Package_FinalizeBookResponse|\traveltainment\SOAP17\StructType\Booking_Package_GetAlternativeFlightsListResponse|\traveltainment\SOAP17\StructType\Booking_Package_GetAvailableOfferDataResponse|\traveltainment\SOAP17\StructType\Booking_UpdateAddonResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
