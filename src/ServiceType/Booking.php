<?php

namespace ServiceType;

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
     * @param \StructType\Booking_GetShoppingCart $parameters
     * @return \StructType\Booking_GetShoppingCartResponse|bool
     */
    public function Booking_GetShoppingCart(\StructType\Booking_GetShoppingCart $parameters)
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
     * @param \StructType\Booking_GetSimpleShoppingCarts $parameters
     * @return \StructType\Booking_GetSimpleShoppingCartsResponse|bool
     */
    public function Booking_GetSimpleShoppingCarts(\StructType\Booking_GetSimpleShoppingCarts $parameters)
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
     * @param \StructType\Booking_FinalizeShoppingCart $parameters
     * @return \StructType\Booking_FinalizeShoppingCartResponse|bool
     */
    public function Booking_FinalizeShoppingCart(\StructType\Booking_FinalizeShoppingCart $parameters)
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
     * @param \StructType\Booking_GetTermsAndConditions $parameters
     * @return \StructType\Booking_GetTermsAndConditionsResponse|bool
     */
    public function Booking_GetTermsAndConditions(\StructType\Booking_GetTermsAndConditions $parameters)
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
     * @param \StructType\Booking_BookShoppingCart $parameters
     * @return \StructType\Booking_BookShoppingCartResponse|bool
     */
    public function Booking_BookShoppingCart(\StructType\Booking_BookShoppingCart $parameters)
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
     * @param \StructType\Booking_Package_GetAvailableOfferData $parameters
     * @return \StructType\Booking_Package_GetAvailableOfferDataResponse|bool
     */
    public function Booking_Package_GetAvailableOfferData(\StructType\Booking_Package_GetAvailableOfferData $parameters)
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
     * @param \StructType\Booking_Hotel_GetAvailableOfferData $parameters
     * @return \StructType\Booking_Hotel_GetAvailableOfferDataResponse|bool
     */
    public function Booking_Hotel_GetAvailableOfferData(\StructType\Booking_Hotel_GetAvailableOfferData $parameters)
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
     * @param \StructType\Booking_HolidayHome_GetAvailableOfferData $parameters
     * @return \StructType\Booking_HolidayHome_GetAvailableOfferDataResponse|bool
     */
    public function Booking_HolidayHome_GetAvailableOfferData(\StructType\Booking_HolidayHome_GetAvailableOfferData $parameters)
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
     * @param \StructType\Booking_Flight_GetAvailableOfferData $parameters
     * @return \StructType\Booking_Flight_GetAvailableOfferDataResponse|bool
     */
    public function Booking_Flight_GetAvailableOfferData(\StructType\Booking_Flight_GetAvailableOfferData $parameters)
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
     * @param \StructType\Booking_Package_GetAlternativeFlightsList $parameters
     * @return \StructType\Booking_Package_GetAlternativeFlightsListResponse|bool
     */
    public function Booking_Package_GetAlternativeFlightsList(\StructType\Booking_Package_GetAlternativeFlightsList $parameters)
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
     * @param \StructType\Booking_Flight_AvailabilityAndPriceCheck $parameters
     * @return \StructType\Booking_Flight_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_Flight_AvailabilityAndPriceCheck(\StructType\Booking_Flight_AvailabilityAndPriceCheck $parameters)
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
     * @param \StructType\Booking_Hotel_AvailabilityAndPriceCheck $parameters
     * @return \StructType\Booking_Hotel_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_Hotel_AvailabilityAndPriceCheck(\StructType\Booking_Hotel_AvailabilityAndPriceCheck $parameters)
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
     * @param \StructType\Booking_Package_AvailabilityAndPriceCheck $parameters
     * @return \StructType\Booking_Package_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_Package_AvailabilityAndPriceCheck(\StructType\Booking_Package_AvailabilityAndPriceCheck $parameters)
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
     * @param \StructType\Booking_HolidayHome_Book $parameters
     * @return \StructType\Booking_HolidayHome_BookResponse|bool
     */
    public function Booking_HolidayHome_Book(\StructType\Booking_HolidayHome_Book $parameters)
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
     * @param \StructType\Booking_Flight_FinalizeBook $parameters
     * @return \StructType\Booking_Flight_FinalizeBookResponse|bool
     */
    public function Booking_Flight_FinalizeBook(\StructType\Booking_Flight_FinalizeBook $parameters)
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
     * @param \StructType\Booking_Hotel_FinalizeBook $parameters
     * @return \StructType\Booking_Hotel_FinalizeBookResponse|bool
     */
    public function Booking_Hotel_FinalizeBook(\StructType\Booking_Hotel_FinalizeBook $parameters)
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
     * @param \StructType\Booking_Package_FinalizeBook $parameters
     * @return \StructType\Booking_Package_FinalizeBookResponse|bool
     */
    public function Booking_Package_FinalizeBook(\StructType\Booking_Package_FinalizeBook $parameters)
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
     * @param \StructType\Booking_HolidayHome_FinalizeBook $parameters
     * @return \StructType\Booking_HolidayHome_FinalizeBookResponse|bool
     */
    public function Booking_HolidayHome_FinalizeBook(\StructType\Booking_HolidayHome_FinalizeBook $parameters)
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
     * @param \StructType\Booking_InsertAddon $parameters
     * @return \StructType\Booking_InsertAddonResponse|bool
     */
    public function Booking_InsertAddon(\StructType\Booking_InsertAddon $parameters)
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
     * @param \StructType\Booking_UpdateAddon $parameters
     * @return \StructType\Booking_UpdateAddonResponse|bool
     */
    public function Booking_UpdateAddon(\StructType\Booking_UpdateAddon $parameters)
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
     * @param \StructType\Booking_HolidayHome_AvailabilityAndPriceCheck $parameters
     * @return \StructType\Booking_HolidayHome_AvailabilityAndPriceCheckResponse|bool
     */
    public function Booking_HolidayHome_AvailabilityAndPriceCheck(\StructType\Booking_HolidayHome_AvailabilityAndPriceCheck $parameters)
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
     * @param \StructType\Booking_Flight_Book $parameters
     * @return \StructType\Booking_Flight_BookResponse|bool
     */
    public function Booking_Flight_Book(\StructType\Booking_Flight_Book $parameters)
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
     * @param \StructType\Booking_Hotel_Book $parameters
     * @return \StructType\Booking_Hotel_BookResponse|bool
     */
    public function Booking_Hotel_Book(\StructType\Booking_Hotel_Book $parameters)
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
     * @param \StructType\Booking_Package_Book $parameters
     * @return \StructType\Booking_Package_BookResponse|bool
     */
    public function Booking_Package_Book(\StructType\Booking_Package_Book $parameters)
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
     * @return \StructType\Booking_BookShoppingCartResponse|\StructType\Booking_FinalizeShoppingCartResponse|\StructType\Booking_Flight_AvailabilityAndPriceCheckResponse|\StructType\Booking_Flight_BookResponse|\StructType\Booking_Flight_FinalizeBookResponse|\StructType\Booking_Flight_GetAvailableOfferDataResponse|\StructType\Booking_GetShoppingCartResponse|\StructType\Booking_GetSimpleShoppingCartsResponse|\StructType\Booking_GetTermsAndConditionsResponse|\StructType\Booking_HolidayHome_AvailabilityAndPriceCheckResponse|\StructType\Booking_HolidayHome_BookResponse|\StructType\Booking_HolidayHome_FinalizeBookResponse|\StructType\Booking_HolidayHome_GetAvailableOfferDataResponse|\StructType\Booking_Hotel_AvailabilityAndPriceCheckResponse|\StructType\Booking_Hotel_BookResponse|\StructType\Booking_Hotel_FinalizeBookResponse|\StructType\Booking_Hotel_GetAvailableOfferDataResponse|\StructType\Booking_InsertAddonResponse|\StructType\Booking_Package_AvailabilityAndPriceCheckResponse|\StructType\Booking_Package_BookResponse|\StructType\Booking_Package_FinalizeBookResponse|\StructType\Booking_Package_GetAlternativeFlightsListResponse|\StructType\Booking_Package_GetAvailableOfferDataResponse|\StructType\Booking_UpdateAddonResponse
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
