<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpeningHourDetailsType StructType
 * @subpackage Structs
 */
class OpeningHourDetailsType extends AbstractStructBase
{
    /**
     * The OpeningHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 7
     * @var \StructType\OpeningHoursType[]
     */
    public $OpeningHours;
    /**
     * Constructor method for OpeningHourDetailsType
     * @uses OpeningHourDetailsType::setOpeningHours()
     * @param \StructType\OpeningHoursType[] $openingHours
     */
    public function __construct(array $openingHours = array())
    {
        $this
            ->setOpeningHours($openingHours);
    }
    /**
     * Get OpeningHours value
     * @return \StructType\OpeningHoursType[]
     */
    public function getOpeningHours()
    {
        return $this->OpeningHours;
    }
    /**
     * Set OpeningHours value
     * @throws \InvalidArgumentException
     * @param \StructType\OpeningHoursType[] $openingHours
     * @return \StructType\OpeningHourDetailsType
     */
    public function setOpeningHours(array $openingHours = array())
    {
        foreach ($openingHours as $openingHourDetailsTypeOpeningHoursItem) {
            // validation for constraint: itemType
            if (!$openingHourDetailsTypeOpeningHoursItem instanceof \StructType\OpeningHoursType) {
                throw new \InvalidArgumentException(sprintf('The OpeningHours property can only contain items of \StructType\OpeningHoursType, "%s" given', is_object($openingHourDetailsTypeOpeningHoursItem) ? get_class($openingHourDetailsTypeOpeningHoursItem) : gettype($openingHourDetailsTypeOpeningHoursItem)), __LINE__);
            }
        }
        $this->OpeningHours = $openingHours;
        return $this;
    }
    /**
     * Add item to OpeningHours value
     * @throws \InvalidArgumentException
     * @param \StructType\OpeningHoursType $item
     * @return \StructType\OpeningHourDetailsType
     */
    public function addToOpeningHours(\StructType\OpeningHoursType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OpeningHoursType) {
            throw new \InvalidArgumentException(sprintf('The OpeningHours property can only contain items of \StructType\OpeningHoursType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OpeningHours[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OpeningHourDetailsType
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
