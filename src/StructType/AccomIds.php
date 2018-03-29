<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccomIds StructType
 * @subpackage Structs
 */
class AccomIds extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\Id[]
     */
    public $Id;
    /**
     * Constructor method for AccomIds
     * @uses AccomIds::setId()
     * @param \StructType\Id[] $id
     */
    public function __construct(array $id = array())
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return \StructType\Id[]|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @throws \InvalidArgumentException
     * @param \StructType\Id[] $id
     * @return \StructType\AccomIds
     */
    public function setId(array $id = array())
    {
        foreach ($id as $accomIdsIdItem) {
            // validation for constraint: itemType
            if (!$accomIdsIdItem instanceof \StructType\Id) {
                throw new \InvalidArgumentException(sprintf('The Id property can only contain items of \StructType\Id, "%s" given', is_object($accomIdsIdItem) ? get_class($accomIdsIdItem) : gettype($accomIdsIdItem)), __LINE__);
            }
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Add item to Id value
     * @throws \InvalidArgumentException
     * @param \StructType\Id $item
     * @return \StructType\AccomIds
     */
    public function addToId(\StructType\Id $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Id) {
            throw new \InvalidArgumentException(sprintf('The Id property can only contain items of \StructType\Id, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Id[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AccomIds
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
