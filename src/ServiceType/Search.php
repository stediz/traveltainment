<?php

namespace ServiceType;

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
     * @param \StructType\Search_HolidayHome_RegionList $parameters
     * @return \StructType\Search_HolidayHome_RegionListResponse|bool
     */
    public function Search_HolidayHome_RegionList(\StructType\Search_HolidayHome_RegionList $parameters)
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
     * @param \StructType\Search_HolidayHome_OfferList $parameters
     * @return \StructType\Search_HolidayHome_OfferListResponse|bool
     */
    public function Search_HolidayHome_OfferList(\StructType\Search_HolidayHome_OfferList $parameters)
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
     * @param \StructType\Search_HolidayHome_OfferGrid $parameters
     * @return \StructType\Search_HolidayHome_OfferGridResponse|bool
     */
    public function Search_HolidayHome_OfferGrid(\StructType\Search_HolidayHome_OfferGrid $parameters)
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
     * @param \StructType\Search_HolidayHome_SimpleRegionList $parameters
     * @return \StructType\Search_HolidayHome_SimpleRegionListResponse|bool
     */
    public function Search_HolidayHome_SimpleRegionList(\StructType\Search_HolidayHome_SimpleRegionList $parameters)
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
     * @param \StructType\Search_CrossSelling_InsuranceOfferList $parameters
     * @return \StructType\Search_CrossSelling_InsuranceOfferListResponse|bool
     */
    public function Search_CrossSelling_InsuranceOfferList(\StructType\Search_CrossSelling_InsuranceOfferList $parameters)
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
     * @param \StructType\Search_CrossSelling_TransferOfferList $parameters
     * @return \StructType\Search_CrossSelling_TransferOfferListResponse|bool
     */
    public function Search_CrossSelling_TransferOfferList(\StructType\Search_CrossSelling_TransferOfferList $parameters)
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
     * @param \StructType\Search_CrossSelling_CarRentalLocations $parameters
     * @return \StructType\Search_CrossSelling_CarRentalLocationsResponse|bool
     */
    public function Search_CrossSelling_CarRentalLocations(\StructType\Search_CrossSelling_CarRentalLocations $parameters)
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
     * @param \StructType\Search_CrossSelling_CarRentalStationDetails $parameters
     * @return \StructType\Search_CrossSelling_CarRentalStationDetailsResponse|bool
     */
    public function Search_CrossSelling_CarRentalStationDetails(\StructType\Search_CrossSelling_CarRentalStationDetails $parameters)
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
     * @param \StructType\Search_CrossSelling_ParkingDetails $parameters
     * @return \StructType\Search_CrossSelling_ParkingDetailsResponse|bool
     */
    public function Search_CrossSelling_ParkingDetails(\StructType\Search_CrossSelling_ParkingDetails $parameters)
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
     * @param \StructType\Search_CrossSelling_ParkingOfferList $parameters
     * @return \StructType\Search_CrossSelling_ParkingOfferListResponse|bool
     */
    public function Search_CrossSelling_ParkingOfferList(\StructType\Search_CrossSelling_ParkingOfferList $parameters)
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
     * @param \StructType\Search_CrossSelling_ParkingTeaser $parameters
     * @return \StructType\Search_CrossSelling_ParkingTeaserResponse|bool
     */
    public function Search_CrossSelling_ParkingTeaser(\StructType\Search_CrossSelling_ParkingTeaser $parameters)
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
     * @param \StructType\Search_CrossSelling_CarRentalOfferConditions $parameters
     * @return \StructType\Search_CrossSelling_CarRentalOfferConditionsResponse|bool
     */
    public function Search_CrossSelling_CarRentalOfferConditions(\StructType\Search_CrossSelling_CarRentalOfferConditions $parameters)
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
     * @param \StructType\Search_CrossSelling_CarRentalOfferList $parameters
     * @return \StructType\Search_CrossSelling_CarRentalOfferListResponse|bool
     */
    public function Search_CrossSelling_CarRentalOfferList(\StructType\Search_CrossSelling_CarRentalOfferList $parameters)
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
     * @param \StructType\Search_Package_SimpleRegionList $parameters
     * @return \StructType\Search_Package_SimpleRegionListResponse|bool
     */
    public function Search_Package_SimpleRegionList(\StructType\Search_Package_SimpleRegionList $parameters)
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
     * @param \StructType\Search_Hotel_SimpleRegionList $parameters
     * @return \StructType\Search_Hotel_SimpleRegionListResponse|bool
     */
    public function Search_Hotel_SimpleRegionList(\StructType\Search_Hotel_SimpleRegionList $parameters)
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
     * @param \StructType\Search_Flight_SimpleRegionList $parameters
     * @return \StructType\Search_Flight_SimpleRegionListResponse|bool
     */
    public function Search_Flight_SimpleRegionList(\StructType\Search_Flight_SimpleRegionList $parameters)
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
     * @param \StructType\Search_Package_RegionList $parameters
     * @return \StructType\Search_Package_RegionListResponse|bool
     */
    public function Search_Package_RegionList(\StructType\Search_Package_RegionList $parameters)
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
     * @param \StructType\Search_Hotel_RegionList $parameters
     * @return \StructType\Search_Hotel_RegionListResponse|bool
     */
    public function Search_Hotel_RegionList(\StructType\Search_Hotel_RegionList $parameters)
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
     * @param \StructType\Search_Flight_RegionList $parameters
     * @return \StructType\Search_Flight_RegionListResponse|bool
     */
    public function Search_Flight_RegionList(\StructType\Search_Flight_RegionList $parameters)
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
     * @param \StructType\Search_Package_HotelList $parameters
     * @return \StructType\Search_Package_HotelListResponse|bool
     */
    public function Search_Package_HotelList(\StructType\Search_Package_HotelList $parameters)
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
     * @param \StructType\Search_Hotel_HotelList $parameters
     * @return \StructType\Search_Hotel_HotelListResponse|bool
     */
    public function Search_Hotel_HotelList(\StructType\Search_Hotel_HotelList $parameters)
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
     * @param \StructType\Search_HolidayHome_HolidayHomeList $parameters
     * @return \StructType\Search_HolidayHome_HolidayHomeListResponse|bool
     */
    public function Search_HolidayHome_HolidayHomeList(\StructType\Search_HolidayHome_HolidayHomeList $parameters)
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
     * @param \StructType\Search_Package_OfferGrid $parameters
     * @return \StructType\Search_Package_OfferGridResponse|bool
     */
    public function Search_Package_OfferGrid(\StructType\Search_Package_OfferGrid $parameters)
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
     * @param \StructType\Search_Package_OfferList $parameters
     * @return \StructType\Search_Package_OfferListResponse|bool
     */
    public function Search_Package_OfferList(\StructType\Search_Package_OfferList $parameters)
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
     * @param \StructType\Search_Hotel_OfferList $parameters
     * @return \StructType\Search_Hotel_OfferListResponse|bool
     */
    public function Search_Hotel_OfferList(\StructType\Search_Hotel_OfferList $parameters)
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
     * @param \StructType\Search_Hotel_OfferGrid $parameters
     * @return \StructType\Search_Hotel_OfferGridResponse|bool
     */
    public function Search_Hotel_OfferGrid(\StructType\Search_Hotel_OfferGrid $parameters)
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
     * @param \StructType\Search_Flight_OfferList $parameters
     * @return \StructType\Search_Flight_OfferListResponse|bool
     */
    public function Search_Flight_OfferList(\StructType\Search_Flight_OfferList $parameters)
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
     * @param \StructType\Search_Package_CityList $parameters
     * @return \StructType\Search_Package_CityListResponse|bool
     */
    public function Search_Package_CityList(\StructType\Search_Package_CityList $parameters)
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
     * @param \StructType\Search_Hotel_CityList $parameters
     * @return \StructType\Search_Hotel_CityListResponse|bool
     */
    public function Search_Hotel_CityList(\StructType\Search_Hotel_CityList $parameters)
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
     * @param \StructType\Search_Flight_CityList $parameters
     * @return \StructType\Search_Flight_CityListResponse|bool
     */
    public function Search_Flight_CityList(\StructType\Search_Flight_CityList $parameters)
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
     * @param \StructType\Search_HolidayHome_CityList $parameters
     * @return \StructType\Search_HolidayHome_CityListResponse|bool
     */
    public function Search_HolidayHome_CityList(\StructType\Search_HolidayHome_CityList $parameters)
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
     * @param \StructType\Search_Package_RegionTree $parameters
     * @return \StructType\Search_Package_RegionTreeResponse|bool
     */
    public function Search_Package_RegionTree(\StructType\Search_Package_RegionTree $parameters)
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
     * @param \StructType\Search_Hotel_RegionTree $parameters
     * @return \StructType\Search_Hotel_RegionTreeResponse|bool
     */
    public function Search_Hotel_RegionTree(\StructType\Search_Hotel_RegionTree $parameters)
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
     * @param \StructType\Search_Flight_RegionTree $parameters
     * @return \StructType\Search_Flight_RegionTreeResponse|bool
     */
    public function Search_Flight_RegionTree(\StructType\Search_Flight_RegionTree $parameters)
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
     * @param \StructType\Search_HolidayHome_RegionTree $parameters
     * @return \StructType\Search_HolidayHome_RegionTreeResponse|bool
     */
    public function Search_HolidayHome_RegionTree(\StructType\Search_HolidayHome_RegionTree $parameters)
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
     * @param \StructType\Search_Package_TourOperators $parameters
     * @return \StructType\Search_Package_TourOperatorsResponse|bool
     */
    public function Search_Package_TourOperators(\StructType\Search_Package_TourOperators $parameters)
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
     * @param \StructType\Search_Hotel_TourOperators $parameters
     * @return \StructType\Search_Hotel_TourOperatorsResponse|bool
     */
    public function Search_Hotel_TourOperators(\StructType\Search_Hotel_TourOperators $parameters)
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
     * @param \StructType\Search_Flight_TourOperators $parameters
     * @return \StructType\Search_Flight_TourOperatorsResponse|bool
     */
    public function Search_Flight_TourOperators(\StructType\Search_Flight_TourOperators $parameters)
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
     * @param \StructType\Search_HolidayHome_TourOperators $parameters
     * @return \StructType\Search_HolidayHome_TourOperatorsResponse|bool
     */
    public function Search_HolidayHome_TourOperators(\StructType\Search_HolidayHome_TourOperators $parameters)
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
     * @return \StructType\Search_CrossSelling_CarRentalLocationsResponse|\StructType\Search_CrossSelling_CarRentalOfferConditionsResponse|\StructType\Search_CrossSelling_CarRentalOfferListResponse|\StructType\Search_CrossSelling_CarRentalStationDetailsResponse|\StructType\Search_CrossSelling_InsuranceOfferListResponse|\StructType\Search_CrossSelling_ParkingDetailsResponse|\StructType\Search_CrossSelling_ParkingOfferListResponse|\StructType\Search_CrossSelling_ParkingTeaserResponse|\StructType\Search_CrossSelling_TransferOfferListResponse|\StructType\Search_Flight_CityListResponse|\StructType\Search_Flight_OfferListResponse|\StructType\Search_Flight_RegionListResponse|\StructType\Search_Flight_RegionTreeResponse|\StructType\Search_Flight_SimpleRegionListResponse|\StructType\Search_Flight_TourOperatorsResponse|\StructType\Search_HolidayHome_CityListResponse|\StructType\Search_HolidayHome_HolidayHomeListResponse|\StructType\Search_HolidayHome_OfferGridResponse|\StructType\Search_HolidayHome_OfferListResponse|\StructType\Search_HolidayHome_RegionListResponse|\StructType\Search_HolidayHome_RegionTreeResponse|\StructType\Search_HolidayHome_SimpleRegionListResponse|\StructType\Search_HolidayHome_TourOperatorsResponse|\StructType\Search_Hotel_CityListResponse|\StructType\Search_Hotel_HotelListResponse|\StructType\Search_Hotel_OfferGridResponse|\StructType\Search_Hotel_OfferListResponse|\StructType\Search_Hotel_RegionListResponse|\StructType\Search_Hotel_RegionTreeResponse|\StructType\Search_Hotel_SimpleRegionListResponse|\StructType\Search_Hotel_TourOperatorsResponse|\StructType\Search_Package_CityListResponse|\StructType\Search_Package_HotelListResponse|\StructType\Search_Package_OfferGridResponse|\StructType\Search_Package_OfferListResponse|\StructType\Search_Package_RegionListResponse|\StructType\Search_Package_RegionTreeResponse|\StructType\Search_Package_SimpleRegionListResponse|\StructType\Search_Package_TourOperatorsResponse
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
