<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'common/flux/SOAP/Client/wsdl/1.7/DispatcherWS_1.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'common/flux/SOAP/Client/wsdl/1.7/DispatcherWS_1.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \traveltainment\SOAP17\ClassMap::get(),
);
/**
 * Samples for Booking ServiceType
 */
$booking = new \traveltainment\SOAP17\ServiceType\Booking($options);
/**
 * Sample call for Booking_GetShoppingCart operation/method
 */
if ($booking->Booking_GetShoppingCart(new \traveltainment\SOAP17\StructType\Booking_GetShoppingCart()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_GetSimpleShoppingCarts operation/method
 */
if ($booking->Booking_GetSimpleShoppingCarts(new \traveltainment\SOAP17\StructType\Booking_GetSimpleShoppingCarts()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_FinalizeShoppingCart operation/method
 */
if ($booking->Booking_FinalizeShoppingCart(new \traveltainment\SOAP17\StructType\Booking_FinalizeShoppingCart()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_GetTermsAndConditions operation/method
 */
if ($booking->Booking_GetTermsAndConditions(new \traveltainment\SOAP17\StructType\Booking_GetTermsAndConditions()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_BookShoppingCart operation/method
 */
if ($booking->Booking_BookShoppingCart(new \traveltainment\SOAP17\StructType\Booking_BookShoppingCart()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Package_GetAvailableOfferData operation/method
 */
if ($booking->Booking_Package_GetAvailableOfferData(new \traveltainment\SOAP17\StructType\Booking_Package_GetAvailableOfferData()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Hotel_GetAvailableOfferData operation/method
 */
if ($booking->Booking_Hotel_GetAvailableOfferData(new \traveltainment\SOAP17\StructType\Booking_Hotel_GetAvailableOfferData()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_HolidayHome_GetAvailableOfferData operation/method
 */
if ($booking->Booking_HolidayHome_GetAvailableOfferData(new \traveltainment\SOAP17\StructType\Booking_HolidayHome_GetAvailableOfferData()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Flight_GetAvailableOfferData operation/method
 */
if ($booking->Booking_Flight_GetAvailableOfferData(new \traveltainment\SOAP17\StructType\Booking_Flight_GetAvailableOfferData()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Package_GetAlternativeFlightsList operation/method
 */
if ($booking->Booking_Package_GetAlternativeFlightsList(new \traveltainment\SOAP17\StructType\Booking_Package_GetAlternativeFlightsList()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Flight_AvailabilityAndPriceCheck operation/method
 */
if ($booking->Booking_Flight_AvailabilityAndPriceCheck(new \traveltainment\SOAP17\StructType\Booking_Flight_AvailabilityAndPriceCheck()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Hotel_AvailabilityAndPriceCheck operation/method
 */
if ($booking->Booking_Hotel_AvailabilityAndPriceCheck(new \traveltainment\SOAP17\StructType\Booking_Hotel_AvailabilityAndPriceCheck()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Package_AvailabilityAndPriceCheck operation/method
 */
if ($booking->Booking_Package_AvailabilityAndPriceCheck(new \traveltainment\SOAP17\StructType\Booking_Package_AvailabilityAndPriceCheck()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_HolidayHome_Book operation/method
 */
if ($booking->Booking_HolidayHome_Book(new \traveltainment\SOAP17\StructType\Booking_HolidayHome_Book()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Flight_FinalizeBook operation/method
 */
if ($booking->Booking_Flight_FinalizeBook(new \traveltainment\SOAP17\StructType\Booking_Flight_FinalizeBook()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Hotel_FinalizeBook operation/method
 */
if ($booking->Booking_Hotel_FinalizeBook(new \traveltainment\SOAP17\StructType\Booking_Hotel_FinalizeBook()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Package_FinalizeBook operation/method
 */
if ($booking->Booking_Package_FinalizeBook(new \traveltainment\SOAP17\StructType\Booking_Package_FinalizeBook()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_HolidayHome_FinalizeBook operation/method
 */
if ($booking->Booking_HolidayHome_FinalizeBook(new \traveltainment\SOAP17\StructType\Booking_HolidayHome_FinalizeBook()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_InsertAddon operation/method
 */
if ($booking->Booking_InsertAddon(new \traveltainment\SOAP17\StructType\Booking_InsertAddon()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_UpdateAddon operation/method
 */
if ($booking->Booking_UpdateAddon(new \traveltainment\SOAP17\StructType\Booking_UpdateAddon()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_HolidayHome_AvailabilityAndPriceCheck operation/method
 */
if ($booking->Booking_HolidayHome_AvailabilityAndPriceCheck(new \traveltainment\SOAP17\StructType\Booking_HolidayHome_AvailabilityAndPriceCheck()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Flight_Book operation/method
 */
if ($booking->Booking_Flight_Book(new \traveltainment\SOAP17\StructType\Booking_Flight_Book()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Hotel_Book operation/method
 */
if ($booking->Booking_Hotel_Book(new \traveltainment\SOAP17\StructType\Booking_Hotel_Book()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Sample call for Booking_Package_Book operation/method
 */
if ($booking->Booking_Package_Book(new \traveltainment\SOAP17\StructType\Booking_Package_Book()) !== false) {
    print_r($booking->getResult());
} else {
    print_r($booking->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \traveltainment\SOAP17\ServiceType\Search($options);
/**
 * Sample call for Search_HolidayHome_RegionList operation/method
 */
if ($search->Search_HolidayHome_RegionList(new \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_OfferList operation/method
 */
if ($search->Search_HolidayHome_OfferList(new \traveltainment\SOAP17\StructType\Search_HolidayHome_OfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_OfferGrid operation/method
 */
if ($search->Search_HolidayHome_OfferGrid(new \traveltainment\SOAP17\StructType\Search_HolidayHome_OfferGrid()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_SimpleRegionList operation/method
 */
if ($search->Search_HolidayHome_SimpleRegionList(new \traveltainment\SOAP17\StructType\Search_HolidayHome_SimpleRegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_InsuranceOfferList operation/method
 */
if ($search->Search_CrossSelling_InsuranceOfferList(new \traveltainment\SOAP17\StructType\Search_CrossSelling_InsuranceOfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_TransferOfferList operation/method
 */
if ($search->Search_CrossSelling_TransferOfferList(new \traveltainment\SOAP17\StructType\Search_CrossSelling_TransferOfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_CarRentalLocations operation/method
 */
if ($search->Search_CrossSelling_CarRentalLocations(new \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalLocations()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_CarRentalStationDetails operation/method
 */
if ($search->Search_CrossSelling_CarRentalStationDetails(new \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalStationDetails()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_ParkingDetails operation/method
 */
if ($search->Search_CrossSelling_ParkingDetails(new \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingDetails()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_ParkingOfferList operation/method
 */
if ($search->Search_CrossSelling_ParkingOfferList(new \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingOfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_ParkingTeaser operation/method
 */
if ($search->Search_CrossSelling_ParkingTeaser(new \traveltainment\SOAP17\StructType\Search_CrossSelling_ParkingTeaser()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_CarRentalOfferConditions operation/method
 */
if ($search->Search_CrossSelling_CarRentalOfferConditions(new \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferConditions()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_CrossSelling_CarRentalOfferList operation/method
 */
if ($search->Search_CrossSelling_CarRentalOfferList(new \traveltainment\SOAP17\StructType\Search_CrossSelling_CarRentalOfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_SimpleRegionList operation/method
 */
if ($search->Search_Package_SimpleRegionList(new \traveltainment\SOAP17\StructType\Search_Package_SimpleRegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_SimpleRegionList operation/method
 */
if ($search->Search_Hotel_SimpleRegionList(new \traveltainment\SOAP17\StructType\Search_Hotel_SimpleRegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Flight_SimpleRegionList operation/method
 */
if ($search->Search_Flight_SimpleRegionList(new \traveltainment\SOAP17\StructType\Search_Flight_SimpleRegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_RegionList operation/method
 */
if ($search->Search_Package_RegionList(new \traveltainment\SOAP17\StructType\Search_Package_RegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_RegionList operation/method
 */
if ($search->Search_Hotel_RegionList(new \traveltainment\SOAP17\StructType\Search_Hotel_RegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Flight_RegionList operation/method
 */
if ($search->Search_Flight_RegionList(new \traveltainment\SOAP17\StructType\Search_Flight_RegionList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_HotelList operation/method
 */
if ($search->Search_Package_HotelList(new \traveltainment\SOAP17\StructType\Search_Package_HotelList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_HotelList operation/method
 */
if ($search->Search_Hotel_HotelList(new \traveltainment\SOAP17\StructType\Search_Hotel_HotelList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_HolidayHomeList operation/method
 */
if ($search->Search_HolidayHome_HolidayHomeList(new \traveltainment\SOAP17\StructType\Search_HolidayHome_HolidayHomeList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_OfferGrid operation/method
 */
if ($search->Search_Package_OfferGrid(new \traveltainment\SOAP17\StructType\Search_Package_OfferGrid()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_OfferList operation/method
 */
if ($search->Search_Package_OfferList(new \traveltainment\SOAP17\StructType\Search_Package_OfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_OfferList operation/method
 */
if ($search->Search_Hotel_OfferList(new \traveltainment\SOAP17\StructType\Search_Hotel_OfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_OfferGrid operation/method
 */
if ($search->Search_Hotel_OfferGrid(new \traveltainment\SOAP17\StructType\Search_Hotel_OfferGrid()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Flight_OfferList operation/method
 */
if ($search->Search_Flight_OfferList(new \traveltainment\SOAP17\StructType\Search_Flight_OfferList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_CityList operation/method
 */
if ($search->Search_Package_CityList(new \traveltainment\SOAP17\StructType\Search_Package_CityList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_CityList operation/method
 */
if ($search->Search_Hotel_CityList(new \traveltainment\SOAP17\StructType\Search_Hotel_CityList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Flight_CityList operation/method
 */
if ($search->Search_Flight_CityList(new \traveltainment\SOAP17\StructType\Search_Flight_CityList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_CityList operation/method
 */
if ($search->Search_HolidayHome_CityList(new \traveltainment\SOAP17\StructType\Search_HolidayHome_CityList()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_RegionTree operation/method
 */
if ($search->Search_Package_RegionTree(new \traveltainment\SOAP17\StructType\Search_Package_RegionTree()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_RegionTree operation/method
 */
if ($search->Search_Hotel_RegionTree(new \traveltainment\SOAP17\StructType\Search_Hotel_RegionTree()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Flight_RegionTree operation/method
 */
if ($search->Search_Flight_RegionTree(new \traveltainment\SOAP17\StructType\Search_Flight_RegionTree()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_RegionTree operation/method
 */
if ($search->Search_HolidayHome_RegionTree(new \traveltainment\SOAP17\StructType\Search_HolidayHome_RegionTree()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Package_TourOperators operation/method
 */
if ($search->Search_Package_TourOperators(new \traveltainment\SOAP17\StructType\Search_Package_TourOperators()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Hotel_TourOperators operation/method
 */
if ($search->Search_Hotel_TourOperators(new \traveltainment\SOAP17\StructType\Search_Hotel_TourOperators()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_Flight_TourOperators operation/method
 */
if ($search->Search_Flight_TourOperators(new \traveltainment\SOAP17\StructType\Search_Flight_TourOperators()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for Search_HolidayHome_TourOperators operation/method
 */
if ($search->Search_HolidayHome_TourOperators(new \traveltainment\SOAP17\StructType\Search_HolidayHome_TourOperators()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
