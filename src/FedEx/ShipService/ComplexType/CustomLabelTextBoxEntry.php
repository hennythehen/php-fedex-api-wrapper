<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelTextBoxEntry
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TopLeftCorner' => 'CustomLabelPosition',
'BottomRightCorner' => 'CustomLabelPosition',
'Position' => 'CustomLabelPosition',
'Format' => 'string',
'DataFields' => 'string',
'ThermalFontId' => 'string',
'FontName' => 'string',
'FontSize' => 'positiveInteger',
'Rotation' => 'RotationType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelTextBoxEntry';

        
    /**
     * @var CustomLabelPosition
     */
    public $TopLeftCorner;

        
    /**
     * @var CustomLabelPosition
     */
    public $BottomRightCorner;

        
    /**
     * @var CustomLabelPosition
     */
    public $Position;

        
    /**
     * @var string
     */
    public $Format;

        
    /**
     * @var string[]
     */
    public $DataFields = array();

        
    /**
     * @var string
     */
    public $ThermalFontId;

        
    /**
     * @var string
     */
    public $FontName;

        
    /**
     * @var positiveInteger
     */
    public $FontSize;

        
    /**
     * @var \FedEx\ShipService\SimpleType\RotationType|string
     */
    public $Rotation;



    /**
     * Set TopLeftCorner
     *
     * @param CustomLabelPosition $topLeftCorner
     * @return CustomLabelTextBoxEntry
     */
    public function setTopLeftCorner(CustomLabelPosition $topLeftCorner)
    {
        $this->__set('TopLeftCorner', $topLeftCorner);
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    
    /**
     * Returns Set TopLeftCorner
     *
     * @return CustomLabelPosition
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    
    /**
     * Set BottomRightCorner
     *
     * @param CustomLabelPosition $bottomRightCorner
     * @return CustomLabelTextBoxEntry
     */
    public function setBottomRightCorner(CustomLabelPosition $bottomRightCorner)
    {
        $this->__set('BottomRightCorner', $bottomRightCorner);
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    
    /**
     * Returns Set BottomRightCorner
     *
     * @return CustomLabelPosition
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    
    /**
     * Set Position
     *
     * @param CustomLabelPosition $position
     * @return CustomLabelTextBoxEntry
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->__set('Position', $position);
        $this->Position = $position;
        return $this;
    }
    
    /**
     * Returns Set Position
     *
     * @return CustomLabelPosition
     */
    public function getPosition()
    {
        return $this->Position;
    }
    
    /**
     * Set Format
     *
     * @param string $format
     * @return CustomLabelTextBoxEntry
     */
    public function setFormat($format)
    {
        $this->__set('Format', $format);
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Set DataFields
     *
     * @param string[] $dataFields
     * @return CustomLabelTextBoxEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->__set('DataFields', $dataFields);
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * Returns Set DataFields
     *
     * @return string[]
     */
    public function getDataFields()
    {
        return $this->DataFields;
    }
    
    /**
     * Printer-specific font name for use with thermal printer labels.
     *
     * @param string $thermalFontId
     * @return CustomLabelTextBoxEntry
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->__set('ThermalFontId', $thermalFontId);
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    
    /**
     * Returns Printer-specific font name for use with thermal printer labels.
     *
     * @return string
     */
    public function getThermalFontId()
    {
        return $this->ThermalFontId;
    }
    
    /**
     * Generic font name for use with plain paper labels.
     *
     * @param string $fontName
     * @return CustomLabelTextBoxEntry
     */
    public function setFontName($fontName)
    {
        $this->__set('FontName', $fontName);
        $this->FontName = $fontName;
        return $this;
    }
    
    /**
     * Returns Generic font name for use with plain paper labels.
     *
     * @return string
     */
    public function getFontName()
    {
        return $this->FontName;
    }
    
    /**
     * Generic font size for use with plain paper labels.
     *
     * @param positiveInteger $fontSize
     * @return CustomLabelTextBoxEntry
     */
    public function setFontSize($fontSize)
    {
        $this->__set('FontSize', $fontSize);
        $this->FontSize = $fontSize;
        return $this;
    }
    
    /**
     * Returns Generic font size for use with plain paper labels.
     *
     * @return positiveInteger
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    
    /**
     * Set Rotation
     *
     * @param \FedEx\ShipService\SimpleType\RotationType|string $rotation
     * @return CustomLabelTextBoxEntry
     */
    public function setRotation($rotation)
    {
        $this->__set('Rotation', $rotation);
        $this->Rotation = $rotation;
        return $this;
    }
    
    /**
     * Returns Set Rotation
     *
     * @return \FedEx\ShipService\SimpleType\RotationType|string
     */
    public function getRotation()
    {
        return $this->Rotation;
    }
    

    
}