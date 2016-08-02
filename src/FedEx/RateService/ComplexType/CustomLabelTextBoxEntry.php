<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelTextBoxEntry
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelTextBoxEntry';

    /**
     * Set TopLeftCorner
     *
     * @param CustomLabelPosition $topLeftCorner
     * @return CustomLabelTextBoxEntry
     */
    public function setTopLeftCorner(CustomLabelPosition $topLeftCorner)
    {
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
     * @param \FedEx\RateService\SimpleType\RotationType|string $rotation
     * @return CustomLabelTextBoxEntry
     */
    public function setRotation($rotation)
    {
        $this->Rotation = $rotation;
        return $this;
    }
    
    /**
     * Returns Set Rotation
     *
     * @return \FedEx\RateService\SimpleType\RotationType|string
     */
    public function getRotation()
    {
        return $this->Rotation;
    }
    

    
}