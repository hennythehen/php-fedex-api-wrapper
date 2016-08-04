<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CoordinateUnits' => 'CustomLabelCoordinateUnits',
'TextEntries' => 'CustomLabelTextEntry',
'GraphicEntries' => 'CustomLabelGraphicEntry',
'BoxEntries' => 'CustomLabelBoxEntry',
'TextBoxEntries' => 'CustomLabelTextBoxEntry',
'BarcodeEntries' => 'CustomLabelBarcodeEntry',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelDetail';

        
    /**
     * @var \FedEx\RateService\SimpleType\CustomLabelCoordinateUnits|string
     */
    public $CoordinateUnits;

        
    /**
     * @var CustomLabelTextEntry[]
     */
    public $TextEntries = array();

        
    /**
     * @var CustomLabelGraphicEntry[]
     */
    public $GraphicEntries = array();

        
    /**
     * @var CustomLabelBoxEntry[]
     */
    public $BoxEntries = array();

        
    /**
     * @var CustomLabelTextBoxEntry[]
     */
    public $TextBoxEntries = array();

        
    /**
     * @var CustomLabelBarcodeEntry[]
     */
    public $BarcodeEntries = array();



    /**
     * Set CoordinateUnits
     *
     * @param \FedEx\RateService\SimpleType\CustomLabelCoordinateUnits|string $coordinateUnits
     * @return CustomLabelDetail
     */
    public function setCoordinateUnits($coordinateUnits)
    {
        $this->__set('CoordinateUnits', $coordinateUnits);
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    
    /**
     * Returns Set CoordinateUnits
     *
     * @return \FedEx\RateService\SimpleType\CustomLabelCoordinateUnits|string
     */
    public function getCoordinateUnits()
    {
        return $this->CoordinateUnits;
    }
    
    /**
     * Set TextEntries
     *
     * @param CustomLabelTextEntry[] $textEntries
     * @return CustomLabelDetail
     */
    public function setTextEntries(array $textEntries)
    {
        $this->__set('TextEntries', $textEntries);
        $this->TextEntries = $textEntries;
        return $this;
    }
    
    /**
     * Returns Set TextEntries
     *
     * @return CustomLabelTextEntry[]
     */
    public function getTextEntries()
    {
        return $this->TextEntries;
    }
    
    /**
     * Set GraphicEntries
     *
     * @param CustomLabelGraphicEntry[] $graphicEntries
     * @return CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries)
    {
        $this->__set('GraphicEntries', $graphicEntries);
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    
    /**
     * Returns Set GraphicEntries
     *
     * @return CustomLabelGraphicEntry[]
     */
    public function getGraphicEntries()
    {
        return $this->GraphicEntries;
    }
    
    /**
     * Set BoxEntries
     *
     * @param CustomLabelBoxEntry[] $boxEntries
     * @return CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries)
    {
        $this->__set('BoxEntries', $boxEntries);
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    
    /**
     * Returns Set BoxEntries
     *
     * @return CustomLabelBoxEntry[]
     */
    public function getBoxEntries()
    {
        return $this->BoxEntries;
    }
    
    /**
     * Set TextBoxEntries
     *
     * @param CustomLabelTextBoxEntry[] $textBoxEntries
     * @return CustomLabelDetail
     */
    public function setTextBoxEntries(array $textBoxEntries)
    {
        $this->__set('TextBoxEntries', $textBoxEntries);
        $this->TextBoxEntries = $textBoxEntries;
        return $this;
    }
    
    /**
     * Returns Set TextBoxEntries
     *
     * @return CustomLabelTextBoxEntry[]
     */
    public function getTextBoxEntries()
    {
        return $this->TextBoxEntries;
    }
    
    /**
     * Set BarcodeEntries
     *
     * @param CustomLabelBarcodeEntry[] $barcodeEntries
     * @return CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries)
    {
        $this->__set('BarcodeEntries', $barcodeEntries);
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    
    /**
     * Returns Set BarcodeEntries
     *
     * @return CustomLabelBarcodeEntry[]
     */
    public function getBarcodeEntries()
    {
        return $this->BarcodeEntries;
    }
    

    
}