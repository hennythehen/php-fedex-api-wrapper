<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomDocumentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Format' => 'ShippingDocumentFormat',
'LabelPrintingOrientation' => 'LabelPrintingOrientationType',
'LabelRotation' => 'LabelRotationType',
'SpecificationId' => 'string',
'CustomContent' => 'CustomLabelDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomDocumentDetail';

        
    /**
     * @var ShippingDocumentFormat
     */
    public $Format;

        
    /**
     * @var \FedEx\SimpleType\LabelPrintingOrientationType|string
     */
    public $LabelPrintingOrientation;

        
    /**
     * @var \FedEx\SimpleType\LabelRotationType|string
     */
    public $LabelRotation;

        
    /**
     * @var string
     */
    public $SpecificationId;

        
    /**
     * @var CustomLabelDetail
     */
    public $CustomContent;



    /**
     * Common information controlling document production.
     *
     * @param ShippingDocumentFormat $format
     * @return CustomDocumentDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->__set('Format', $format);
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Common information controlling document production.
     *
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->__set('LabelPrintingOrientation', $labelPrintingOrientation);
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Returns Applicable only to documents produced on thermal printers with roll stock.
     *
     * @return \FedEx\SimpleType\LabelPrintingOrientationType|string
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\SimpleType\LabelRotationType|string $labelRotation
     * @return CustomDocumentDetail
     */
    public function setLabelRotation($labelRotation)
    {
        $this->__set('LabelRotation', $labelRotation);
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Returns Applicable only to documents produced on thermal printers with roll stock.
     *
     * @return \FedEx\SimpleType\LabelRotationType|string
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    
    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $specificationId
     * @return CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->__set('SpecificationId', $specificationId);
        $this->SpecificationId = $specificationId;
        return $this;
    }
    
    /**
     * Returns Identifies the formatting specification used to construct this custom document.
     *
     * @return string
     */
    public function getSpecificationId()
    {
        return $this->SpecificationId;
    }
    
    /**
     * Set CustomContent
     *
     * @param CustomLabelDetail $customContent
     * @return CustomDocumentDetail
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->__set('CustomContent', $customContent);
        $this->CustomContent = $customContent;
        return $this;
    }
    
    /**
     * Returns Set CustomContent
     *
     * @return CustomLabelDetail
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    

    
}