<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_CrossSelling_TransferOfferList StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Search_CrossSelling_TransferOfferList
 * @subpackage Structs
 */
class Search_CrossSelling_TransferOfferList extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GetTransferOfferListRQType
     */
    public $request;
    /**
     * Constructor method for Search_CrossSelling_TransferOfferList
     * @uses Search_CrossSelling_TransferOfferList::setRequest()
     * @param \StructType\GetTransferOfferListRQType $request
     */
    public function __construct(\StructType\GetTransferOfferListRQType $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetTransferOfferListRQType|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetTransferOfferListRQType $request
     * @return \StructType\Search_CrossSelling_TransferOfferList
     */
    public function setRequest(\StructType\GetTransferOfferListRQType $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Search_CrossSelling_TransferOfferList
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
