<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Der AbstractResponse ist die Basisklasse aller Responsetypes der Xml.
 * @subpackage Structs
 */
abstract class AbstractResponse extends AbstractMessage
{
    /**
     * The InfoMessage
     * Meta informations extracted from the WSDL
     * - documentation: Der InfoMessage Knoten enthaelt metainformationen von z.B. Fehlern die waehrend des Requests entstanden sind.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\InfoMessageType[]
     */
    public $InfoMessage;
    /**
     * The ProcessingTime
     * Meta informations extracted from the WSDL
     * - default: 0
     * - documentation: Dieser Knoten beinhaltet die interne Verarbeitungsdauer der Anfrage und entspricht nicht der Gesamtdauer!
     * @var int
     */
    public $ProcessingTime;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Dieser Knoten ist ein einfacher Indikator, ob die Anfrage einen Fehler verursacht hat oder nicht. bei false wird haeufig eine InfoMessage hinzugefuegt.
     * @var bool
     */
    public $Success;
    /**
     * The CorrelationsID
     * Meta informations extracted from the WSDL
     * - documentation: Die CorrelationsID ist ein eindeutiger Kenner fuer eine Anfrage. Mit Hilfe diesr ID kann man das Log nach genauen Daten durchsuchen.
     * @var string
     */
    public $CorrelationsID;
    /**
     * Constructor method for AbstractResponse
     * @uses AbstractResponse::setInfoMessage()
     * @uses AbstractResponse::setProcessingTime()
     * @uses AbstractResponse::setSuccess()
     * @uses AbstractResponse::setCorrelationsID()
     * @param \traveltainment\SOAP17\StructType\InfoMessageType[] $infoMessage
     * @param int $processingTime
     * @param bool $success
     * @param string $correlationsID
     */
    public function __construct(array $infoMessage = array(), $processingTime = 0, $success = false, $correlationsID = null)
    {
        $this
            ->setInfoMessage($infoMessage)
            ->setProcessingTime($processingTime)
            ->setSuccess($success)
            ->setCorrelationsID($correlationsID);
    }
    /**
     * Get InfoMessage value
     * @return \traveltainment\SOAP17\StructType\InfoMessageType[]|null
     */
    public function getInfoMessage()
    {
        return $this->InfoMessage;
    }
    /**
     * Set InfoMessage value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\InfoMessageType[] $infoMessage
     * @return \traveltainment\SOAP17\StructType\AbstractResponse
     */
    public function setInfoMessage(array $infoMessage = array())
    {
        foreach ($infoMessage as $abstractResponseInfoMessageItem) {
            // validation for constraint: itemType
            if (!$abstractResponseInfoMessageItem instanceof \traveltainment\SOAP17\StructType\InfoMessageType) {
                throw new \InvalidArgumentException(sprintf('The InfoMessage property can only contain items of \traveltainment\SOAP17\StructType\InfoMessageType, "%s" given', is_object($abstractResponseInfoMessageItem) ? get_class($abstractResponseInfoMessageItem) : gettype($abstractResponseInfoMessageItem)), __LINE__);
            }
        }
        $this->InfoMessage = $infoMessage;
        return $this;
    }
    /**
     * Add item to InfoMessage value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\InfoMessageType $item
     * @return \traveltainment\SOAP17\StructType\AbstractResponse
     */
    public function addToInfoMessage(\traveltainment\SOAP17\StructType\InfoMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\InfoMessageType) {
            throw new \InvalidArgumentException(sprintf('The InfoMessage property can only contain items of \traveltainment\SOAP17\StructType\InfoMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InfoMessage[] = $item;
        return $this;
    }
    /**
     * Get ProcessingTime value
     * @return int|null
     */
    public function getProcessingTime()
    {
        return $this->ProcessingTime;
    }
    /**
     * Set ProcessingTime value
     * @param int $processingTime
     * @return \traveltainment\SOAP17\StructType\AbstractResponse
     */
    public function setProcessingTime($processingTime = 0)
    {
        // validation for constraint: int
        if (!is_null($processingTime) && !is_numeric($processingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($processingTime)), __LINE__);
        }
        $this->ProcessingTime = $processingTime;
        return $this;
    }
    /**
     * Get Success value
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \traveltainment\SOAP17\StructType\AbstractResponse
     */
    public function setSuccess($success = false)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Get CorrelationsID value
     * @return string|null
     */
    public function getCorrelationsID()
    {
        return $this->CorrelationsID;
    }
    /**
     * Set CorrelationsID value
     * @param string $correlationsID
     * @return \traveltainment\SOAP17\StructType\AbstractResponse
     */
    public function setCorrelationsID($correlationsID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationsID) && !is_string($correlationsID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationsID)), __LINE__);
        }
        $this->CorrelationsID = $correlationsID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AbstractResponse
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
