<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonInformationListType StructType
 * @subpackage Structs
 */
class AddonInformationListType extends AbstractStructBase
{
    /**
     * The AddonInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\AddonInformation[]
     */
    public $AddonInformation;
    /**
     * Constructor method for AddonInformationListType
     * @uses AddonInformationListType::setAddonInformation()
     * @param \traveltainment\SOAP17\StructType\AddonInformation[] $addonInformation
     */
    public function __construct(array $addonInformation = array())
    {
        $this
            ->setAddonInformation($addonInformation);
    }
    /**
     * Get AddonInformation value
     * @return \traveltainment\SOAP17\StructType\AddonInformation[]|null
     */
    public function getAddonInformation()
    {
        return $this->AddonInformation;
    }
    /**
     * Set AddonInformation value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddonInformation[] $addonInformation
     * @return \traveltainment\SOAP17\StructType\AddonInformationListType
     */
    public function setAddonInformation(array $addonInformation = array())
    {
        foreach ($addonInformation as $addonInformationListTypeAddonInformationItem) {
            // validation for constraint: itemType
            if (!$addonInformationListTypeAddonInformationItem instanceof \traveltainment\SOAP17\StructType\AddonInformation) {
                throw new \InvalidArgumentException(sprintf('The AddonInformation property can only contain items of \traveltainment\SOAP17\StructType\AddonInformation, "%s" given', is_object($addonInformationListTypeAddonInformationItem) ? get_class($addonInformationListTypeAddonInformationItem) : gettype($addonInformationListTypeAddonInformationItem)), __LINE__);
            }
        }
        $this->AddonInformation = $addonInformation;
        return $this;
    }
    /**
     * Add item to AddonInformation value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddonInformation $item
     * @return \traveltainment\SOAP17\StructType\AddonInformationListType
     */
    public function addToAddonInformation(\traveltainment\SOAP17\StructType\AddonInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\AddonInformation) {
            throw new \InvalidArgumentException(sprintf('The AddonInformation property can only contain items of \traveltainment\SOAP17\StructType\AddonInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddonInformation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonInformationListType
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
