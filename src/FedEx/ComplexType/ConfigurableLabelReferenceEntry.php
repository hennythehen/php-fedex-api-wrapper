<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ConfigurableLabelReferenceEntry
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ConfigurableLabelReferenceEntry
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ZoneNumber' => 'positiveInteger',
'Header' => 'string',
'DataField' => 'string',
'LiteralValue' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ConfigurableLabelReferenceEntry';

        
    /**
     * @var positiveInteger
     */
    public $ZoneNumber;

        
    /**
     * @var string
     */
    public $Header;

        
    /**
     * @var string
     */
    public $DataField;

        
    /**
     * @var string
     */
    public $LiteralValue;



    /**
     * Set ZoneNumber
     *
     * @param positiveInteger $zoneNumber
     * @return ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->__set('ZoneNumber', $zoneNumber);
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * Returns Set ZoneNumber
     *
     * @return positiveInteger
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    
    /**
     * Set Header
     *
     * @param string $header
     * @return ConfigurableLabelReferenceEntry
     */
    public function setHeader($header)
    {
        $this->__set('Header', $header);
        $this->Header = $header;
        return $this;
    }
    
    /**
     * Returns Set Header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }
    
    /**
     * Set DataField
     *
     * @param string $dataField
     * @return ConfigurableLabelReferenceEntry
     */
    public function setDataField($dataField)
    {
        $this->__set('DataField', $dataField);
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * Returns Set DataField
     *
     * @return string
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    
    /**
     * Set LiteralValue
     *
     * @param string $literalValue
     * @return ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($literalValue)
    {
        $this->__set('LiteralValue', $literalValue);
        $this->LiteralValue = $literalValue;
        return $this;
    }
    
    /**
     * Returns Set LiteralValue
     *
     * @return string
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    

    
}