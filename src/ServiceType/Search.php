<?php

namespace traveltainment\SOAP17\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Search_HolidayHome_RegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionListResponse|bool
     */
    public function Search_HolidayHome_RegionList(\traveltainment\SOAP17\StructType\Search_HolidayHome_RegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_RegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_HolidayHome_OfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_OfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_OfferListResponse|bool
     */
    public function Search_HolidayHome_OfferList(\traveltainment\SOAP17\StructType\Search_HolidayHome_OfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_OfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_HolidayHome_OfferGrid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_OfferGrid $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_OfferGridResponse|bool
     */
    public function Search_HolidayHome_OfferGrid(\traveltainment\SOAP17\StructType\Search_HolidayHome_OfferGrid $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_OfferGrid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_HolidayHome_SimpleRegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_SimpleRegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_SimpleRegionListResponse|bool
     */
    public function Search_HolidayHome_SimpleRegionList(\traveltainment\SOAP17\StructType\Search_HolidayHome_SimpleRegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_SimpleRegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_InsuranceOfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferListResponse|bool
     */
    public function Search_CrossSelling_InsuranceOfferList(\traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_InsuranceOfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_TransferOfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_TransferOfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_TransferOfferListResponse|bool
     */
    public function Search_CrossSelling_TransferOfferList(\traveltainment\SOAP17\StructType\Search_CrossSelling_TransferOfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_TransferOfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_CarRentalLocations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalLocations $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalLocationsResponse|bool
     */
    public function Search_CrossSelling_CarRentalLocations(\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalLocations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_CarRentalLocations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_CarRentalStationDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetails $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetailsResponse|bool
     */
    public function Search_CrossSelling_CarRentalStationDetails(\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_CarRentalStationDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_CrossSelling_ParkingDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingDetails $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingDetailsResponse|bool
     */
    public function Search_CrossSelling_ParkingDetails(\traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_ParkingDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_ParkingOfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingOfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingOfferListResponse|bool
     */
    public function Search_CrossSelling_ParkingOfferList(\traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingOfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_ParkingOfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_CrossSelling_ParkingTeaser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingTeaser $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingTeaserResponse|bool
     */
    public function Search_CrossSelling_ParkingTeaser(\traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingTeaser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_ParkingTeaser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_CarRentalOfferConditions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferConditions $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferConditionsResponse|bool
     */
    public function Search_CrossSelling_CarRentalOfferConditions(\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferConditions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_CarRentalOfferConditions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Search_CrossSelling_CarRentalOfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferListResponse|bool
     */
    public function Search_CrossSelling_CarRentalOfferList(\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_CrossSelling_CarRentalOfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_SimpleRegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_SimpleRegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_SimpleRegionListResponse|bool
     */
    public function Search_Package_SimpleRegionList(\traveltainment\SOAP17\StructType\Search_Package_SimpleRegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_SimpleRegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_SimpleRegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_SimpleRegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_SimpleRegionListResponse|bool
     */
    public function Search_Hotel_SimpleRegionList(\traveltainment\SOAP17\StructType\Search_Hotel_SimpleRegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_SimpleRegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Flight_SimpleRegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Flight_SimpleRegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Flight_SimpleRegionListResponse|bool
     */
    public function Search_Flight_SimpleRegionList(\traveltainment\SOAP17\StructType\Search_Flight_SimpleRegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Flight_SimpleRegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_RegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_RegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_RegionListResponse|bool
     */
    public function Search_Package_RegionList(\traveltainment\SOAP17\StructType\Search_Package_RegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_RegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_RegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_RegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_RegionListResponse|bool
     */
    public function Search_Hotel_RegionList(\traveltainment\SOAP17\StructType\Search_Hotel_RegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_RegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Flight_RegionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Flight_RegionList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Flight_RegionListResponse|bool
     */
    public function Search_Flight_RegionList(\traveltainment\SOAP17\StructType\Search_Flight_RegionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Flight_RegionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_HotelList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_HotelList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_HotelListResponse|bool
     */
    public function Search_Package_HotelList(\traveltainment\SOAP17\StructType\Search_Package_HotelList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_HotelList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_HotelList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_HotelList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_HotelListResponse|bool
     */
    public function Search_Hotel_HotelList(\traveltainment\SOAP17\StructType\Search_Hotel_HotelList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_HotelList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_HolidayHome_HolidayHomeList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_HolidayHomeList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_HolidayHomeListResponse|bool
     */
    public function Search_HolidayHome_HolidayHomeList(\traveltainment\SOAP17\StructType\Search_HolidayHome_HolidayHomeList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_HolidayHomeList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_OfferGrid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_OfferGrid $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_OfferGridResponse|bool
     */
    public function Search_Package_OfferGrid(\traveltainment\SOAP17\StructType\Search_Package_OfferGrid $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_OfferGrid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_OfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_OfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_OfferListResponse|bool
     */
    public function Search_Package_OfferList(\traveltainment\SOAP17\StructType\Search_Package_OfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_OfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_OfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_OfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_OfferListResponse|bool
     */
    public function Search_Hotel_OfferList(\traveltainment\SOAP17\StructType\Search_Hotel_OfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_OfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_OfferGrid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_OfferGrid $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_OfferGridResponse|bool
     */
    public function Search_Hotel_OfferGrid(\traveltainment\SOAP17\StructType\Search_Hotel_OfferGrid $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_OfferGrid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Flight_OfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Flight_OfferList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Flight_OfferListResponse|bool
     */
    public function Search_Flight_OfferList(\traveltainment\SOAP17\StructType\Search_Flight_OfferList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Flight_OfferList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_CityList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_CityList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_CityListResponse|bool
     */
    public function Search_Package_CityList(\traveltainment\SOAP17\StructType\Search_Package_CityList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_CityList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_CityList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_CityList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_CityListResponse|bool
     */
    public function Search_Hotel_CityList(\traveltainment\SOAP17\StructType\Search_Hotel_CityList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_CityList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Flight_CityList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Flight_CityList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Flight_CityListResponse|bool
     */
    public function Search_Flight_CityList(\traveltainment\SOAP17\StructType\Search_Flight_CityList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Flight_CityList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_HolidayHome_CityList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_CityList $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_CityListResponse|bool
     */
    public function Search_HolidayHome_CityList(\traveltainment\SOAP17\StructType\Search_HolidayHome_CityList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_CityList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_RegionTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_RegionTree $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_RegionTreeResponse|bool
     */
    public function Search_Package_RegionTree(\traveltainment\SOAP17\StructType\Search_Package_RegionTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_RegionTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_RegionTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_RegionTree $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_RegionTreeResponse|bool
     */
    public function Search_Hotel_RegionTree(\traveltainment\SOAP17\StructType\Search_Hotel_RegionTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_RegionTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Flight_RegionTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Flight_RegionTree $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Flight_RegionTreeResponse|bool
     */
    public function Search_Flight_RegionTree(\traveltainment\SOAP17\StructType\Search_Flight_RegionTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Flight_RegionTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_HolidayHome_RegionTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTree $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTreeResponse|bool
     */
    public function Search_HolidayHome_RegionTree(\traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_RegionTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Package_TourOperators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Package_TourOperators $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Package_TourOperatorsResponse|bool
     */
    public function Search_Package_TourOperators(\traveltainment\SOAP17\StructType\Search_Package_TourOperators $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Package_TourOperators($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Hotel_TourOperators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Hotel_TourOperators $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Hotel_TourOperatorsResponse|bool
     */
    public function Search_Hotel_TourOperators(\traveltainment\SOAP17\StructType\Search_Hotel_TourOperators $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Hotel_TourOperators($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_Flight_TourOperators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_Flight_TourOperators $parameters
     * @return \traveltainment\SOAP17\StructType\Search_Flight_TourOperatorsResponse|bool
     */
    public function Search_Flight_TourOperators(\traveltainment\SOAP17\StructType\Search_Flight_TourOperators $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_Flight_TourOperators($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search_HolidayHome_TourOperators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperators $parameters
     * @return \traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperatorsResponse|bool
     */
    public function Search_HolidayHome_TourOperators(\traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperators $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Search_HolidayHome_TourOperators($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalLocationsResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferConditionsResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferListResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetailsResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferListResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingDetailsResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingOfferListResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingTeaserResponse|\traveltainment\SOAP17\StructType\Search_CrossSelling_TransferOfferListResponse|\traveltainment\SOAP17\StructType\Search_Flight_CityListResponse|\traveltainment\SOAP17\StructType\Search_Flight_OfferListResponse|\traveltainment\SOAP17\StructType\Search_Flight_RegionListResponse|\traveltainment\SOAP17\StructType\Search_Flight_RegionTreeResponse|\traveltainment\SOAP17\StructType\Search_Flight_SimpleRegionListResponse|\traveltainment\SOAP17\StructType\Search_Flight_TourOperatorsResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_CityListResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_HolidayHomeListResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_OfferGridResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_OfferListResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_RegionListResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTreeResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_SimpleRegionListResponse|\traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperatorsResponse|\traveltainment\SOAP17\StructType\Search_Hotel_CityListResponse|\traveltainment\SOAP17\StructType\Search_Hotel_HotelListResponse|\traveltainment\SOAP17\StructType\Search_Hotel_OfferGridResponse|\traveltainment\SOAP17\StructType\Search_Hotel_OfferListResponse|\traveltainment\SOAP17\StructType\Search_Hotel_RegionListResponse|\traveltainment\SOAP17\StructType\Search_Hotel_RegionTreeResponse|\traveltainment\SOAP17\StructType\Search_Hotel_SimpleRegionListResponse|\traveltainment\SOAP17\StructType\Search_Hotel_TourOperatorsResponse|\traveltainment\SOAP17\StructType\Search_Package_CityListResponse|\traveltainment\SOAP17\StructType\Search_Package_HotelListResponse|\traveltainment\SOAP17\StructType\Search_Package_OfferGridResponse|\traveltainment\SOAP17\StructType\Search_Package_OfferListResponse|\traveltainment\SOAP17\StructType\Search_Package_RegionListResponse|\traveltainment\SOAP17\StructType\Search_Package_RegionTreeResponse|\traveltainment\SOAP17\StructType\Search_Package_SimpleRegionListResponse|\traveltainment\SOAP17\StructType\Search_Package_TourOperatorsResponse
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
