<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferOfferType StructType
 * @subpackage Structs
 */
class TransferOfferType extends Offer3pType
{
    /**
     * The TransferDetails
     * @var \traveltainment\SOAP17\StructType\TransferDetails4SearchType
     */
    public $TransferDetails;
    /**
     * Constructor method for TransferOfferType
     * @uses TransferOfferType::setTransferDetails()
     * @param \traveltainment\SOAP17\StructType\TransferDetails4SearchType $transferDetails
     */
    public function __construct(\traveltainment\SOAP17\StructType\TransferDetails4SearchType $transferDetails = null)
    {
        $this
            ->setTransferDetails($transferDetails);
    }
    /**
     * Get TransferDetails value
     * @return \traveltainment\SOAP17\StructType\TransferDetails4SearchType|null
     */
    public function getTransferDetails()
    {
        return $this->TransferDetails;
    }
    /**
     * Set TransferDetails value
     * @param \traveltainment\SOAP17\StructType\TransferDetails4SearchType $transferDetails
     * @return \traveltainment\SOAP17\StructType\TransferOfferType
     */
    public function setTransferDetails(\traveltainment\SOAP17\StructType\TransferDetails4SearchType $transferDetails = null)
    {
        $this->TransferDetails = $transferDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TransferOfferType
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
