<?php

namespace traveltainment\SOAP17\EnumType;

/**
 * This class stands for NotBookedStatusDefinitionType EnumType
 * @subpackage Enumerations
 */
class NotBookedStatusDefinitionType
{
    /**
     * Constant for value 'BookedUp'
     * @return string 'BookedUp'
     */
    const VALUE_BOOKED_UP = 'BookedUp';
    /**
     * Constant for value 'PriceDifference'
     * @return string 'PriceDifference'
     */
    const VALUE_PRICE_DIFFERENCE = 'PriceDifference';
    /**
     * Constant for value 'DataNotComplete'
     * @return string 'DataNotComplete'
     */
    const VALUE_DATA_NOT_COMPLETE = 'DataNotComplete';
    /**
     * Constant for value 'DataError'
     * @return string 'DataError'
     */
    const VALUE_DATA_ERROR = 'DataError';
    /**
     * Constant for value 'Fake'
     * @return string 'Fake'
     */
    const VALUE_FAKE = 'Fake';
    /**
     * Constant for value 'FairnessCancellation'
     * @return string 'FairnessCancellation'
     */
    const VALUE_FAIRNESS_CANCELLATION = 'FairnessCancellation';
    /**
     * Constant for value 'Cancellation'
     * @return string 'Cancellation'
     */
    const VALUE_CANCELLATION = 'Cancellation';
    /**
     * Constant for value 'Miscellaneous'
     * @return string 'Miscellaneous'
     */
    const VALUE_MISCELLANEOUS = 'Miscellaneous';
    /**
     * Constant for value 'DuplicateBooking'
     * @return string 'DuplicateBooking'
     */
    const VALUE_DUPLICATE_BOOKING = 'DuplicateBooking';
    /**
     * Constant for value 'RequestHotelFailed'
     * @return string 'RequestHotelFailed'
     */
    const VALUE_REQUEST_HOTEL_FAILED = 'RequestHotelFailed';
    /**
     * Constant for value 'RequestFlightFailed'
     * @return string 'RequestFlightFailed'
     */
    const VALUE_REQUEST_FLIGHT_FAILED = 'RequestFlightFailed';
    /**
     * Constant for value 'AlternativeOffered'
     * @return string 'AlternativeOffered'
     */
    const VALUE_ALTERNATIVE_OFFERED = 'AlternativeOffered';
    /**
     * Constant for value 'AlternativeBooked'
     * @return string 'AlternativeBooked'
     */
    const VALUE_ALTERNATIVE_BOOKED = 'AlternativeBooked';
    /**
     * Constant for value 'LowCost'
     * @return string 'LowCost'
     */
    const VALUE_LOW_COST = 'LowCost';
    /**
     * Constant for value 'StopByDynamixConfig'
     * @return string 'StopByDynamixConfig'
     */
    const VALUE_STOP_BY_DYNAMIX_CONFIG = 'StopByDynamixConfig';
    /**
     * Constant for value 'Testbooking'
     * @return string 'Testbooking'
     */
    const VALUE_TESTBOOKING = 'Testbooking';
    /**
     * Constant for value 'BINotOk'
     * @return string 'BINotOk'
     */
    const VALUE_BINOT_OK = 'BINotOk';
    /**
     * Constant for value 'FakeAddressNotExisting'
     * @return string 'FakeAddressNotExisting'
     */
    const VALUE_FAKE_ADDRESS_NOT_EXISTING = 'FakeAddressNotExisting';
    /**
     * Constant for value 'FakePaymentDataIncorrect'
     * @return string 'FakePaymentDataIncorrect'
     */
    const VALUE_FAKE_PAYMENT_DATA_INCORRECT = 'FakePaymentDataIncorrect';
    /**
     * Constant for value 'FakeCustomerNotContractuallyCapable'
     * @return string 'FakeCustomerNotContractuallyCapable'
     */
    const VALUE_FAKE_CUSTOMER_NOT_CONTRACTUALLY_CAPABLE = 'FakeCustomerNotContractuallyCapable';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BOOKED_UP
     * @uses self::VALUE_PRICE_DIFFERENCE
     * @uses self::VALUE_DATA_NOT_COMPLETE
     * @uses self::VALUE_DATA_ERROR
     * @uses self::VALUE_FAKE
     * @uses self::VALUE_FAIRNESS_CANCELLATION
     * @uses self::VALUE_CANCELLATION
     * @uses self::VALUE_MISCELLANEOUS
     * @uses self::VALUE_DUPLICATE_BOOKING
     * @uses self::VALUE_REQUEST_HOTEL_FAILED
     * @uses self::VALUE_REQUEST_FLIGHT_FAILED
     * @uses self::VALUE_ALTERNATIVE_OFFERED
     * @uses self::VALUE_ALTERNATIVE_BOOKED
     * @uses self::VALUE_LOW_COST
     * @uses self::VALUE_STOP_BY_DYNAMIX_CONFIG
     * @uses self::VALUE_TESTBOOKING
     * @uses self::VALUE_BINOT_OK
     * @uses self::VALUE_FAKE_ADDRESS_NOT_EXISTING
     * @uses self::VALUE_FAKE_PAYMENT_DATA_INCORRECT
     * @uses self::VALUE_FAKE_CUSTOMER_NOT_CONTRACTUALLY_CAPABLE
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOOKED_UP,
            self::VALUE_PRICE_DIFFERENCE,
            self::VALUE_DATA_NOT_COMPLETE,
            self::VALUE_DATA_ERROR,
            self::VALUE_FAKE,
            self::VALUE_FAIRNESS_CANCELLATION,
            self::VALUE_CANCELLATION,
            self::VALUE_MISCELLANEOUS,
            self::VALUE_DUPLICATE_BOOKING,
            self::VALUE_REQUEST_HOTEL_FAILED,
            self::VALUE_REQUEST_FLIGHT_FAILED,
            self::VALUE_ALTERNATIVE_OFFERED,
            self::VALUE_ALTERNATIVE_BOOKED,
            self::VALUE_LOW_COST,
            self::VALUE_STOP_BY_DYNAMIX_CONFIG,
            self::VALUE_TESTBOOKING,
            self::VALUE_BINOT_OK,
            self::VALUE_FAKE_ADDRESS_NOT_EXISTING,
            self::VALUE_FAKE_PAYMENT_DATA_INCORRECT,
            self::VALUE_FAKE_CUSTOMER_NOT_CONTRACTUALLY_CAPABLE,
            self::VALUE_UNDEFINED,
        );
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
